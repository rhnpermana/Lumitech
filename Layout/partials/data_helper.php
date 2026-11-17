<?php
/**
 * Lumitech.id - Central Data Helper & Admin Core (Hybrid Aiven MySQL + JSON Cache)
 * Mengelola data produk & portofolio dengan database Aiven MySQL serta sinkronisasi static site.
 */

if (!defined('LUMITECH_DATA_PATH')) {
    define('LUMITECH_DATA_PATH', dirname(__DIR__, 2) . '/data');
}

require_once dirname(__DIR__, 2) . '/config/database.php';

/**
 * Memulai session admin dengan konfigurasi aman
 */
function adminSessionStart(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_name('lumitech_admin_sess');
        session_start();
    }
}

/**
 * Cek apakah admin sudah login
 */
function isAdminLoggedIn(): bool
{
    adminSessionStart();
    return !empty($_SESSION['lumitech_admin_logged_in']) && $_SESSION['lumitech_admin_logged_in'] === true;
}

/**
 * Wajibkan login admin, redirect ke login.php jika belum login
 */
function requireAdminAuth(string $redirectPath = 'login.php'): void
{
    if (!isAdminLoggedIn()) {
        header("Location: {$redirectPath}");
        exit;
    }
}

/**
 * Proses login admin
 */
function adminLogin(string $username, string $password): bool
{
    adminSessionStart();

    // 1. Cek dari Aiven MySQL jika aktif
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = :u LIMIT 1");
            $stmt->execute([':u' => $username]);
            $admin = $stmt->fetch();
            if ($admin && password_verify($password, $admin['password_hash'])) {
                $_SESSION['lumitech_admin_logged_in'] = true;
                $_SESSION['lumitech_admin_user'] = $username;
                return true;
            }
        } catch (\Throwable $e) {
            // fallback ke JSON config
        }
    }

    // 2. Fallback ke admin_config.json
    $configFile = LUMITECH_DATA_PATH . '/admin_config.json';
    if (!file_exists($configFile)) {
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['lumitech_admin_logged_in'] = true;
            $_SESSION['lumitech_admin_user'] = 'admin';
            return true;
        }
        return false;
    }

    $config = json_decode(file_get_contents($configFile), true);
    if (!$config) {
        return false;
    }

    if ($username === $config['username'] && password_verify($password, $config['password_hash'])) {
        $_SESSION['lumitech_admin_logged_in'] = true;
        $_SESSION['lumitech_admin_user'] = $username;
        return true;
    }

    return false;
}

/**
 * Logout admin
 */
function adminLogout(): void
{
    adminSessionStart();
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}

/**
 * Update password admin
 */
function updateAdminPassword(string $newPassword): bool
{
    $hash = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update di Aiven MySQL jika terkoneksi
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            initAivenTables($pdo);
            $stmt = $pdo->prepare("
                INSERT INTO admins (username, password_hash)
                VALUES ('admin', :h)
                ON DUPLICATE KEY UPDATE password_hash = :h2;
            ");
            $stmt->execute([':h' => $hash, ':h2' => $hash]);
        } catch (\Throwable $e) {
            error_log("Failed to update password in Aiven: " . $e->getMessage());
        }
    }

    // Update di file JSON
    $configFile = LUMITECH_DATA_PATH . '/admin_config.json';
    $config = file_exists($configFile) ? json_decode(file_get_contents($configFile), true) : [];
    if (!$config) {
        $config = ['username' => 'admin'];
    }
    $config['password_hash'] = $hash;
    return file_put_contents($configFile, json_encode($config, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) !== false;
}

// ==========================================
// 1. DATA PRODUK & LAYANAN (Aiven + JSON)
// ==========================================

/**
 * Ambil semua produk dari Aiven MySQL (dengan fallback ke JSON)
 */
function getProducts(): array
{
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM products ORDER BY featured DESC, id ASC");
            $rows = $stmt->fetchAll();
            if ($rows !== false && !empty($rows)) {
                $products = [];
                foreach ($rows as $r) {
                    $tags = !empty($r['tags']) ? json_decode($r['tags'], true) : [];
                    $products[] = [
                        'id'        => $r['id'],
                        'key'       => $r['product_key'],
                        'category'  => $r['category'],
                        'icon'      => $r['icon'] ?: 'devices',
                        'badge'     => $r['badge'] ?: '',
                        'title'     => $r['title'],
                        'desc'      => $r['description'] ?: '',
                        'price'     => $r['price'],
                        'price_sub' => $r['price_sub'] ?: '',
                        'tags'      => is_array($tags) ? $tags : [],
                        'featured'  => (bool)$r['featured'],
                    ];
                }
                // Simpan cache ke file JSON agar static build tetap super kilat
                $file = LUMITECH_DATA_PATH . '/products.json';
                file_put_contents($file, json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
                return $products;
            }
        } catch (\Throwable $e) {
            error_log("Aiven getProducts error: " . $e->getMessage());
        }
    }

    // Fallback ke JSON
    $file = LUMITECH_DATA_PATH . '/products.json';
    if (!file_exists($file)) {
        return [];
    }
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

/**
 * Simpan array produk ke JSON
 */
function saveProducts(array $products): bool
{
    $file = LUMITECH_DATA_PATH . '/products.json';
    $dir = dirname($file);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    $encoded = json_encode(array_values($products), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $res = file_put_contents($file, $encoded);
    if ($res !== false) {
        triggerSiteRebuild();
        return true;
    }
    return false;
}

/**
 * Cari produk berdasarkan key atau id
 */
function getProductByKey(string $key): ?array
{
    $products = getProducts();
    foreach ($products as $p) {
        if ((isset($p['key']) && $p['key'] === $key) || (isset($p['id']) && $p['id'] === $key)) {
            return $p;
        }
    }
    return null;
}

/**
 * Tambah atau Update Produk (Aiven MySQL + JSON)
 */
function saveOrUpdateProduct(array $productData, ?string $originalKey = null): bool
{
    $targetKey = $originalKey ?? ($productData['key'] ?? '');
    $prodId = $productData['id'] ?? ('prod_' . preg_replace('/[^a-zA-Z0-9_]/', '', $productData['key']));
    $productData['id'] = $prodId;

    // 1. Simpan ke Aiven MySQL jika terkoneksi
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            initAivenTables($pdo);
            $stmt = $pdo->prepare("
                INSERT INTO products (id, product_key, category, icon, badge, title, description, price, price_sub, tags, featured)
                VALUES (:id, :product_key, :category, :icon, :badge, :title, :description, :price, :price_sub, :tags, :featured)
                ON DUPLICATE KEY UPDATE
                    product_key = VALUES(product_key),
                    category = VALUES(category),
                    icon = VALUES(icon),
                    badge = VALUES(badge),
                    title = VALUES(title),
                    description = VALUES(description),
                    price = VALUES(price),
                    price_sub = VALUES(price_sub),
                    tags = VALUES(tags),
                    featured = VALUES(featured);
            ");

            $stmt->execute([
                ':id'          => $prodId,
                ':product_key' => $productData['key'],
                ':category'    => $productData['category'] ?? 'website',
                ':icon'        => $productData['icon'] ?? 'devices',
                ':badge'       => $productData['badge'] ?? '',
                ':title'       => $productData['title'],
                ':description' => $productData['desc'] ?? '',
                ':price'       => $productData['price'] ?? '',
                ':price_sub'   => $productData['price_sub'] ?? '',
                ':tags'        => json_encode($productData['tags'] ?? []),
                ':featured'    => !empty($productData['featured']) ? 1 : 0,
            ]);
        } catch (\Throwable $e) {
            error_log("Failed to save product in Aiven: " . $e->getMessage());
        }
    }

    // 2. Simpan juga ke file JSON lokal (cache) & trigger rebuild
    $products = getProducts();
    $foundIndex = -1;
    if ($targetKey !== '') {
        foreach ($products as $index => $item) {
            if ($item['key'] === $targetKey || (isset($item['id']) && $item['id'] === $targetKey)) {
                $foundIndex = $index;
                break;
            }
        }
    }

    if ($foundIndex >= 0) {
        $products[$foundIndex] = array_merge($products[$foundIndex], $productData);
    } else {
        $products[] = $productData;
    }

    return saveProducts($products);
}

/**
 * Hapus produk berdasarkan key (Aiven MySQL + JSON)
 */
function deleteProduct(string $key): bool
{
    // 1. Hapus dari Aiven MySQL
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("DELETE FROM products WHERE product_key = :k OR id = :k2");
            $stmt->execute([':k' => $key, ':k2' => $key]);
        } catch (\Throwable $e) {
            error_log("Failed to delete product in Aiven: " . $e->getMessage());
        }
    }

    // 2. Hapus dari JSON
    $products = getProducts();
    $filtered = array_filter($products, function ($item) use ($key) {
        return ($item['key'] !== $key) && ((isset($item['id']) ? $item['id'] : '') !== $key);
    });

    if (count($filtered) !== count($products)) {
        return saveProducts($filtered);
    }
    return false;
}

/**
 * Toggle status featured (tampil di beranda)
 */
function toggleProductFeatured(string $key): bool
{
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("UPDATE products SET featured = IF(featured = 1, 0, 1) WHERE product_key = :k OR id = :k2");
            $stmt->execute([':k' => $key, ':k2' => $key]);
        } catch (\Throwable $e) {
            error_log("Failed to toggle product featured in Aiven: " . $e->getMessage());
        }
    }

    $products = getProducts();
    foreach ($products as &$p) {
        if ($p['key'] === $key || (isset($p['id']) && $p['id'] === $key)) {
            $p['featured'] = empty($p['featured']);
            return saveProducts($products);
        }
    }
    return false;
}

// ==========================================
// 2. DATA PORTOFOLIO / HASIL KERJA (Aiven + JSON)
// ==========================================

/**
 * Ambil semua portofolio dari Aiven MySQL (dengan fallback ke JSON)
 */
function getPortfolios(): array
{
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM portfolios ORDER BY created_at DESC, id ASC");
            $rows = $stmt->fetchAll();
            if ($rows !== false && !empty($rows)) {
                $portfolios = [];
                foreach ($rows as $r) {
                    $tags = !empty($r['tags']) ? json_decode($r['tags'], true) : [];
                    $portfolios[] = [
                        'id'          => $r['id'],
                        'title'       => $r['title'],
                        'category'    => $r['category'],
                        'badge'       => $r['badge'] ?: '',
                        'icon'        => $r['icon'] ?: 'image',
                        'image'       => $r['image'],
                        'desc'        => $r['description'] ?: '',
                        'tags'        => is_array($tags) ? $tags : [],
                        'service_key' => $r['service_key'] ?: '',
                        'btn_text'    => $r['btn_text'] ?: 'Order Layanan',
                    ];
                }
                $file = LUMITECH_DATA_PATH . '/portfolios.json';
                file_put_contents($file, json_encode($portfolios, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
                return $portfolios;
            }
        } catch (\Throwable $e) {
            error_log("Aiven getPortfolios error: " . $e->getMessage());
        }
    }

    $file = LUMITECH_DATA_PATH . '/portfolios.json';
    if (!file_exists($file)) {
        return [];
    }
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

/**
 * Simpan array portofolio ke JSON
 */
function savePortfolios(array $portfolios): bool
{
    $file = LUMITECH_DATA_PATH . '/portfolios.json';
    $dir = dirname($file);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    $encoded = json_encode(array_values($portfolios), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $res = file_put_contents($file, $encoded);
    if ($res !== false) {
        triggerSiteRebuild();
        return true;
    }
    return false;
}

/**
 * Cari portofolio berdasarkan ID
 */
function getPortfolioById(string $id): ?array
{
    $portfolios = getPortfolios();
    foreach ($portfolios as $p) {
        if (isset($p['id']) && $p['id'] === $id) {
            return $p;
        }
    }
    return null;
}

/**
 * Tambah atau Update Portofolio (Aiven MySQL + JSON)
 */
function saveOrUpdatePortfolio(array $portfolioData, ?string $originalId = null): bool
{
    $targetId = $originalId ?? ($portfolioData['id'] ?? '');
    if (empty($portfolioData['id'])) {
        $portfolioData['id'] = 'port-' . time() . '-' . rand(100, 999);
    }
    $portId = $portfolioData['id'];

    // 1. Simpan ke Aiven MySQL jika terkoneksi
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            initAivenTables($pdo);
            $stmt = $pdo->prepare("
                INSERT INTO portfolios (id, title, category, badge, icon, image, description, tags, service_key, btn_text)
                VALUES (:id, :title, :category, :badge, :icon, :image, :description, :tags, :service_key, :btn_text)
                ON DUPLICATE KEY UPDATE
                    title = VALUES(title),
                    category = VALUES(category),
                    badge = VALUES(badge),
                    icon = VALUES(icon),
                    image = VALUES(image),
                    description = VALUES(description),
                    tags = VALUES(tags),
                    service_key = VALUES(service_key),
                    btn_text = VALUES(btn_text);
            ");

            $stmt->execute([
                ':id'          => $portId,
                ':title'       => $portfolioData['title'],
                ':category'    => $portfolioData['category'] ?? 'desain',
                ':badge'       => $portfolioData['badge'] ?? '',
                ':icon'        => $portfolioData['icon'] ?? 'image',
                ':image'       => $portfolioData['image'],
                ':description' => $portfolioData['desc'] ?? '',
                ':tags'        => json_encode($portfolioData['tags'] ?? []),
                ':service_key' => $portfolioData['service_key'] ?? '',
                ':btn_text'    => $portfolioData['btn_text'] ?? 'Order Layanan',
            ]);
        } catch (\Throwable $e) {
            error_log("Failed to save portfolio in Aiven: " . $e->getMessage());
        }
    }

    // 2. Simpan ke JSON
    $portfolios = getPortfolios();
    $foundIndex = -1;
    if ($targetId !== '') {
        foreach ($portfolios as $index => $item) {
            if (isset($item['id']) && $item['id'] === $targetId) {
                $foundIndex = $index;
                break;
            }
        }
    }

    if ($foundIndex >= 0) {
        $portfolios[$foundIndex] = array_merge($portfolios[$foundIndex], $portfolioData);
    } else {
        $portfolios[] = $portfolioData;
    }

    return savePortfolios($portfolios);
}

/**
 * Hapus portofolio berdasarkan ID (Aiven MySQL + JSON)
 */
function deletePortfolio(string $id): bool
{
    $pdo = getDbConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("DELETE FROM portfolios WHERE id = :id");
            $stmt->execute([':id' => $id]);
        } catch (\Throwable $e) {
            error_log("Failed to delete portfolio in Aiven: " . $e->getMessage());
        }
    }

    $portfolios = getPortfolios();
    $filtered = array_filter($portfolios, function ($item) use ($id) {
        return (isset($item['id']) ? $item['id'] : '') !== $id;
    });

    if (count($filtered) !== count($portfolios)) {
        return savePortfolios($filtered);
    }
    return false;
}

/**
 * Dapatkan daftar file gambar yang tersedia di folder assets/portfolio/
 */
function getAvailablePortfolioImages(): array
{
    $dir = dirname(__DIR__, 2) . '/assets/portfolio';
    if (!is_dir($dir)) {
        return [];
    }
    $files = scandir($dir);
    $images = [];
    foreach ($files as $f) {
        if ($f === '.' || $f === '..') continue;
        $ext = strtolower(pathinfo($f, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif', 'svg'])) {
            $images[] = 'assets/portfolio/' . $f;
        }
    }
    return $images;
}

// ==========================================
// 3. AUTO-REBUILD STATIC HTML (INDEX & PRODUK)
// ==========================================

/**
 * Mengkompilasi ulang index.html dan produk.html secara otomatis
 */
function triggerSiteRebuild(): bool
{
    try {
        $rootDir = dirname(__DIR__, 2);
        
        // 1. Build index.html
        ob_start();
        $assetBase = '';
        $currentPage = 'home';
        require $rootDir . '/view/home.php';
        $indexHtml = ob_get_clean();
        file_put_contents($rootDir . '/index.html', $indexHtml);

        // 2. Build produk.html
        ob_start();
        $assetBase = '';
        $currentPage = 'produk';
        require $rootDir . '/view/katalog.php';
        $produkHtml = ob_get_clean();
        file_put_contents($rootDir . '/produk.html', $produkHtml);

        return true;
    } catch (\Throwable $e) {
        error_log("Lumitech build error: " . $e->getMessage());
        return false;
    }
}
