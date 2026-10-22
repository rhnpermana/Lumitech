<?php
$assetBase = (file_exists('assets/img/logo-icon.png')) ? '' : '../';
$currentPage = 'home';
require_once __DIR__ . '/../Layout/partials/whatsapp_helper.php';
include_once __DIR__ . '/../Layout/partials/app.php';
include_once __DIR__ . '/../Layout/partials/navhome.php';
?>

  <body class="bg-surface font-body-md text-on-surface antialiased pt-20 lg:pt-28 pb-24 lg:pb-0">
    <main class="w-full">

      <!-- Hero Section (Jelas, Ramah & Mudah Dipahami Semua Umur) -->
      <section id="beranda" class="relative w-full overflow-hidden bg-surface-container-low/40 pt-space-lg pb-space-2xl px-gutter border-b border-surface-container">
        <!-- Ambient Glow -->
        <div class="pointer-events-none absolute -top-20 right-1/4 h-80 w-80 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="pointer-events-none absolute bottom-0 -left-10 h-64 w-64 rounded-full bg-secondary-fixed/30 blur-2xl"></div>

        <div class="mx-auto max-w-[1320px] relative z-10">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
            
            <!-- Hero Text Content -->
            <div class="lg:col-span-7 flex flex-col gap-space-md">
              <div class="inline-flex items-center gap-2 rounded-full bg-primary-fixed/60 border border-primary/20 px-4 py-1.5 text-xs md:text-sm font-bold text-primary w-fit">
                <span class="h-2.5 w-2.5 rounded-full bg-green-500 animate-pulse"></span>
                <span>Solusi Digital Terpercaya untuk Bisnis &amp; Akademik</span>
              </div>

              <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-black text-on-surface tracking-tight leading-tight">
                All-in-One Agency &amp; <br />
                <span class="text-primary underline decoration-primary-fixed decoration-4">Solusi Digital</span> Bisnismu.
              </h1>

              <p class="text-base sm:text-lg text-on-surface-variant max-w-xl leading-relaxed">
                Bikin website bisnis modern, konsultasi UMKM, desain grafis, hingga joki tugas akademik beres tanpa ribet. Harga jujur, pengerjaan cepat, dan ramah untuk semua umur.
              </p>

              <!-- Tombol Aksi Utama -->
              <div class="flex flex-wrap items-center gap-3 pt-2">
                <a href="#katalog" class="inline-flex items-center gap-2 rounded-full bg-primary hover:bg-primary-container text-white px-6 py-3.5 text-sm md:text-base font-bold shadow-md hover:shadow-lg transition-all hover:-translate-y-0.5">
                  <span class="material-symbols-outlined text-xl">shopping_bag</span>
                  <span>Lihat Semua Produk &amp; Harga</span>
                </a>
                <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin konsultasi layanan digital.") ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full bg-green-600 hover:bg-green-700 text-white px-6 py-3.5 text-sm md:text-base font-bold shadow-md hover:shadow-lg transition-all hover:-translate-y-0.5">
                  <span class="material-symbols-outlined text-xl">chat</span>
                  <span>Konsultasi WA (0878-6175-6916)</span>
                </a>
              </div>

              <!-- 3 Keunggulan Ramah Pengguna -->
              <div class="grid grid-cols-3 gap-3 pt-4 border-t border-surface-container/60 max-w-lg">
                <div class="flex flex-col">
                  <span class="text-lg md:text-xl font-black text-primary">1 - 24 Jam</span>
                  <span class="text-xs text-on-surface-variant">Bisa Pengerjaan Kilat</span>
                </div>
                <div class="flex flex-col">
                  <span class="text-lg md:text-xl font-black text-on-surface">100%</span>
                  <span class="text-xs text-on-surface-variant">Garansi Bebas Revisi</span>
                </div>
                <div class="flex flex-col">
                  <span class="text-lg md:text-xl font-black text-primary">Fast Response</span>
                  <span class="text-xs text-on-surface-variant">WhatsApp Selalu Aktif</span>
                </div>
              </div>
            </div>

            <!-- Hero Feature Card Preview -->
            <div class="lg:col-span-5">
              <div class="rounded-3xl bg-surface-container-lowest border border-surface-container p-6 shadow-xl relative">
                <div class="flex items-center justify-between pb-4 border-b border-surface-container">
                  <span class="text-xs font-bold text-on-surface uppercase tracking-wider">Layanan Terpopuler</span>
                  <span class="text-xs font-bold bg-green-100 text-green-800 px-2.5 py-0.5 rounded-full">🟢 Online</span>
                </div>

                <div class="space-y-3 pt-4">
                  <a href="#katalog" class="flex items-center justify-between p-3.5 rounded-2xl bg-surface-container-low hover:bg-primary-fixed/30 transition-all border border-surface-container/60 group">
                    <div class="flex items-center gap-3">
                      <span class="w-10 h-10 rounded-xl bg-primary text-white flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-xl">devices</span>
                      </span>
                      <div>
                        <div class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Website Starter UMKM</div>
                        <div class="text-xs text-on-surface-variant">Mulai Dari Rp 30.000 • Custom </div>
                      </div>
                    </div>
                    <span class="material-symbols-outlined text-sm text-on-surface-variant group-hover:text-primary">arrow_forward</span>
                  </a>

                  <a href="#katalog" class="flex items-center justify-between p-3.5 rounded-2xl bg-surface-container-low hover:bg-primary-fixed/30 transition-all border border-surface-container/60 group">
                    <div class="flex items-center gap-3">
                      <span class="w-10 h-10 rounded-xl bg-green-600 text-white flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-xl">insights</span>
                      </span>
                      <div>
                        <div class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Analisis Insight Bisnis UMKM</div>
                        <div class="text-xs text-on-surface-variant">Mulai Dari Rp 30.000 • Konsultasi Via WhatsApp,Instagram Dan Google Meet  </div>
                      </div>
                    </div>
                    <span class="material-symbols-outlined text-sm text-on-surface-variant group-hover:text-primary">arrow_forward</span>
                  </a>

                  <a href="#katalog" class="flex items-center justify-between p-3.5 rounded-2xl bg-surface-container-low hover:bg-primary-fixed/30 transition-all border border-surface-container/60 group">
                    <div class="flex items-center gap-3">
                      <span class="w-10 h-10 rounded-xl bg-slate-800 text-amber-400 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-xl">school</span>
                      </span>
                      <div>
                        <div class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Joki Tugas (Pelajar/MahaSiswa)</div>
                        <div class="text-xs text-on-surface-variant">Mulai Dari Rp 10.000 • PPT, Word, PDF &amp; Coding, Desain</div>
                      </div>
                    </div>
                    <span class="material-symbols-outlined text-sm text-on-surface-variant group-hover:text-primary">arrow_forward</span>
                  </a>
                </div>

                <div class="pt-4 mt-2">
                  <a href="produk.php" class="w-full inline-flex items-center justify-center gap-2 py-3 rounded-2xl bg-surface-container hover:bg-surface-container-high text-on-surface font-bold text-sm transition-colors border border-surface-container">
                    <span>Buka Halaman Katalog Lengkap</span>
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- SECTION UTAMA: KATALOG PRODUK & LAYANAN TERPADU (Digabung 1 Tempat) -->
      <section id="katalog" class="w-full py-space-2xl px-gutter scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <!-- Section Heading -->
          <div class="text-center max-w-3xl mx-auto pb-space-lg">
            <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Katalog Produk &amp; Layanan Terpadu</span>
            <h2 class="text-3xl md:text-5xl font-black text-on-surface tracking-tight pt-1">
              Semua Layanan dalam Satu Tempat
            </h2>
            <p class="text-base md:text-lg text-on-surface-variant pt-3">
              Tidak perlu bingung mencari layanan di tempat berbeda. Pilih kategori di bawah ini untuk melihat detail dan langsung chat dengan nomor WhatsApp yang tepat.
            </p>
          </div>

          <!-- Filter Kategori Tombol Mudah (Ramah Semua Umur) -->
          <div class="flex flex-wrap items-center justify-center gap-2 pb-8 border-b border-surface-container">
            <button type="button" data-filter="all" class="home-filter-btn active-filter px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-primary text-white shadow-sm transition-all hover:opacity-90">
              Semua Layanan (14)
            </button>
            <button type="button" data-filter="website" class="home-filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🌐 Pembuatan Website (3)
            </button>
            <button type="button" data-filter="bisnis" class="home-filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              💼 Bisnis, Desain &amp; Pakaian (8)
            </button>
            <button type="button" data-filter="joki" class="home-filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🎓 Dokumen, Office &amp; Joki (5)
            </button>
          </div>

          <!-- Grid Produk / Layanan Terpadu (Dibuat Kompak & Rapi) -->
          <div id="homeCatalogGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-5 pt-6">

            <!-- 1. WEBSITE STARTER UMKM -->
            <div class="home-product-card" data-category="website">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Website UMKM</span>
                    <span class="material-symbols-outlined text-primary text-xl">devices</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Paket Starter Website UMKM</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Website 1 halaman profesional untuk usaha kuliner, jasa, toko, dan profil bisnis agar mudah ditemukan pelanggan di Google.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Mulai Harga:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 150.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Belum Termasuk Domain .com + hosting 1 tahun</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">1 Halaman Landing Page responsif</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Tombol pesan langsung WhatsApp</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Integrasi Google Maps &amp; Medsos</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('starter_umkm') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 2. WEBSITE BISNIS PRO -->
            <div class="home-product-card" data-category="website">
              <div class="relative h-full rounded-2xl bg-surface-container-lowest border-2 border-primary p-4 sm:p-5 flex flex-col justify-between shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                  <span class="inline-flex items-center gap-1 rounded-full bg-primary px-3 py-0.5 text-[10px] font-bold text-white shadow-sm uppercase tracking-wider">
                    <span class="material-symbols-outlined text-xs">stars</span>
                    Favorit Bisnis
                  </span>
                </div>
                <div>
                  <div class="flex items-center justify-between pb-2 pt-1">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Multi-Halaman</span>
                    <span class="material-symbols-outlined text-primary text-xl">domain</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Website Professional Business</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Website lengkap 5-7 halaman untuk CV, PT, klinik, konsultan, sekolah, dan brand yang ingin kredibilitas kuat.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Mulai Harga :</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 1.000.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Gratis email bisnis (nama@perusahaan.com)</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">5-7 Halaman (Home, Tentang, Layanan)</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Panel admin mudah update artikel/produk</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Garansi maintenance 6 bulan + backup</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('pro_business') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-primary hover:bg-primary-container text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 3. CUSTOM APP -->
            <div class="home-product-card" data-category="website">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Custom &amp; Toko</span>
                    <span class="material-symbols-outlined text-primary text-xl">shopping_cart</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Toko Online / Web Aplikasi</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Sistem toko online dengan katalog, keranjang belanja, cek ongkir otomatis, hingga sistem informasi bisnis sesuai request.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Mulai Harga:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Sesuai Kebutuhan</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Estimasi transparan setelah diskusi santai</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Keranjang belanja &amp; pembayaran otomatis QRIS</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Hitung ongkos kirim kurir otomatis</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Laporan penjualan &amp; database terstruktur</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('custom_app') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Konsultasi via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 4. KONSULTASI BISNIS UMKM -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">UMKM</span>
                    <span class="material-symbols-outlined text-primary text-xl">insights</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Konsultasi Bisnis UMKM</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Diskusi privat dan terjamin keamanannya dalam membantu strategi &amp; pengembangan usaha Anda.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Harga Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 30.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Via Google Meet atau WhatsApp Call/Chat</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Bedah kelemahan promosi &amp; sosmed usaha</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Rencana aksi praktis langsung terarah</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Rangkuman insight materi format PDF</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('konsultasi_umkm') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 5. DESAIN GRAFIS & LOGO -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Desain</span>
                    <span class="material-symbols-outlined text-primary text-xl">palette</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Desain Grafis &amp; Logo</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Jasa pembuatan desain kemasan produk, logo, poster promosi, bahan postingan instagram.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Harga Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 30.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Desain Perkonten • Bebas Revisi</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Desain resolusi tinggi HD siap cetak/sosmed</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">File lengkap (PNG transparan, JPG, PDF)</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Gratis revisi sampai puas</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('desain_grafis') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 6. VIDEO EDITING REELS / TIKTOK -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Video</span>
                    <span class="material-symbols-outlined text-primary text-xl">movie</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Video Editing Reels &amp; TikTok</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Edit video produk, promosi, &amp; edukasi dengan teks berjalan kekinian, sound effect, dan musik menarik.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 40.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Per video durasi 30 - 60 detik</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Subtitle dinamis kekinian &amp; sound effect</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Format 9:16 cocok IG Reels &amp; TikTok</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Pengerjaan kilat 1-2 hari kerja</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('video_editing') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 7. SOCIAL MEDIA MANAGEMENT -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Sosmed</span>
                    <span class="material-symbols-outlined text-primary text-xl">share</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Analisis Insight Dan Pengelolaan Media Sosial</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Serahkan urusan akun Instagram &amp; TikTok bisnis Anda. Kami buatkan jadwal, feed, caption, dan hashtag.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Mulai Harga:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 30.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Perpostingan</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">12 Desain feed estetik + teks caption</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Riset hashtag relevan untuk audiens</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Jadwal upload konsisten &amp; rapi</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Riset berbentuk dokument</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('sosmed_management') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 8. FORMAT DOKUMEN MS WORD -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Dokumen</span>
                    <span class="material-symbols-outlined text-primary text-xl">description</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Format Dokumen Word</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Pengetikan cepat, perapian margin, daftar isi/tabel otomatis, format SOP, surat resmi, dan company profile.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 25.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Format rapi standar resmi siap cetak</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Daftar isi, gambar &amp; halaman otomatis</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Format margin &amp; spasi rapi standar</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Pengerjaan kilat dan hasil rapi</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('format_dokumen') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 9. JASA DESAIN PAKAIAN & APPAREL -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Desain Pakaian</span>
                    <span class="material-symbols-outlined text-primary text-xl">apparel</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Jasa Desain Pakaian</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Desain mockup kaos, hoodie, kemeja, celana, seragam &amp; apparel streetwear siap cetak sablon / bordir konveksi.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 45.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Mockup depan &amp; belakang • Siap cetak vendor</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Mockup tampak depan &amp; belakang realistis HD</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">File mentahan siap sablon &amp; bordir (PNG &amp; PDF)</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Free konsultasi konsep &amp; revisi sampai puas</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('desain_pakaian') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 10. JASA OLAH DATA MICROSOFT EXCEL -->
            <div class="home-product-card" data-category="bisnis joki">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Microsoft Excel</span>
                    <span class="material-symbols-outlined text-primary text-xl">table_chart</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Jasa Olah Data Microsoft Excel</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Pembuatan rumus kompleks (VLOOKUP, INDEX MATCH, IF), dashboard interaktif, pembukuan kas UMKM, &amp; input data.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 25.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">File otomatis &amp; bebas error • Pengerjaan cepat</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Rumus otomatis, filter &amp; validasi data</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Dashboard grafik visual &amp; pivot table</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Rekap kas keuangan, stok &amp; tugas Excel</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('excel_olah_data') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 11. JASA SLIDE MICROSOFT POWERPOINT -->
            <div class="home-product-card" data-category="bisnis joki">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">PowerPoint (PPT)</span>
                    <span class="material-symbols-outlined text-primary text-xl">slideshow</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Jasa Slide Microsoft PowerPoint</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Desain slide presentasi profesional, animasi menarik, pitch deck bisnis/investor, seminar, dan presentasi tugas.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 25.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Desain visual memukau • Termasuk animasi</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Desain modern, rapi &amp; tidak membosankan</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Transisi &amp; animasi halus siap presentasi</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Dapat file .PPTX bisa diedit + file PDF</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('ppt_slide') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 12. JOKI TUGAS MAHASISWA & PELAJAR (CIHUYYY) -->
            <div class="home-product-card" data-category="joki">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Joki All Tugas</span>
                    <span class="material-symbols-outlined text-primary text-xl">school</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Joki Tugas Pelajar &amp; Kuliah</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Bantuan tugas all materi: Slide PPT animasi estetik, makalah Word rapi, rangkuman materi, dan tugas harian.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Mulai Harga:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 10.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Pengerjaan kilat 1 - 24 jam • Privasi Aman</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">100% Rahasia &amp; data identitas aman</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Free 3x revisi sampai nilai aman</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Bisa format Word, PPT, dan PDF</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('joki_tugas') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 13. JOKI WEBSITE & CODING CRUD -->
            <div class="home-product-card" data-category="joki">
              <div class="h-full rounded-2xl bg-surface-container-lowest border-2 border-primary/70 hover:border-primary p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Tugas Coding</span>
                    <span class="material-symbols-outlined text-primary text-xl">code</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Joki Website &amp; Coding</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Bantuan praktikum dan tugas pembuatan sistem koding CRUD, hingga website portofolio magang.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Harga Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 30.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Include bimbingan kodingan &amp; instalasi</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Source code rapi &amp; database terstruktur</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Penjelasan alur untuk presentasi/demo</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Bimbingan sampai program berjalan lancar</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('joki_coding') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-primary hover:bg-primary-container text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 14. JOKI DESAIN CANVA & PRESENTASI -->
            <div class="home-product-card" data-category="joki">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Desain Tugas</span>
                    <span class="material-symbols-outlined text-primary text-xl">draw</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Joki Desain Canva &amp; PPT</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Desain slide presentasi Canva modern, poster ilmiah, infografis tugas, banner acara organisasi kampus/sekolah.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 20.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Termasuk link template Canva bisa diedit</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Layout kekinian, rapi, dan menarik</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Free 2x revisi cepat</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Ekspor PDF &amp; PPTX resolusi tinggi</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="<?= getWaOrderUrl('joki_canva') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

          </div>

          <!-- Banner Direct to Dedicated Catalog Page -->
          <div class="mt-12 p-6 rounded-3xl bg-surface-container-low border border-surface-container flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div>
              <h4 class="font-bold text-lg text-on-surface">Ingin melihat halaman katalog produk khusus?</h4>
              <p class="text-sm text-on-surface-variant pt-0.5">Akses halaman produk yang didesain ringkas untuk pemesanan cepat.</p>
            </div>
            <a href="produk.php" class="shrink-0 px-6 py-3 rounded-full bg-primary text-white font-bold text-sm shadow hover:bg-primary-container transition-colors flex items-center gap-2">
              <span>Buka Halaman Produk.php</span>
              <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
          </div>
        </div>
      </section>

      <!-- Section: Bukti Hasil Kerja (Portofolio Nyata Desain Grafis, Pakaian, Website & Dokumen) -->
      <section id="portofolio" class="w-full py-space-2xl px-gutter bg-surface-container-low/50 border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <div class="text-center max-w-2xl mx-auto pb-8">
            <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Hasil Nyata &amp; Bukti Karya</span>
            <h2 class="text-3xl md:text-4xl font-black text-on-surface pt-1">Contoh Desain Grafis, Pakaian &amp; Website Kami</h2>
            <p class="text-base text-on-surface-variant pt-2">
              Bukti hasil pengerjaan nyata dari tim Lumitech. Mulai dari desain pakaian &amp; apparel streetwear, landing page website modern, hingga penataan dokumen resmi dan olah data.
            </p>
          </div>

          <!-- Filter Kategori Portofolio -->
          <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 pb-8">
            <button type="button" data-portfolio-filter="all" class="portfolio-filter-btn active-portfolio-filter px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-primary text-white shadow-sm transition-all">
              Semua Karya (6)
            </button>
            <button type="button" data-portfolio-filter="desain" class="portfolio-filter-btn px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🎨 Desain Grafis &amp; Pakaian (2)
            </button>
            <button type="button" data-portfolio-filter="website" class="portfolio-filter-btn px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🌐 Website &amp; UI (2)
            </button>
            <button type="button" data-portfolio-filter="dokumen" class="portfolio-filter-btn px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              📄 Dokumen Word &amp; Excel (2)
            </button>
          </div>

          <div id="portfolioGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Portfolio 1: Desain Pakaian (Setelan Hoodie & Pants) -->
            <div class="portfolio-card flex flex-col justify-between rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 shadow-sm hover:shadow-xl transition-all duration-300" data-category="desain">
              <div>
                <div class="h-56 sm:h-60 w-full rounded-2xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/apparel-mockup-set.jpg" data-title="Mockup Setelan Hoodie &amp; Pants LTH Lumitech">
                  <img src="<?= $assetBase ?>assets/portfolio/apparel-mockup-set.jpg" alt="Desain Pakaian Streetwear Hoodie dan Pants LTH Lumitech" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                  <span class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-extrabold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">apparel</span>
                    <span>Desain Pakaian &amp; Streetwear</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                    <span class="px-4 py-2 rounded-full bg-surface/90 backdrop-blur-md text-on-surface text-xs font-bold flex items-center gap-1.5 shadow-lg">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Lihat Gambar Penuh</span>
                    </span>
                  </div>
                  <span class="absolute bottom-3 left-3 text-white text-xs font-medium bg-black/50 backdrop-blur-sm px-2.5 py-0.5 rounded-md">Mockup Depan &amp; Belakang</span>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-on-surface pt-3.5">Mockup Setelan Hoodie &amp; Pants LTH</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant pt-1 leading-relaxed">
                  Desain grafis pakaian streetwear setelan hoodie &amp; baggy pants tampak depan-belakang dengan typography "West Side", layout saku presisi, dan proporsi pola siap produksi konveksi.
                </p>
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Format HD Vektor</span>
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Siap Sablon &amp; Bordir</span>
                  <span class="text-[11px] font-semibold bg-green-500/10 text-green-700 px-2.5 py-0.5 rounded-full">🟢 Contoh Desain Nyata</span>
                </div>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between gap-2">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:text-primary-container flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/apparel-mockup-set.jpg" data-title="Mockup Setelan Hoodie &amp; Pants LTH Lumitech">
                  <span class="material-symbols-outlined text-base">visibility</span>
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('desain_pakaian') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1.5 rounded-lg transition-colors shadow-sm">
                  <span class="material-symbols-outlined text-sm">chat</span>
                  <span>Order Desain Ini</span>
                </a>
              </div>
            </div>

            <!-- Portfolio 2: Desain Apparel Hoodie Putih Pop-Streetwear -->
            <div class="portfolio-card flex flex-col justify-between rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 shadow-sm hover:shadow-xl transition-all duration-300" data-category="desain">
              <div>
                <div class="h-56 sm:h-60 w-full rounded-2xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/apparel-hoodie-white.jpg" data-title="Desain Hoodie Grafis Don't Looking Around">
                  <img src="<?= $assetBase ?>assets/portfolio/apparel-hoodie-white.jpg" alt="Desain Hoodie Streetwear Don't Looking Around Lumitech" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                  <span class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-extrabold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">palette</span>
                    <span>Desain Grafis &amp; Apparel</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                    <span class="px-4 py-2 rounded-full bg-surface/90 backdrop-blur-md text-on-surface text-xs font-bold flex items-center gap-1.5 shadow-lg">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Lihat Gambar Penuh</span>
                    </span>
                  </div>
                  <span class="absolute bottom-3 left-3 text-white text-xs font-medium bg-black/50 backdrop-blur-sm px-2.5 py-0.5 rounded-md">Artwork Depan &amp; Belakang</span>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-on-surface pt-3.5">Desain Hoodie "Don't Looking Around"</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant pt-1 leading-relaxed">
                  Karya desain grafis apparel streetwear pop-modern dengan visual karakter bold, tipografi 3D melengkung Lumitech, dan penempatan mockup photorealistic depan-belakang.
                </p>
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Artwork Pop-Streetwear</span>
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Revisi Sampai Puas</span>
                  <span class="text-[11px] font-semibold bg-green-500/10 text-green-700 px-2.5 py-0.5 rounded-full">🟢 Contoh Desain Nyata</span>
                </div>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between gap-2">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:text-primary-container flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/apparel-hoodie-white.jpg" data-title="Desain Hoodie Grafis Don't Looking Around">
                  <span class="material-symbols-outlined text-base">visibility</span>
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('desain_pakaian') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1.5 rounded-lg transition-colors shadow-sm">
                  <span class="material-symbols-outlined text-sm">chat</span>
                  <span>Order Desain Ini</span>
                </a>
              </div>
            </div>

            <!-- Portfolio 3: Website Outerwear Tech -->
            <div class="portfolio-card flex flex-col justify-between rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 shadow-sm hover:shadow-xl transition-all duration-300" data-category="website">
              <div>
                <div class="h-56 sm:h-60 w-full rounded-2xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/lumitech-outerwear-web.jpg" data-title="Website Lumitech Outerwear Tech - Urban Jacket">
                  <img src="<?= $assetBase ?>assets/portfolio/lumitech-outerwear-web.jpg" alt="Website Outerwear Tech Jaket Urban Lumitech" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                  <span class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-extrabold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">language</span>
                    <span>Website &amp; Landing Page</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                    <span class="px-4 py-2 rounded-full bg-surface/90 backdrop-blur-md text-on-surface text-xs font-bold flex items-center gap-1.5 shadow-lg">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Lihat Gambar Penuh</span>
                    </span>
                  </div>
                  <span class="absolute bottom-3 left-3 text-white text-xs font-medium bg-black/50 backdrop-blur-sm px-2.5 py-0.5 rounded-md">Dark Mode &amp; High Converting</span>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-on-surface pt-3.5">Lumitech Outerwear Tech Catalog</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant pt-1 leading-relaxed">
                  Landing page toko pakaian &amp; jaket taktis perkotaan dengan desain dark mode elegan, integrasi konsultasi ukuran via WhatsApp, dan performa akses super cepat.
                </p>
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">UI/UX Modern</span>
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Fast Loading</span>
                  <span class="text-[11px] font-semibold bg-green-500/10 text-green-700 px-2.5 py-0.5 rounded-full">🟢 Live Concept</span>
                </div>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between gap-2">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:text-primary-container flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/lumitech-outerwear-web.jpg" data-title="Website Lumitech Outerwear Tech - Urban Jacket">
                  <span class="material-symbols-outlined text-base">visibility</span>
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('starter_umkm') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1.5 rounded-lg transition-colors shadow-sm">
                  <span class="material-symbols-outlined text-sm">chat</span>
                  <span>Bikin Web Serupa</span>
                </a>
              </div>
            </div>

            <!-- Portfolio 4: Website District Studio Barbershop -->
            <div class="portfolio-card flex flex-col justify-between rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 shadow-sm hover:shadow-xl transition-all duration-300" data-category="website">
              <div>
                <div class="h-56 sm:h-60 w-full rounded-2xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/barbershop.png" data-title="Website District Studio Digital Barbershop">
                  <img src="<?= $assetBase ?>assets/portfolio/barbershop.png" alt="Website District Studio Digital Barbershop" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                  <span class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-extrabold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">storefront</span>
                    <span>Website Bisnis &amp; UMKM</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                    <span class="px-4 py-2 rounded-full bg-surface/90 backdrop-blur-md text-on-surface text-xs font-bold flex items-center gap-1.5 shadow-lg">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Lihat Gambar Penuh</span>
                    </span>
                  </div>
                  <span class="absolute bottom-3 left-3 text-white text-xs font-medium bg-black/50 backdrop-blur-sm px-2.5 py-0.5 rounded-md">Live Production Project</span>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-on-surface pt-3.5">District Studio Barbershop</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant pt-1 leading-relaxed">
                  Website company profile &amp; platform pangkas rambut eksekutif dengan katalog gaya rambut, jam operasional cabang, dan sistem booking antrean WhatsApp real-time.
                </p>
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Company Profile UMKM</span>
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Booking WhatsApp</span>
                  <span class="text-[11px] font-semibold bg-green-500/10 text-green-700 px-2.5 py-0.5 rounded-full">🟢 Live Project</span>
                </div>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between gap-2">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:text-primary-container flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/barbershop.png" data-title="Website District Studio Digital Barbershop">
                  <span class="material-symbols-outlined text-base">visibility</span>
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('starter_umkm') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1.5 rounded-lg transition-colors shadow-sm">
                  <span class="material-symbols-outlined text-sm">chat</span>
                  <span>Bikin Web Serupa</span>
                </a>
              </div>
            </div>

            <!-- Portfolio 5: Dokumen Microsoft Word Resmi -->
            <div class="portfolio-card flex flex-col justify-between rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 shadow-sm hover:shadow-xl transition-all duration-300" data-category="dokumen">
              <div>
                <div class="h-56 sm:h-60 w-full rounded-2xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/word-district-studio.png" data-title="Format Dokumen Word Resmi - District Studio">
                  <img src="<?= $assetBase ?>assets/portfolio/word-district-studio.png" alt="Format Dokumen Word Resmi District Studio" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                  <span class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-extrabold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">description</span>
                    <span>Format Dokumen Word</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                    <span class="px-4 py-2 rounded-full bg-surface/90 backdrop-blur-md text-on-surface text-xs font-bold flex items-center gap-1.5 shadow-lg">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Lihat Gambar Penuh</span>
                    </span>
                  </div>
                  <span class="absolute bottom-3 left-3 text-white text-xs font-medium bg-black/50 backdrop-blur-sm px-2.5 py-0.5 rounded-md">Standar Resmi &amp; Rapi</span>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-on-surface pt-3.5">Dokumentasi Teknis 16 Halaman (Word)</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant pt-1 leading-relaxed">
                  Penataan dokumen panduan teknis dan SOP resmi dengan cover elegan, tabel hak akses pengguna (RBAC), penomoran halaman otomatis, dan format margin standar korporat.
                </p>
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Margin &amp; Spasi Rapi</span>
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Daftar Isi Otomatis</span>
                  <span class="text-[11px] font-semibold bg-green-500/10 text-green-700 px-2.5 py-0.5 rounded-full">🟢 Siap Cetak &amp; PDF</span>
                </div>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between gap-2">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:text-primary-container flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/word-district-studio.png" data-title="Format Dokumen Word Resmi - District Studio">
                  <span class="material-symbols-outlined text-base">visibility</span>
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('format_dokumen') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1.5 rounded-lg transition-colors shadow-sm">
                  <span class="material-symbols-outlined text-sm">chat</span>
                  <span>Order Format Word</span>
                </a>
              </div>
            </div>

            <!-- Portfolio 6: Olah Data & Laporan Keuangan Excel -->
            <div class="portfolio-card flex flex-col justify-between rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 shadow-sm hover:shadow-xl transition-all duration-300" data-category="dokumen">
              <div>
                <div class="h-56 sm:h-60 w-full rounded-2xl bg-slate-900 overflow-hidden relative group cursor-pointer portfolio-preview-trigger" data-image="<?= $assetBase ?>assets/portfolio/excel-district-studio.png" data-title="Laporan Keuangan &amp; Olah Data Excel District Studio">
                  <img src="<?= $assetBase ?>assets/portfolio/excel-district-studio.png" alt="Olah Data Laporan Keuangan Microsoft Excel" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                  <span class="absolute top-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1 rounded-full text-[11px] font-extrabold text-primary shadow-sm flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">table_chart</span>
                    <span>Microsoft Excel &amp; Olah Data</span>
                  </span>
                  <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/40">
                    <span class="px-4 py-2 rounded-full bg-surface/90 backdrop-blur-md text-on-surface text-xs font-bold flex items-center gap-1.5 shadow-lg">
                      <span class="material-symbols-outlined text-sm text-primary">zoom_in</span>
                      <span>Lihat Gambar Penuh</span>
                    </span>
                  </div>
                  <span class="absolute bottom-3 left-3 text-white text-xs font-medium bg-black/50 backdrop-blur-sm px-2.5 py-0.5 rounded-md">Buku Kas &amp; Komisi Otomatis</span>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-on-surface pt-3.5">Laporan Keuangan &amp; Rekap Komisi</h3>
                <p class="text-xs sm:text-sm text-on-surface-variant pt-1 leading-relaxed">
                  Penyusunan spreadsheet kas operasional, rekap omzet kotor, pembagian komisi karyawan/stylist, dan formula ringkasan metrik eksekutif yang akurat tanpa risiko salah hitung.
                </p>
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Rumus Otomatis (SUM/IF)</span>
                  <span class="text-[11px] font-semibold bg-surface-container px-2.5 py-0.5 rounded-full text-on-surface-variant">Buku Kas Operasional</span>
                  <span class="text-[11px] font-semibold bg-green-500/10 text-green-700 px-2.5 py-0.5 rounded-full">🟢 Bebas Human Error</span>
                </div>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between gap-2">
                <button type="button" class="portfolio-preview-trigger text-xs font-bold text-primary hover:text-primary-container flex items-center gap-1" data-image="<?= $assetBase ?>assets/portfolio/excel-district-studio.png" data-title="Laporan Keuangan &amp; Olah Data Excel District Studio">
                  <span class="material-symbols-outlined text-base">visibility</span>
                  <span>Lihat Detail</span>
                </button>
                <a href="<?= getWaOrderUrl('excel_olah_data') ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-xs font-bold text-white bg-green-600 hover:bg-green-700 px-3 py-1.5 rounded-lg transition-colors shadow-sm">
                  <span class="material-symbols-outlined text-sm">chat</span>
                  <span>Order Jasa Excel</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: 3 Langkah Cara Order Mudah (Ramah Semua Umur) -->

      <section id="cara-order" class="w-full py-space-2xl px-gutter bg-surface-container-lowest border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto text-center">
          <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Proses Sederhana</span>
          <h2 class="text-3xl md:text-4xl font-black text-on-surface pt-1 pb-8">Cara Pesan Mudah Tanpa Pusing</h2>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
            <div class="p-8 rounded-3xl bg-surface-container-low border border-surface-container flex flex-col justify-between">
              <div>
                <span class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-xl mb-4">1</span>
                <h3 class="text-xl font-bold text-on-surface">Pilih Layanan</h3>
                <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                  Pilih paket website, jasa desain/video/dokumen, atau joki tugas sesuai kebutuhan Anda di katalog produk di atas.
                </p>
              </div>
            </div>

            <div class="p-8 rounded-3xl bg-surface-container-low border border-surface-container flex flex-col justify-between">
              <div>
                <span class="w-12 h-12 rounded-2xl bg-green-600 text-white flex items-center justify-center font-black text-xl mb-4">2</span>
                <h3 class="text-xl font-bold text-on-surface">Chat WhatsApp</h3>
                <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                  Klik tombol WA yang tersedia. Tim kami akan langsung merespons dengan ramah, cepat, dan jelas.
                </p>
              </div>
            </div>

            <div class="p-8 rounded-3xl bg-surface-container-low border border-surface-container flex flex-col justify-between">
              <div>
                <span class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-xl mb-4">3</span>
                <h3 class="text-xl font-bold text-on-surface">Hasil Jadi &amp; Bergaransi</h3>
                <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                  Pekerjaan diselesaikan tepat waktu. Anda bisa mengecek hasilnya dan meminta revisi gratis jika ada bagian yang kurang pas.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Garansi Layanan -->
      <section id="garansi" class="w-full py-space-2xl px-gutter bg-surface-container-low/50 border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <div class="text-center max-w-2xl mx-auto pb-space-xl">
            <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Garansi Pasti</span>
            <h2 class="text-3xl md:text-4xl font-black text-on-surface pt-1">3 Komitmen Nyata Lumitech</h2>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="p-8 rounded-3xl bg-surface-container-lowest border border-surface-container shadow-sm">
              <span class="material-symbols-outlined text-4xl text-primary mb-3">schedule</span>
              <h3 class="text-xl font-bold text-on-surface">Selesai Tepat Waktu</h3>
              <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                Kami menghargai waktu Anda. Jadwal pengerjaan disepakati di awal dan diselesaikan sesuai kesepakatan tanpa alasan berbelit.
              </p>
            </div>

            <div class="p-8 rounded-3xl bg-surface-container-lowest border border-surface-container shadow-sm">
              <span class="material-symbols-outlined text-4xl text-primary mb-3">verified</span>
              <h3 class="text-xl font-bold text-on-surface">Garansi Bebas Revisi</h3>
              <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                Hasil pekerjaan belum sesuai ekspektasi? Kami sediakan revisi tanpa biaya tambahan sampai Anda puas dan siap pakai.
              </p>
            </div>

            <div class="p-8 rounded-3xl bg-surface-container-lowest border border-surface-container shadow-sm">
              <span class="material-symbols-outlined text-4xl text-primary mb-3">lock</span>
              <h3 class="text-xl font-bold text-on-surface">100% Kerahasiaan Aman</h3>
              <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                Seluruh data bisnis, identitas pribadi, maupun berkas tugas akademik dijamin aman dan tidak disebarluaskan ke pihak lain.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Tanya Jawab (FAQ) Ramah Semua Umur -->
      

      <!-- Final Banner Call to Action -->
     

    </main>

    <!-- Footer -->
    <?php include_once __DIR__ . '/../Layout/partials/footer.php'; ?>

    <!-- Floating WhatsApp Button (Desktop only: di mobile sudah ada tombol Chat WA di Bottom Bar) -->
    <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin bertanya dan konsultasi seputar layanan Lumitech.id.") ?>" target="_blank" rel="noopener" aria-label="Chat WhatsApp" class="hidden lg:flex fixed bottom-6 right-6 z-50 items-center gap-2.5 px-4 py-3 rounded-full bg-green-600 hover:bg-green-700 text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
      <span class="material-symbols-outlined text-2xl">chat</span>
      <span class="text-sm font-bold pr-1">Tanya Kami via WA</span>
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
        // Filter Katalog Produk di Beranda
        const homeFilterBtns = document.querySelectorAll(".home-filter-btn");
        const homeProductCards = document.querySelectorAll(".home-product-card");

        homeFilterBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            const filter = this.getAttribute("data-filter");

            // Update button styles
            homeFilterBtns.forEach((b) => {
              b.classList.remove("active-filter", "bg-primary", "text-white");
              b.classList.add("bg-surface-container", "text-on-surface");
            });
            this.classList.add("active-filter", "bg-primary", "text-white");
            this.classList.remove("bg-surface-container", "text-on-surface");

            // Filter cards
            homeProductCards.forEach((card) => {
              const category = card.getAttribute("data-category") || "";
              if (filter === "all" || category.includes(filter)) {
                card.style.display = "block";
              } else {
                card.style.display = "none";
              }
            });
          });
        });

        // Filter Portofolio di Beranda
        const portfolioFilterBtns = document.querySelectorAll(".portfolio-filter-btn");
        const portfolioCards = document.querySelectorAll(".portfolio-card");

        portfolioFilterBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            const filter = this.getAttribute("data-portfolio-filter");

            portfolioFilterBtns.forEach((b) => {
              b.classList.remove("active-portfolio-filter", "bg-primary", "text-white");
              b.classList.add("bg-surface-container", "text-on-surface");
            });
            this.classList.add("active-portfolio-filter", "bg-primary", "text-white");
            this.classList.remove("bg-surface-container", "text-on-surface");

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

        // Mobile Nav Drawer Toggle
        const mobileMenuBtn = document.getElementById("mobileMenuBtn");
        const mobileMenuDrawer = document.getElementById("mobileMenuDrawer");
        const menuIcon = document.getElementById("menuIcon");
        const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");

        if (mobileMenuBtn && mobileMenuDrawer) {
          mobileMenuBtn.addEventListener("click", function (e) {
            e.stopPropagation();
            const isOpen = !mobileMenuDrawer.classList.contains("hidden");
            if (isOpen) {
              mobileMenuDrawer.classList.add("hidden");
              mobileMenuBtn.setAttribute("aria-expanded", "false");
              if (menuIcon) menuIcon.textContent = "menu";
            } else {
              mobileMenuDrawer.classList.remove("hidden");
              mobileMenuBtn.setAttribute("aria-expanded", "true");
              if (menuIcon) menuIcon.textContent = "close";
            }
          });

          mobileNavLinks.forEach((link) => {
            link.addEventListener("click", function () {
              mobileMenuDrawer.classList.add("hidden");
              mobileMenuBtn.setAttribute("aria-expanded", "false");
              if (menuIcon) menuIcon.textContent = "menu";
            });
          });

          document.addEventListener("click", function (e) {
            if (!mobileMenuDrawer.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
              mobileMenuDrawer.classList.add("hidden");
              mobileMenuBtn.setAttribute("aria-expanded", "false");
              if (menuIcon) menuIcon.textContent = "menu";
            }
          });
        }
      });
    </script>
  </body>
</html>
