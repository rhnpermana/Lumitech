<?php
$assetBase = (file_exists('assets/img/logo-icon.png')) ? '' : '../';
$currentPage = 'home';
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
                <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan%20digital" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full bg-green-600 hover:bg-green-700 text-white px-6 py-3.5 text-sm md:text-base font-bold shadow-md hover:shadow-lg transition-all hover:-translate-y-0.5">
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
              💼 Bisnis, Desain &amp; Konveksi (8)
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
                    Website 1 halaman profesional untuk usaha kuliner, jasa, toko, dan profil bisnis.
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
                      <span class="line-clamp-1">T &amp; Medsos</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20berminat%20dengan%20Paket%20Starter%20Website%20UMKM%20(Rp%201.490.000)" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20berminat%20dengan%20Paket%20Website%20Professional%20(Rp%203.890.000)" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-primary hover:bg-primary-container text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 3. TOKO ONLINE / CUSTOM APP -->
            <div class="home-product-card" data-category="website">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Custom</span>
                    <span class="material-symbols-outlined text-primary text-xl">shopping_cart</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Website/Aplikasi</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Sistem Custom untuk semua jenis website sesuai kebutuhan dan akan di kerjakan sesuai request anda
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Mulai Harga:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Sesuai Kebutuhan</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Estimasi transparan setelah diskusi santai</span>
                  </div>
                 
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20toko%20online%20%2F%20web%20custom" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20jadwalkan%20Konsultasi%20Bisnis%20UMKM" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Desain%20Grafis%20%2F%20Logo" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Video%20Editing%20Reels%2FTikTok" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <h3 class="text-base sm:text-lg font-bold text-on-surface"> Analisis Insight Dan Pengelolaan Media Sosial</h3>
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20Social%20Media%20Management" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Pengetikan%20Dokumen%20Word" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 9. JASA PEMBUATAN PAKAIAN & KONVEKSI -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Konveksi &amp; Pakaian</span>
                    <span class="material-symbols-outlined text-primary text-xl">apparel</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Jasa Pembuatan Pakaian &amp; Konveksi</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Pembuatan kaos custom, kemeja kerja/organisasi, jaket, hoodie, seragam, sablon DTF &amp; bordir komputer rapi.
                  </p>
                  <div class="p-2.5 rounded-xl bg-surface-container-low mb-3">
                    <div class="flex items-baseline justify-between gap-1">
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
                      <span class="text-lg sm:text-xl font-black text-primary">Rp 45.000</span>
                    </div>
                    <span class="text-[10px] text-on-surface-variant block pt-0.5 truncate">Minimal order fleksibel • Bahan adem &amp; awet</span>
                  </div>
                  <ul class="space-y-1.5 text-xs text-on-surface">
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Kaos, polo, kemeja, hoodie &amp; seragam</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Sablon presisi &amp; bordir komputer rapi</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                      <span class="material-symbols-outlined text-primary text-sm shrink-0 mt-0.5">check_circle</span>
                      <span class="line-clamp-1">Free konsultasi desain &amp; mockup gratis</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-3 border-t border-surface-container mt-4">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Pembuatan%20Pakaian%20%2F%20Konveksi" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Jasa%20Microsoft%20Excel" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Jasa%20Microsoft%20PowerPoint" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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
                      <span class="text-[11px] text-on-surface-variant font-medium">Tarif Mulai:</span>
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Joki%20Tugas%20(PPT%2FWord%2FPDF)" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 10. JOKI WEBSITE & CODING CRUD -->
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Joki%20Website%20CRUD" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-primary hover:bg-primary-container text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 11. JOKI DESAIN CANVA & PRESENTASI -->
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20Desain%20Canva" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
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

      <!-- Section: Bukti Hasil Kerja (Portofolio Nyata dengan Gambar & Caption) -->
      <section id="portofolio" class="w-full py-space-2xl px-gutter bg-surface-container-low/50 border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <div class="text-center max-w-3xl mx-auto pb-space-xl">
            <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Portofolio &amp; Hasil Karya Nyata</span>
            <h2 class="text-3xl md:text-4xl font-black text-on-surface pt-1">Karya Digital &amp; Website Klien Kami</h2>
            <p class="text-base text-on-surface-variant pt-2">
              Lihat bukti nyata kualitas pengerjaan tim Lumitech. Dari website profil bisnis profesional, web aplikasi edukasi interaktif, hingga platform reservasi modern yang cepat dan responsif di HP.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <!-- Portofolio 1: District Studio Barbershop -->
            <div class="rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/40 p-5 sm:p-6 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <!-- Gambar Portofolio -->
                <div class="h-56 sm:h-64 w-full rounded-2xl overflow-hidden relative border border-surface-container bg-surface-container-low mb-4">
                  <img src="<?= $assetBase ?>assets/portfolio/barbershop.png" alt="Portofolio Website Barbershop District Studio" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <span class="absolute top-3 left-3 bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-bold px-3 py-1 rounded-full border border-white/10 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Sistem Reservasi &amp; Antrean
                  </span>
                  <span class="absolute bottom-3 right-3 bg-primary/90 text-white text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-0.5 rounded-md">
                    Web UMKM &amp; Bisnis
                  </span>
                </div>

                <div class="flex items-center gap-2 pb-1">
                  <span class="text-xs font-bold text-primary uppercase tracking-wider">Salon &amp; Barbershop Modern</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-black text-on-surface">District Studio Barbershop</h3>
                
                <!-- Caption & Penjelasan Lengkap -->
                <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                  Website bisnis bertema <em>dark industrial</em> untuk salon rambut &amp; barbershop premium. Dilengkapi katalog layanan grooming, profil hair artist, sistem antrean <em>real-time</em>, formulir registrasi online, dan tombol booking cepat via WhatsApp.
                </p>

                <!-- Fitur Utama -->
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">✂️ Papan Antrean Live</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">📅 Reservasi Online</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">💬 Fast Chat WhatsApp</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">📱 Tampilan HP Responsif</span>
                </div>
              </div>

              <div class="pt-4 border-t border-surface-container mt-5 flex flex-wrap items-center justify-between gap-3 text-xs">
                <div class="flex items-center gap-1.5 font-bold text-green-700 bg-green-50 px-2.5 py-1 rounded-full border border-green-200">
                  <span class="material-symbols-outlined text-sm">trending_up</span>
                  <span>Booking Online Meningkat 85%</span>
                </div>
                <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20tertarik%20bikin%20website%20seperti%20District%20Studio%20Barbershop" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-primary font-bold hover:underline">
                  <span>Pesan Serupa</span>
                  <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
              </div>
            </div>

            <!-- Portofolio 2: MathLab Smart Calculator -->
            <div class="rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/40 p-5 sm:p-6 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <!-- Gambar Portofolio -->
                <div class="h-56 sm:h-64 w-full rounded-2xl overflow-hidden relative border border-surface-container bg-surface-container-low mb-4">
                  <img src="<?= $assetBase ?>assets/portfolio/mathlab.png" alt="Portofolio Web App MathLab" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <span class="absolute top-3 left-3 bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-bold px-3 py-1 rounded-full border border-white/10 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                    Progressive Web App (PWA)
                  </span>
                  <span class="absolute bottom-3 right-3 bg-primary/90 text-white text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-0.5 rounded-md">
                    Web Application &amp; Edukasi
                  </span>
                </div>

                <div class="flex items-center gap-2 pb-1">
                  <span class="text-xs font-bold text-primary uppercase tracking-wider">Aplikasi Rumus Pintar</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-black text-on-surface">MathLab - Smart Calculator</h3>
                
                <!-- Caption & Penjelasan Lengkap -->
                <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                  Aplikasi web edukatif yang dirancang untuk pelajar, mahasiswa, dan UMKM. Memiliki fitur kalkulator pintar 12+ kategori rumus (aljabar, bangun ruang, trigonometri, statistika, hingga perhitungan uang kas &amp; diskon) dengan dukungan mode gelap (*dark theme*) dan instalasi PWA di HP.
                </p>

                <!-- Fitur Utama -->
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">📐 12+ Kategori Rumus</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">📲 Bisa Diinstal di HP (PWA)</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">🌓 Dark &amp; Light Mode</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">⚡ Loading Instan Tanpa Lag</span>
                </div>
              </div>

              <div class="pt-4 border-t border-surface-container mt-5 flex flex-wrap items-center justify-between gap-3 text-xs">
                <div class="flex items-center gap-1.5 font-bold text-blue-700 bg-blue-50 px-2.5 py-1 rounded-full border border-blue-200">
                  <span class="material-symbols-outlined text-sm">speed</span>
                  <span>100% Client-Side Cepat &amp; Offline Ready</span>
                </div>
                <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20tertarik%20bikin%20web%20app%20seperti%20MathLab" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-primary font-bold hover:underline">
                  <span>Pesan Serupa</span>
                  <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
              </div>
            </div>

            <!-- Portofolio 3: i-Find Hangout Spot -->
            <div class="rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/40 p-5 sm:p-6 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <!-- Gambar Portofolio -->
                <div class="h-56 sm:h-64 w-full rounded-2xl overflow-hidden relative border border-surface-container bg-surface-container-low mb-4">
                  <img src="<?= $assetBase ?>assets/portfolio/tempat%20spot.png" alt="Portofolio Platform i-Find Tempat Spot Nongkrong" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <span class="absolute top-3 left-3 bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-bold px-3 py-1 rounded-full border border-white/10 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                    Location-Based Service (LBS)
                  </span>
                  <span class="absolute bottom-3 right-3 bg-primary/90 text-white text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-0.5 rounded-md">
                    Portal Reservasi &amp; LBS
                  </span>
                </div>

                <div class="flex items-center gap-2 pb-1">
                  <span class="text-xs font-bold text-primary uppercase tracking-wider">Platform Kafe &amp; Hangout</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-black text-on-surface">i-Find - Spot Hemat Pelajar</h3>
                
                <!-- Caption & Penjelasan Lengkap -->
                <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                  Platform digital pencarian tempat kumpul dan kafe hemat khusus pelajar dan mahasiswa berbasis GPS lokasi. Menyajikan rekomendasi tempat nongkrong ramah kantong (di bawah Rp 25.000), estimasi jarak terdekat, panduan Hangout Pedia, dan booking meja langsung.
                </p>

                <!-- Fitur Utama -->
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">📍 GPS Akurat &amp; Radius Dekat</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">💰 Kurasi Budget &lt; Rp 25rb</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">🪑 Instant Table Booking</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">🧭 Integrasi Google Maps</span>
                </div>
              </div>

              <div class="pt-4 border-t border-surface-container mt-5 flex flex-wrap items-center justify-between gap-3 text-xs">
                <div class="flex items-center gap-1.5 font-bold text-indigo-700 bg-indigo-50 px-2.5 py-1 rounded-full border border-indigo-200">
                  <span class="material-symbols-outlined text-sm">location_on</span>
                  <span>Akurasi GPS Real-Time &amp; Filter Hemat</span>
                </div>
                <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20tertarik%20bikin%20platform%20seperti%20i-Find%20Spot" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-primary font-bold hover:underline">
                  <span>Pesan Serupa</span>
                  <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
              </div>
            </div>

            <!-- Portofolio 4: Make a Wish Birthday Web -->
            <div class="rounded-3xl bg-surface-container-lowest border border-surface-container hover:border-primary/40 p-5 sm:p-6 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <!-- Gambar Portofolio -->
                <div class="h-56 sm:h-64 w-full rounded-2xl overflow-hidden relative border border-surface-container bg-surface-container-low mb-4">
                  <img src="<?= $assetBase ?>assets/portfolio/hbd.jpg" alt="Portofolio Website Interaktif Make a Wish Birthday" class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                  <span class="absolute top-3 left-3 bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-bold px-3 py-1 rounded-full border border-white/10 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-pink-400 animate-pulse"></span>
                    Interactive Web Animation
                  </span>
                  <span class="absolute bottom-3 right-3 bg-primary/90 text-white text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-0.5 rounded-md">
                    Creative Web &amp; Event
                  </span>
                </div>

                <div class="flex items-center gap-2 pb-1">
                  <span class="text-xs font-bold text-primary uppercase tracking-wider">Website Ucapan &amp; Momen Spesial</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-black text-on-surface">Make a Wish! - Birthday Web</h3>
                
                <!-- Caption & Penjelasan Lengkap -->
                <p class="text-sm text-on-surface-variant pt-2 leading-relaxed">
                  Website interaktif bertema pastel hangat untuk ucapan ulang tahun, anniversary, dan hadiah kenangan spesial. Dilengkapi fitur interaktif unik meniup lilin kue virtual di layar HP, pemutar musik favorit, galeri foto kenangan, dan pesan rahasia yang muncul otomatis.
                </p>

                <!-- Fitur Utama -->
                <div class="flex flex-wrap gap-1.5 pt-3">
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">🎂 Animasi Interaktif Tiup Lilin</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">🎵 Background Music Spesial</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">💌 Surat &amp; Pesan Tersembunyi</span>
                  <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface text-xs font-medium">✨ Sentuhan Desain Unik &amp; Lucu</span>
                </div>
              </div>

              <div class="pt-4 border-t border-surface-container mt-5 flex flex-wrap items-center justify-between gap-3 text-xs">
                <div class="flex items-center gap-1.5 font-bold text-pink-700 bg-pink-50 px-2.5 py-1 rounded-full border border-pink-200">
                  <span class="material-symbols-outlined text-sm">favorite</span>
                  <span>100% Personal, Unik &amp; Menarik</span>
                </div>
                <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20tertarik%20bikin%20website%20ucapan%20seperti%20Make%20a%20Wish" target="_blank" rel="noopener" class="inline-flex items-center gap-1 text-primary font-bold hover:underline">
                  <span>Pesan Serupa</span>
                  <span class="material-symbols-outlined text-sm">arrow_forward</span>
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
    <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20tanya%20layanan" target="_blank" rel="noopener" aria-label="Chat WhatsApp" class="hidden lg:flex fixed bottom-6 right-6 z-50 items-center gap-2.5 px-4 py-3 rounded-full bg-green-600 hover:bg-green-700 text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
      <span class="material-symbols-outlined text-2xl">chat</span>
      <span class="text-sm font-bold pr-1">Tanya Kami via WA</span>
    </a>

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
