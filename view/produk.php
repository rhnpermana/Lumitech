<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
$currentPage = 'produk';
require_once __DIR__ . '/../Layout/partials/whatsapp_helper.php';
include_once __DIR__ . '/../Layout/partials/app.php';
include_once __DIR__ . '/../Layout/partials/navhome.php';
?>
  <body class="bg-surface font-body-md text-on-surface antialiased pt-20 lg:pt-28 pb-24 lg:pb-0">

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

          <!-- Jalur Kontak Resmi Banner -->
          <div class="mt-6 flex flex-wrap items-center justify-center gap-3 text-sm">
            <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin bertanya dan konsultasi seputar layanan Lumitech.id.") ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-surface-container-lowest border border-surface-container shadow-sm hover:border-green-500 transition-colors">
              <span class="material-symbols-outlined text-green-600 text-lg">chat</span>
              <span class="text-on-surface">Hubungi Kami via WhatsApp: <strong>0878-6175-6916</strong></span>
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
              Semua Layanan (14)
            </button>
            <button type="button" data-filter="website" class="filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🌐 Pembuatan Website (3)
            </button>
            <button type="button" data-filter="bisnis" class="filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              💼 Bisnis, Desain &amp; Pakaian (8)
            </button>
            <button type="button" data-filter="joki" class="filter-btn px-5 py-2.5 rounded-full text-sm md:text-base font-bold bg-surface-container hover:bg-surface-container-high text-on-surface transition-all">
              🎓 Dokumen, Office &amp; Joki (5)
            </button>
          </div>

          <!-- Grid Produk / Layanan (Dibuat Kompak & Rapi) -->
          <div id="catalogGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-5 pt-6">

            <!-- PRODUK 1: WEBSITE STARTER UMKM -->
            <div class="product-card" data-category="website">
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

            <!-- PRODUK 2: WEBSITE BISNIS PRO (FAVORIT) -->
            <div class="product-card" data-category="website">
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

            <!-- PRODUK 3: TOKO ONLINE / CUSTOM APP -->
            <div class="product-card" data-category="website">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Custom &amp; Toko</span>
                    <span class="material-symbols-outlined text-primary text-xl">shopping_cart</span>
                  </div>
                  <h3 class="text-base sm:text-lg font-bold text-on-surface">Toko Online / Web Aplikasi</h3>
                  <p class="text-xs text-on-surface-variant pt-1 pb-3 line-clamp-2">
                    Sistem toko online dengan katalog, keranjang belanja, cek ongkir otomatis, hingga sistem informasi bisnis.
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

            <!-- PRODUK 4: KONSULTASI & INSIGHT BISNIS UMKM -->
            <div class="product-card" data-category="bisnis">
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

            <!-- PRODUK 5: DESAIN GRAFIS & LOGO -->
            <div class="product-card" data-category="bisnis">
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

            <!-- PRODUK 6: VIDEO EDITING REELS / TIKTOK -->
            <div class="product-card" data-category="bisnis">
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

            <!-- PRODUK 7: SOCIAL MEDIA MANAGEMENT -->
            <div class="product-card" data-category="bisnis">
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

            <!-- PRODUK 8: FORMAT DOKUMEN MS WORD -->
            <div class="product-card" data-category="bisnis">
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

            <!-- PRODUK 9: JASA DESAIN PAKAIAN & APPAREL -->
            <div class="product-card" data-category="bisnis">
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

            <!-- PRODUK 10: JASA OLAH DATA MICROSOFT EXCEL -->
            <div class="product-card" data-category="bisnis joki">
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

            <!-- PRODUK 11: JASA SLIDE MICROSOFT POWERPOINT -->
            <div class="product-card" data-category="bisnis joki">
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

            <!-- PRODUK 12: JOKI TUGAS MAHASISWA & PELAJAR (CIHUYYY) -->
            <div class="product-card" data-category="joki">
              <div class="h-full rounded-2xl bg-surface-container-lowest border border-surface-container hover:border-primary/50 p-4 sm:p-5 flex flex-col justify-between shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <div>
                  <div class="flex items-center justify-between pb-2">
                    <span class="text-[11px] uppercase font-extrabold text-primary bg-primary-fixed/60 px-2.5 py-0.5 rounded-full">Joki Cihuyyy</span>
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
                  <a href="<?= getWaOrderUrl('joki_tugas') ?>" target="_blank" rel="noopener" class="w-full flex items-center justify-center gap-1.5 py-2.5 px-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold text-xs sm:text-sm shadow-sm transition-all hover:scale-[1.01]">
                    <span class="material-symbols-outlined text-base">chat</span>
                    <span>Pesan via WhatsApp</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- PRODUK 13: JOKI WEBSITE & CODING CRUD -->
            <div class="product-card" data-category="joki">
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

            <!-- PRODUK 14: JOKI DESAIN CANVA & PRESENTASI -->
            <div class="product-card" data-category="joki">
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

          <!-- Banner Direct to Portfolio Section in Beranda -->
          <div class="mt-12 p-6 rounded-3xl bg-surface-container-low border border-surface-container flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div>
              <h4 class="font-bold text-lg text-on-surface">Ingin melihat contoh hasil website &amp; karya nyata kami?</h4>
              <p class="text-sm text-on-surface-variant pt-0.5">Lihat portofolio nyata contoh desain pakaian, landing page website modern, dan olah data resmi.</p>
            </div>
            <a href="index.php#portofolio" class="shrink-0 px-6 py-3 rounded-full bg-primary text-white font-bold text-sm shadow hover:bg-primary-container transition-colors flex items-center gap-2">
              <span>Lihat Portofolio Lengkap</span>
              <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </a>
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
                  Kirim pesan ke nomor WhatsApp kami di 0878-6175-6916. Ceritakan detail kebutuhan Anda dengan santai.
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

    <!-- Floating WhatsApp Button (Desktop only: di mobile sudah ada tombol Chat WA di Bottom Bar) -->
    <a href="https://wa.me/6287861756916?text=<?= rawurlencode("Halo Admin Lumitech, saya ingin bertanya dan konsultasi seputar layanan Lumitech.id.") ?>" target="_blank" rel="noopener" aria-label="Chat WhatsApp" class="hidden lg:flex fixed bottom-6 right-6 z-50 items-center gap-2.5 px-4 py-3 rounded-full bg-green-600 hover:bg-green-700 text-white shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-green-300">
      <span class="material-symbols-outlined text-2xl">chat</span>
      <span class="text-sm font-bold pr-1">Tanya Kami via WA</span>
    </a>

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
