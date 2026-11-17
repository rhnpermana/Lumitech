<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

$flash = getFlashMessage();
$currentPage = $currentPage ?? 'dashboard';

// Cek status koneksi Aiven MySQL
$dbConfig = getDatabaseConfig();
$aivenActive = false;
$aivenHost = $dbConfig['host'] ?? '';
if (!empty($aivenHost)) {
    $pdoTest = getDbConnection();
    if ($pdoTest) {
        $aivenActive = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - ' : '' ?>Admin Dashboard Lumitech.id</title>
  <link rel="icon" type="image/png" href="../assets/img/logo-icon.png">
  <meta name="theme-color" content="#0035c5">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          },
          colors: {
            primary: '#0035c5',
            'primary-dark': '#00258d',
            'primary-light': '#eef3ff',
            surface: '#f8fafc',
          }
        }
      }
    }
  </script>
  <style>
    /* Android & Mobile App Feel */
    body {
      -webkit-tap-highlight-color: transparent;
      touch-action: manipulation;
    }
    /* Custom scrollbar */
    ::-webkit-scrollbar { width: 5px; height: 5px; }
    ::-webkit-scrollbar-track { background: #f1f5f9; }
    ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 9999px; }
    ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    .scrollbar-none::-webkit-scrollbar { display: none; }
    .scrollbar-none { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body class="bg-surface text-slate-800 font-sans antialiased min-h-screen flex flex-col lg:flex-row">

  <!-- Mobile Overlay Backdrop -->
  <div id="sidebarBackdrop" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 hidden lg:hidden"></div>

  <!-- Desktop Sidebar -->
  <aside id="adminSidebar" class="fixed inset-y-0 left-0 w-64 bg-white border-r border-slate-200 z-50 flex flex-col justify-between transition-transform duration-300 -translate-x-full lg:translate-x-0">
    <div>
      <!-- Brand Logo -->
      <div class="h-16 px-6 flex items-center justify-between border-b border-slate-100">
        <a href="index.php" class="flex items-center gap-2.5">
          <div class="w-9 h-9 rounded-xl bg-primary text-white flex items-center justify-center font-black shadow-md shadow-primary/20">
            <span class="material-symbols-outlined text-xl">admin_panel_settings</span>
          </div>
          <div>
            <div class="text-sm font-black tracking-tight text-slate-900">Lumitech Admin</div>
            <div class="text-[10px] text-slate-400 font-medium tracking-wide">CMS &amp; Katalog Manager</div>
          </div>
        </a>
        <button id="closeSidebarBtn" class="lg:hidden text-slate-400 hover:text-slate-600 p-1">
          <span class="material-symbols-outlined text-xl">close</span>
        </button>
      </div>

      <!-- Navigation Links -->
      <nav class="p-4 space-y-1.5">
        <div class="px-3 pb-1 text-[10px] font-bold uppercase tracking-wider text-slate-400">Navigasi Utama</div>

        <!-- Dashboard -->
        <a href="index.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all <?= $currentPage === 'dashboard' ? 'bg-primary text-white shadow-sm shadow-primary/30' : 'text-slate-600 hover:bg-slate-50 hover:text-primary' ?>">
          <span class="material-symbols-outlined text-lg">dashboard</span>
          <span>Dashboard Overview</span>
        </a>

        <!-- Produk & Layanan -->
        <a href="products.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all <?= $currentPage === 'products' ? 'bg-primary text-white shadow-sm shadow-primary/30' : 'text-slate-600 hover:bg-slate-50 hover:text-primary' ?>">
          <span class="material-symbols-outlined text-lg">inventory_2</span>
          <span>Produk &amp; Layanan</span>
        </a>

        <!-- Portofolio -->
        <a href="portfolios.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all <?= $currentPage === 'portfolios' ? 'bg-primary text-white shadow-sm shadow-primary/30' : 'text-slate-600 hover:bg-slate-50 hover:text-primary' ?>">
          <span class="material-symbols-outlined text-lg">photo_library</span>
          <span>Portofolio Hasil Kerja</span>
        </a>

        <div class="pt-4 px-3 pb-1 text-[10px] font-bold uppercase tracking-wider text-slate-400">Database &amp; Sistem</div>

        <!-- Aiven MySQL Database -->
        <a href="database.php" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all <?= $currentPage === 'database' ? 'bg-primary text-white shadow-sm shadow-primary/30' : 'text-slate-600 hover:bg-slate-50 hover:text-primary' ?>">
          <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-lg <?= $aivenActive ? 'text-emerald-500' : 'text-amber-500' ?>">database</span>
            <span>Aiven MySQL</span>
          </div>
          <span class="w-2 h-2 rounded-full <?= $aivenActive ? 'bg-emerald-500' : 'bg-amber-400' ?>"></span>
        </a>

        <!-- Rebuild Static Site -->
        <a href="rebuild.php" onclick="return confirm('Jalankan kompilasi ulang index.html & produk.html?')" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold text-slate-600 hover:bg-amber-50 hover:text-amber-700 transition-all">
          <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-lg text-amber-500">sync</span>
            <span>Sinkronkan HTML</span>
          </div>
          <span class="text-[9px] uppercase px-1.5 py-0.5 rounded bg-amber-100 text-amber-800 font-bold">Build</span>
        </a>

        <!-- Pengaturan Akun -->
        <a href="settings.php" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-xs font-bold transition-all <?= $currentPage === 'settings' ? 'bg-primary text-white shadow-sm shadow-primary/30' : 'text-slate-600 hover:bg-slate-50 hover:text-primary' ?>">
          <span class="material-symbols-outlined text-lg">settings</span>
          <span>Pengaturan Akun</span>
        </a>
      </nav>
    </div>

    <!-- Bottom Sidebar Section -->
    <div class="p-4 border-t border-slate-100 space-y-2">
      <a href="../index.html" target="_blank" class="w-full flex items-center justify-center gap-2 py-2 px-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition-colors">
        <span class="material-symbols-outlined text-base">open_in_new</span>
        <span>Lihat Website Live</span>
      </a>

      <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin keluar dari panel admin?')" class="w-full flex items-center justify-center gap-2 py-2 px-3 rounded-xl text-red-600 hover:bg-red-50 text-xs font-bold transition-colors">
        <span class="material-symbols-outlined text-base">logout</span>
        <span>Keluar (Logout)</span>
      </a>
    </div>
  </aside>

  <!-- Main Content Wrapper -->
  <div class="grow flex flex-col min-h-screen lg:pl-64">
    
    <!-- Top Bar (Mobile & Desktop) -->
    <header class="h-16 bg-white/95 backdrop-blur-md border-b border-slate-200 px-4 sm:px-6 flex items-center justify-between sticky top-0 z-30 shadow-sm">
      <div class="flex items-center gap-3">
        <button id="openSidebarBtn" class="lg:hidden p-2 -ml-1 rounded-xl text-slate-700 hover:bg-slate-100 active:scale-95 transition-all">
          <span class="material-symbols-outlined text-2xl">menu</span>
        </button>
        <div>
          <h1 class="text-sm sm:text-base font-black text-slate-900 tracking-tight leading-tight">
            <?= isset($headerTitle) ? htmlspecialchars($headerTitle) : 'Admin Lumitech' ?>
          </h1>
          <!-- Database status indicator on mobile & desktop -->
          <div class="flex items-center gap-1.5 text-[10px] text-slate-400 font-semibold">
            <span class="w-1.5 h-1.5 rounded-full <?= $aivenActive ? 'bg-emerald-500 animate-pulse' : 'bg-amber-400' ?>"></span>
            <span><?= $aivenActive ? 'Aiven MySQL Aktif' : 'Penyimpanan JSON' ?></span>
          </div>
        </div>
      </div>

      <div class="flex items-center gap-2">
        <a href="rebuild.php" title="Sinkronkan static HTML" class="hidden sm:inline-flex items-center gap-1 px-3 py-1.5 rounded-xl bg-slate-100 hover:bg-amber-50 text-slate-700 hover:text-amber-800 text-xs font-semibold border border-slate-200 transition-colors">
          <span class="material-symbols-outlined text-sm text-amber-600">sync</span>
          <span>Rebuild</span>
        </a>

        <a href="../index.html" target="_blank" class="inline-flex items-center gap-1 px-3 py-1.5 rounded-xl bg-primary text-white text-xs font-bold shadow-sm hover:bg-primary-dark transition-all active:scale-95">
          <span class="material-symbols-outlined text-sm">visibility</span>
          <span class="hidden sm:inline">Lihat Web</span>
        </a>

        <div class="h-6 w-px bg-slate-200 mx-1 hidden sm:block"></div>

        <a href="settings.php" class="flex items-center gap-2 p-1 rounded-xl hover:bg-slate-100 transition-colors">
          <div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-xs uppercase">
            A
          </div>
        </a>
      </div>
    </header>

    <!-- Main Content Area with extra bottom padding for Android Bottom Bar -->
    <main class="grow p-3.5 sm:p-6 lg:p-8 max-w-7xl w-full mx-auto pb-28 lg:pb-8">
      
      <!-- Flash Alert Banner -->
      <?php if ($flash): ?>
      <div class="mb-5 p-3.5 sm:p-4 rounded-2xl flex items-start justify-between gap-3 shadow-sm border <?= $flash['type'] === 'success' ? 'bg-emerald-50 border-emerald-200 text-emerald-800' : ($flash['type'] === 'error' ? 'bg-red-50 border-red-200 text-red-800' : 'bg-blue-50 border-blue-200 text-blue-800') ?>">
        <div class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-xl shrink-0">
            <?= $flash['type'] === 'success' ? 'check_circle' : ($flash['type'] === 'error' ? 'error' : 'info') ?>
          </span>
          <span class="text-xs sm:text-sm font-semibold"><?= htmlspecialchars($flash['message']) ?></span>
        </div>
        <button type="button" onclick="this.parentElement.remove()" class="text-slate-400 hover:text-slate-600 p-1">
          <span class="material-symbols-outlined text-base">close</span>
        </button>
      </div>
      <?php endif; ?>
