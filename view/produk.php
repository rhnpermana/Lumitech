<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
$currentPage = 'produk';
include_once __DIR__ . '/../Layout/partials/app.php';
include_once __DIR__ . '/../Layout/partials/navhome.php';
?>
  <body class="bg-surface font-body-md text-on-surface antialiased pt-28">

    <main class="w-full">
      <!-- Header Banner Katalog -->
      <section class="w-full py-space-xl px-gutter bg-surface-container-low/60 border-b border-surface-container">
        <div class="max-w-[1320px] mx-auto text-center">
          <div class="inline-flex items-center gap-2 rounded-full bg-primary-fixed/60 border border-primary/20 px-4 py-1.5 text-xs md:text-sm font-bold text-primary mb-3">
            <span class="material-symbols-outlined text-base">storefront</span>
            <span>Katalog Resmi Semua Layanan Lumitech.id</span>
          </div>
          <h1 class="text-3xl md:text-5xl font-black text-on-surface tracking-tight">
            Pilih Layanan Sesuai Kebutuhan Anda
          </h1>
          <p class="text-base md:text-lg text-on-surface-variant max-w-2xl mx-auto pt-3">
            Harga jujur &amp; transparan, tanpa biaya tersembunyi. Pengerjaan cepat, rapi, dan bergaransi hasil memuaskan untuk semua umur.
          </p>

          <!-- Dua Jalur Kontak Resmi Banner -->
          <div class="mt-6 flex flex-wrap items-center justify-center gap-3 text-sm">
            <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20tanya%20seputar%20layanan" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface-container-lowest border border-surface-container shadow-sm hover:border-green-500 transition-colors">
              <span class="material-symbols-outlined text-green-600 text-lg">forum</span>
              <span class="text-on-surface">Konsultasi Bisnis: <strong>0878-6175-6916</strong></span>
            </a>
            <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20layanan" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface-container-lowest border border-surface-container shadow-sm hover:border-amber-500 transition-colors">
              <span class="material-symbols-outlined text-amber-500 text-lg">support_agent</span>
              <span class="text-on-surface">Admin &amp; Joki: <strong>0813-8819-1291</strong></span>
            </a>
          </div>
        </div>
      </section>

      <!-- Katalog Interaktif Filter -->
      <section class="w-full py-space-xl px-gutter">
        <div class="max-w-[1320px] mx-auto">
          <!-- Filter Kategori Tombol Mudah (Ramah Semua Umur) -->
          <div class="flex flex-wrap items-center justify-center gap-2 pb-8 border-b border-surface-container">
            <button type="button" data-filter="all" class="filter-btn active-filter px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-primary text-white shadow-sm transition-all hover:opacity-90">
              Semua Layanan (11)
            </button>
            <button type="button" data-filter="website" class="filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🌐 Pembuatan Website (3)
            </button>
            <button type="button" data-filter="bisnis" class="filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              💼 Bisnis &amp; UMKM (5)
            </button>
            <button type="button" data-filter="joki" class="filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🎓 Joki Tugas Pelajar (3)
            </button>
          </div>

          <!-- Grid Produk / Layanan -->
          <div id="catalogGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-8">

            <!-- PRODUK 1: WEBSITE STARTER UMKM -->
            <div class="product-card" data-category="website">
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
                    <span class="text-xs text-on-surface-variant block font-medium">Harga Investasi:</span>
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

            <!-- PRODUK 2: WEBSITE BISNIS PRO (FAVORIT) -->
            <div class="product-card" data-category="website">
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

            <!-- PRODUK 3: TOKO ONLINE / CUSTOM APP -->
            <div class="product-card" data-category="website">
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
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Bimbingan penggunaan sampai lancar</span>
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

            <!-- PRODUK 4: KONSULTASI & INSIGHT BISNIS UMKM -->
            <div class="product-card" data-category="bisnis">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">UMKM</span>
                    <span class="material-symbols-outlined text-primary text-2xl">insights</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Konsultasi &amp; Insight Bisnis UMKM</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Sesi diskusi privat 90 menit membedah cara jualan online, membenahi branding produk, dan strategi menaikkan omset usaha.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Sesi:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 250.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Per sesi 90 menit (Online via Google Meet / WA)</span>
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
                  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20jadwalkan%20Konsultasi%20Bisnis%20UMKM%20(Rp%20250.000)" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-2 py-3.5 px-4 rounded-full bg-green-600 hover:bg-green-700 text-white font-bold text-sm md:text-base shadow-md transition-all hover:scale-[1.02]">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    <span>Jadwalkan via WA Konsultan</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- PRODUK 5: DESAIN GRAFIS, LOGO & FEED -->
            <div class="product-card" data-category="bisnis">
              <div class="h-full rounded-3xl bg-surface-container-lowest border border-surface-container p-6 md:p-8 flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Desain</span>
                    <span class="material-symbols-outlined text-primary text-2xl">palette</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Desain Grafis, Logo &amp; Promosi</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Jasa pembuatan desain logo usaha, banner toko, kemasan produk, brosur cetak, dan feed Instagram yang rapi dan memikat.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Mulai:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 150.000</span>
                    <span class="text-xs text-on-surface-variant block pt-0.5">Paket 3 konten feed / logo usaha UMKM</span>
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
                      <span>Gratis 2x revisi sampai puas</span>
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

            <!-- PRODUK 6: VIDEO EDITING REELS / TIKTOK -->
            <div class="product-card" data-category="bisnis">
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
                    <span class="text-2xl md:text-3xl font-black text-primary">Rp 75.000</span>
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

            <!-- PRODUK 7: SOCIAL MEDIA MANAGEMENT -->
            <div class="product-card" data-category="bisnis">
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
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Laporan performa akun di akhir bulan</span>
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

            <!-- PRODUK 8: PENGETIKAN & DOKUMEN MS WORD -->
            <div class="product-card" data-category="bisnis">
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
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>File hasil dalam format DOCX dan PDF</span>
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

            <!-- PRODUK 9: JOKI TUGAS MAHASISWA & PELAJAR -->
            <div class="product-card" data-category="joki">
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
                      <span>Free 2x revisi sampai nilai aman</span>
                    </li>
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Cek plagiarisme Turnitin rendah &amp; orisinal</span>
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

            <!-- PRODUK 10: JOKI WEBSITE & CODING CRUD -->
            <div class="product-card" data-category="joki">
              <div class="h-full rounded-3xl bg-surface-container-lowest border-2 border-primary p-6 md:p-8 flex flex-col justify-between shadow-xl hover:-translate-y-1 transition-all">
                <div>
                  <div class="flex items-center justify-between pb-3">
                    <span class="text-xs uppercase font-extrabold text-primary bg-primary-fixed/60 px-3 py-1 rounded-full">Tugas Coding</span>
                    <span class="material-symbols-outlined text-primary text-2xl">code</span>
                  </div>
                  <h3 class="text-xl md:text-2xl font-bold text-on-surface">Joki Website &amp; Coding CRUD</h3>
                  <p class="text-sm text-on-surface-variant pt-1 pb-4">
                    Bantuan praktikum dan tugas akhir pembuatan sistem CRUD Laravel, PHP Native, MySQL, hingga website portofolio magang.
                  </p>
                  <div class="p-3.5 rounded-2xl bg-surface-container-low mb-5">
                    <span class="text-xs text-on-surface-variant block font-medium">Tarif Mahasiswa:</span>
                    <span class="text-2xl md:text-3xl font-black text-primary">Mulai Rp 150.000</span>
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
                    <li class="flex items-start gap-2">
                      <span class="material-symbols-outlined text-primary text-base shrink-0 mt-0.5">check_circle</span>
                      <span>Free revisi jika ada catatan dari dosen</span>
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

            <!-- PRODUK 11: JOKI DESAIN CANVA -->
            <div class="product-card" data-category="joki">
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
                      <span>Bebas pilih tema warna sesuai arahan tugas</span>
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
        </div>
      </section>

      <!-- Section: 3 Langkah Cara Pesan Mudah (Ramah Semua Umur) -->
      <section class="w-full py-space-xl px-gutter bg-surface-container-low/60 border-t border-surface-container">
        <div class="max-w-[1320px] mx-auto text-center">
          <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">Sangat Mudah &amp; Cepat</span>
          <h2 class="text-2xl md:text-4xl font-black text-on-surface pt-1 pb-8">3 Langkah Pesan Tanpa Ribet</h2>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
            <div class="p-6 rounded-3xl bg-surface-container-lowest border border-surface-container shadow-sm flex flex-col justify-between">
              <div>
                <span class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-xl mb-4">1</span>
                <h3 class="text-lg font-bold text-on-surface">Pilih Layanan yang Dibutuhkan</h3>
                <p class="text-sm text-on-surface-variant pt-2">
                  Tentukan paket atau kebutuhan Anda (website, desain, konsultasi, atau joki tugas).
                </p>
              </div>
            </div>

            <div class="p-6 rounded-3xl bg-surface-container-lowest border border-surface-container shadow-sm flex flex-col justify-between">
              <div>
                <span class="w-12 h-12 rounded-2xl bg-green-600 text-white flex items-center justify-center font-black text-xl mb-4">2</span>
                <h3 class="text-lg font-bold text-on-surface">Klik Tombol WhatsApp</h3>
                <p class="text-sm text-on-surface-variant pt-2">
                  Kirim pesan ke admin atau konsultan kami. Ceritakan detail kebutuhan Anda dengan santai.
                </p>
              </div>
            </div>

            <div class="p-6 rounded-3xl bg-surface-container-lowest border border-surface-container shadow-sm flex flex-col justify-between">
              <div>
                <span class="w-12 h-12 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-xl mb-4">3</span>
                <h3 class="text-lg font-bold text-on-surface">Hasil Jadi &amp; Bergaransi</h3>
                <p class="text-sm text-on-surface-variant pt-2">
                  Pengerjaan dimulai tepat waktu. Anda menerima hasil berkualitas dengan jaminan revisi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <?php include_once __DIR__ . '/../Layout/partials/footer.php'; ?>

    <!-- Dual Floating WhatsApp Button (Ramah Semua Umur) -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-2.5">
      <!-- Popup Dual Menu (Hidden by default, toggled by button) -->
      <div id="waMenuPopup" class="hidden flex flex-col gap-2 p-3 rounded-2xl bg-surface-container-lowest border border-surface-container shadow-2xl mb-1 min-w-[260px] animate-fade-in">
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
        // Filter Katalog Produk
        const filterBtns = document.querySelectorAll(".filter-btn");
        const productCards = document.querySelectorAll(".product-card");

        filterBtns.forEach((btn) => {
          btn.addEventListener("click", function () {
            const filter = this.getAttribute("data-filter");

            // Update button styles
            filterBtns.forEach((b) => {
              b.classList.remove("active-filter", "bg-primary", "text-white");
              b.classList.add("bg-surface-container", "text-on-surface");
            });
            this.classList.add("active-filter", "bg-primary", "text-white");
            this.classList.remove("bg-surface-container", "text-on-surface");

            // Filter cards
            productCards.forEach((card) => {
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
