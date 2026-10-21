<?php
$assetBase = (file_exists('assets/img/logo-icon.png')) ? '' : '../';
$currentPage = 'home';
include_once __DIR__ . '/../Layout/partials/app.php';
include_once __DIR__ . '/../Layout/partials/navhome.php';
?>

  <body class="bg-surface font-body-md text-on-surface antialiased pt-28">
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
                All-in-One Website &amp; <br />
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
                  <span class="text-lg md:text-xl font-black text-primary">2 Nomor</span>
                  <span class="text-xs text-on-surface-variant">Admin &amp; Konsultan Aktif</span>
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
                        <div class="text-xs text-on-surface-variant">Rp 1.490.000 • Domain + Hosting 1 Thn</div>
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
                        <div class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Konsultasi Bisnis UMKM</div>
                        <div class="text-xs text-on-surface-variant">Rp 250.000 / sesi 90 Menit</div>
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
                        <div class="font-bold text-sm text-on-surface group-hover:text-primary transition-colors">Joki Tugas Cihuyyy (Pelajar/Mhs)</div>
                        <div class="text-xs text-on-surface-variant">Mulai Rp 10.000 • PPT, Word, PDF &amp; Coding</div>
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
              Semua Layanan (11)
            </button>
            <button type="button" data-filter="website" class="home-filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🌐 Pembuatan Website (3)
            </button>
            <button type="button" data-filter="bisnis" class="home-filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              💼 Bisnis &amp; UMKM (5)
            </button>
            <button type="button" data-filter="joki" class="home-filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🎓 Joki Tugas Pelajar (3)
            </button>
          </div>

          <!-- Grid Produk / Layanan Terpadu -->
          <div id="homeCatalogGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-8">

            <!-- 1. WEBSITE STARTER UMKM -->
            <div class="home-product-card" data-category="website">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Website UMKM</span>
                    <span class="material-symbols-outlined text-primary text-2xl">devices</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Paket Starter Website UMKM</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Website 1 halaman profesional untuk usaha kuliner, jasa, toko, dan profil bisnis agar mudah ditemukan pelanggan di Google.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Mulai Harga:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 1.490.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Sudah termasuk domain .com + hosting 1 tahun</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>1 Halaman Landing Page responsif (HP &amp; Laptop)</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Tombol pesan langsung ke WhatsApp pembeli</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Integrasi Google Maps &amp; Media Sosial</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Garansi maintenance teknis 3 bulan</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20berminat%20dengan%20Paket%20Starter%20Website%20UMKM%20(Rp%201.490.000)" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-green-600 hover:bg-green-700 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    <span>Pesan via WA Konsultan</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 2. WEBSITE BISNIS PRO -->
            <div class="home-product-card" data-category="website">
              <div class="relative h-full rounded-3xl bg-surface-container-lowest border-2 border-primary p-6 md:p-8 flex flex-col justify-between shadow-xl hover:-translate-y-1 transition-all">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                  <span class="inline-flex items-center gap-1 rounded-full bg-primary px-4 py-1 text-xs font-bold text-white shadow-md uppercase tracking-wider">
                    <span class="material-symbols-outlined text-sm">stars</span>
                    Paling Favorit Bisnis
                  </span>
                </div>
                <div>
                  <div class="flex items-center justify-between pb-3 pt-2">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Multi-Halaman</span>
                    <span class="material-symbols-outlined text-primary text-2xl">domain</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Website Professional Business</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Website lengkap 5-7 halaman untuk CV, PT, klinik, konsultan, sekolah, dan brand yang ingin membangun kredibilitas kuat.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Harga Investasi:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 3.890.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Gratis email bisnis (nama@perusahaanmu.com)</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>5-7 Halaman (Home, Tentang, Layanan, Portofolio, Kontak)</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Panel admin mudah untuk update artikel/produk sendiri</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Optimasi SEO Google agar mudah dicari di pencarian</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Garansi maintenance 6 bulan + backup mingguan</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20berminat%20dengan%20Paket%20Website%20Professional%20(Rp%203.890.000)" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-primary hover:bg-primary-container text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    <span>Pesan via WA Konsultan</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 3. TOKO ONLINE / CUSTOM APP -->
            <div class="home-product-card" data-category="website">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Custom &amp; Toko</span>
                    <span class="material-symbols-outlined text-primary text-2xl">shopping_cart</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Toko Online / Web Aplikasi</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Sistem toko online dengan katalog, keranjang belanja, cek ongkir otomatis, hingga aplikasi sistem informasi operasional bisnis.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Harga Investasi:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Sesuai Kebutuhan</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Estimasi transparan setelah diskusi santai</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Sistem keranjang belanja &amp; pembayaran otomatis / QRIS</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Perhitungan ongkos kirim kurir otomatis</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Laporan penjualan &amp; data pelanggan tersimpan rapi</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20toko%20online%20%2F%20web%20custom" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-green-600 hover:bg-green-700 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    <span>Diskusi via WA Konsultan</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 4. KONSULTASI BISNIS UMKM -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">UMKM</span>
                    <span class="material-symbols-outlined text-primary text-2xl">insights</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Konsultasi &amp; Insight Bisnis UMKM</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    diskusi privat dan menjamin keamanan data dalam membantu pengembangan usaha Anda.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Harga Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 30.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Bisa melalui Google Meet atau WA Call/chat</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Bedah kelemahan promosi &amp; media sosial usahamu</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Rencana aksi praktis yang langsung bisa dipraktikkan</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Dokumen rangkuman insight format PDF</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20jadwalkan%20Konsultasi%20Bisnis%20UMKM" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-green-600 hover:bg-green-700 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    <span>Jadwalkan via WA Konsultan</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 5. DESAIN GRAFIS & LOGO -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Desain</span>
                    <span class="material-symbols-outlined text-primary text-2xl">palette</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Desain Grafis</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Jasa pembuatan desain kemasan produk,logo, poster promosi, bahan postingan instagram.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Harga Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 30.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Desain Perkonten</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Desain profesional resolusi tinggi (HD)</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Format file lengkap (PNG, JPG, PDF siap cetak)</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Gratis revisi sampai puas</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20Desain%20Grafis%20%2F%20Logo" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-slate-800 hover:bg-slate-900 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg text-amber-400">support_agent</span>
                    <span>Order via WA Admin</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 6. VIDEO EDITING REELS / TIKTOK -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Video</span>
                    <span class="material-symbols-outlined text-primary text-2xl">movie</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Video Editing Reels &amp; TikTok</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Edit video produk, video promosi, konten edukasi dengan teks berjalan kekinian, sound effect, dan musik penarik perhatian.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 40.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Per video durasi 30 - 60 detik</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Subtitle dinamis &amp; sound effect menarik</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Format vertikal 9:16 cocok untuk TikTok &amp; IG Reels</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Pengerjaan cepat (1-2 hari kerja)</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20Video%20Editing%20Reels%2FTikTok" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-slate-800 hover:bg-slate-900 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg text-amber-400">support_agent</span>
                    <span>Order via WA Admin</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 7. SOCIAL MEDIA MANAGEMENT -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Sosmed</span>
                    <span class="material-symbols-outlined text-primary text-2xl">share</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Pengelolaan Media Sosial</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Serahkan urusan akun Instagram &amp; TikTok bisnis Anda. Kami buatkan jadwal, desain feed, caption menarik, dan hashtag yang tepat.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 650.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Per bulan (Paket 12 postingan rapi)</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>12 Desain feed estetik + teks caption menarik</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Riset hashtag relevan agar menjangkau audiens lokal</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20Social%20Media%20Management" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-green-600 hover:bg-green-700 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    <span>Konsultasi via WA Konsultan</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 8. FORMAT DOKUMEN MS WORD -->
            <div class="home-product-card" data-category="bisnis">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Dokumen</span>
                    <span class="material-symbols-outlined text-primary text-2xl">description</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Format Dokumen Microsoft Word</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Jasa pengetikan cepat, perapian margin, pembuatan daftar isi/tabel otomatis, format SOP perusahaan, surat resmi, dan company profile.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 25.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Format dokumen rapi standar siap cetak</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Daftar isi, daftar gambar &amp; halaman otomatis</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Format margin &amp; spasi rapi standar resmi</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20Pengetikan%20Dokumen%20Word" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-slate-800 hover:bg-slate-900 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg text-amber-400">support_agent</span>
                    <span>Order via WA Admin</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 9. JOKI TUGAS MAHASISWA & PELAJAR (CIHUYYY) -->
            <div class="home-product-card" data-category="joki">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Joki Cihuyyy</span>
                    <span class="material-symbols-outlined text-primary text-2xl">school</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Joki Tugas Pelajar &amp; Mahasiswa</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Bantuan tugas all materi: Slide PPT animasi estetik, makalah Word rapi standar kampus, rangkuman materi, dan tugas harian.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Ramah Pelajar:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Mulai Rp 10.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Bisa pengerjaan kilat 1 - 24 jam</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>100% Rahasia &amp; data identitas aman</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Free 3x revisi sampai nilai aman</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Joki%20Cihuyyy%2C%20saya%20mau%20order%20Joki%20Tugas%20(PPT%2FWord%2FPDF)" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-slate-800 hover:bg-slate-900 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg text-amber-400">support_agent</span>
                    <span>Order via WA Admin (0813-8819-1291)</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 10. JOKI WEBSITE & CODING CRUD -->
            <div class="home-product-card" data-category="joki">
              <div class="h-full rounded-3xl bg-surface-container-lowest border-2 border-primary p-6 md:p-8 flex flex-col justify-between shadow-xl hover:-translate-y-1 transition-all">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Tugas Coding</span>
                    <span class="material-symbols-outlined text-primary text-2xl">code</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Joki Website &amp; Coding</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Bantuan praktikum dan tugas akhir pembuatan sistem coding , hingga website portofolio magang.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Harga Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Mulai Rp 30.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Include bimbingan kodingan &amp; cara instalasi</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Source code rapi &amp; database terstruktur</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Include penjelasan alur kodingan untuk sidang/demo</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Joki%20Cihuyyy%2C%20saya%20mau%20order%20Joki%20Website%20CRUD" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-primary hover:bg-primary-container text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    <span>Order via WA Admin (0813-8819-1291)</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- 11. JOKI DESAIN CANVA & PRESENTASI -->
            <div class="home-product-card" data-category="joki">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Desain Tugas</span>
                    <span class="material-symbols-outlined text-primary text-2xl">draw</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Joki Desain Canva &amp; Poster</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Desain slide presentasi Canva modern, poster ilmiah, infografis tugas, banner acara organisasi kampus/sekolah.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Mulai Rp 20.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Termasuk link template Canva yang bisa diedit</span>
                  </div>
                  <ul class="space-y-2.5 text-sm text-on-surface">
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Layout kekinian, rapi, dan enak dilihat</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Free 2x revisi cepat</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-6 border-t border-surface-container mt-6">
                  <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Joki%20Cihuyyy%2C%20saya%20mau%20order%20Desain%20Canva" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-slate-800 hover:bg-slate-900 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg text-amber-400">support_agent</span>
                    <span>Order via WA Admin (0813-8819-1291)</span>
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

      <!-- Section: Bukti Hasil Kerja (Portofolio Ringkas Tanpa Istilah Rumit) -->
      <section id="portofolio" class="w-full py-space-2xl px-gutter bg-surface-container-low/50 border-t border-surface-container scroll-mt-24">
        <div class="max-w-[1320px] mx-auto">
          <div class="text-center max-w-2xl mx-auto pb-space-xl">
            <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Hasil Nyata</span>
            <h2 class="text-3xl md:text-4xl font-black text-on-surface pt-1">Contoh Website &amp; Karya Kami</h2>
            <p class="text-base text-on-surface-variant pt-2">
              Website yang kami bangun fokus pada kecepatan loading, tampilan yang ramah di HP, dan memudahkan calon pembeli menghubungi Anda.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Portofolio 1 -->
            <div class="rounded-3xl bg-surface-container-lowest border border-surface-container p-6 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between">
              <div>
                <div class="h-44 w-full rounded-2xl bg-slate-900 flex items-center justify-center text-white mb-4 overflow-hidden relative">
                  <span class="material-symbols-outlined text-6xl text-primary opacity-80">storefront</span>
                  <span class="absolute bottom-3 left-3 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-semibold">Toko Online Audio</span>
                </div>
                <h3 class="text-xl font-bold text-on-surface">Zenith Audio Store</h3>
                <p class="text-sm text-on-surface-variant pt-1">
                  Website toko online interaktif dengan katalog produk bersih, loading kilat, dan tombol checkout langsung ke WhatsApp admin.
                </p>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between text-xs text-on-surface-variant font-medium">
                <span>Hasil: Konversi +64%</span>
                <span class="text-green-600 font-bold">🟢 Live Project</span>
              </div>
            </div>

            <!-- Portofolio 2 -->
            <div class="rounded-3xl bg-surface-container-lowest border border-surface-container p-6 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between">
              <div>
                <div class="h-44 w-full rounded-2xl bg-slate-900 flex items-center justify-center text-white mb-4 overflow-hidden relative">
                  <span class="material-symbols-outlined text-6xl text-cyan-400 opacity-80">local_shipping</span>
                  <span class="absolute bottom-3 left-3 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-semibold">Jasa Ekspedisi Logistik</span>
                </div>
                <h3 class="text-xl font-bold text-on-surface">Nusantara Logistics</h3>
                <p class="text-sm text-on-surface-variant pt-1">
                  Website company profile modern dilengkapi fitur cek tarif ongkir otomatis dan formulir pemesanan armada penjemputan barang.
                </p>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between text-xs text-on-surface-variant font-medium">
                <span>Hasil: 12.000+ Pengiriman</span>
                <span class="text-green-600 font-bold">🟢 Live Project</span>
              </div>
            </div>

            <!-- Portofolio 3 -->
            <div class="rounded-3xl bg-surface-container-lowest border border-surface-container p-6 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between">
              <div>
                <div class="h-44 w-full rounded-2xl bg-slate-900 flex items-center justify-center text-white mb-4 overflow-hidden relative">
                  <span class="material-symbols-outlined text-6xl text-amber-400 opacity-80">spa</span>
                  <span class="absolute bottom-3 left-3 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-xs font-semibold">Klinik Kecantikan &amp; Skincare</span>
                </div>
                <h3 class="text-xl font-bold text-on-surface">Aura Skin Clinic</h3>
                <p class="text-sm text-on-surface-variant pt-1">
                  Website reservasi dokter dan katalog perawatan wajah dengan navigasi elegan, warna lembut, dan panduan lokasi Google Maps.
                </p>
              </div>
              <div class="pt-4 border-t border-surface-container mt-4 flex items-center justify-between text-xs text-on-surface-variant font-medium">
                <span>Hasil: Booking Naik 75%</span>
                <span class="text-green-600 font-bold">🟢 Live Project</span>
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
                  Klik tombol WA yang tersedia. Konsultan atau Admin kami akan merespons dengan bahasa yang santun, ramah, dan jelas.
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
      <section id="faq" class="w-full py-space-2xl px-gutter bg-surface-container-lowest border-t border-surface-container scroll-mt-24">
        <div class="max-w-[800px] mx-auto">
          <div class="text-center pb-space-xl">
            <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Tanya Jawab</span>
            <h2 class="text-3xl md:text-4xl font-black text-on-surface pt-1">Pertanyaan yang Sering Diajukan</h2>
          </div>

          <div class="space-y-4">
            <details class="group p-5 rounded-2xl bg-surface-container-low border border-surface-container transition-all" open>
              <summary class="flex items-center justify-between font-bold text-base md:text-lg text-on-surface cursor-pointer list-none">
                <span>Saya orang awam dan belum paham teknis website, apakah dibantu?</span>
                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
              </summary>
              <p class="text-sm text-on-surface-variant pt-3 leading-relaxed border-t border-surface-container/60 mt-3">
                Tentu saja! Anda cukup menceritakan usaha atau keinginan Anda via WhatsApp. Tim konsultan kami yang akan menyusunkan konsep, memilihkan nama domain, hingga mengajari cara memakainya sampai paham.
              </p>
            </details>

            <details class="group p-5 rounded-2xl bg-surface-container-low border border-surface-container transition-all">
              <summary class="flex items-center justify-between font-bold text-base md:text-lg text-on-surface cursor-pointer list-none">
                <span>Berapa lama waktu pembuatan website atau pesanan lainnya?</span>
                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
              </summary>
              <p class="text-sm text-on-surface-variant pt-3 leading-relaxed border-t border-surface-container/60 mt-3">
                Untuk Landing Page Starter biasanya selesai dalam 3-5 hari kerja. Untuk video/desain 1-2 hari kerja. Khusus joki tugas bahkan tersedia layanan kilat dalam hitungan jam.
              </p>
            </details>

            <details class="group p-5 rounded-2xl bg-surface-container-low border border-surface-container transition-all">
              <summary class="flex items-center justify-between font-bold text-base md:text-lg text-on-surface cursor-pointer list-none">
                <span>Bagaimana sistem pembayarannya?</span>
                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
              </summary>
              <p class="text-sm text-on-surface-variant pt-3 leading-relaxed border-t border-surface-container/60 mt-3">
                Kami mendukung transfer bank (BCA, Mandiri, BRI, BNI) dan QRIS/e-wallet (GoPay, OVO, Dana). Untuk pembuatan website bisa bertahap (DP di awal, pelunasan saat selesai).
              </p>
            </details>

            <details class="group p-5 rounded-2xl bg-surface-container-low border border-surface-container transition-all">
              <summary class="flex items-center justify-between font-bold text-base md:text-lg text-on-surface cursor-pointer list-none">
                <span>Apakah saya harus menghubungi nomor Admin atau Konsultan?</span>
                <span class="material-symbols-outlined text-primary group-open:rotate-180 transition-transform">expand_more</span>
              </summary>
              <p class="text-sm text-on-surface-variant pt-3 leading-relaxed border-t border-surface-container/60 mt-3">
                Bebas! Keduanya siap melayani Anda. Jika ingin tanya-tanya pembuatan website atau strategi bisnis, hubungi Konsultan di <strong>0878-6175-6916</strong>. Jika ingin order joki tugas, format dokumen Word, atau desain cepat, hubungi Admin di <strong>0813-8819-1291</strong>.
              </p>
            </details>
          </div>
        </div>
      </section>

      <!-- Final Banner Call to Action -->
      <section class="w-full py-space-xl px-gutter bg-slate-900 text-white">
        <div class="max-w-[1320px] mx-auto text-center">
          <h2 class="text-2xl md:text-4xl font-black text-white">Siap Memulai Proyek Anda Hari Ini?</h2>
          <p class="text-sm md:text-base text-slate-300 max-w-xl mx-auto pt-2 pb-6">
            Ceritakan kebutuhan bisnis Anda atau serahkan tugas Anda ke tim kami. Respons cepat, ramah, dan solutif.
          </p>
          <div class="flex flex-wrap items-center justify-center gap-3">
            <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-green-600 hover:bg-green-700 text-white font-bold text-sm md:text-base shadow-lg transition-transform hover:scale-105">
              <span class="material-symbols-outlined text-lg">chat</span>
              <span>Hubungi Konsultan (0878-6175-6916)</span>
            </a>
            <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20layanan" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-surface-container-lowest hover:bg-surface text-slate-900 font-bold text-sm md:text-base shadow-lg transition-transform hover:scale-105">
              <span class="material-symbols-outlined text-lg text-amber-600">support_agent</span>
              <span>Hubungi Admin (0813-8819-1291)</span>
            </a>
          </div>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <?php include_once __DIR__ . '/../Layout/partials/footer.php'; ?>

    <!-- Dual Floating WhatsApp Button (Ramah Semua Umur) -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-2.5">
      <!-- Popup Dual Menu (Hidden by default, toggled by button) -->
      <div id="waMenuPopup" class="hidden flex flex-col gap-2 p-3 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-2xl mb-1 min-w-[260px]">
        <span class="text-xs font-bold text-on-surface-variant uppercase tracking-wider px-2">Hubungi via WhatsApp:</span>
        <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan" target="_blank" rel="noopener" class="flex items-center gap-3 p-2.5 rounded-xl bg-green-50 hover:bg-green-100 text-green-900 transition-colors">
          <span class="w-9 h-9 rounded-full bg-green-600 text-white flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-lg">forum</span>
          </span>
          <div class="flex flex-col">
            <span class="font-bold text-xs">Konsultasi Bisnis</span>
            <span class="text-[11px] text-green-700 font-mono">0878-6175-6916</span>
          </div>
        </a>
        <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20layanan" target="_blank" rel="noopener" class="flex items-center gap-3 p-2.5 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-900 transition-colors">
          <span class="w-9 h-9 rounded-full bg-slate-800 text-amber-400 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-lg">support_agent</span>
          </span>
          <div class="flex flex-col">
            <span class="font-bold text-xs">Admin &amp; Joki Tugas</span>
            <span class="text-[11px] text-slate-600 font-mono">0813-8819-1291</span>
          </div>
        </a>
      </div>

      <button id="waMenuToggle" type="button" aria-label="Buka Kontak WhatsApp" class="flex items-center gap-2.5 px-4 py-3 rounded-full bg-green-600 hover:bg-green-700 text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
        <span class="material-symbols-outlined text-2xl">chat</span>
        <span class="text-sm font-bold pr-1 hidden sm:inline">Tanya Kami via WA</span>
      </button>
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
              const category = card.getAttribute("data-category");
              if (filter === "all" || category === filter) {
                card.style.display = "block";
              } else {
                card.style.display = "none";
              }
            });
          });
        });

        // Floating WhatsApp Toggle
        const waToggle = document.getElementById("waMenuToggle");
        const waPopup = document.getElementById("waMenuPopup");
        if (waToggle && waPopup) {
          waToggle.addEventListener("click", function (e) {
            e.stopPropagation();
            waPopup.classList.toggle("hidden");
          });
          document.addEventListener("click", function (e) {
            if (!waPopup.contains(e.target) && !waToggle.contains(e.target)) {
              waPopup.classList.add("hidden");
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
