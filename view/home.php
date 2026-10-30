<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
$currentPage = 'home';
require_once __DIR__ . '/../Layout/partials/whatsapp_helper.php';
require __DIR__ . '/../Layout/partials/app.php';
require __DIR__ . '/../Layout/partials/navhome.php';

// 6 Layanan Unggulan untuk Tampilan Beranda (Kompak & Bebas Text Bloat)
$featuredServices = [
    [
        'key'        => 'starter_umkm',
        'icon'       => 'devices',
        'badge'      => 'Website UMKM',
        'title'      => 'Paket Starter Website UMKM',
        'desc'       => 'Website 1 halaman responsif & modern untuk usaha kuliner, jasa, atau profil bisnis.',
        'price'      => 'Rp 150.000',
        'price_sub'  => 'Domain & hosting disesuaikan',
        'tags'       => ['1 Halaman Responsif', 'Direct Chat WhatsApp', 'Google Maps'],
    ],
    [
        'key'        => 'pro_business',
        'icon'       => 'domain',
        'badge'      => 'Multi-Halaman',
        'title'      => 'Website Professional Business',
        'desc'       => 'Website 5-7 halaman untuk CV, PT, klinik, konsultan, sekolah, dan brand terpercaya.',
        'price'      => 'Rp 1.000.000',
        'price_sub'  => 'Gratis email bisnis resmi',
        'tags'       => ['5-7 Halaman Menu', 'Admin Panel Mudah', 'Garansi 6 Bulan'],
    ],
    [
        'key'        => 'desain_grafis',
        'icon'       => 'palette',
        'badge'      => 'Desain & Logo',
        'title'      => 'Desain Grafis & Logo',
        'desc'       => 'Pembuatan logo bisnis, kemasan produk, poster promosi, dan feed Instagram resolusi tinggi.',
        'price'      => 'Rp 30.000',
        'price_sub'  => 'Format HD Vektor Siap Pakai',
        'tags'       => ['Resolusi Tinggi HD', 'Bebas Revisi', 'File PNG & PDF'],
    ],
    [
        'key'        => 'desain_pakaian',
        'icon'       => 'apparel',
        'badge'      => 'Apparel Streetwear',
        'title'      => 'Jasa Desain Pakaian & Apparel',
        'desc'       => 'Mockup realistis kaos, hoodie, kemeja & celana depan-belakang siap cetak konveksi.',
        'price'      => 'Rp 45.000',
        'price_sub'  => 'Mockup depan & belakang',
        'tags'       => ['Mockup Realistis', 'Vektor Siap Sablon', 'Free Konsultasi'],
    ],
    [
        'key'        => 'excel_olah_data',
        'icon'       => 'table_chart',
        'badge'      => 'Microsoft Excel',
        'title'      => 'Jasa Olah Data Microsoft Excel',
        'desc'       => 'Rumus otomatis (VLOOKUP, IF, INDEX MATCH), dashboard grafik visual, dan pembukuan kas.',
        'price'      => 'Rp 25.000',
        'price_sub'  => 'Bebas error rumus & pengerjaan kilat',
        'tags'       => ['Rumus Kompleks', 'Dashboard Visual', 'Rekap Buku Kas'],
    ],
    [
        'key'        => 'joki_tugas',
        'icon'       => 'school',
        'badge'      => 'Pelajar & Mahasiswa',
        'title'      => 'Joki Tugas Pelajar & Kuliah',
        'desc'       => 'Bantuan tugas: Word, PPT presentasi animasi, makalah, rangkuman, dan tugas harian.',
        'price'      => 'Rp 10.000',
        'price_sub'  => 'Pengerjaan 1-24 jam • Privasi aman',
        'tags'       => ['Privasi 100% Rahasia', 'Free Revisi', 'Word, PPT & PDF'],
    ],
];
?>

    <main class="w-full">

      <!-- Hero Section (Ringkas, Padat, Visual) -->
      <section id="beranda" class="relative w-full overflow-hidden bg-surface-container-low/40 pt-space-lg pb-space-2xl px-gutter border-b border-surface-container">
        <!-- Ambient Glow -->
        <div class="pointer-events-none absolute -top-20 right-1/4 h-80 w-80 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 -left-10 h-64 w-64 rounded-full bg-secondary-fixed/30 blur-2xl"></div>

        <div class="mx-auto max-w-[1320px] relative z-10">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
            
            <!-- Hero Text Content -->
            <div class="lg:col-span-7 flex flex-col gap-4">
              <div class="inline-flex items-center gap-2 rounded-full bg-primary-fixed/60 border border-primary/20 px-3.5 py-1 text-xs font-bold text-primary w-fit">
                <span class="h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                <span>Solusi Digital Terpercaya</span>
              </div>

              <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-black text-on-surface tracking-tight leading-tight">
                All-in-One Agency &amp; <br />
                <span class="text-primary underline decoration-primary-fixed decoration-4">Solusi Digital</span> Bisnismu.
              </h1>

              <p class="text-sm sm:text-base text-on-surface-variant max-w-xl leading-relaxed">
                Pembuatan website modern, desain grafis &amp; pakaian, olah data dokumen, hingga bantuan tugas akademik. Pengerjaan cepat, harga transparan, dan bergaransi hasil terbaik.
              </p>

              <!-- Tombol Aksi Utama -->
              <div class="flex flex-wrap items-center gap-3 pt-2">
                <a href="produk.html" class="inline-flex items-center gap-2 rounded-full bg-primary hover:bg-primary-container text-white px-6 py-3.5 text-xs sm:text-sm font-bold shadow-md hover:shadow-lg transition-all hover:-translate-y-0.5">
                  <span class="material-symbols-outlined text-lg">grid_view</span>
                  <span>Buka Dashboard Produk</span>
                </a>
                <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin konsultasi layanan digital.") ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full bg-green-600 hover:bg-green-700 text-white px-6 py-3.5 text-xs sm:text-sm font-bold shadow-md hover:shadow-lg transition-all hover:-translate-y-0.5">
                  <span class="material-symbols-outlined text-lg">chat</span>
                  <span>Konsultasi WA (0878-6175-6916)</span>
                </a>
              </div>

              <!-- 3 Keunggulan Ringkas -->
              <div class="grid grid-cols-3 gap-3 pt-4 border-t border-surface-container/60 max-w-md">
                <div class="flex flex-col">
                  <span class="text-base sm:text-lg font-black text-primary">1 - 24 Jam</span>
                  <span class="text-[11px] text-on-surface-variant">Pengerjaan Kilat</span>
                </div>
                <div class="flex flex-col">
                  <span class="text-base sm:text-lg font-black text-on-surface">100%</span>
                  <span class="text-[11px] text-on-surface-variant">Garansi Bebas Revisi</span>
                </div>
                <div class="flex flex-col">
                  <span class="text-base sm:text-lg font-black text-primary">Fast Chat</span>
                  <span class="text-[11px] text-on-surface-variant">WhatsApp Aktif</span>
                </div>
              </div>
            </div>

            <!-- Hero Feature Card Preview -->
            <div class="lg:col-span-5">
              <div class="rounded-3xl bg-surface-container-lowest border border-surface-container p-5 sm:p-6 shadow-xl relative">
                <div class="flex items-center justify-between pb-3.5 border-b border-surface-container">
                  <span class="text-xs font-bold text-on-surface uppercase tracking-wider">Layanan Terpopuler</span>
                  <span class="text-[11px] font-bold bg-green-100 text-green-800 px-2 py-0.5 rounded-full flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span>
                    <span>Ready Order</span>
                  </span>
                </div>

                <div class="space-y-2.5 pt-3.5">
                  <a href="produk.html" class="flex items-center justify-between p-3 rounded-2xl bg-surface-container-low hover:bg-primary-fixed/30 transition-all border border-surface-container/60 group">
                    <div class="flex items-center gap-3">
                      <span class="w-9 h-9 rounded-xl bg-primary text-white flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-lg">devices</span>
                      </span>
                      <div>
                        <div class="font-bold text-xs sm:text-sm text-on-surface group-hover:text-primary transition-colors">Website Starter UMKM</div>
                        <div class="text-[11px] text-on-surface-variant">Mulai Rp 150.000 • 1 Halaman Responsif</div>
                      </div>
                    </div>
                    <span class="material-symbols-outlined text-sm text-on-surface-variant group-hover:text-primary">arrow_forward</span>
                  </a>

                  <a href="produk.html" class="flex items-center justify-between p-3 rounded-2xl bg-surface-container-low hover:bg-primary-fixed/30 transition-all border border-surface-container/60 group">
                    <div class="flex items-center gap-3">
                      <span class="w-9 h-9 rounded-xl bg-green-600 text-white flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-lg">palette</span>
                      </span>
                      <div>
                        <div class="font-bold text-xs sm:text-sm text-on-surface group-hover:text-primary transition-colors">Desain Grafis &amp; Logo</div>
                        <div class="text-[11px] text-on-surface-variant">Mulai Rp 30.000 • Vektor HD Siap Cetak</div>
                      </div>
                    </div>
                    <span class="material-symbols-outlined text-sm text-on-surface-variant group-hover:text-primary">arrow_forward</span>
                  </a>

                  <a href="produk.html" class="flex items-center justify-between p-3 rounded-2xl bg-surface-container-low hover:bg-primary-fixed/30 transition-all border border-surface-container/60 group">
                    <div class="flex items-center gap-3">
                      <span class="w-9 h-9 rounded-xl bg-slate-800 text-amber-400 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-lg">school</span>
                      </span>
                      <div>
                        <div class="font-bold text-xs sm:text-sm text-on-surface group-hover:text-primary transition-colors">Joki Tugas Pelajar &amp; Kuliah</div>
                        <div class="text-[11px] text-on-surface-variant">Mulai Rp 10.000 • Word, PPT &amp; Coding</div>
                      </div>
                    </div>
                    <span class="material-symbols-outlined text-sm text-on-surface-variant group-hover:text-primary">arrow_forward</span>
                  </a>
                </div>

                <div class="pt-3.5 mt-2">
                  <a href="produk.html" class="w-full inline-flex items-center justify-center gap-2 py-2.5 rounded-2xl bg-surface-container hover:bg-surface-container-high text-on-surface font-bold text-xs transition-colors border border-surface-container">
                    <span class="material-symbols-outlined text-sm">grid_view</span>
                    <span>Lihat Semua 14 Layanan di Dashboard</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Section: Layanan Unggulan Terpopuler (Bebas Text Bloat) -->
      <section id="katalog" class="w-full py-space-2xl px-gutter scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <!-- Section Heading Ringkas -->
          <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-8 border-b border-surface-container">
            <div>
              <span class="text-xs font-bold text-primary uppercase tracking-wider">Paling Banyak Dipesan</span>
              <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-on-surface tracking-tight pt-1">
                Layanan Unggulan Lumitech
              </h2>
              <p class="text-xs sm:text-sm text-on-surface-variant pt-1 max-w-xl">
                Layanan pilihan dengan pengerjaan cepat, harga transparan, dan pemesanan langsung via WhatsApp.
              </p>
            </div>
            <a href="produk.html" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-primary/10 hover:bg-primary text-primary hover:text-white font-bold text-xs transition-all shrink-0 self-start md:self-auto">
              <span>Buka Dashboard Lengkap (14 Layanan)</span>
              <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
          </div>

          <!-- Grid 6 Layanan Unggulan (Kompak & Visual) -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 pt-6">
            <?php foreach ($featuredServices as $s): 
              $waUrl = getWaOrderUrl($s['key']);
            ?>
            <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-200">
              <div>
                <div class="flex items-center justify-between pb-2">
                  <span class="text-[10px] font-bold uppercase tracking-wider text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs"><?= $s['icon'] ?></span>
                    <span><?= $s['badge'] ?></span>
                  </span>
                </div>
                <h3 class="text-base font-bold text-on-surface tracking-tight leading-snug">
                  <?= $s['title'] ?>
                </h3>
                <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2 leading-relaxed">
                  <?= $s['desc'] ?>
                </p>

                <!-- Compact Price Box -->
                <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                  <div class="flex items-baseline justify-between gap-1">
                    <span class="text-[10px] uppercase font-bold text-on-surface-variant">Harga:</span>
                    <span class="text-base sm:text-lg font-black text-primary"><?= $s['price'] ?></span>
                  </div>
                  <span class="text-[10px] text-on-surface-variant block truncate pt-0.5"><?= $s['price_sub'] ?></span>
                </div>

                <!-- Chips -->
                <div class="flex flex-wrap gap-1.5">
                  <?php foreach ($s['tags'] as $tag): ?>
                  <span class="text-[10px] font-medium bg-surface-container/70 text-on-surface px-2 py-0.5 rounded-md flex items-center gap-1">
                    <span class="text-primary text-[11px]">✓</span>
                    <span><?= $tag ?></span>
                  </span>
                  <?php endforeach; ?>
                </div>
              </div>

              <div class="pt-4 border-t border-surface-container mt-4 flex items-center gap-2">
                <a href="<?= $waUrl ?>" target="_blank" rel="noopener" class="grow flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs shadow-sm transition-all active:scale-95">
                  <span class="material-symbols-outlined text-sm">chat</span>
                  <span>Pesan via WA</span>
                </a>
                <a href="produk.html" class="px-2.5 py-2.5 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface transition-colors shrink-0" title="Lihat di Katalog">
                  <span class="material-symbols-outlined text-base">open_in_new</span>
                </a>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Banner Direct to Dedicated Catalog Page -->
          <div class="mt-8 p-5 sm:p-6 rounded-2xl bg-gradient-to-r from-primary-fixed/40 via-surface-container-low to-surface-container-low border border-primary/20 flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div>
              <h4 class="font-bold text-sm sm:text-base text-on-surface">Butuh Video Editing, Jasa Canva, PPT, atau Konsultasi UMKM?</h4>
              <p class="text-xs text-on-surface-variant pt-0.5">Semua 14 layanan tersedia dengan harga transparan di Dashboard Produk.</p>
            </div>
            <a href="produk.html" class="shrink-0 px-5 py-2.5 rounded-full bg-primary text-white font-bold text-xs sm:text-sm shadow hover:bg-primary-container transition-colors flex items-center gap-1.5">
              <span>Buka Dashboard Produk (14 Layanan)</span>
              <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
          </div>

        </div>
      </section>

      <!-- Section: Bukti Hasil Kerja (Portofolio Ringkas & Visual) -->
      <section id="portofolio" class="w-full py-space-2xl px-gutter bg-surface-container-low/50 border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <div class="text-center max-w-xl mx-auto pb-6">
            <span class="text-xs font-bold text-primary uppercase tracking-wider">Hasil Nyata &amp; Bukti Karya</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-on-surface pt-1">Portofolio Karya Kami</h2>
            <p class="text-xs sm:text-sm text-on-surface-variant pt-1.5">
              Klik gambar untuk melihat preview penuh desain pakaian, website, dan dokumen resmi.
            </p>
          </div>

          <!-- Filter Kategori Portofolio -->
          <div class="flex flex-wrap items-center justify-center gap-2 pb-6">
            <button type="button" data-portfolio-filter="all" class="portfolio-filter-btn active-portfolio-filter px-4 py-1.5 rounded-full text-xs font-bold bg-primary text-white shadow-sm transition-all">
              Semua Karya (6)
            </button>
            <button type="button" data-portfolio-filter="desain" class="portfolio-filter-btn px-4 py-1.5 rounded-full text-xs font-semibold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🎨 Desain &amp; Pakaian (2)
            </button>
            <button type="button" data-portfolio-filter="website" class="portfolio-filter-btn px-4 py-1.5 rounded-full text-xs font-semibold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🌐 Website &amp; UI (2)
            </button>
            <button type="button" data-portfolio-filter="dokumen" class="portfolio-filter-btn px-4 py-1.5 rounded-full text-xs font-semibold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              📄 Word &amp; Excel (2)
            </button>
          </div>

          <div id="portfolioGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- Portfolio 1: Desain Pakaian -->
            <div class="portfolio-card flex flex-col justify-between rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 shadow-sm hover:shadow-lg transition-all duration-200" data-category="desain">
              <div>
                <div class="h-52 w-full rounded-xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/apparel-mockup-set.jpg" data-title="Mockup Setelan Hoodie &amp; Pants LTH">
                  <img src="<?= $assetBase ?>assets/portfolio/apparel-mockup-set.jpg" alt="Desain Pakaian Streetwear LTH" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                  <span class="absolute top-2.5 left-2.5 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full text-[10px] font-bold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">apparel</span>
                    <span>Streetwear</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-black/40">
                    <span class="px-3 py-1.5 rounded-full bg-surface/90 text-on-surface text-xs font-bold flex items-center gap-1 shadow-md">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Perbesar</span>
                    </span>
                  </div>
                </div>
                <h3 class="text-base font-bold text-on-surface pt-3">Setelan Hoodie &amp; Pants LTH</h3>
                <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                  Desain grafis streetwear tampak depan-belakang dengan typography presisi siap produksi konveksi.
                </p>
                <div class="flex flex-wrap gap-1 pt-2">
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Format HD Vektor</span>
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Siap Sablon</span>
                </div>
              </div>
              <div class="pt-3 border-t border-surface-container mt-3 flex items-center justify-between">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:underline flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/apparel-mockup-set.jpg" data-title="Mockup Setelan Hoodie &amp; Pants LTH">
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('desain_pakaian') ?>" target="_blank" rel="noopener" class="text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition-colors">
                  Order Desain
                </a>
              </div>
            </div>

            <!-- Portfolio 2: Desain Apparel Hoodie Putih -->
            <div class="portfolio-card flex flex-col justify-between rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 shadow-sm hover:shadow-lg transition-all duration-200" data-category="desain">
              <div>
                <div class="h-52 w-full rounded-xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/apparel-hoodie-white.jpg" data-title="Desain Hoodie Don't Looking Around">
                  <img src="<?= $assetBase ?>assets/portfolio/apparel-hoodie-white.jpg" alt="Desain Hoodie Streetwear" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                  <span class="absolute top-2.5 left-2.5 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full text-[10px] font-bold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">palette</span>
                    <span>Apparel</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-black/40">
                    <span class="px-3 py-1.5 rounded-full bg-surface/90 text-on-surface text-xs font-bold flex items-center gap-1 shadow-md">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Perbesar</span>
                    </span>
                  </div>
                </div>
                <h3 class="text-base font-bold text-on-surface pt-3">Hoodie "Don't Looking Around"</h3>
                <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                  Artwork pop-streetwear dengan karakter bold, tipografi 3D, dan mockup photorealistic depan-belakang.
                </p>
                <div class="flex flex-wrap gap-1 pt-2">
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Pop-Streetwear</span>
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Revisi Bebas</span>
                </div>
              </div>
              <div class="pt-3 border-t border-surface-container mt-3 flex items-center justify-between">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:underline flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/apparel-hoodie-white.jpg" data-title="Desain Hoodie Don't Looking Around">
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('desain_pakaian') ?>" target="_blank" rel="noopener" class="text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition-colors">
                  Order Desain
                </a>
              </div>
            </div>

            <!-- Portfolio 3: Website Outerwear Tech -->
            <div class="portfolio-card flex flex-col justify-between rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 shadow-sm hover:shadow-lg transition-all duration-200" data-category="website">
              <div>
                <div class="h-52 w-full rounded-xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/lumitech-outerwear-web.jpg" data-title="Website Lumitech Outerwear Tech">
                  <img src="<?= $assetBase ?>assets/portfolio/lumitech-outerwear-web.jpg" alt="Website Outerwear Tech" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                  <span class="absolute top-2.5 left-2.5 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full text-[10px] font-bold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">language</span>
                    <span>Website UI</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-black/40">
                    <span class="px-3 py-1.5 rounded-full bg-surface/90 text-on-surface text-xs font-bold flex items-center gap-1 shadow-md">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Perbesar</span>
                    </span>
                  </div>
                </div>
                <h3 class="text-base font-bold text-on-surface pt-3">Website Outerwear Tech Catalog</h3>
                <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                  Landing page toko pakaian &amp; jaket dark mode modern dengan integrasi konsultasi WhatsApp kilat.
                </p>
                <div class="flex flex-wrap gap-1 pt-2">
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Dark Mode</span>
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Fast Loading</span>
                </div>
              </div>
              <div class="pt-3 border-t border-surface-container mt-3 flex items-center justify-between">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:underline flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/lumitech-outerwear-web.jpg" data-title="Website Lumitech Outerwear Tech">
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('starter_umkm') ?>" target="_blank" rel="noopener" class="text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition-colors">
                  Bikin Web Serupa
                </a>
              </div>
            </div>

            <!-- Portfolio 4: Barbershop Website -->
            <div class="portfolio-card flex flex-col justify-between rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 shadow-sm hover:shadow-lg transition-all duration-200" data-category="website">
              <div>
                <div class="h-52 w-full rounded-xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/barbershop.png" data-title="Website District Studio Barbershop">
                  <img src="<?= $assetBase ?>assets/portfolio/barbershop.png" alt="Website District Studio" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                  <span class="absolute top-2.5 left-2.5 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full text-[10px] font-bold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">storefront</span>
                    <span>UMKM Live</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-black/40">
                    <span class="px-3 py-1.5 rounded-full bg-surface/90 text-on-surface text-xs font-bold flex items-center gap-1 shadow-md">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Perbesar</span>
                    </span>
                  </div>
                </div>
                <h3 class="text-base font-bold text-on-surface pt-3">District Studio Barbershop</h3>
                <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                  Platform company profile pangkas rambut dengan katalog gaya rambut &amp; booking antrean real-time.
                </p>
                <div class="flex flex-wrap gap-1 pt-2">
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Booking WhatsApp</span>
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Live Project</span>
                </div>
              </div>
              <div class="pt-3 border-t border-surface-container mt-3 flex items-center justify-between">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:underline flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/barbershop.png" data-title="Website District Studio Barbershop">
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('starter_umkm') ?>" target="_blank" rel="noopener" class="text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition-colors">
                  Bikin Web Serupa
                </a>
              </div>
            </div>

            <!-- Portfolio 5: Dokumen Word Resmi -->
            <div class="portfolio-card flex flex-col justify-between rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 shadow-sm hover:shadow-lg transition-all duration-200" data-category="dokumen">
              <div>
                <div class="h-52 w-full rounded-xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/word-district-studio.png" data-title="Format Dokumen Word Resmi">
                  <img src="<?= $assetBase ?>assets/portfolio/word-district-studio.png" alt="Format Dokumen Word" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                  <span class="absolute top-2.5 left-2.5 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full text-[10px] font-bold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">description</span>
                    <span>Word / SOP</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-black/40">
                    <span class="px-3 py-1.5 rounded-full bg-surface/90 text-on-surface text-xs font-bold flex items-center gap-1 shadow-md">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Perbesar</span>
                    </span>
                  </div>
                </div>
                <h3 class="text-base font-bold text-on-surface pt-3">Dokumentasi Teknis 16 Halaman</h3>
                <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                  Penataan dokumen panduan teknis SOP resmi, daftar isi otomatis, dan format margin standar korporat.
                </p>
                <div class="flex flex-wrap gap-1 pt-2">
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Daftar Isi Otomatis</span>
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Standar Cetak</span>
                </div>
              </div>
              <div class="pt-3 border-t border-surface-container mt-3 flex items-center justify-between">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:underline flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/word-district-studio.png" data-title="Format Dokumen Word Resmi">
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('format_dokumen') ?>" target="_blank" rel="noopener" class="text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition-colors">
                  Order Word
                </a>
              </div>
            </div>

            <!-- Portfolio 6: Olah Data Excel -->
            <div class="portfolio-card flex flex-col justify-between rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 shadow-sm hover:shadow-lg transition-all duration-200" data-category="dokumen">
              <div>
                <div class="h-52 w-full rounded-xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/excel-district-studio.png" data-title="Laporan Keuangan Excel">
                  <img src="<?= $assetBase ?>assets/portfolio/excel-district-studio.png" alt="Olah Data Excel" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                  <span class="absolute top-2.5 left-2.5 bg-surface/90 backdrop-blur-md px-2.5 py-0.5 rounded-full text-[10px] font-bold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">table_chart</span>
                    <span>Excel &amp; Kas</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-black/40">
                    <span class="px-3 py-1.5 rounded-full bg-surface/90 text-on-surface text-xs font-bold flex items-center gap-1 shadow-md">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Perbesar</span>
                    </span>
                  </div>
                </div>
                <h3 class="text-base font-bold text-on-surface pt-3">Laporan Keuangan &amp; Rekap Komisi</h3>
                <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                  Spreadsheet buku kas otomatis, rekap omzet kotor, pembagian komisi, dan formula akurat bebas human error.
                </p>
                <div class="flex flex-wrap gap-1 pt-2">
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Rumus SUM / IF</span>
                  <span class="text-[10px] font-medium bg-surface-container px-2 py-0.5 rounded-md text-on-surface-variant">Buku Kas Otomatis</span>
                </div>
              </div>
              <div class="pt-3 border-t border-surface-container mt-3 flex items-center justify-between">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:underline flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/excel-district-studio.png" data-title="Laporan Keuangan Excel">
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('excel_olah_data') ?>" target="_blank" rel="noopener" class="text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg transition-colors">
                  Order Excel
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: 3 Langkah Cara Order Mudah (Ringkas & Bersih) -->
      <section id="cara-order" class="w-full py-space-2xl px-gutter bg-surface-container-lowest border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto text-center">
          <span class="text-xs font-bold text-primary uppercase tracking-wider">Proses Sederhana</span>
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-on-surface pt-1 pb-6">Cara Pesan Tanpa Ribet</h2>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-5 text-left">
            <div class="p-6 rounded-2xl bg-surface-container-low border border-surface-container">
              <span class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center font-black text-base mb-3">1</span>
              <h3 class="text-base font-bold text-on-surface">Pilih Layanan</h3>
              <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                Pilih paket website, desain, dokumen, atau joki tugas sesuai kebutuhan Anda di katalog kami.
              </p>
            </div>

            <div class="p-6 rounded-2xl bg-surface-container-low border border-surface-container">
              <span class="w-10 h-10 rounded-xl bg-green-600 text-white flex items-center justify-center font-black text-base mb-3">2</span>
              <h3 class="text-base font-bold text-on-surface">Chat WhatsApp</h3>
              <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                Kirim pesan ke WA kami di 0878-6175-6916. Konsultasikan detail dan deadline pengerjaan dengan santai.
              </p>
            </div>

            <div class="p-6 rounded-2xl bg-surface-container-low border border-surface-container">
              <span class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center font-black text-base mb-3">3</span>
              <h3 class="text-base font-bold text-on-surface">Hasil Bergaransi</h3>
              <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                Pekerjaan diselesaikan tepat waktu. Anda bisa mengecek hasil dan meminta revisi gratis jika ada perbaikan.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Garansi Layanan (3 Komitmen) -->
      <section id="garansi" class="w-full py-space-2xl px-gutter bg-surface-container-low/50 border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <div class="text-center max-w-xl mx-auto pb-6">
            <span class="text-xs font-bold text-primary uppercase tracking-wider">Garansi Pasti</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-on-surface pt-1">3 Komitmen Lumitech</h2>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div class="p-6 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm">
              <span class="material-symbols-outlined text-3xl text-primary mb-2">schedule</span>
              <h3 class="text-base font-bold text-on-surface">Tepat Waktu</h3>
              <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                Jadwal pengerjaan disepakati di awal dan diselesaikan sesuai target deadline tanpa alasan berbelit.
              </p>
            </div>

            <div class="p-6 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm">
              <span class="material-symbols-outlined text-3xl text-primary mb-2">verified</span>
              <h3 class="text-base font-bold text-on-surface">Bebas Revisi</h3>
              <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                Hasil pekerjaan belum sesuai ekspektasi? Kami sediakan revisi tanpa biaya tambahan sampai Anda puas.
              </p>
            </div>

            <div class="p-6 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-sm">
              <span class="material-symbols-outlined text-3xl text-primary mb-2">lock</span>
              <h3 class="text-base font-bold text-on-surface">Privasi 100% Aman</h3>
              <p class="text-xs text-on-surface-variant pt-1 leading-relaxed">
                Seluruh data bisnis, identitas pribadi, dan berkas tugas dijamin aman dan tidak disebarluaskan.
              </p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <?php require __DIR__ . '/../Layout/partials/footer.php'; ?>

    <!-- Floating WhatsApp Button (Desktop only) -->
    <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin bertanya dan konsultasi seputar layanan Lumitech.id.") ?>" target="_blank" rel="noopener" aria-label="Chat WhatsApp" class="hidden lg:flex fixed bottom-6 right-6 z-50 items-center gap-2.5 px-4 py-3 rounded-full bg-green-600 hover:bg-green-700 text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
      <span class="material-symbols-outlined text-2xl">chat</span>
      <span class="text-sm font-bold pr-1">Tanya via WA</span>
    </a>

    <!-- Lightbox Modal untuk Preview Gambar Portofolio -->
    <div id="portfolioModal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-md flex items-center justify-center p-3 sm:p-5" role="dialog" aria-modal="true">
      <div class="relative max-w-4xl w-full bg-surface rounded-2xl overflow-hidden shadow-2xl border border-surface-container flex flex-col max-h-[92vh] animate-in fade-in duration-200">
        <div class="flex items-center justify-between p-3.5 sm:p-4 border-b border-surface-container bg-surface-container-low shrink-0">
          <div class="flex items-center gap-2 min-w-0 pr-2">
            <span class="material-symbols-outlined text-primary text-xl">palette</span>
            <h3 id="portfolioModalTitle" class="font-bold text-sm sm:text-base text-on-surface truncate">Preview Portofolio</h3>
          </div>
          <button id="portfolioModalClose" type="button" aria-label="Tutup Preview" class="h-8 w-8 sm:h-9 sm:w-9 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface flex items-center justify-center transition-colors shrink-0">
            <span class="material-symbols-outlined text-lg sm:text-xl">close</span>
          </button>
        </div>
        <div class="p-2 sm:p-4 overflow-auto flex items-center justify-center bg-slate-950/70 grow min-h-0">
          <img id="portfolioModalImg" src="" alt="Preview Portofolio Lumitech" class="max-h-[72vh] w-auto max-w-full rounded-xl object-contain shadow-2xl" />
        </div>
      </div>
    </div>

    <!-- Script Filter & Interaktif -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Filter Portofolio di Beranda
        const portfolioFilterBtns = document.querySelectorAll(".portfolio-filter-btn");
        const portfolioCards = document.querySelectorAll(".portfolio-card");

        portfolioFilterBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            const filter = this.getAttribute("data-portfolio-filter");

            portfolioFilterBtns.forEach((b) => {
              b.classList.remove("active-portfolio-filter", "bg-primary", "text-white", "font-bold");
              b.classList.add("bg-surface-container", "text-on-surface", "font-semibold");
            });
            this.classList.add("active-portfolio-filter", "bg-primary", "text-white", "font-bold");
            this.classList.remove("bg-surface-container", "text-on-surface", "font-semibold");

            portfolioCards.forEach((card) => {
              const category = card.getAttribute("data-category") || "";
              if (filter === "all" || category.includes(filter)) {
                card.style.display = "flex";
              } else {
                card.style.display = "none";
              }
            });
          });
        });

        // Lightbox Modal untuk Preview Gambar Portofolio
        const portfolioModal = document.getElementById("portfolioModal");
        const portfolioModalImg = document.getElementById("portfolioModalImg");
        const portfolioModalTitle = document.getElementById("portfolioModalTitle");
        const portfolioModalClose = document.getElementById("portfolioModalClose");
        const previewTriggers = document.querySelectorAll(".portfolio-preview-trigger");

        if (portfolioModal && portfolioModalImg && portfolioModalTitle) {
          previewTriggers.forEach((trigger) => {
            trigger.addEventListener("click", function (e) {
              e.preventDefault();
              const imgSrc = this.getAttribute("data-image");
              const titleText = this.getAttribute("data-title") || "Preview Portofolio";
              if (imgSrc) {
                portfolioModalImg.src = imgSrc;
                portfolioModalTitle.textContent = titleText;
                portfolioModal.classList.remove("hidden");
                document.body.style.overflow = "hidden";
              }
            });
          });

          const closeModal = () => {
            portfolioModal.classList.add("hidden");
            portfolioModalImg.src = "";
            document.body.style.overflow = "";
          };

          if (portfolioModalClose) {
            portfolioModalClose.addEventListener("click", closeModal);
          }

          portfolioModal.addEventListener("click", function (e) {
            if (e.target === portfolioModal) {
              closeModal();
            }
          });

          document.addEventListener("keydown", function (e) {
            if (e.key === "Escape" && !portfolioModal.classList.contains("hidden")) {
              closeModal();
            }
          });
        }
      });
    </script>
  </body>
</html>
