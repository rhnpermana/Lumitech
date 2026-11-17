<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

$action = $_GET['action'] ?? 'create';
$id = $_GET['id'] ?? '';
$isEdit = ($action === 'edit' && !empty($id));

$portfolio = null;
if ($isEdit) {
    $portfolio = getPortfolioById($id);
    if (!$portfolio) {
        setFlashMessage('error', "Portofolio dengan ID '{$id}' tidak ditemukan.");
        header('Location: portfolios.php');
        exit;
    }
}

$products = getProducts();
$availableImages = getAvailablePortfolioImages();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $category = trim($_POST['category'] ?? 'desain');
    $badge = trim($_POST['badge'] ?? '');
    $icon = trim($_POST['icon'] ?? 'image');
    $desc = trim($_POST['desc'] ?? '');
    $tagsRaw = trim($_POST['tags'] ?? '');
    $serviceKey = trim($_POST['service_key'] ?? '');
    $btnText = trim($_POST['btn_text'] ?? 'Order Layanan');

    $imagePath = $portfolio['image'] ?? 'assets/portfolio/barbershop.png';

    // File Upload handling
    if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
        $fileTmp = $_FILES['image_file']['tmp_name'];
        $fileName = $_FILES['image_file']['name'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowedExts = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        if (!in_array($fileExt, $allowedExts)) {
            $error = 'Format file gambar tidak didukung. Harap gunakan format JPG, PNG, atau WebP.';
        } else {
            $safeSlug = preg_replace('/[^a-zA-Z0-9]+/', '-', strtolower($title)) ?: 'karya';
            $newFileName = $safeSlug . '-' . time() . '.' . $fileExt;
            $uploadTarget = dirname(__DIR__, 1) . '/assets/portfolio/' . $newFileName;

            if (move_uploaded_file($fileTmp, $uploadTarget)) {
                $imagePath = 'assets/portfolio/' . $newFileName;
            } else {
                $error = 'Gagal mengupload file gambar ke folder assets/portfolio/. Periksa izin folder.';
            }
        }
    } elseif (!empty($_POST['existing_image'])) {
        $imagePath = trim($_POST['existing_image']);
    }

    if (empty($title)) {
        $error = 'Judul portofolio hasil kerja wajib diisi!';
    } elseif (empty($error)) {
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

        $newPortfolioData = [
            'id'          => $portfolio['id'] ?? ('port-' . time() . '-' . rand(100, 999)),
            'title'       => $title,
            'category'    => $category,
            'badge'       => $badge ?: ucfirst($category),
            'icon'        => $icon ?: 'image',
            'image'       => $imagePath,
            'desc'        => $desc,
            'tags'        => $tags,
            'service_key' => $serviceKey,
            'btn_text'    => $btnText ?: 'Order Layanan',
        ];

        if (saveOrUpdatePortfolio($newPortfolioData, $isEdit ? $id : null)) {
            setFlashMessage('success', "Portofolio '{$title}' berhasil " . ($isEdit ? 'diperbarui' : 'ditambahkan') . " dan disinkronkan ke website!");
            header('Location: portfolios.php');
            exit;
        } else {
            $error = 'Gagal menyimpan data portofolio. Mohon periksa kembali.';
        }
    }
}

$currentPage = 'portfolios';
$pageTitle = $isEdit ? 'Edit Portofolio' : 'Tambah Portofolio Baru';
$headerTitle = $isEdit ? 'Edit Portofolio Karya' : 'Tambah Portofolio Baru';
require_once __DIR__ . '/header.php';

$portfolioIcons = [
    'apparel' => 'Streetwear',
    'palette' => 'Desain',
    'language' => 'Website',
    'storefront' => 'UMKM',
    'description' => 'Word',
    'table_chart' => 'Excel',
    'devices' => 'Mobile',
    'school' => 'Tugas',
    'code' => 'Koding',
    'draw' => 'Canva',
];

$currentImg = $_POST['existing_image'] ?? ($portfolio['image'] ?? 'assets/portfolio/apparel-mockup-set.jpg');
$currentImgPreview = (strpos($currentImg, 'http') === 0 || strpos($currentImg, '/') === 0) ? $currentImg : '../' . $currentImg;
?>

<div class="max-w-4xl mx-auto pb-16 lg:pb-0">
  
  <!-- Back Button & Heading -->
  <div class="flex items-center justify-between mb-5">
    <div class="flex items-center gap-3">
      <a href="portfolios.php" class="p-2 rounded-xl bg-white border border-slate-200 text-slate-600 hover:text-primary hover:border-primary transition-all active:scale-95">
        <span class="material-symbols-outlined text-base">arrow_back</span>
      </a>
      <div>
        <h2 class="text-lg sm:text-2xl font-black text-slate-900 tracking-tight">
          <?= $isEdit ? 'Edit Portofolio Karya' : 'Tambah Portofolio Baru' ?>
        </h2>
        <p class="text-[11px] sm:text-xs text-slate-500">
          <?= $isEdit ? "Perbarui detail hasil kerja '{$portfolio['title']}'" : 'Hasil karya baru akan langsung tampil di galeri portofolio beranda' ?>
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
    <form method="POST" action="portfolio-form.php?action=<?= $action ?><?= $isEdit ? '&id=' . urlencode($id) : '' ?>" enctype="multipart/form-data" class="space-y-5">
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
        
        <!-- Judul Portofolio -->
        <div class="md:col-span-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="title">
            Judul Portofolio / Hasil Kerja <span class="text-red-500">*</span>
          </label>
          <input type="text" id="title" name="title" required
            value="<?= htmlspecialchars($_POST['title'] ?? ($portfolio['title'] ?? '')) ?>"
            placeholder="Contoh: District Studio Barbershop"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-semibold" />
        </div>

        <!-- Kategori Tab Filter -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="category">
            Kategori Tab Filter <span class="text-red-500">*</span>
          </label>
          <?php $currentCat = $_POST['category'] ?? ($portfolio['category'] ?? 'desain'); ?>
          <select id="category" name="category" class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all">
            <option value="desain" <?= $currentCat === 'desain' ? 'selected' : '' ?>>🎨 Desain &amp; Pakaian</option>
            <option value="website" <?= $currentCat === 'website' ? 'selected' : '' ?>>🌐 Website &amp; UI</option>
            <option value="dokumen" <?= $currentCat === 'dokumen' ? 'selected' : '' ?>>📄 Word &amp; Excel</option>
            <option value="lainnya" <?= $currentCat === 'lainnya' ? 'selected' : '' ?>>📁 Lainnya</option>
          </select>
        </div>

        <!-- Badge Teks -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="badge">
            Badge Label Portofolio
          </label>
          <input type="text" id="badge" name="badge"
            value="<?= htmlspecialchars($_POST['badge'] ?? ($portfolio['badge'] ?? '')) ?>"
            placeholder="Contoh: Streetwear, UMKM Live, Word / SOP"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>

        <!-- Ikon Badge Material Symbols -->
        <div class="md:col-span-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="icon">
            Ikon Badge (Material Symbols)
          </label>
          <div class="flex items-center gap-2.5">
            <div class="w-11 h-11 rounded-xl bg-primary-light text-primary flex items-center justify-center shrink-0">
              <span class="material-symbols-outlined text-xl" id="iconPreview"><?= htmlspecialchars($_POST['icon'] ?? ($portfolio['icon'] ?? 'image')) ?></span>
            </div>
            <input type="text" id="icon" name="icon"
              value="<?= htmlspecialchars($_POST['icon'] ?? ($portfolio['icon'] ?? 'image')) ?>"
              placeholder="apparel, palette, language..."
              class="grow px-3 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-xs focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-mono" />
          </div>

          <!-- Quick Icon Selector (Scrollable) -->
          <div class="mt-2 flex items-center gap-1 overflow-x-auto pb-1 scrollbar-none touch-pan-x">
            <?php foreach ($portfolioIcons as $ic => $icLabel): ?>
            <button type="button" onclick="selectIcon('<?= $ic ?>')" class="px-2 py-1 rounded-md bg-slate-100 hover:bg-primary-light text-[11px] text-slate-600 hover:text-primary transition-colors flex items-center gap-1 shrink-0 active:scale-95">
              <span class="material-symbols-outlined text-xs"><?= $ic ?></span>
              <span><?= $icLabel ?></span>
            </button>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Gambar Portofolio: Upload vs Pilih Yang Sudah Ada -->
        <div class="md:col-span-2 p-4 sm:p-5 rounded-2xl bg-slate-50 border border-slate-200">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-3">
            Gambar Portofolio <span class="text-red-500">*</span>
          </label>
          
          <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 sm:gap-5 items-start">
            
            <!-- Live Preview -->
            <div class="sm:col-span-4">
              <div class="h-40 sm:h-44 w-full rounded-2xl bg-slate-900 border border-slate-200 overflow-hidden relative shadow-inner">
                <img id="imgPreview" src="<?= htmlspecialchars($currentImgPreview) ?>" alt="preview" class="w-full h-full object-cover object-top" onerror="this.src='../assets/img/logo.jpeg'" />
              </div>
              <span class="text-[10px] text-slate-400 mt-1.5 block text-center">Live Preview</span>
            </div>

            <!-- Upload Controls for Android / Mobile -->
            <div class="sm:col-span-8 space-y-3.5">
              
              <!-- Option 1: Upload (Supports Camera / Gallery on Android) -->
              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1 flex items-center gap-1.5">
                  <span class="material-symbols-outlined text-sm text-primary">add_a_photo</span>
                  <span>Opsi 1: Upload Foto Baru (Kamera / Galeri HP)</span>
                </label>
                <input type="file" id="image_file" name="image_file" accept="image/*"
                  class="w-full text-xs text-slate-500 file:mr-3 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-primary file:text-white hover:file:bg-primary-dark transition-all cursor-pointer active:scale-98" />
                <span class="text-[10px] text-slate-400 mt-1 block">Format: JPG, PNG, atau WebP.</span>
              </div>

              <div class="relative flex py-1 items-center">
                <div class="flex-grow border-t border-slate-200"></div>
                <span class="flex-shrink mx-3 text-[10px] font-bold uppercase text-slate-400">ATAU</span>
                <div class="flex-grow border-t border-slate-200"></div>
              </div>

              <!-- Option 2: Select Existing Image -->
              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1" for="existing_image">
                  Opsi 2: Pilih dari Gambar yang Sudah Tersimpan di Server
                </label>
                <select id="existing_image" name="existing_image" class="w-full px-3 py-2.5 rounded-xl border border-slate-200 text-xs focus:outline-none focus:border-primary transition-all">
                  <?php foreach ($availableImages as $img): ?>
                  <option value="<?= htmlspecialchars($img) ?>" <?= $currentImg === $img ? 'selected' : '' ?>>
                    <?= htmlspecialchars(basename($img)) ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>

            </div>

          </div>
        </div>

        <!-- Deskripsi Hasil Kerja -->
        <div class="md:col-span-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="desc">
            Deskripsi Hasil Kerja
          </label>
          <textarea id="desc" name="desc" rows="3"
            placeholder="Ceritakan gambaran karya, fitur yang dibangun, atau hasil nyata yang dicapai..."
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all leading-relaxed"><?= htmlspecialchars($_POST['desc'] ?? ($portfolio['desc'] ?? '')) ?></textarea>
        </div>

        <!-- Tags / Spesifikasi -->
        <div class="md:col-span-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="tags">
            Tags / Spesifikasi Karya (Pisahkan dengan Koma)
          </label>
          <?php 
            $tagsVal = '';
            if (isset($_POST['tags'])) {
                $tagsVal = $_POST['tags'];
            } elseif (isset($portfolio['tags']) && is_array($portfolio['tags'])) {
                $tagsVal = implode(', ', $portfolio['tags']);
            }
          ?>
          <input type="text" id="tags" name="tags"
            value="<?= htmlspecialchars($tagsVal) ?>"
            placeholder="Format HD Vektor, Siap Sablon, Booking WhatsApp"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" />
        </div>

        <!-- Terhubung ke Layanan WhatsApp -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="service_key">
            Hubungkan ke Layanan Pemesanan WA
          </label>
          <?php $currentServiceKey = $_POST['service_key'] ?? ($portfolio['service_key'] ?? 'desain_pakaian'); ?>
          <select id="service_key" name="service_key" class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all">
            <?php foreach ($products as $prod): ?>
            <option value="<?= htmlspecialchars($prod['key']) ?>" <?= $currentServiceKey === $prod['key'] ? 'selected' : '' ?>>
              <?= htmlspecialchars($prod['title']) ?> (Key: <?= htmlspecialchars($prod['key']) ?>)
            </option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Teks Tombol Order WA -->
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5" for="btn_text">
            Teks Tombol Order WhatsApp
          </label>
          <input type="text" id="btn_text" name="btn_text"
            value="<?= htmlspecialchars($_POST['btn_text'] ?? ($portfolio['btn_text'] ?? 'Order Desain')) ?>"
            placeholder="Contoh: Order Desain, Bikin Web Serupa, Order Word"
            class="w-full px-4 py-2.5 sm:py-3 rounded-xl border border-slate-200 text-base sm:text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all font-semibold" />
        </div>

      </div>

      <!-- Action Buttons: Sticky Bottom Bar on Mobile/Android, Normal on Desktop -->
      <div class="fixed bottom-16 inset-x-0 z-30 bg-white/95 backdrop-blur-md border-t border-slate-200 p-3 shadow-lg lg:static lg:bg-transparent lg:border-t lg:border-slate-100 lg:p-0 lg:pt-6 lg:shadow-none flex items-center justify-end gap-2.5">
        <a href="portfolios.php" class="py-2.5 px-4 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold transition-colors text-center active:scale-95">
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
      iconPreview.textContent = iconInput.value.trim() || 'image';
    });
  }

  const fileInput = document.getElementById('image_file');
  const existingSelect = document.getElementById('existing_image');
  const imgPreview = document.getElementById('imgPreview');

  if (fileInput) {
    fileInput.addEventListener('change', function(e) {
      if (this.files && this.files[0]) {
        const reader = new FileReader();
        reader.onload = function(ev) {
          imgPreview.src = ev.target.result;
        };
        reader.readAsDataURL(this.files[0]);
      }
    });
  }

  if (existingSelect) {
    existingSelect.addEventListener('change', function() {
      if (fileInput) fileInput.value = '';
      imgPreview.src = '../' + this.value;
    });
  }
</script>

<?php require_once __DIR__ . '/footer.php'; ?>
