<?php
$currentPage = 'dashboard';
$pageTitle = 'Dashboard Overview';
$headerTitle = 'Dashboard Overview';
require_once __DIR__ . '/header.php';

$products = getProducts();
$portfolios = getPortfolios();

$featuredCount = count(array_filter($products, fn($p) => !empty($p['featured'])));

$categories = [];
foreach ($products as $p) {
    if (!empty($p['category'])) {
        $categories[$p['category']] = true;
    }
}
$catCount = count($categories);

// Status static file
$indexMtime = file_exists(__DIR__ . '/../index.html') ? date('d M Y, H:i', filemtime(__DIR__ . '/../index.html')) : 'Belum di-build';
$produkMtime = file_exists(__DIR__ . '/../produk.html') ? date('d M Y, H:i', filemtime(__DIR__ . '/../produk.html')) : 'Belum di-build';
?>

<!-- Welcome Banner (Mobile & Desktop App Look) -->
<div class="mb-6 p-5 sm:p-8 rounded-3xl bg-gradient-to-r from-primary to-primary-dark text-white shadow-xl shadow-primary/10 relative overflow-hidden">
  <div class="relative z-10 max-w-2xl">
    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/20 text-white text-[11px] sm:text-xs font-bold mb-2.5 backdrop-blur-sm">
      <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
      <span>Lumitech Content Management System</span>
    </div>
    <h2 class="text-xl sm:text-3xl font-black tracking-tight leading-snug">
      Selamat Datang di Panel Admin Lumitech
    </h2>
    <p class="text-xs sm:text-sm text-white/80 mt-1.5 leading-relaxed">
      Kelola katalog produk, harga layanan, dan portofolio hasil kerja dengan mudah di Android &amp; PC.
    </p>
    <div class="mt-4 sm:mt-5 flex flex-wrap gap-2">
      <a href="product-form.php?action=create" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-white text-primary text-xs font-bold shadow hover:bg-slate-50 transition-all active:scale-95">
        <span class="material-symbols-outlined text-base">add_box</span>
        <span>+ Tambah Produk</span>
      </a>
      <a href="portfolio-form.php?action=create" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-white/10 hover:bg-white/20 text-white text-xs font-bold transition-all border border-white/20 active:scale-95">
        <span class="material-symbols-outlined text-base">add_photo_alternate</span>
        <span>+ Tambah Portofolio</span>
      </a>
    </div>
  </div>

  <div class="pointer-events-none absolute -bottom-10 -right-10 w-64 h-64 rounded-full bg-white/5 blur-2xl"></div>
</div>

<!-- Aiven MySQL Quick Banner -->
<div class="mb-6 p-4 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
  <div class="flex items-center gap-3">
    <div class="w-10 h-10 rounded-xl bg-blue-50 text-primary flex items-center justify-center shrink-0">
      <span class="material-symbols-outlined text-xl">database</span>
    </div>
    <div>
      <div class="flex items-center gap-2">
        <h3 class="text-xs sm:text-sm font-bold text-slate-900">Database Aiven MySQL</h3>
        <span class="px-2 py-0.5 rounded-full text-[10px] font-bold <?= $aivenActive ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' ?>">
          <?= $aivenActive ? '● Terhubung' : '● Penyimpanan JSON' ?>
        </span>
      </div>
      <p class="text-[11px] text-slate-500 mt-0.5">
        <?= $aivenActive ? 'Data produk dan portofolio tersimpan di cloud database Aiven MySQL.' : 'Koneksikan Aiven MySQL atau migrasikan data dengan 1-klik.' ?>
      </p>
    </div>
  </div>
  <a href="database.php" class="w-full sm:w-auto px-3.5 py-1.5 rounded-xl bg-slate-100 hover:bg-primary hover:text-white text-slate-700 text-xs font-bold transition-colors text-center shrink-0 active:scale-95">
    Kelola Aiven MySQL
  </a>
</div>

<!-- Metrics Grid -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-5 mb-6">
  
  <!-- Total Produk -->
  <div class="p-4 sm:p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-between">
    <div>
      <div class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Produk</div>
      <div class="text-xl sm:text-3xl font-black text-slate-900 mt-0.5 sm:mt-1"><?= count($products) ?></div>
      <a href="products.php" class="text-[11px] sm:text-xs font-bold text-primary hover:underline mt-0.5 sm:mt-1 inline-flex items-center gap-0.5">
        <span>Kelola</span>
        <span class="material-symbols-outlined text-xs">arrow_forward</span>
      </a>
    </div>
    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-2xl bg-primary-light text-primary flex items-center justify-center shrink-0">
      <span class="material-symbols-outlined text-xl sm:text-2xl">inventory_2</span>
    </div>
  </div>

  <!-- Featured Layanan Unggulan -->
  <div class="p-4 sm:p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-between">
    <div>
      <div class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-400">Unggulan Home</div>
      <div class="text-xl sm:text-3xl font-black text-amber-500 mt-0.5 sm:mt-1"><?= $featuredCount ?></div>
      <span class="text-[10px] sm:text-xs text-slate-400 mt-0.5 sm:mt-1 block">Tampil Beranda</span>
    </div>
    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-2xl bg-amber-50 text-amber-500 flex items-center justify-center shrink-0">
      <span class="material-symbols-outlined text-xl sm:text-2xl">star</span>
    </div>
  </div>

  <!-- Total Portofolio -->
  <div class="p-4 sm:p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-between">
    <div>
      <div class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-400">Portofolio</div>
      <div class="text-xl sm:text-3xl font-black text-slate-900 mt-0.5 sm:mt-1"><?= count($portfolios) ?></div>
      <a href="portfolios.php" class="text-[11px] sm:text-xs font-bold text-primary hover:underline mt-0.5 sm:mt-1 inline-flex items-center gap-0.5">
        <span>Kelola</span>
        <span class="material-symbols-outlined text-xs">arrow_forward</span>
      </a>
    </div>
    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
      <span class="material-symbols-outlined text-xl sm:text-2xl">photo_library</span>
    </div>
  </div>

  <!-- Kategori Aktif -->
  <div class="p-4 sm:p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center justify-between">
    <div>
      <div class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-slate-400">Kategori</div>
      <div class="text-xl sm:text-3xl font-black text-slate-900 mt-0.5 sm:mt-1"><?= $catCount ?></div>
      <span class="text-[10px] sm:text-xs text-slate-400 mt-0.5 sm:mt-1 block">Layanan Aktif</span>
    </div>
    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center shrink-0">
      <span class="material-symbols-outlined text-xl sm:text-2xl">category</span>
    </div>
  </div>

</div>

<!-- Recent Content Tables Grid -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
  
  <!-- Daftar Produk Terkini -->
  <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col justify-between">
    <div>
      <div class="p-4 sm:p-6 border-b border-slate-100 flex items-center justify-between">
        <div>
          <h3 class="text-sm sm:text-base font-bold text-slate-900">Produk Terkini</h3>
          <p class="text-[11px] text-slate-400">Total <?= count($products) ?> layanan terdaftar</p>
        </div>
        <a href="products.php" class="text-xs font-bold text-primary hover:underline flex items-center gap-1">
          <span>Semua Produk</span>
          <span class="material-symbols-outlined text-xs">arrow_forward</span>
        </a>
      </div>

      <div class="divide-y divide-slate-100">
        <?php foreach (array_slice($products, 0, 5) as $p): ?>
        <div class="p-3.5 sm:p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
          <div class="flex items-center gap-3">
            <span class="w-9 h-9 rounded-xl bg-slate-100 text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-lg"><?= htmlspecialchars($p['icon'] ?? 'devices') ?></span>
            </span>
            <div>
              <div class="font-bold text-xs sm:text-sm text-slate-900 flex items-center gap-1.5">
                <span><?= htmlspecialchars($p['title']) ?></span>
                <?php if (!empty($p['featured'])): ?>
                <span class="text-amber-500 text-[10px]" title="Unggulan">★</span>
                <?php endif; ?>
              </div>
              <div class="text-[11px] text-slate-400 flex items-center gap-2 mt-0.5">
                <span class="font-semibold text-primary"><?= htmlspecialchars($p['price']) ?></span>
                <span>•</span>
                <span class="capitalize"><?= htmlspecialchars($p['category'] ?? 'website') ?></span>
              </div>
            </div>
          </div>
          <a href="product-form.php?action=edit&key=<?= urlencode($p['key']) ?>" class="p-2 rounded-xl text-slate-400 hover:text-primary hover:bg-slate-100 transition-colors" title="Edit">
            <span class="material-symbols-outlined text-base">edit</span>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="p-3.5 bg-slate-50 border-t border-slate-100 text-center">
      <a href="product-form.php?action=create" class="inline-flex items-center gap-1 text-xs font-bold text-primary hover:underline">
        <span class="material-symbols-outlined text-sm">add</span>
        <span>Tambah Produk Baru</span>
      </a>
    </div>
  </div>

  <!-- Daftar Portofolio Terkini -->
  <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col justify-between">
    <div>
      <div class="p-4 sm:p-6 border-b border-slate-100 flex items-center justify-between">
        <div>
          <h3 class="text-sm sm:text-base font-bold text-slate-900">Portofolio Terkini</h3>
          <p class="text-[11px] text-slate-400">Total <?= count($portfolios) ?> karya ditampilkan</p>
        </div>
        <a href="portfolios.php" class="text-xs font-bold text-primary hover:underline flex items-center gap-1">
          <span>Semua Portofolio</span>
          <span class="material-symbols-outlined text-xs">arrow_forward</span>
        </a>
      </div>

      <div class="divide-y divide-slate-100">
        <?php foreach (array_slice($portfolios, 0, 5) as $port): 
          $img = $port['image'] ?? '';
          $imgSrc = (strpos($img, 'http') === 0 || strpos($img, '/') === 0) ? $img : '../' . $img;
        ?>
        <div class="p-3.5 sm:p-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
          <div class="flex items-center gap-3">
            <div class="w-11 h-11 rounded-xl bg-slate-100 overflow-hidden shrink-0 border border-slate-200">
              <img src="<?= htmlspecialchars($imgSrc) ?>" alt="thumb" class="w-full h-full object-cover">
            </div>
            <div>
              <div class="font-bold text-xs sm:text-sm text-slate-900 line-clamp-1">
                <?= htmlspecialchars($port['title']) ?>
              </div>
              <div class="text-[11px] text-slate-400 flex items-center gap-2 mt-0.5">
                <span class="px-2 py-0.5 rounded-full bg-slate-100 font-semibold text-slate-600 text-[10px] uppercase"><?= htmlspecialchars($port['badge'] ?? $port['category']) ?></span>
                <span>•</span>
                <span class="capitalize"><?= htmlspecialchars($port['category']) ?></span>
              </div>
            </div>
          </div>
          <a href="portfolio-form.php?action=edit&id=<?= urlencode($port['id']) ?>" class="p-2 rounded-xl text-slate-400 hover:text-primary hover:bg-slate-100 transition-colors" title="Edit">
            <span class="material-symbols-outlined text-base">edit</span>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="p-3.5 bg-slate-50 border-t border-slate-100 text-center">
      <a href="portfolio-form.php?action=create" class="inline-flex items-center gap-1 text-xs font-bold text-primary hover:underline">
        <span class="material-symbols-outlined text-sm">add</span>
        <span>Tambah Portofolio Baru</span>
      </a>
    </div>
  </div>

</div>

<!-- Information Card -->
<div class="mt-6 p-4 sm:p-5 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
  <div class="flex items-center gap-3">
    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
      <span class="material-symbols-outlined text-xl">info</span>
    </div>
    <div>
      <h4 class="text-xs sm:text-sm font-bold text-slate-900">Status Static Site</h4>
      <p class="text-[11px] text-slate-500">Terakhir disinkronkan: index.html (<?= $indexMtime ?>), produk.html (<?= $produkMtime ?>)</p>
    </div>
  </div>
  <a href="rebuild.php" class="w-full sm:w-auto px-4 py-2 rounded-xl bg-slate-100 hover:bg-amber-100 text-slate-700 hover:text-amber-800 text-xs font-bold transition-colors inline-flex items-center justify-center gap-1.5 shrink-0 active:scale-95">
    <span class="material-symbols-outlined text-sm">sync</span>
    <span>Kompilasi Ulang HTML</span>
  </a>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
