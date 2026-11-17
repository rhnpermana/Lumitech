<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

// Handle Toggle Featured
if (isset($_GET['toggle_featured'])) {
    $key = trim($_GET['toggle_featured']);
    if (toggleProductFeatured($key)) {
        setFlashMessage('success', "Status unggulan beranda untuk '{$key}' berhasil diperbarui!");
    } else {
        setFlashMessage('error', "Gagal memperbarui status produk '{$key}'.");
    }
    header('Location: products.php');
    exit;
}

// Handle Delete
if (isset($_GET['delete'])) {
    $key = trim($_GET['delete']);
    if (deleteProduct($key)) {
        setFlashMessage('success', "Produk/layanan '{$key}' berhasil dihapus dan website telah disinkronkan!");
    } else {
        setFlashMessage('error', "Gagal menghapus produk '{$key}'.");
    }
    header('Location: products.php');
    exit;
}

$currentPage = 'products';
$pageTitle = 'Kelola Produk & Layanan';
$headerTitle = 'Produk & Layanan';
require_once __DIR__ . '/header.php';

$products = getProducts();

// Category counts
$categories = [];
foreach ($products as $p) {
    $c = $p['category'] ?? 'other';
    $categories[$c] = ($categories[$c] ?? 0) + 1;
}
?>

<!-- Action Bar (Android & Desktop Optimized) -->
<div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-3 mb-5">
  <div>
    <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">Katalog Produk &amp; Layanan</h2>
    <p class="text-xs text-slate-500 mt-0.5">Tambah, ubah harga, dan hapus layanan Lumitech.id</p>
  </div>

  <div class="flex items-center gap-2">
    <a href="product-form.php?action=create" class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 py-3 sm:py-2.5 px-4 rounded-2xl sm:rounded-xl bg-primary hover:bg-primary-dark text-white text-xs sm:text-sm font-bold shadow-md shadow-primary/20 transition-all active:scale-95">
      <span class="material-symbols-outlined text-lg">add</span>
      <span>Tambah Produk Baru</span>
    </a>
  </div>
</div>

<!-- Search & Category Filter Bar (Touch-Friendly) -->
<div class="bg-white rounded-2xl border border-slate-200 p-3 sm:p-4 mb-5 shadow-sm flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
  
  <!-- Horizontal Scrolling Category Chips for Mobile/Android -->
  <div class="flex items-center gap-1.5 overflow-x-auto pb-1 md:pb-0 scrollbar-none touch-pan-x" id="productFilterButtons">
    <button type="button" data-filter="all" class="prod-filter-btn px-3.5 py-2 rounded-xl text-xs font-bold bg-primary text-white transition-all whitespace-nowrap active:scale-95">
      Semua (<?= count($products) ?>)
    </button>
    <?php foreach ($categories as $cat => $count): ?>
    <button type="button" data-filter="<?= htmlspecialchars($cat) ?>" class="prod-filter-btn px-3.5 py-2 rounded-xl text-xs font-semibold bg-slate-100 hover:bg-slate-200 text-slate-700 transition-all whitespace-nowrap capitalize active:scale-95">
      <?= htmlspecialchars($cat) ?> (<?= $count ?>)
    </button>
    <?php endforeach; ?>
  </div>

  <!-- Search Input -->
  <div class="relative w-full md:w-64 shrink-0">
    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-base">search</span>
    <input type="text" id="productSearchInput" placeholder="Cari nama atau harga..." class="w-full pl-9 pr-4 py-2.5 rounded-xl border border-slate-200 text-xs sm:text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all">
  </div>

</div>

<!-- ======================================================== -->
<!-- 1. MOBILE CARDS VIEW (For Android & Small Screens)        -->
<!-- ======================================================== -->
<div class="md:hidden space-y-3" id="mobileProductList">
  <?php if (empty($products)): ?>
  <div class="p-8 text-center text-slate-400 bg-white rounded-2xl border border-slate-200">
    <span class="material-symbols-outlined text-4xl mb-1 text-slate-300">inventory_2</span>
    <div>Belum ada produk yang ditambahkan.</div>
  </div>
  <?php else: ?>
    <?php foreach ($products as $p): ?>
    <div class="product-item-card bg-white rounded-2xl border border-slate-200 p-4 shadow-sm flex flex-col justify-between"
      data-category="<?= htmlspecialchars($p['category'] ?? 'other') ?>"
      data-title="<?= strtolower(htmlspecialchars($p['title'])) ?>"
      data-desc="<?= strtolower(htmlspecialchars($p['desc'] ?? '')) ?>">
      
      <div>
        <div class="flex items-start justify-between gap-2 mb-2">
          <div class="flex items-center gap-2.5">
            <span class="w-9 h-9 rounded-xl bg-primary-light text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-lg"><?= htmlspecialchars($p['icon'] ?? 'devices') ?></span>
            </span>
            <div>
              <span class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary-light px-2 py-0.5 rounded-md">
                <?= htmlspecialchars($p['category'] ?? 'website') ?>
              </span>
              <h3 class="font-bold text-slate-900 text-sm mt-0.5 leading-snug">
                <?= htmlspecialchars($p['title']) ?>
              </h3>
            </div>
          </div>

          <!-- Featured Star Toggle -->
          <a href="products.php?toggle_featured=<?= urlencode($p['key']) ?>" title="Toggle Unggulan Beranda" class="p-1.5 rounded-xl <?= !empty($p['featured']) ? 'bg-amber-100 text-amber-800' : 'bg-slate-100 text-slate-400' ?> transition-all shrink-0">
            <span class="material-symbols-outlined text-base"><?= !empty($p['featured']) ? 'star' : 'star_border' ?></span>
          </a>
        </div>

        <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed mb-3">
          <?= htmlspecialchars($p['desc'] ?? '-') ?>
        </p>

        <!-- Price Bar -->
        <div class="p-2.5 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-between mb-3">
          <div>
            <span class="text-[10px] uppercase font-bold text-slate-400 block">Harga:</span>
            <span class="text-sm font-black text-primary"><?= htmlspecialchars($p['price']) ?></span>
          </div>
          <?php if (!empty($p['price_sub'])): ?>
          <span class="text-[10px] text-slate-500 max-w-[140px] truncate text-right"><?= htmlspecialchars($p['price_sub']) ?></span>
          <?php endif; ?>
        </div>
      </div>

      <!-- Action Buttons (Android Tap Target Friendly) -->
      <div class="pt-2.5 border-t border-slate-100 flex items-center gap-2">
        <a href="product-form.php?action=edit&key=<?= urlencode($p['key']) ?>" class="grow py-2 px-3 rounded-xl bg-slate-100 hover:bg-primary hover:text-white text-slate-700 font-bold text-xs flex items-center justify-center gap-1.5 transition-colors active:scale-95">
          <span class="material-symbols-outlined text-sm">edit</span>
          <span>Edit</span>
        </a>
        <a href="products.php?delete=<?= urlencode($p['key']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk \'<?= htmlspecialchars(addslashes($p['title'])) ?>\'?')" class="py-2 px-3 rounded-xl bg-red-50 hover:bg-red-600 text-red-600 hover:text-white font-bold text-xs flex items-center justify-center gap-1 transition-colors active:scale-95">
          <span class="material-symbols-outlined text-sm">delete</span>
          <span>Hapus</span>
        </a>
      </div>

    </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<!-- ======================================================== -->
<!-- 2. DESKTOP TABLE VIEW (For Tablet & PC Screens)           -->
<!-- ======================================================== -->
<div class="hidden md:block bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse" id="productsTable">
      <thead>
        <tr class="border-b border-slate-200 bg-slate-50/70 text-[11px] font-bold uppercase tracking-wider text-slate-500">
          <th class="py-3.5 px-4 sm:px-6">Layanan / Produk</th>
          <th class="py-3.5 px-4">Kategori</th>
          <th class="py-3.5 px-4">Harga &amp; Keterangan</th>
          <th class="py-3.5 px-4 text-center">Tampil Beranda</th>
          <th class="py-3.5 px-4 sm:px-6 text-right">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-slate-100 text-xs">
        <?php if (!empty($products)): ?>
          <?php foreach ($products as $p): ?>
          <tr class="product-row hover:bg-slate-50/80 transition-colors" data-category="<?= htmlspecialchars($p['category'] ?? 'other') ?>" data-title="<?= strtolower(htmlspecialchars($p['title'])) ?>" data-desc="<?= strtolower(htmlspecialchars($p['desc'] ?? '')) ?>">
            
            <td class="py-4 px-4 sm:px-6">
              <div class="flex items-start gap-3">
                <span class="w-10 h-10 rounded-xl bg-primary-light text-primary flex items-center justify-center shrink-0 mt-0.5">
                  <span class="material-symbols-outlined text-xl"><?= htmlspecialchars($p['icon'] ?? 'devices') ?></span>
                </span>
                <div>
                  <div class="font-bold text-slate-900 text-sm flex items-center gap-1.5">
                    <span><?= htmlspecialchars($p['title']) ?></span>
                    <?php if (!empty($p['badge'])): ?>
                    <span class="px-2 py-0.5 rounded-full bg-slate-100 text-slate-600 text-[10px] font-semibold"><?= htmlspecialchars($p['badge']) ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="text-[11px] text-slate-500 mt-0.5 line-clamp-1 max-w-sm">
                    <?= htmlspecialchars($p['desc'] ?? '') ?>
                  </div>
                  <div class="text-[10px] font-mono text-slate-400 mt-1">
                    Key: <code class="bg-slate-100 px-1 py-0.5 rounded text-slate-600"><?= htmlspecialchars($p['key']) ?></code>
                  </div>
                </div>
              </div>
            </td>

            <td class="py-4 px-4 whitespace-nowrap">
              <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 text-slate-700 capitalize">
                <?= htmlspecialchars($p['category'] ?? 'website') ?>
              </span>
            </td>

            <td class="py-4 px-4 whitespace-nowrap">
              <div class="font-black text-slate-900 text-sm text-primary">
                <?= htmlspecialchars($p['price']) ?>
              </div>
              <div class="text-[10px] text-slate-400 max-w-[200px] truncate">
                <?= htmlspecialchars($p['price_sub'] ?? '-') ?>
              </div>
            </td>

            <td class="py-4 px-4 text-center whitespace-nowrap">
              <a href="products.php?toggle_featured=<?= urlencode($p['key']) ?>" title="Klik untuk mengubah status unggulan beranda" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-bold transition-all <?= !empty($p['featured']) ? 'bg-amber-100 text-amber-800 hover:bg-amber-200' : 'bg-slate-100 text-slate-400 hover:bg-slate-200' ?>">
                <span class="material-symbols-outlined text-xs"><?= !empty($p['featured']) ? 'star' : 'star_border' ?></span>
                <span><?= !empty($p['featured']) ? 'Unggulan' : 'Standar' ?></span>
              </a>
            </td>

            <td class="py-4 px-4 sm:px-6 text-right whitespace-nowrap">
              <div class="inline-flex items-center gap-1.5">
                <a href="product-form.php?action=edit&key=<?= urlencode($p['key']) ?>" class="p-2 rounded-xl bg-slate-100 hover:bg-primary hover:text-white text-slate-600 transition-colors" title="Edit Produk">
                  <span class="material-symbols-outlined text-base">edit</span>
                </a>
                <a href="products.php?delete=<?= urlencode($p['key']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk \'<?= htmlspecialchars(addslashes($p['title'])) ?>\'?')" class="p-2 rounded-xl bg-slate-100 hover:bg-red-600 hover:text-white text-red-500 transition-colors" title="Hapus Produk">
                  <span class="material-symbols-outlined text-base">delete</span>
                </a>
              </div>
            </td>

          </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<script>
  // Filter & Search Script (syncs both mobile cards & desktop table)
  const searchInput = document.getElementById('productSearchInput');
  const filterButtons = document.querySelectorAll('.prod-filter-btn');
  const rows = document.querySelectorAll('.product-row');
  const mobileCards = document.querySelectorAll('.product-item-card');
  let currentFilter = 'all';

  function applyFilters() {
    const q = (searchInput ? searchInput.value : '').toLowerCase().trim();

    const filterItem = (el) => {
      const category = el.getAttribute('data-category') || '';
      const title = el.getAttribute('data-title') || '';
      const desc = el.getAttribute('data-desc') || '';

      const matchCategory = (currentFilter === 'all') || (category === currentFilter);
      const matchSearch = !q || title.includes(q) || desc.includes(q);

      if (matchCategory && matchSearch) {
        el.style.display = '';
      } else {
        el.style.display = 'none';
      }
    };

    rows.forEach(filterItem);
    mobileCards.forEach(filterItem);
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
