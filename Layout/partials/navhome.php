<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
$isProdukPage = (isset($currentPage) && $currentPage === 'produk');
$homePrefix = $isProdukPage ? 'index.php' : '';
?>
<!-- Top Quick Contact Bar (Mudah Dihubungi Semua Umur) -->
<div class="fixed top-0 left-0 right-0 z-50 bg-slate-900 text-slate-200 text-xs py-1.5 px-gutter border-b border-slate-800">
  <div class="max-w-[1320px] mx-auto flex flex-wrap items-center justify-between gap-2">
    <div class="flex items-center gap-4 text-[13px]">
      <span class="inline-flex items-center gap-1.5 text-slate-300">
        <span class="material-symbols-outlined text-sm text-green-400">forum</span>
        <span>Konsultasi Bisnis:</span>
        <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan%20digital" target="_blank" rel="noopener" class="font-bold text-white hover:text-primary transition-colors underline decoration-slate-600">0878-6175-6916</a>
      </span>
      <span class="hidden sm:inline text-slate-600">•</span>
      <span class="inline-flex items-center gap-1.5 text-slate-300">
        <span class="material-symbols-outlined text-sm text-amber-400">support_agent</span>
        <span>Admin &amp; Joki:</span>
        <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20layanan" target="_blank" rel="noopener" class="font-bold text-white hover:text-amber-300 transition-colors underline decoration-slate-600">0813-8819-1291</a>
      </span>
    </div>
    <div class="hidden md:flex items-center gap-3 text-xs text-slate-400">
      <span>🟢 Layanan Buka Setiap Hari</span>
      <span>•</span>
      <span>Garansi Hasil Memuaskan</span>
    </div>
  </div>
</div>

<header class="fixed top-[33px] left-0 right-0 z-40 bg-surface/95 backdrop-blur-md shadow-sm border-b border-surface-container/80">
  <div class="h-20 w-full px-gutter flex items-center justify-between max-w-[1320px] mx-auto flex-nowrap gap-4">
    <!-- Brand Logo -->
    <a href="<?= $homePrefix ?>#" class="flex items-center gap-3 shrink-0 group">
      <div class="h-11 w-11 rounded-xl bg-slate-900 p-1 shadow-sm border border-slate-700/30 flex items-center justify-center transition-transform group-hover:scale-105 shrink-0">
        <img alt="Lumitech Logo" class="h-full w-full object-contain rounded-lg" src="<?= $assetBase ?>assets/img/logo-icon.png" />
      </div>
      <div class="flex flex-col">
        <span class="text-xl md:text-2xl tracking-tight text-on-surface font-black leading-none whitespace-nowrap">
          Lumitech<span class="text-primary">.id</span>
        </span>
        <span class="text-[11px] font-semibold text-on-surface-variant tracking-wider uppercase pt-0.5">Website &amp; Digital Solutions</span>
      </div>
    </a>

    <!-- Desktop Navigation (lg+) -->
    <nav class="hidden lg:flex items-center gap-6 xl:gap-8 shrink-0">
      <a class="text-[15px] font-semibold <?= !$isProdukPage ? 'text-primary' : 'text-on-surface-variant hover:text-primary' ?> transition-colors py-1 whitespace-nowrap" href="<?= $homePrefix ?>#">Beranda</a>
      <a class="text-[15px] font-semibold <?= $isProdukPage ? 'text-primary' : 'text-on-surface-variant hover:text-primary' ?> transition-colors py-1 whitespace-nowrap flex items-center gap-1.5" href="produk.php">
        <span>Semua Produk &amp; Harga</span>
        <span class="text-[10px] uppercase font-bold bg-primary text-white px-2 py-0.5 rounded-full">Katalog</span>
      </a>
      <a class="text-[15px] font-semibold text-on-surface-variant hover:text-primary transition-colors py-1 whitespace-nowrap" href="<?= $homePrefix ?>#portofolio">Portofolio</a>
      <a class="text-[15px] font-semibold text-on-surface-variant hover:text-primary transition-colors py-1 whitespace-nowrap" href="<?= $homePrefix ?>#cara-order">Cara Order</a>
      <a class="text-[15px] font-semibold text-on-surface-variant hover:text-primary transition-colors py-1 whitespace-nowrap" href="<?= $homePrefix ?>#garansi">Tentang &amp; Garansi</a>
      <a class="text-[15px] font-semibold text-on-surface-variant hover:text-primary transition-colors py-1 whitespace-nowrap" href="<?= $homePrefix ?>#faq">FAQ</a>
    </nav>

    <!-- Header Actions (Ramah Semua Umur) -->
    <div class="flex items-center gap-3 shrink-0">
      <!-- CTA WhatsApp Konsultasi -->
      <a class="hidden sm:inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold text-sm px-5 py-2.5 rounded-full transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5 whitespace-nowrap" href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener">
        <span class="material-symbols-outlined text-lg">chat</span>
        <span>Konsultasi WA</span>
      </a>

      <!-- Mobile Hamburger Button (< lg) -->
      <button id="mobileMenuBtn" type="button" aria-label="Buka Menu Navigasi" aria-expanded="false" class="lg:hidden inline-flex items-center justify-center p-2.5 rounded-xl bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors focus:outline-none focus:ring-2 focus:ring-primary">
        <span id="menuIcon" class="material-symbols-outlined text-2xl">menu</span>
      </button>
    </div>
  </div>

  <!-- Mobile Navigation Drawer (< lg) -->
  <div id="mobileMenuDrawer" class="hidden lg:hidden bg-surface-container-lowest border-b border-surface-container shadow-2xl">
    <div class="px-gutter py-5 flex flex-col gap-1.5 max-w-[1320px] mx-auto text-base">
      <a class="mobile-nav-link flex items-center justify-between py-3 px-3.5 rounded-xl font-bold text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors" href="<?= $homePrefix ?>#">
        <span class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-xl text-primary">home</span>
          Beranda Utama
        </span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-3 px-3.5 rounded-xl font-bold text-primary bg-primary-fixed/40 hover:bg-primary-fixed/60 transition-colors" href="produk.php">
        <span class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-xl">shopping_bag</span>
          Semua Produk &amp; Harga (Katalog Lengkap)
        </span>
        <span class="text-xs bg-primary text-white px-2 py-0.5 rounded-full">Lengkap</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-3 px-3.5 rounded-xl font-semibold text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors" href="<?= $homePrefix ?>#portofolio">
        <span class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-xl text-on-surface-variant">work</span>
          Hasil Kerja &amp; Portofolio
        </span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-3 px-3.5 rounded-xl font-semibold text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors" href="<?= $homePrefix ?>#cara-order">
        <span class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-xl text-on-surface-variant">checklist</span>
          Cara Pesan / Order Mudah
        </span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-3 px-3.5 rounded-xl font-semibold text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors" href="<?= $homePrefix ?>#garansi">
        <span class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-xl text-on-surface-variant">verified</span>
          Tentang Kami &amp; Garansi
        </span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-3 px-3.5 rounded-xl font-semibold text-on-surface hover:bg-surface-container-low hover:text-primary transition-colors" href="<?= $homePrefix ?>#faq">
        <span class="flex items-center gap-2.5">
          <span class="material-symbols-outlined text-xl text-on-surface-variant">help</span>
          Tanya Jawab (FAQ)
        </span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>

      <!-- 2 Pilihan Kontak WhatsApp Cepat di Mobile Drawer -->
      <div class="pt-4 border-t border-surface-container flex flex-col gap-2.5">
        <span class="text-xs uppercase font-bold text-on-surface-variant tracking-wider px-1">Pilih Kontak WhatsApp:</span>
        <a class="flex items-center justify-between gap-2 w-full bg-green-600 text-white font-bold py-3 px-4 rounded-xl shadow-md hover:bg-green-700 transition-colors" href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan%20digital" target="_blank" rel="noopener">
          <span class="flex items-center gap-2 text-sm">
            <span class="material-symbols-outlined text-xl">forum</span>
            <span>Konsultasi Bisnis &amp; Web</span>
          </span>
          <span class="text-xs bg-white/20 px-2.5 py-1 rounded-full font-mono">0878-6175-6916</span>
        </a>
        <a class="flex items-center justify-between gap-2 w-full bg-slate-800 text-white font-bold py-3 px-4 rounded-xl shadow-md hover:bg-slate-900 transition-colors" href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20layanan" target="_blank" rel="noopener">
          <span class="flex items-center gap-2 text-sm">
            <span class="material-symbols-outlined text-xl text-amber-400">support_agent</span>
            <span>Admin Pemesanan &amp; Joki</span>
          </span>
          <span class="text-xs bg-white/20 px-2.5 py-1 rounded-full font-mono">0813-8819-1291</span>
        </a>
      </div>
    </div>
  </div>
</header>
