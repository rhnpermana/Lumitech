<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo.jpeg')) ? '' : '../');
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-b border-surface-container/60">
  <div class="h-20 w-full px-gutter flex items-center justify-between max-w-[1320px] mx-auto">
    <!-- Brand Logo -->
    <a href="#" class="flex items-center gap-space-sm group">
      <img alt="Lumitech Logo" class="h-9 w-auto object-contain rounded-lg transition-transform group-hover:scale-105" src="<?= $assetBase ?>assets/img/logo.jpeg" />
      <span class="font-headline-sm text-headline-sm tracking-tight text-on-surface font-bold">
        Lumitech<span class="text-primary-container">.id</span>
      </span>
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center gap-space-md">
      <a class="font-label-lg text-label-lg text-on-surface-variant hover:text-primary transition-colors px-space-sm py-space-xs" href="#">Beranda</a>
      <a class="font-label-lg text-label-lg text-on-surface-variant hover:text-primary transition-colors px-space-sm py-space-xs" href="#portofolio">Portofolio &amp; Studi Kasus</a>
      <a class="font-label-lg text-label-lg text-on-surface-variant hover:text-primary transition-colors px-space-sm py-space-xs" href="#paket-harga">Layanan &amp; Harga</a>
      <a class="font-label-lg text-label-lg text-on-surface-variant hover:text-primary transition-colors px-space-sm py-space-xs" href="#garansi">Tentang Kami</a>
    </nav>

    <!-- Header Actions -->
    <div class="flex items-center gap-space-sm sm:gap-space-md">
      <!-- Status Badge -->
      <div class="hidden lg:inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
        <span class="h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
        <span>Online • Siap Melayani</span>
      </div>

      <!-- CTA WhatsApp Desktop -->
      <a class="hidden sm:inline-flex items-center gap-space-xs bg-primary-container hover:bg-primary text-on-primary font-label-lg text-label-lg px-space-lg py-space-sm rounded-full transition-all shadow-[0_12px_24px_-4px_rgba(0,71,255,0.28)] hover:-translate-y-0.5" href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener">
        <span>Konsultasi Gratis</span>
        <span class="material-symbols-outlined text-base">arrow_forward</span>
      </a>

      <!-- Mobile Hamburger Button -->
      <button id="mobileMenuBtn" type="button" aria-label="Buka Menu Navigasi" aria-expanded="false" class="md:hidden inline-flex items-center justify-center p-2.5 rounded-xl bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors focus:outline-none focus:ring-2 focus:ring-primary-container">
        <span id="menuIcon" class="material-symbols-outlined text-2xl">menu</span>
      </button>
    </div>
  </div>

  <!-- Mobile Navigation Drawer -->
  <div id="mobileMenuDrawer" class="hidden md:hidden bg-surface-container-lowest border-b border-surface-container shadow-xl transition-all duration-300">
    <div class="px-gutter py-space-lg flex flex-col gap-space-sm">
      <a class="mobile-nav-link flex items-center justify-between py-2.5 font-label-lg text-label-lg text-on-surface hover:text-primary transition-colors border-b border-surface-container/40" href="#">
        <span>Beranda</span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-2.5 font-label-lg text-label-lg text-on-surface hover:text-primary transition-colors border-b border-surface-container/40" href="#portofolio">
        <span>Portofolio &amp; Studi Kasus</span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-2.5 font-label-lg text-label-lg text-on-surface hover:text-primary transition-colors border-b border-surface-container/40" href="#paket-harga">
        <span>Layanan &amp; Paket Harga</span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-2.5 font-label-lg text-label-lg text-on-surface hover:text-primary transition-colors border-b border-surface-container/40" href="#garansi">
        <span>Tentang &amp; Garansi</span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>
      <a class="mobile-nav-link flex items-center justify-between py-2.5 font-label-lg text-label-lg text-on-surface hover:text-primary transition-colors" href="#faq">
        <span>FAQ Pertanyaan</span>
        <span class="material-symbols-outlined text-sm text-on-surface-variant">chevron_right</span>
      </a>

      <!-- Mobile Drawer CTA Button -->
      <div class="pt-space-sm">
        <a class="flex items-center justify-center gap-space-xs w-full bg-primary-container text-on-primary font-label-lg text-label-lg py-3 rounded-full shadow-md hover:bg-primary transition-colors" href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener">
          <span class="material-symbols-outlined text-lg">chat</span>
          <span>Konsultasi WhatsApp Sekarang</span>
        </a>
      </div>
    </div>
  </div>
</header>
