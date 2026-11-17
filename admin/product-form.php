<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

$action = $_GET['action'] ?? 'create';
$key = $_GET['key'] ?? '';
$isEdit = ($action === 'edit' && !empty($key));

$product = null;
if ($isEdit) {
    $product = getProductByKey($key);
    if (!$product) {
        setFlashMessage('error', "Produk dengan key '{$key}' tidak ditemukan.");
        header('Location: products.php');
        exit;
    }
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prodKey = trim($_POST['key'] ?? '');
    $title = trim($_POST['title'] ?? '');
    $category = trim($_POST['category'] ?? 'website');
    $badge = trim($_POST['badge'] ?? '');
    $icon = trim($_POST['icon'] ?? 'devices');
    $desc = trim($_POST['desc'] ?? '');
    $price = trim($_POST['price'] ?? '');
    $price_sub = trim($_POST['price_sub'] ?? '');
    $tagsRaw = trim($_POST['tags'] ?? '');
    $featured = !empty($_POST['featured']);

    if (empty($prodKey)) {
        $prodKey = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '_', $title));
        $prodKey = trim($prodKey, '_');
    }

    if (empty($title)) {
        $error = 'Judul produk / nama layanan wajib diisi!';
    } elseif (empty($prodKey)) {
        $error = 'Key layanan unik wajib diisi!';
    } else {
        $tags = [];
        if (!empty($tagsRaw)) {
            $split = explode(',', $tagsRaw);
            foreach ($split as $t) {
                $trimmed = trim($t);
                if ($trimmed !== '') {
                    $tags[] = $trimmed;
                }
            }
        }

        $newProductData = [
            'id'        => $product['id'] ?? ('prod_' . $prodKey),
            'key'       => $prodKey,
            'category'  => $category,
            'icon'      => $icon ?: 'devices',
            'badge'     => $badge,
            'title'     => $title,
            'desc'      => $desc,
            'price'     => $price,
            'price_sub' => $price_sub,
            'tags'      => $tags,
            'featured'  => $featured,
        ];

        if (saveOrUpdateProduct($newProductData, $isEdit ? $key : null)) {
            setFlashMessage('success', "Produk '{$title}' berhasil " . ($isEdit ? 'diperbarui' : 'ditambahkan') . " dan disinkronkan ke website!");
            header('Location: products.php');
            exit;
        } else {
            $error = 'Gagal menyimpan data produk. Mohon periksa kembali.';
        }
    }
}

$currentPage = 'products';
$pageTitle = $isEdit ? 'Edit Produk' : 'Tambah Produk Baru';
$headerTitle = $isEdit ? 'Edit Produk / Layanan' : 'Tambah Produk Baru';
require_once __DIR__ . '/header.php';

$popularIcons = [
    'devices' => 'Website',
    'domain' => 'Bisnis',
    'shopping_cart' => 'Toko',
    'palette' => 'Desain',
    'apparel' => 'Pakaian',
    'movie' => 'Video',
    'share' => 'Sosmed',
    'insights' => 'Konsul',
    'table_chart' => 'Excel',
    'description' => 'Word',
    'slideshow' => 'PPT',
    'school' => 'Tugas',
    'code' => 'Koding',
    'draw' => 'Canva',
    'rocket_launch' => 'Rocket',
    'storefront' => 'UMKM',
];
?>

<div class="max-w-4xl mx-auto pb-16 lg:pb-0">
  
  <!-- Back Button & Heading -->
  <div class="flex items-center justify-between mb-5">
    <div class="flex items-center gap-3">
      <a href="products.php" class="p-2 rounded-xl bg-white border border-slate-200 text-slate-600 hover:text-primary hover:border-primary transition-all active:scale-95">
        <span class="material-symbols-outlined text-base">arrow_back</span>
      </a>
      <div>
        <h2 class="text-lg sm:text-2xl font-black text-slate-900 tracking-tight">
          <?= $isEdit ? 'Edit Layanan / Produk' : 'Tambah Layanan Baru' ?>
        </h2>
        <p class="text-[11px] sm:text-xs text-slate-500">
          <?= $isEdit ? "Perbarui informasi layanan '{$product['title']}'" : 'Layanan baru akan langsung tampil di katalog dan WhatsApp order' ?>
        </p>
      </div>
    </div>
  </div>

  <?php if (!empty($error)): ?>
  <div class="mb-5 p-4 rounded-2xl bg-red-50 border border-red-200 text-red-700 text-xs flex items-center gap-2">
    <span class="material-symbols-outlined text-base shrink-0">error</span>
    <span><?= htmlspecialchars($error) ?></span>
  </div>
  <?php endif; ?>

  <!-- Form Card -->
  <div class="bg-white rounded-3xl border border-slate-200 p-4 sm:p-8 shadow-sm">
    <form method="POST" action="product-form.php?action=<?= $action ?><?= $isEdit ? '&key=' . urlencode($key) : '' ?>" class="space-y-5">
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
        
        <!-- Judul Layanan -->
        <div class="md:col-span-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="title">
            Judul Layanan / Nama Produk <span class="text-red-500">*</span>
          </label>
          <input type="text" id="title" name="title" required
            value="<?= htmlspecialchars($_POST['title'] ?? ($product['title'] ?? '')) ?>"
            placeholder="Contoh: Paket Starter Website UMKM"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-semibold" />
        </div>

        <!-- Key Unik -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="key">
            Key Unik (Slug / ID) <span class="text-red-500">*</span>
          </label>
          <input type="text" id="key" name="key" required
            value="<?= htmlspecialchars($_POST['key'] ?? ($product['key'] ?? '')) ?>"
            placeholder="Contoh: starter_umkm"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-xs focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono" />
          <span class="text-[10px] text-slate-400 mt-1 block">Huruf kecil &amp; underscore tanpa spasi.</span>
        </div>

        <!-- Kategori -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="category">
            Kategori <span class="text-red-500">*</span>
          </label>
          <select id="category" name="category" class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all">
            <?php 
              $currentCat = $_POST['category'] ?? ($product['category'] ?? 'website');
            ?>
            <option value="website" <?= $currentCat === 'website' ? 'selected' : '' ?>>🌐 Website &amp; App</option>
            <option value="kreatif" <?= $currentCat === 'kreatif' ? 'selected' : '' ?>>🎨 Desain &amp; Bisnis</option>
            <option value="office" <?= $currentCat === 'office' ? 'selected' : '' ?>>📊 Office &amp; Data</option>
            <option value="joki" <?= $currentCat === 'joki' ? 'selected' : '' ?>>⚡ Joki Cihuyyy</option>
            <option value="lainnya" <?= $currentCat === 'lainnya' ? 'selected' : '' ?>>📁 Lainnya</option>
          </select>
        </div>

        <!-- Badge Singkat -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="badge">
            Badge Singkat
          </label>
          <input type="text" id="badge" name="badge"
            value="<?= htmlspecialchars($_POST['badge'] ?? ($product['badge'] ?? '')) ?>"
            placeholder="Contoh: Landing Page, Vektor & Brand"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>

        <!-- Ikon Material Symbol -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="icon">
            Ikon (Material Symbols)
          </label>
          <div class="flex items-center gap-2.5">
            <div class="w-11 h-11 rounded-xl bg-primary-light text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-xl" id="iconPreview"><?= htmlspecialchars($_POST['icon'] ?? ($product['icon'] ?? 'devices')) ?></span>
            </div>
            <input type="text" id="icon" name="icon"
              value="<?= htmlspecialchars($_POST['icon'] ?? ($product['icon'] ?? 'devices')) ?>"
              placeholder="devices, palette, code..."
              class="grow px-3 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-xs focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono" />
          </div>

          <!-- Quick Icon Selector (Scrollable on Android) -->
          <div class="mt-2 flex items-center gap-1 overflow-x-auto pb-1 scrollbar-none touch-pan-x">
            <?php foreach ($popularIcons as $ic => $icLabel): ?>
            <button type="button" onclick="selectIcon('<?= $ic ?>')" class="px-2 py-1 rounded-md bg-slate-100 hover:bg-primary-light text-[11px] text-slate-600 hover:text-primary transition-colors flex items-center gap-1 shrink-0 active:scale-95">
              <span class="material-symbols-outlined text-xs"><?= $ic ?></span>
              <span><?= $icLabel ?></span>
            </button>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Harga Tampilan -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="price">
            Harga Tampilan <span class="text-red-500">*</span>
          </label>
          <input type="text" id="price" name="price" required
            value="<?= htmlspecialchars($_POST['price'] ?? ($product['price'] ?? 'Rp 150.000')) ?>"
            placeholder="Contoh: Rp 150.000"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-black text-slate-900" />
        </div>

        <!-- Keterangan Sub Harga -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="price_sub">
            Keterangan Sub Harga
          </label>
          <input type="text" id="price_sub" name="price_sub"
            value="<?= htmlspecialchars($_POST['price_sub'] ?? ($product['price_sub'] ?? '')) ?>"
            placeholder="Contoh: Domain & hosting disesuaikan"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>

        <!-- Deskripsi Ringkas -->
        <div class="md:col-span-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="desc">
            Deskripsi Layanan
          </label>
          <textarea id="desc" name="desc" rows="3"
            placeholder="Tuliskan penjelasan singkat dan padat mengenai layanan ini..."
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all leading-relaxed"><?= htmlspecialchars($_POST['desc'] ?? ($product['desc'] ?? '')) ?></textarea>
        </div>

        <!-- Tags / Fitur Unggulan -->
        <div class="md:col-span-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="tags">
            Fitur Unggulan / Tags (Pisahkan dengan Koma)
          </label>
          <?php 
            $tagsVal = '';
            if (isset($_POST['tags'])) {
                $tagsVal = $_POST['tags'];
            } elseif (isset($product['tags']) && is_array($product['tags'])) {
                $tagsVal = implode(', ', $product['tags']);
            }
          ?>
          <input type="text" id="tags" name="tags"
            value="<?= htmlspecialchars($tagsVal) ?>"
            placeholder="1 Halaman Responsif, Tombol WhatsApp, Garansi Revisi"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>

        <!-- Tampilkan di Beranda (Featured) -->
        <div class="md:col-span-2">
          <label class="flex items-center gap-3 p-3.5 sm:p-4 rounded-2xl bg-amber-50/70 border border-amber-200 cursor-pointer hover:bg-amber-50 transition-colors active:scale-98">
            <input type="checkbox" name="featured" value="1" <?= (!empty($_POST['featured']) || (!empty($product['featured']) && !isset($_POST['title']))) ? 'checked' : '' ?> class="w-5 h-5 text-amber-500 rounded border-slate-300 focus:ring-amber-400 focus:ring-offset-0 shrink-0">
            <div>
              <div class="text-xs sm:text-sm font-bold text-slate-900 flex items-center gap-1.5">
                <span class="text-amber-500">★</span>
                <span>Tampilkan sebagai Unggulan Beranda (Featured)</span>
              </div>
              <div class="text-[10px] sm:text-[11px] text-slate-500 mt-0.5">
                Layanan ini akan otomatis tampil di katalog depan halaman utama.
              </div>
            </div>
          </label>
        </div>

      </div>

      <!-- Action Buttons: Sticky Bottom Bar on Mobile/Android, Normal on Desktop -->
      <div class="fixed bottom-16 inset-x-0 z-30 bg-white/95 backdrop-blur-md border-t border-slate-200 p-3 shadow-lg lg:static lg:bg-transparent lg:border-t lg:border-slate-100 lg:p-0 lg:pt-6 lg:shadow-none flex items-center justify-end gap-2.5">
        <a href="products.php" class="py-2.5 px-4 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition-colors text-center active:scale-95">
          Batal
        </a>
        <button type="submit" class="grow lg:grow-0 py-2.5 px-6 rounded-xl bg-primary hover:bg-primary-dark text-white text-xs sm:text-sm font-bold shadow-md shadow-primary/20 transition-all flex items-center justify-center gap-1.5 active:scale-95">
          <span class="material-symbols-outlined text-base">save</span>
          <span>Simpan &amp; Sinkronkan</span>
        </button>
      </div>

    </form>
  </div>

</div>

<script>
  const iconInput = document.getElementById('icon');
  const iconPreview = document.getElementById('iconPreview');

  function selectIcon(iconName) {
    if (iconInput && iconPreview) {
      iconInput.value = iconName;
      iconPreview.textContent = iconName;
    }
  }

  if (iconInput && iconPreview) {
    iconInput.addEventListener('input', () => {
      iconPreview.textContent = iconInput.value.trim() || 'devices';
    });
  }

  const titleInput = document.getElementById('title');
  const keyInput = document.getElementById('key');
  const isEditMode = <?= $isEdit ? 'true' : 'false' ?>;

  if (!isEditMode && titleInput && keyInput) {
    titleInput.addEventListener('input', () => {
      if (!keyInput.dataset.manual) {
        const slug = titleInput.value
          .toLowerCase()
          .replace(/[^a-z0-9]+/g, '_')
          .replace(/^_+|_+$/g, '');
        keyInput.value = slug;
      }
    });

    keyInput.addEventListener('input', () => {
      keyInput.dataset.manual = 'true';
    });
  }
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
