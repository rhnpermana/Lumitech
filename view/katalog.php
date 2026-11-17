<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
$currentPage = 'produk';
$pageTitle = 'Katalog Produk & Solusi Digital - Lumitech.id';
$pageDescription = 'Katalog resmi seluruh layanan Lumitech.id: Pembuatan website, konsultasi bisnis UMKM, desain grafis & pakaian, olah data Excel & Word, dan joki tugas coding.';
require_once __DIR__ . '/../Layout/partials/whatsapp_helper.php';
require __DIR__ . '/../Layout/partials/app.php';
require __DIR__ . '/../Layout/partials/navhome.php';

require_once __DIR__ . '/../Layout/partials/data_helper.php';

// Data Layanan Dinamis dari JSON (Admin Managed)
$catalogItems = getProducts();
$allServiceData = getServiceDetails();

// Kalkulasi counter kategori dinamis
$catCounts = [
    'website' => 0,
    'kreatif' => 0,
    'office'  => 0,
    'joki'    => 0,
];
foreach ($catalogItems as $item) {
    $c = $item['category'] ?? 'other';
    $catCounts[$c] = ($catCounts[$c] ?? 0) + 1;
}
?>

    <main class="w-full">
      <!-- Top Dashboard Header (Kompak & Bersih) -->
      <section class="w-full py-8 md:py-12 px-gutter bg-surface-container-low/60 border-b border-surface-container">
        <div class="max-w-[1320px] mx-auto">
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
              <div class="inline-flex items-center gap-1.5 rounded-full bg-primary-fixed/60 border border-primary/20 px-3.5 py-1 text-xs font-bold text-primary mb-2.5">
                <span class="material-symbols-outlined text-sm">grid_view</span>
                <span>Dashboard Katalog Layanan</span>
              </div>
              <h1 class="text-2xl sm:text-3xl md:text-4xl font-black text-on-surface tracking-tight">
                Katalog Produk &amp; Solusi Digital
              </h1>
              <p class="text-sm sm:text-base text-on-surface-variant max-w-xl pt-1">
                Pilih layanan, bandingkan harga jujur transparan, dan order langsung via WhatsApp tanpa ribet.
              </p>
            </div>

            <!-- Quick WhatsApp Fast Line -->
            <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin konsultasi seputar layanan Lumitech.id.") ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm hover:border-green-500 hover:shadow-md transition-all self-start md:self-center shrink-0">
              <span class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></span>
              <span class="text-xs sm:text-sm font-semibold text-on-surface">Konsultasi WA: <strong class="font-mono text-green-700">0878-6175-6916</strong></span>
            </a>
          </div>
        </div>
      </section>

      <!-- Dashboard Controls & Grid Section -->
      <section class="w-full py-8 px-gutter">
        <div class="max-w-[1320px] mx-auto">
          
          <!-- Filter Bar & Search Input (Dashboard Style) -->
          <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 pb-6 border-b border-surface-container">
            
            <!-- Category Filter Tabs -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0 scrollbar-none" id="categoryFilterContainer">
              <button type="button" data-filter="all" class="dashboard-filter-btn active-filter px-4 py-2 rounded-full text-xs sm:text-sm font-bold bg-primary text-white shadow-sm transition-all whitespace-nowrap">
                Semua (<?= count($catalogItems) ?>)
              </button>
              <button type="button" data-filter="website" class="dashboard-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all whitespace-nowrap">
                🌐 Website &amp; App (<?= $catCounts['website'] ?? 0 ?>)
              </button>
              <button type="button" data-filter="kreatif" class="dashboard-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all whitespace-nowrap">
                🎨 Desain &amp; Bisnis (<?= $catCounts['kreatif'] ?? 0 ?>)
              </button>
              <button type="button" data-filter="office" class="dashboard-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all whitespace-nowrap">
                📊 Office &amp; Data (<?= $catCounts['office'] ?? 0 ?>)
              </button>
              <button type="button" data-filter="joki" class="dashboard-filter-btn px-4 py-2 rounded-full text-xs sm:text-sm font-semibold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all whitespace-nowrap">
                ⚡ Joki Cihuyyy (<?= $catCounts['joki'] ?? 0 ?>)
              </button>
            </div>

            <!-- Instant Search Bar -->
            <div class="relative w-full md:w-72 shrink-0">
              <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-lg">search</span>
              <input type="text" id="dashboardSearchInput" placeholder="Cari layanan (web, excel, joki)..." class="w-full pl-9 pr-8 py-2 rounded-full bg-surface-container-lowest border border-surface-container focus:outline-none focus:border-primary text-xs sm:text-sm transition-all shadow-sm" />
              <button type="button" id="clearSearchBtn" class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-on-surface text-xs">
                <span class="material-symbols-outlined text-base">close</span>
              </button>
            </div>

          </div>

          <!-- Counter Status -->
          <div class="flex items-center justify-between py-4 text-xs text-on-surface-variant">
            <span id="productCounterText">Menampilkan <?= count($catalogItems) ?> dari <?= count($catalogItems) ?> Layanan</span>
            <span class="hidden sm:inline font-mono">Respon WA: &lt; 15 Menit</span>
          </div>

          <!-- Product Dashboard Grid -->
          <div id="catalogGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-5">
            <?php foreach ($catalogItems as $item): 
              $detail = isset($allServiceData[$item['key']]) ? $allServiceData[$item['key']] : [];
              $waUrl = getWaOrderUrl($item['key']);
            ?>
            <div class="dashboard-card" data-category="<?= $item['category'] ?>" data-title="<?= strtolower($item['title']) ?>" data-desc="<?= strtolower($item['desc']) ?>">
              <div class="relative h-full rounded-2xl bg-surface-container-lowest border <?= $item['featured'] ? 'border-primary ring-1 ring-primary/30 shadow-md' : 'border-surface-container hover:border-primary/50 shadow-sm' ?> p-4 sm:p-5 flex flex-col justify-between hover:shadow-lg transition-all duration-200">
                
                <?php if ($item['featured']): ?>
                <div class="absolute -top-2.5 right-4">
                  <span class="inline-flex items-center gap-1 rounded-full bg-primary px-2.5 py-0.5 text-[10px] font-bold text-white shadow-sm uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[11px]">star</span>
                    Favorit
                  </span>
                </div>
                <?php endif; ?>

                <div>
                  <!-- Category Pill & Icon -->
                  <div class="flex items-center justify-between pb-2.5">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full flex items-center gap-1">
                      <span class="material-symbols-outlined text-xs"><?= $item['icon'] ?></span>
                      <span><?= $item['badge'] ?></span>
                    </span>
                  </div>

                  <!-- Title & 1-Line Description -->
                  <h3 class="text-base font-bold text-on-surface tracking-tight leading-snug">
                    <?= $item['title'] ?>
                  </h3>
                  <p class="text-xs text-on-surface-variant pt-1.5 pb-3 line-clamp-2 leading-relaxed">
                    <?= $item['desc'] ?>
                  </p>

                  <!-- Compact Price Box -->
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[10px] uppercase font-bold text-on-surface-variant tracking-wider">Harga:</span>
                      <span class="text-base sm:text-lg font-black text-primary"><?= $item['price'] ?></span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block truncate pt-0.5"><?= $item['price_sub'] ?></span>
                  </div>

                  <!-- 3 Feature Chips (Ringkas & Visual) -->
                  <div class="flex flex-wrap gap-1.5 pt-1">
                    <?php foreach ($item['tags'] as $tag): ?>
                    <span class="text-[10px] font-medium bg-surface-container/70 text-on-surface px-2 py-0.5 rounded-md flex items-center gap-1">
                      <span class="text-primary text-[11px]">✓</span>
                      <span><?= $tag ?></span>
                    </span>
                    <?php endforeach; ?>
                  </div>
                </div>

                <!-- Action Buttons: WhatsApp Primary + Detail Modal Trigger -->
                <div class="pt-4 border-t border-surface-container mt-4 flex items-center gap-2">
                  <a href="<?= $waUrl ?>" target="_blank" rel="noopener" class="grow flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs shadow-sm transition-all active:scale-95">
                    <span class="material-symbols-outlined text-sm">chat</span>
                    <span>Pesan via WA</span>
                  </a>
                  <button type="button" class="service-detail-btn px-2.5 py-2.5 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors shrink-0" data-key="<?= $item['key'] ?>" title="Lihat Rincian Lengkap">
                    <span class="material-symbols-outlined text-base">info</span>
                  </button>
                </div>

              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Empty State (Jika Pencarian Tidak Ditemukan) -->
          <div id="noProductFound" class="hidden py-16 text-center max-w-md mx-auto">
            <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mx-auto mb-3 text-on-surface-variant">
              <span class="material-symbols-outlined text-3xl">search_off</span>
            </div>
            <h4 class="text-base font-bold text-on-surface">Layanan Tidak Ditemukan</h4>
            <p class="text-xs text-on-surface-variant pt-1 pb-4">
              Kata kunci yang Anda cari tidak cocok. Ingin request layanan custom atau konsultasi langsung?
            </p>
            <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin bertanya tentang layanan khusus yang belum tercantum.") ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-green-600 hover:bg-green-700 text-white font-bold text-xs transition-colors shadow-sm">
              <span class="material-symbols-outlined text-sm">chat</span>
              <span>Tanya Langsung via WhatsApp</span>
            </a>
          </div>

          <!-- Sleek Bottom Strip: Direct to Portfolio -->
          <div class="mt-12 p-5 sm:p-6 rounded-2xl bg-surface-container-low border border-surface-container flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-xl">photo_library</span>
              </div>
              <div>
                <h4 class="font-bold text-sm sm:text-base text-on-surface">Ingin melihat contoh hasil nyata karya kami?</h4>
                <p class="text-xs text-on-surface-variant pt-0.5">Lihat portofolio desain pakaian, website, dan olah data resmi di beranda.</p>
              </div>
            </div>
            <a href="index.html#portofolio" class="shrink-0 px-5 py-2.5 rounded-full bg-primary text-white font-bold text-xs sm:text-sm shadow hover:bg-primary-container transition-colors flex items-center gap-1.5">
              <span>Lihat Portofolio</span>
              <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
          </div>

        </div>
      </section>
    </main>

    <!-- Detail Service Modal (Pop-up Rapi Tanpa Membebani Layar Utama) -->
    <div id="serviceDetailModal" class="fixed inset-0 z-50 hidden bg-black/70 backdrop-blur-sm flex items-center justify-center p-3 sm:p-5" role="dialog" aria-modal="true">
      <div class="relative max-w-lg w-full bg-surface rounded-2xl overflow-hidden shadow-2xl border border-surface-container flex flex-col max-h-[90vh] animate-in fade-in duration-150">
        <!-- Modal Header -->
        <div class="flex items-center justify-between p-4 border-b border-surface-container bg-surface-container-low shrink-0">
          <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-xl">info</span>
            <h3 id="modalServiceTitle" class="font-bold text-sm sm:text-base text-on-surface truncate">Rincian Layanan</h3>
          </div>
          <button id="modalCloseBtn" type="button" aria-label="Tutup" class="h-8 w-8 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors">
            <span class="material-symbols-outlined text-lg">close</span>
          </button>
        </div>

        <!-- Modal Body -->
        <div class="p-4 sm:p-6 overflow-y-auto space-y-4">
          <div class="p-3 rounded-xl bg-surface-container-low flex items-center justify-between">
            <span class="text-xs text-on-surface-variant">Estimasi Biaya:</span>
            <span id="modalServicePrice" class="text-base font-black text-primary">Rp 0</span>
          </div>

          <div>
            <h4 class="text-xs font-bold uppercase tracking-wider text-on-surface mb-2">Fasilitas Termasuk:</h4>
            <ul id="modalServiceFacilities" class="space-y-1.5 text-xs text-on-surface">
              <!-- Dynamically populated -->
            </ul>
          </div>

          <div>
            <h4 class="text-xs font-bold uppercase tracking-wider text-on-surface mb-2">Informasi yang Diperlukan:</h4>
            <ul id="modalServiceFields" class="space-y-1 text-xs text-on-surface-variant">
              <!-- Dynamically populated -->
            </ul>
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="p-4 border-t border-surface-container bg-surface-container-low shrink-0 flex items-center justify-end gap-2">
          <button type="button" id="modalDismissBtn" class="px-4 py-2 rounded-xl text-xs font-bold text-on-surface bg-surface-container hover:bg-surface-container-high transition-colors">
            Tutup
          </button>
          <a id="modalWaAction" href="#" target="_blank" rel="noopener" class="inline-flex items-center gap-1.5 px-5 py-2 rounded-xl text-xs font-bold text-white bg-green-600 hover:bg-green-700 transition-colors shadow-sm">
            <span class="material-symbols-outlined text-sm">chat</span>
            <span>Pesan via WhatsApp</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php require __DIR__ . '/../Layout/partials/footer.php'; ?>

    <!-- Floating WhatsApp Button (Desktop only) -->
    <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin bertanya dan konsultasi seputar layanan Lumitech.id.") ?>" target="_blank" rel="noopener" aria-label="Chat WhatsApp" class="hidden lg:flex fixed bottom-6 right-6 z-50 items-center gap-2.5 px-4 py-3 rounded-full bg-green-600 hover:bg-green-700 text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
      <span class="material-symbols-outlined text-2xl">chat</span>
      <span class="text-sm font-bold pr-1">Tanya via WA</span>
    </a>

    <!-- Raw Data Dictionary for Client-Side Modal -->
    <script>
      const SERVICES_DATA = <?= json_encode($allServiceData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;
      const WA_PHONE = "<?= getWaPhoneNumber() ?>";
    </script>

    <!-- Dashboard Interactive Scripts -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const filterBtns = document.querySelectorAll(".dashboard-filter-btn");
        const cards = document.querySelectorAll(".dashboard-card");
        const searchInput = document.getElementById("dashboardSearchInput");
        const clearSearchBtn = document.getElementById("clearSearchBtn");
        const counterText = document.getElementById("productCounterText");
        const noProductFound = document.getElementById("noProductFound");
        const totalCards = cards.length;

        let activeFilter = "all";
        let searchQuery = "";

        function filterProducts() {
          let visibleCount = 0;

          cards.forEach((card) => {
            const cardCat = card.getAttribute("data-category") || "";
            const cardTitle = card.getAttribute("data-title") || "";
            const cardDesc = card.getAttribute("data-desc") || "";

            const matchCat = (activeFilter === "all" || cardCat.includes(activeFilter));
            const matchSearch = (!searchQuery || cardTitle.includes(searchQuery) || cardDesc.includes(searchQuery));

            if (matchCat && matchSearch) {
              card.style.display = "block";
              visibleCount++;
            } else {
              card.style.display = "none";
            }
          });

          if (counterText) {
            counterText.textContent = `Menampilkan ${visibleCount} dari ${totalCards} Layanan`;
          }

          if (noProductFound) {
            if (visibleCount === 0) {
              noProductFound.classList.remove("hidden");
            } else {
              noProductFound.classList.add("hidden");
            }
          }
        }

        // Category Tab Filter
        filterBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            activeFilter = this.getAttribute("data-filter");

            filterBtns.forEach((b) => {
              b.classList.remove("active-filter", "bg-primary", "text-white", "font-bold");
              b.classList.add("bg-surface-container", "text-on-surface", "font-semibold");
            });
            this.classList.add("active-filter", "bg-primary", "text-white", "font-bold");
            this.classList.remove("bg-surface-container", "text-on-surface", "font-semibold");

            filterProducts();
          });
        });

        // Search Input Filter
        if (searchInput) {
          searchInput.addEventListener("input", function () {
            searchQuery = this.value.trim().toLowerCase();
            if (clearSearchBtn) {
              if (searchQuery.length > 0) {
                clearSearchBtn.classList.remove("hidden");
              } else {
                clearSearchBtn.classList.add("hidden");
              }
            }
            filterProducts();
          });

          if (clearSearchBtn) {
            clearSearchBtn.addEventListener("click", function () {
              searchInput.value = "";
              searchQuery = "";
              clearSearchBtn.classList.add("hidden");
              searchInput.focus();
              filterProducts();
            });
          }
        }

        // Detail Modal Logic
        const modal = document.getElementById("serviceDetailModal");
        const modalTitle = document.getElementById("modalServiceTitle");
        const modalPrice = document.getElementById("modalServicePrice");
        const modalFacilities = document.getElementById("modalServiceFacilities");
        const modalFields = document.getElementById("modalServiceFields");
        const modalWaAction = document.getElementById("modalWaAction");
        const modalCloseBtn = document.getElementById("modalCloseBtn");
        const modalDismissBtn = document.getElementById("modalDismissBtn");
        const detailBtns = document.querySelectorAll(".service-detail-btn");

        function openModal(serviceKey) {
          const s = SERVICES_DATA[serviceKey];
          if (!s) return;

          modalTitle.textContent = s.name || "Detail Layanan";
          modalPrice.textContent = (s.price || "") + (s.price_sub ? ` (${s.price_sub})` : "");

          // Facilities
          modalFacilities.innerHTML = "";
          if (Array.isArray(s.facilities) && s.facilities.length > 0) {
            s.facilities.forEach((fac) => {
              const li = document.createElement("li");
              li.className = "flex items-start gap-1.5";
              li.innerHTML = `<span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span><span>${fac}</span>`;
              modalFacilities.appendChild(li);
            });
          } else {
            modalFacilities.innerHTML = "<li>Konsultasikan kebutuhan langsung via WhatsApp.</li>";
          }

          // Form Fields
          modalFields.innerHTML = "";
          if (Array.isArray(s.form_fields) && s.form_fields.length > 0) {
            s.form_fields.forEach((f) => {
              const li = document.createElement("li");
              li.className = "flex items-center gap-1.5";
              li.innerHTML = `<span class="text-primary">•</span><span>${f}</span>`;
              modalFields.appendChild(li);
            });
          }

          // WA Action URL
          const msg = `Halo Admin Lumitech, saya ingin memesan layanan ${s.name} (${s.price}). Mohon info ketersediaan slot pengerjaan. Terima kasih!`;
          modalWaAction.href = `https://wa.me/${WA_PHONE}?text=${encodeURIComponent(msg)}`;

          modal.classList.remove("hidden");
          document.body.style.overflow = "hidden";
        }

        function closeModal() {
          modal.classList.add("hidden");
          document.body.style.overflow = "";
        }

        detailBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            const key = this.getAttribute("data-key");
            openModal(key);
          });
        });

        if (modalCloseBtn) modalCloseBtn.addEventListener("click", closeModal);
        if (modalDismissBtn) modalDismissBtn.addEventListener("click", closeModal);
        if (modal) {
          modal.addEventListener("click", function (e) {
            if (e.target === modal) closeModal();
          });
        }
        document.addEventListener("keydown", function (e) {
          if (e.key === "Escape" && modal && !modal.classList.contains("hidden")) {
            closeModal();
          }
        });
      });
    </script>
  </body>
</html>
