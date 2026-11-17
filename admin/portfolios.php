<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

// Handle Delete
if (isset($_GET['delete'])) {
    $id = trim($_GET['delete']);
    if (deletePortfolio($id)) {
        setFlashMessage('success', "Portofolio karya berhasil dihapus dan website telah disinkronkan!");
    } else {
        setFlashMessage('error', "Gagal menghapus portofolio ID '{$id}'.");
    }
    header('Location: portfolios.php');
    exit;
}

$currentPage = 'portfolios';
$pageTitle = 'Kelola Portofolio Hasil Kerja';
$headerTitle = 'Portofolio Hasil Kerja';
require_once __DIR__ . '/header.php';

$portfolios = getPortfolios();

// Category counts
$categories = [];
foreach ($portfolios as $p) {
    $c = $p['category'] ?? 'other';
    $categories[$c] = ($categories[$c] ?? 0) + 1;
}
?>

<!-- Action Bar (Android & Desktop Optimized) -->
<div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3 mb-5">
  <div>
    <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">Portofolio &amp; Hasil Kerja</h2>
    <p class="text-xs text-slate-500 mt-0.5">Tambah hasil karya nyata, upload screenshot, dan kelola portofolio live</p>
  </div>

  <div class="flex items-center gap-2">
    <a href="portfolio-form.php?action=create" class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 py-3 sm:py-2.5 px-4 rounded-2xl sm:rounded-xl bg-primary hover:bg-primary-dark text-white text-xs sm:text-sm font-bold shadow-md shadow-primary/20 transition-all active:scale-95">
      <span class="material-symbols-outlined text-lg">add_photo_alternate</span>
      <span>Tambah Portofolio Baru</span>
    </a>
  </div>
</div>

<!-- Search & Category Filters (Touch Friendly) -->
<div class="bg-white rounded-2xl border border-slate-200 p-3 sm:p-4 mb-5 shadow-sm flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
  
  <!-- Horizontal Scrolling Category Chips for Android -->
  <div class="flex items-center gap-1.5 overflow-x-auto pb-1 md:pb-0 scrollbar-none touch-pan-x" id="portfolioFilterButtons">
    <button type="button" data-filter="all" class="port-filter-btn px-3.5 py-2 rounded-xl text-xs font-bold bg-primary text-white transition-all whitespace-nowrap active:scale-95">
      Semua Karya (<?= count($portfolios) ?>)
    </button>
    <?php foreach ($categories as $cat => $count): ?>
    <button type="button" data-filter="<?= htmlspecialchars($cat) ?>" class="port-filter-btn px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-all whitespace-nowrap capitalize active:scale-95">
      <?= htmlspecialchars($cat) ?> (<?= $count ?>)
    </button>
    <?php endforeach; ?>
  </div>

  <!-- Search Input -->
  <div class="relative w-full md:w-64 shrink-0">
    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-base">search</span>
    <input type="text" id="portfolioSearchInput" placeholder="Cari karya atau kategori..." class="w-full pl-9 pr-4 py-2.5 rounded-xl border border-slate-200 text-xs sm:text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">
  </div>

</div>

<!-- Portfolio Grid Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5" id="portfolioGrid">
  <?php if (empty($portfolios)): ?>
  <div class="col-span-full py-12 text-center text-slate-400 bg-white rounded-3xl border border-slate-200">
    <span class="material-symbols-outlined text-4xl mb-2 text-slate-300">photo_library</span>
    <div class="font-bold text-sm text-slate-600">Belum Ada Portofolio</div>
    <p class="text-xs text-slate-400 mt-1">Klik tombol di atas untuk menambahkan hasil kerja pertama Anda.</p>
  </div>
  <?php else: ?>
    <?php foreach ($portfolios as $port): 
      $rawImg = $port['image'] ?? '';
      $imgSrc = (strpos($rawImg, 'http') === 0 || strpos($rawImg, '/') === 0) ? $rawImg : '../' . $rawImg;
    ?>
    <div class="portfolio-item-card bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between"
      data-category="<?= htmlspecialchars($port['category'] ?? 'other') ?>"
      data-title="<?= strtolower(htmlspecialchars($port['title'])) ?>"
      data-desc="<?= strtolower(htmlspecialchars($port['desc'] ?? '')) ?>">
      
      <div>
        <!-- Thumbnail Image with high touch preview -->
        <div class="h-44 sm:h-48 w-full bg-slate-900 relative overflow-hidden group">
          <img src="<?= htmlspecialchars($imgSrc) ?>" alt="<?= htmlspecialchars($port['title']) ?>" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
          
          <!-- Category & Badge -->
          <div class="absolute top-3 left-3 flex items-center gap-1 bg-white/95 backdrop-blur-sm px-2.5 py-1 rounded-full text-[10px] font-bold text-primary shadow-sm">
            <span class="material-symbols-outlined text-xs"><?= htmlspecialchars($port['icon'] ?? 'image') ?></span>
            <span><?= htmlspecialchars($port['badge'] ?? $port['category']) ?></span>
          </div>

          <!-- Category Pill -->
          <span class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-white px-2 py-0.5 rounded-md text-[10px] font-semibold uppercase tracking-wider">
            <?= htmlspecialchars($port['category']) ?>
          </span>
        </div>

        <!-- Content Details -->
        <div class="p-4 sm:p-5">
          <h3 class="text-sm sm:text-base font-bold text-slate-900 leading-snug">
            <?= htmlspecialchars($port['title']) ?>
          </h3>
          <p class="text-xs text-slate-500 mt-1.5 leading-relaxed line-clamp-2">
            <?= htmlspecialchars($port['desc'] ?? '-') ?>
          </p>

          <!-- Tags -->
          <?php if (!empty($port['tags']) && is_array($port['tags'])): ?>
          <div class="flex flex-wrap gap-1 mt-3">
            <?php foreach ($port['tags'] as $t): ?>
            <span class="text-[10px] font-medium bg-slate-100 text-slate-600 px-2 py-0.5 rounded-md">
              <?= htmlspecialchars($t) ?>
            </span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Card Footer Actions (Large Touch Buttons on Mobile) -->
      <div class="p-3.5 sm:p-4 bg-slate-50/70 border-t border-slate-100 flex items-center justify-between gap-2">
        <div class="text-[11px] font-semibold text-slate-500 flex items-center gap-1 truncate">
          <span class="material-symbols-outlined text-xs text-green-600 shrink-0">chat</span>
          <span class="truncate"><?= htmlspecialchars($port['btn_text'] ?? 'Order Layanan') ?></span>
        </div>

        <div class="flex items-center gap-2 shrink-0">
          <a href="portfolio-form.php?action=edit&id=<?= urlencode($port['id']) ?>" class="p-2 sm:px-3 sm:py-1.5 rounded-xl bg-white border border-slate-200 hover:border-primary text-slate-700 hover:text-primary transition-all shadow-sm flex items-center gap-1 active:scale-95" title="Edit Portofolio">
            <span class="material-symbols-outlined text-base">edit</span>
            <span class="hidden sm:inline text-xs font-bold">Edit</span>
          </a>
          <a href="portfolios.php?delete=<?= urlencode($port['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus portofolio \'<?= htmlspecialchars(addslashes($port['title'])) ?>\'?')" class="p-2 sm:px-3 sm:py-1.5 rounded-xl bg-white border border-slate-200 hover:border-red-500 text-red-500 hover:bg-red-50 transition-all shadow-sm flex items-center gap-1 active:scale-95" title="Hapus Portofolio">
            <span class="material-symbols-outlined text-base">delete</span>
            <span class="hidden sm:inline text-xs font-bold">Hapus</span>
          </a>
        </div>
      </div>

    </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<script>
  // Filter & Search Script
  const searchInput = document.getElementById('portfolioSearchInput');
  const filterButtons = document.querySelectorAll('.port-filter-btn');
  const cards = document.querySelectorAll('.portfolio-item-card');
  let currentFilter = 'all';

  function applyFilters() {
    const q = (searchInput ? searchInput.value : '').toLowerCase().trim();

    cards.forEach(card => {
      const category = card.getAttribute('data-category') || '';
      const title = card.getAttribute('data-title') || '';
      const desc = card.getAttribute('data-desc') || '';

      const matchCategory = (currentFilter === 'all') || (category === currentFilter);
      const matchSearch = !q || title.includes(q) || desc.includes(q);

      if (matchCategory && matchSearch) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      filterButtons.forEach(b => {
        b.classList.remove('bg-primary', 'text-white');
        b.classList.add('bg-slate-100', 'text-slate-700');
      });
      btn.classList.remove('bg-slate-100', 'text-slate-700');
      btn.classList.add('bg-primary', 'text-white');

      currentFilter = btn.getAttribute('data-filter') || 'all';
      applyFilters();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', applyFilters);
  }
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
