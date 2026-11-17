<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPass = $_POST['current_password'] ?? '';
    $newPass = $_POST['new_password'] ?? '';
    $confirmPass = $_POST['confirm_password'] ?? '';

    $configFile = LUMITECH_DATA_PATH . '/admin_config.json';
    $config = file_exists($configFile) ? json_decode(file_get_contents($configFile), true) : [];
    $currentHash = $config['password_hash'] ?? '';

    if (empty($currentPass) || empty($newPass) || empty($confirmPass)) {
        $error = 'Semua field password wajib diisi!';
    } elseif (!password_verify($currentPass, $currentHash)) {
        $error = 'Password saat ini salah.';
    } elseif (strlen($newPass) < 6) {
        $error = 'Password baru minimal harus 6 karakter.';
    } elseif ($newPass !== $confirmPass) {
        $error = 'Konfirmasi password baru tidak cocok.';
    } else {
        if (updateAdminPassword($newPass)) {
            setFlashMessage('success', 'Password admin berhasil diperbarui! Silakan gunakan password baru pada login berikutnya.');
            header('Location: settings.php');
            exit;
        } else {
            $error = 'Gagal menyimpan konfigurasi baru.';
        }
    }
}

$dbConfig = getDatabaseConfig();
$aivenConnected = testDbConnection($dbConfig)['success'];

$currentPage = 'settings';
$pageTitle = 'Pengaturan Akun & Sistem';
$headerTitle = 'Pengaturan Akun & Sistem';
require_once __DIR__ . '/header.php';
?>

<div class="max-w-2xl mx-auto space-y-6">
  
  <div>
    <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">Pengaturan Keamanan &amp; Akun</h2>
    <p class="text-xs text-slate-500 mt-0.5">Kelola kredensial login admin panel Lumitech.id</p>
  </div>

  <?php if (!empty($error)): ?>
  <div class="p-4 rounded-2xl bg-red-50 border border-red-200 text-red-700 text-xs flex items-center gap-2">
    <span class="material-symbols-outlined text-base shrink-0">error</span>
    <span><?= htmlspecialchars($error) ?></span>
  </div>
  <?php endif; ?>

  <!-- Aiven Database Quick Access Card -->
  <div class="bg-gradient-to-r from-blue-900 to-indigo-900 rounded-3xl p-5 sm:p-6 text-white shadow-lg flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
    <div class="flex items-center gap-3">
      <div class="w-11 h-11 rounded-2xl bg-white/10 flex items-center justify-center shrink-0">
        <span class="material-symbols-outlined text-2xl text-blue-300">database</span>
      </div>
      <div>
        <div class="flex items-center gap-2">
          <h3 class="text-sm font-bold">Database Aiven MySQL</h3>
          <span class="px-2 py-0.5 rounded-full text-[10px] font-bold <?= $aivenConnected ? 'bg-emerald-500 text-white' : 'bg-amber-400 text-slate-900' ?>">
            <?= $aivenConnected ? 'Terhubung' : 'Penyimpanan JSON' ?>
          </span>
        </div>
        <p class="text-xs text-blue-200 mt-0.5">Kelola Host, User, Port, SSL, dan migrasi tabel Aiven Cloud</p>
      </div>
    </div>
    <a href="database.php" class="w-full sm:w-auto px-4 py-2 rounded-xl bg-white text-slate-900 text-xs font-bold text-center hover:bg-slate-100 transition-colors shadow-sm active:scale-95 shrink-0">
      Buka Pengaturan Database
    </a>
  </div>

  <!-- Password Change Card -->
  <div class="bg-white rounded-3xl border border-slate-200 p-5 sm:p-8 shadow-sm">
    <h3 class="text-sm font-bold text-slate-900 mb-1 flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-base">lock_reset</span>
      <span>Ganti Password Admin</span>
    </h3>
    <p class="text-xs text-slate-400 mb-5">Ubah kata sandi secara berkala untuk menjaga keamanan website Anda.</p>

    <form method="POST" action="settings.php" class="space-y-4">
      <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="current_password">
          Password Saat Ini
        </label>
        <input type="password" id="current_password" name="current_password" required
          class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
          placeholder="••••••••" />
      </div>

      <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="new_password">
          Password Baru
        </label>
        <input type="password" id="new_password" name="new_password" required minlength="6"
          class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
          placeholder="Minimal 6 karakter" />
      </div>

      <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="confirm_password">
          Ulangi Password Baru
        </label>
        <input type="password" id="confirm_password" name="confirm_password" required minlength="6"
          class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
          placeholder="Konfirmasi password baru" />
      </div>

      <div class="pt-4 border-t border-slate-100 flex items-center justify-end">
        <button type="submit" class="w-full sm:w-auto px-6 py-2.5 sm:py-3 rounded-xl bg-primary hover:bg-primary-dark text-white text-xs font-bold shadow-md shadow-primary/20 transition-all flex items-center justify-center gap-1.5 active:scale-95">
          <span class="material-symbols-outlined text-sm">key</span>
          <span>Perbarui Password</span>
        </button>
      </div>
    </form>
  </div>

  <!-- System Info Card -->
  <div class="bg-white rounded-3xl border border-slate-200 p-5 sm:p-8 shadow-sm">
    <h3 class="text-sm font-bold text-slate-900 mb-1 flex items-center gap-2">
      <span class="material-symbols-outlined text-primary text-base">dns</span>
      <span>Informasi Lingkungan Sistem</span>
    </h3>
    <p class="text-xs text-slate-400 mb-4">Spesifikasi server dan direktori penyimpanan aktif</p>

    <div class="space-y-2.5 text-xs">
      <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
        <span class="text-slate-500">Versi PHP</span>
        <span class="font-mono font-bold text-slate-800"><?= PHP_VERSION ?></span>
      </div>

      <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
        <span class="text-slate-500">Driver Database</span>
        <span class="font-mono font-bold text-slate-800">PDO MySQL + JSON Cache</span>
      </div>

      <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
        <span class="text-slate-500">Folder Portofolio</span>
        <span class="font-mono font-bold text-slate-800 text-[11px]">assets/portfolio/</span>
      </div>

      <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
        <span class="text-slate-500">Target Static Build</span>
        <span class="font-mono font-bold text-emerald-600 text-[11px]">index.html &amp; produk.html</span>
      </div>
    </div>
  </div>

</div>

<?php require_once __DIR__ . '/footer.php'; ?>
