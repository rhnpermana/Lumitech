<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

$testResult = null;
$migrationResult = null;
$config = getDatabaseConfig();

// Handle Actions (Save, Test, Migrate) SEBELUM output HTML dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? 'save';

    if ($action === 'save' || $action === 'test') {
        $submittedConfig = [
            'host'     => trim($_POST['host'] ?? ''),
            'port'     => trim($_POST['port'] ?? '3306'),
            'user'     => trim($_POST['user'] ?? 'avnadmin'),
            'password' => $_POST['password'] ?? '',
            'database' => trim($_POST['database'] ?? 'defaultdb'),
            'ssl_mode' => trim($_POST['ssl_mode'] ?? 'REQUIRED'),
            'ssl_ca'   => trim($_POST['ssl_ca'] ?? ''),
        ];

        if ($action === 'test') {
            $testResult = testDbConnection($submittedConfig);
            $config = $submittedConfig;
        } elseif ($action === 'save') {
            saveDatabaseConfig($submittedConfig);
            $config = $submittedConfig;
            $testResult = testDbConnection($submittedConfig);
            if ($testResult['success']) {
                setFlashMessage('success', 'Konfigurasi Aiven MySQL berhasil disimpan dan koneksi berhasil terhubung!');
            } else {
                setFlashMessage('warning', 'Konfigurasi disimpan, namun koneksi belum berhasil: ' . $testResult['message']);
            }
            header('Location: database.php');
            exit;
        }
    } elseif ($action === 'migrate') {
        $pdo = getDbConnection();
        if (!$pdo) {
            setFlashMessage('error', 'Koneksi ke Aiven MySQL gagal. Pastikan host, user, dan password sudah benar.');
        } else {
            $res = migrateJsonToAiven($pdo);
            if ($res['success']) {
                setFlashMessage('success', "Migrasi data sukses! {$res['products']} produk dan {$res['portfolios']} portofolio berhasil disinkronkan ke Aiven MySQL.");
            } else {
                setFlashMessage('error', 'Gagal melakukan migrasi data.');
            }
        }
        header('Location: database.php');
        exit;
    }
}

// Cek status koneksi aktif saat ini
$liveStatus = testDbConnection($config);

$currentPage = 'database';
$pageTitle = 'Konfigurasi Database Aiven MySQL';
$headerTitle = 'Database Aiven MySQL';
require_once __DIR__ . '/header.php';
?>

<div class="max-w-4xl mx-auto space-y-6">
  
  <!-- Heading Section -->
  <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
    <div>
      <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight flex items-center gap-2">
        <span class="material-symbols-outlined text-primary text-2xl">database</span>
        <span>Aiven Cloud MySQL Database</span>
      </h2>
      <p class="text-xs text-slate-500 mt-0.5">Kelola koneksi cloud database Aiven, SSL, dan migrasi data otomatis</p>
    </div>

    <!-- Live Status Pill -->
    <div class="self-start sm:self-auto">
      <?php if ($liveStatus['success']): ?>
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold shadow-sm">
        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
        <span>Aiven MySQL Terhubung</span>
      </span>
      <?php else: ?>
      <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 border border-amber-200 text-amber-800 text-xs font-bold shadow-sm">
        <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
        <span>Penyimpanan Lokal (JSON)</span>
      </span>
      <?php endif; ?>
    </div>
  </div>

  <!-- Test Result Feedback Alert -->
  <?php if ($testResult): ?>
  <div class="p-4 rounded-2xl border <?= $testResult['success'] ? 'bg-emerald-50 border-emerald-200 text-emerald-800' : 'bg-red-50 border-red-200 text-red-800' ?> flex items-start gap-3 shadow-sm">
    <span class="material-symbols-outlined text-xl shrink-0 mt-0.5"><?= $testResult['success'] ? 'check_circle' : 'error' ?></span>
    <div class="text-xs sm:text-sm">
      <div class="font-bold"><?= $testResult['success'] ? 'Uji Koneksi Berhasil!' : 'Uji Koneksi Gagal' ?></div>
      <div class="mt-0.5 leading-relaxed"><?= htmlspecialchars($testResult['message']) ?></div>
    </div>
  </div>
  <?php endif; ?>

  <!-- Main Database Configuration Card -->
  <div class="bg-white rounded-3xl border border-slate-200 p-5 sm:p-8 shadow-sm">
    <div class="flex items-center justify-between pb-4 mb-5 border-b border-slate-100">
      <div>
        <h3 class="text-sm font-bold text-slate-900">Kredensial Layanan Aiven MySQL</h3>
        <p class="text-xs text-slate-400 mt-0.5">Dapatkan detail ini dari dashboard konsol layanan Aiven Anda</p>
      </div>
      <a href="https://console.aiven.io" target="_blank" rel="noopener" class="text-xs font-bold text-primary hover:underline flex items-center gap-1">
        <span>Buka Konsol Aiven</span>
        <span class="material-symbols-outlined text-sm">open_in_new</span>
      </a>
    </div>

    <form method="POST" action="database.php" class="space-y-5">
      <input type="hidden" name="action" id="dbFormAction" value="save">

      <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
        
        <!-- Host -->
        <div class="sm:col-span-8">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="host">
            Host / Service URI <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-base">cloud</span>
            <input type="text" id="host" name="host" required
              value="<?= htmlspecialchars($config['host'] ?? '') ?>"
              placeholder="mysql-xxxx-your-project.aivencloud.com"
              class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono text-xs" />
          </div>
        </div>

        <!-- Port -->
        <div class="sm:col-span-4">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="port">
            Port <span class="text-red-500">*</span>
          </label>
          <input type="number" id="port" name="port" required
            value="<?= htmlspecialchars($config['port'] ?? '3306') ?>"
            placeholder="24582"
            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono text-xs" />
        </div>

        <!-- User -->
        <div class="sm:col-span-6">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="user">
            User <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-base">person</span>
            <input type="text" id="user" name="user" required
              value="<?= htmlspecialchars($config['user'] ?? 'avnadmin') ?>"
              placeholder="avnadmin"
              class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono text-xs" />
          </div>
        </div>

        <!-- Password -->
        <div class="sm:col-span-6">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="password">
            Password <span class="text-red-500">*</span>
          </label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-base">lock</span>
            <input type="password" id="password" name="password"
              value="<?= htmlspecialchars($config['password'] ?? '') ?>"
              placeholder="••••••••••••"
              class="w-full pl-10 pr-10 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono text-xs" />
            <button type="button" id="togglePass" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
              <span class="material-symbols-outlined text-base">visibility</span>
            </button>
          </div>
        </div>

        <!-- Database Name -->
        <div class="sm:col-span-6">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="database">
            Database Name <span class="text-red-500">*</span>
          </label>
          <input type="text" id="database" name="database" required
            value="<?= htmlspecialchars($config['database'] ?? 'defaultdb') ?>"
            placeholder="defaultdb"
            class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono text-xs" />
        </div>

        <!-- SSL Mode -->
        <div class="sm:col-span-6">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="ssl_mode">
            SSL Connection
          </label>
          <select id="ssl_mode" name="ssl_mode" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-xs">
            <option value="REQUIRED" <?= ($config['ssl_mode'] ?? '') === 'REQUIRED' ? 'selected' : '' ?>>REQUIRED (Wajib SSL - Standar Aiven)</option>
            <option value="PREFERRED" <?= ($config['ssl_mode'] ?? '') === 'PREFERRED' ? 'selected' : '' ?>>PREFERRED</option>
          </select>
        </div>

      </div>

      <!-- Action Buttons -->
      <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row items-stretch sm:items-center justify-end gap-2.5">
        <button type="button" onclick="submitTest()" class="py-2.5 px-4 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition-all flex items-center justify-center gap-1.5 active:scale-95">
          <span class="material-symbols-outlined text-sm">wifi_protected_setup</span>
          <span>Uji Koneksi Aiven</span>
        </button>
        <button type="submit" onclick="document.getElementById('dbFormAction').value='save'" class="py-2.5 px-6 rounded-xl bg-primary hover:bg-primary-dark text-white text-xs font-bold shadow-md shadow-primary/20 transition-all flex items-center justify-center gap-1.5 active:scale-95">
          <span class="material-symbols-outlined text-sm">save</span>
          <span>Simpan Konfigurasi</span>
        </button>
      </div>

    </form>
  </div>

  <!-- Migration Section Card -->
  <div class="bg-white rounded-3xl border border-slate-200 p-5 sm:p-8 shadow-sm">
    <div class="flex items-start justify-between gap-4 mb-4">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
          <span class="material-symbols-outlined text-xl">move_up</span>
        </div>
        <div>
          <h3 class="text-sm font-bold text-slate-900">Migrasi &amp; Inisialisasi Tabel Aiven (1-Klik)</h3>
          <p class="text-xs text-slate-400 mt-0.5">Otomatis membuat tabel `products`, `portfolios`, dan `admins` di Aiven MySQL lalu mengimpor seluruh data dari JSON</p>
        </div>
      </div>
    </div>

    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 mb-5 text-xs text-slate-600 leading-relaxed">
      Tombol di bawah akan mengeksekusi struktur tabel ke database Aiven Anda dan menyalin <strong>14 produk &amp; 6 portofolio</strong> yang sudah ada. Aman digunakan berulang kali karena menggunakan klausa <code>ON DUPLICATE KEY UPDATE</code>.
    </div>

    <form method="POST" action="database.php" onsubmit="return confirm('Mulai migrasi seluruh data produk & portofolio ke database Aiven MySQL?')">
      <input type="hidden" name="action" value="migrate">
      <button type="submit" <?= !$liveStatus['success'] ? 'disabled title="Pastikan koneksi Aiven MySQL sudah terhubung terlebih dahulu"' : '' ?> class="w-full sm:w-auto px-6 py-3 rounded-xl <?= $liveStatus['success'] ? 'bg-indigo-600 hover:bg-indigo-700 text-white shadow-md shadow-indigo-200' : 'bg-slate-200 text-slate-400 cursor-not-allowed' ?> text-xs font-bold transition-all flex items-center justify-center gap-2 active:scale-95">
        <span class="material-symbols-outlined text-sm">sync_alt</span>
        <span>Migrasikan Data ke Aiven MySQL Sekarang</span>
      </button>
    </form>
  </div>

</div>

<script>
  function submitTest() {
    document.getElementById('dbFormAction').value = 'test';
    document.querySelector('form').submit();
  }

  const passInput = document.getElementById('password');
  const togglePassBtn = document.getElementById('togglePass');
  if (passInput && togglePassBtn) {
    togglePassBtn.addEventListener('click', () => {
      const type = passInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passInput.setAttribute('type', type);
      togglePassBtn.querySelector('.material-symbols-outlined').textContent = type === 'password' ? 'visibility' : 'visibility_off';
    });
  }
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
