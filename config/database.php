<?php
/**
 * Lumitech.id - Aiven MySQL Cloud Database Connector & Migration Utility
 */

if (!function_exists('loadEnv')) {
    function loadEnv(string $envPath): array
    {
        if (!file_exists($envPath)) {
            return [];
        }
        $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $vars = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }
            if (strpos($line, '=') !== false) {
                list($key, $val) = explode('=', $line, 2);
                $key = trim($key);
                $val = trim($val);
                // Unquote
                if ((str_starts_with($val, '"') && str_ends_with($val, '"')) ||
                    (str_starts_with($val, "'") && str_ends_with($val, "'"))) {
                    $val = substr($val, 1, -1);
                }
                $vars[$key] = $val;
            }
        }
        return $vars;
    }
}

/**
 * Ambil konfigurasi database dari .env atau db_config.json
 */
function getDatabaseConfig(): array
{
    $rootDir = dirname(__DIR__, 1);
    $envPath = $rootDir . '/.env';
    $jsonPath = LUMITECH_DATA_PATH . '/database_config.json';

    $config = [
        'host'     => '',
        'port'     => '3306',
        'user'     => '',
        'password' => '',
        'database' => 'defaultdb',
        'ssl_mode' => 'REQUIRED',
        'ssl_ca'   => '',
    ];

    // Cek JSON dulu jika ada (disimpan lewat admin)
    if (file_exists($jsonPath)) {
        $saved = json_decode(file_get_contents($jsonPath), true);
        if (is_array($saved)) {
            $config = array_merge($config, $saved);
        }
    }

    // Timpa dari .env jika ada
    $env = loadEnv($envPath);
    if (!empty($env['AIVEN_MYSQL_HOST'])) {
        $config['host'] = $env['AIVEN_MYSQL_HOST'];
    }
    if (!empty($env['AIVEN_MYSQL_PORT'])) {
        $config['port'] = $env['AIVEN_MYSQL_PORT'];
    }
    if (!empty($env['AIVEN_MYSQL_USER'])) {
        $config['user'] = $env['AIVEN_MYSQL_USER'];
    }
    if (isset($env['AIVEN_MYSQL_PASSWORD']) && $env['AIVEN_MYSQL_PASSWORD'] !== '') {
        $config['password'] = $env['AIVEN_MYSQL_PASSWORD'];
    }
    if (!empty($env['AIVEN_MYSQL_DATABASE'])) {
        $config['database'] = $env['AIVEN_MYSQL_DATABASE'];
    }
    if (!empty($env['AIVEN_MYSQL_SSL_MODE'])) {
        $config['ssl_mode'] = $env['AIVEN_MYSQL_SSL_MODE'];
    }
    if (!empty($env['AIVEN_MYSQL_SSL_CA'])) {
        $config['ssl_ca'] = $env['AIVEN_MYSQL_SSL_CA'];
    }

    return $config;
}

/**
 * Simpan konfigurasi database ke database_config.json dan perbarui .env
 */
function saveDatabaseConfig(array $newConfig): bool
{
    $rootDir = dirname(__DIR__, 1);
    $jsonPath = LUMITECH_DATA_PATH . '/database_config.json';
    $envPath = $rootDir . '/.env';

    // 1. Simpan ke JSON
    file_put_contents($jsonPath, json_encode($newConfig, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

    // 2. Perbarui .env
    $content = "# ========================================================\n";
    $content .= "# LUMITECH.ID - ENVIRONMENT CONFIGURATION\n";
    $content .= "# ========================================================\n\n";
    $content .= "AIVEN_MYSQL_HOST=" . ($newConfig['host'] ?? '') . "\n";
    $content .= "AIVEN_MYSQL_PORT=" . ($newConfig['port'] ?? '3306') . "\n";
    $content .= "AIVEN_MYSQL_USER=" . ($newConfig['user'] ?? '') . "\n";
    $content .= "AIVEN_MYSQL_PASSWORD=\"" . addcslashes($newConfig['password'] ?? '', '"') . "\"\n";
    $content .= "AIVEN_MYSQL_DATABASE=" . ($newConfig['database'] ?? 'defaultdb') . "\n";
    $content .= "AIVEN_MYSQL_SSL_MODE=" . ($newConfig['ssl_mode'] ?? 'REQUIRED') . "\n";
    $content .= "AIVEN_MYSQL_SSL_CA=" . ($newConfig['ssl_ca'] ?? '') . "\n";

    return file_put_contents($envPath, $content) !== false;
}

/**
 * Cek apakah kredensial Aiven sudah diisi
 */
function isAivenConfigured(): bool
{
    $cfg = getDatabaseConfig();
    return !empty($cfg['host']) && !empty($cfg['user']);
}

/**
 * Dapatkan koneksi PDO ke Aiven MySQL
 */
function getDbConnection(?array $customConfig = null): ?PDO
{
    static $pdoInstance = null;

    if ($customConfig === null && $pdoInstance !== null) {
        return $pdoInstance;
    }

    $cfg = $customConfig ?? getDatabaseConfig();

    if (empty($cfg['host']) || empty($cfg['user'])) {
        return null;
    }

    $host = $cfg['host'];
    $port = $cfg['port'] ?: '3306';
    $db   = $cfg['database'] ?: 'defaultdb';
    $user = $cfg['user'];
    $pass = $cfg['password'];

    $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_TIMEOUT            => 5,
    ];

    // Konfigurasi SSL untuk Aiven MySQL
    if (!empty($cfg['ssl_ca']) && file_exists($cfg['ssl_ca'])) {
        $options[PDO::MYSQL_ATTR_SSL_CA] = $cfg['ssl_ca'];
    } else {
        // Izinkan SSL tanpa CA spesifik jika sertifikat publik Aiven
        if (defined('PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT')) {
            $options[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = false;
        }
    }

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        if ($customConfig === null) {
            $pdoInstance = $pdo;
        }
        return $pdo;
    } catch (\Throwable $e) {
        error_log("Aiven MySQL Connection Error: " . $e->getMessage());
        return null;
    }
}

/**
 * Test koneksi database dengan pesan error yang deskriptif
 */
function testDbConnection(?array $customConfig = null): array
{
    $cfg = $customConfig ?? getDatabaseConfig();

    if (empty($cfg['host'])) {
        return ['success' => false, 'message' => 'Host Aiven MySQL belum diisi.'];
    }
    if (empty($cfg['user'])) {
        return ['success' => false, 'message' => 'User Aiven MySQL belum diisi.'];
    }

    $host = $cfg['host'];
    $port = $cfg['port'] ?: '3306';
    $db   = $cfg['database'] ?: 'defaultdb';
    $user = $cfg['user'];
    $pass = $cfg['password'];

    $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_TIMEOUT            => 6,
    ];

    if (!empty($cfg['ssl_ca']) && file_exists($cfg['ssl_ca'])) {
        $options[PDO::MYSQL_ATTR_SSL_CA] = $cfg['ssl_ca'];
    } else {
        if (defined('PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT')) {
            $options[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = false;
        }
    }

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        $version = $pdo->query("SELECT VERSION()")->fetchColumn();
        return [
            'success' => true,
            'message' => "Koneksi ke Aiven MySQL berhasil! Versi MySQL: {$version}",
            'version' => $version
        ];
    } catch (\Throwable $e) {
        return [
            'success' => false,
            'message' => 'Gagal terkoneksi: ' . $e->getMessage()
        ];
    }
}

/**
 * Buat tabel-tabel Aiven MySQL jika belum ada
 */
function initAivenTables(PDO $pdo): bool
{
    try {
        // 1. Tabel products
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS products (
                id VARCHAR(100) PRIMARY KEY,
                product_key VARCHAR(100) UNIQUE NOT NULL,
                category VARCHAR(50) NOT NULL DEFAULT 'website',
                icon VARCHAR(50) NOT NULL DEFAULT 'devices',
                badge VARCHAR(100) NULL,
                title VARCHAR(255) NOT NULL,
                description TEXT NULL,
                price VARCHAR(100) NOT NULL,
                price_sub VARCHAR(255) NULL,
                tags JSON NULL,
                featured TINYINT(1) NOT NULL DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                INDEX idx_category (category),
                INDEX idx_featured (featured)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        // 2. Tabel portfolios
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS portfolios (
                id VARCHAR(100) PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                category VARCHAR(50) NOT NULL DEFAULT 'desain',
                badge VARCHAR(100) NULL,
                icon VARCHAR(50) NOT NULL DEFAULT 'image',
                image VARCHAR(255) NOT NULL,
                description TEXT NULL,
                tags JSON NULL,
                service_key VARCHAR(100) NULL,
                btn_text VARCHAR(100) DEFAULT 'Order Layanan',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                INDEX idx_category (category)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        // 3. Tabel admins
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS admins (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(100) UNIQUE NOT NULL,
                password_hash VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");

        return true;
    } catch (\Throwable $e) {
        error_log("Failed to initialize tables: " . $e->getMessage());
        return false;
    }
}

/**
 * Migrasikan seluruh data dari file JSON ke Aiven MySQL
 */
function migrateJsonToAiven(PDO $pdo): array
{
    initAivenTables($pdo);

    $prodFile = LUMITECH_DATA_PATH . '/products.json';
    $portFile = LUMITECH_DATA_PATH . '/portfolios.json';

    $prodMigrated = 0;
    $portMigrated = 0;

    // 1. Migrasi Produk
    if (file_exists($prodFile)) {
        $products = json_decode(file_get_contents($prodFile), true) ?: [];
        $stmt = $pdo->prepare("
            INSERT INTO products (id, product_key, category, icon, badge, title, description, price, price_sub, tags, featured)
            VALUES (:id, :product_key, :category, :icon, :badge, :title, :description, :price, :price_sub, :tags, :featured)
            ON DUPLICATE KEY UPDATE
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

        foreach ($products as $p) {
            $stmt->execute([
                ':id'          => $p['id'] ?? ('prod_' . $p['key']),
                ':product_key' => $p['key'],
                ':category'    => $p['category'] ?? 'website',
                ':icon'        => $p['icon'] ?? 'devices',
                ':badge'       => $p['badge'] ?? '',
                ':title'       => $p['title'],
                ':description' => $p['desc'] ?? '',
                ':price'       => $p['price'] ?? '',
                ':price_sub'   => $p['price_sub'] ?? '',
                ':tags'        => json_encode($p['tags'] ?? []),
                ':featured'    => !empty($p['featured']) ? 1 : 0,
            ]);
            $prodMigrated++;
        }
    }

    // 2. Migrasi Portofolio
    if (file_exists($portFile)) {
        $portfolios = json_decode(file_get_contents($portFile), true) ?: [];
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

        foreach ($portfolios as $port) {
            $stmt->execute([
                ':id'          => $port['id'],
                ':title'       => $port['title'],
                ':category'    => $port['category'] ?? 'desain',
                ':badge'       => $port['badge'] ?? '',
                ':icon'        => $port['icon'] ?? 'image',
                ':image'       => $port['image'],
                ':description' => $port['desc'] ?? '',
                ':tags'        => json_encode($port['tags'] ?? []),
                ':service_key' => $port['service_key'] ?? '',
                ':btn_text'    => $port['btn_text'] ?? 'Order Layanan',
            ]);
            $portMigrated++;
        }
    }

    return [
        'success'    => true,
        'products'   => $prodMigrated,
        'portfolios' => $portMigrated,
    ];
}
