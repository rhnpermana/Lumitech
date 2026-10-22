<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
$isProdukPage = (isset($currentPage) && $currentPage === 'produk');
$homePrefix = $isProdukPage ? 'index.php' : '';
?>
<!-- Top Quick Contact Bar (Mudah Dihubungi Semua Umur) -->

<!-- Header Utama (Fixed Top) -->
<header class="fixed top-0 left-0 right-0 z-40 bg-surface/95 backdrop-blur-md shadow-sm border-b border-surface-container/80">
  <div class="h-16 lg:h-20 w-full px-4 sm:px-gutter flex items-center justify-between max-w-[1320px] mx-auto flex-nowrap gap-4">
    <!-- Brand Logo -->
    <a href="<?= $homePrefix ?>#" class="flex items-center gap-2.5 sm:gap-3 shrink-0 group">
      <div class="h-9 w-9 sm:h-11 sm:w-11 rounded-xl bg-slate-900 p-1 shadow-sm border border-slate-700/30 flex items-center justify-center transition-transform group-hover:scale-105 shrink-0">
        <img alt="Lumitech Logo" class="h-full w-full object-contain rounded-lg" src="<?= $assetBase ?>assets/img/logo-icon.png" />
      </div>
      <div class="flex flex-col">
        <span class="text-lg sm:text-xl lg:text-2xl tracking-tight text-on-surface font-black leading-none whitespace-nowrap">
          Lumitech<span class="text-primary">.id</span>
        </span>
        <span class="text-[10px] sm:text-[11px] font-semibold text-on-surface-variant tracking-wider uppercase pt-0.5 hidden xs:inline">Website &amp; Digital Solutions</span>
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
    </nav>

    <!-- Header Actions -->
    <div class="flex items-center gap-2 sm:gap-3 shrink-0">
      <!-- Desktop CTA WhatsApp Button -->
      <a class="hidden lg:inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold text-sm px-5 py-2.5 rounded-full transition-all shadow-md hover:shadow-lg hover:-translate-y-0.5 whitespace-nowrap" href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan" target="_blank" rel="noopener">
        <span class="material-symbols-outlined text-lg">chat</span>
        <span>Konsultasi WA</span>
      </a>

      <!-- Quick WhatsApp Badge on Mobile (< lg) -->
      <a class="lg:hidden inline-flex items-center gap-1.5 bg-green-600/10 border border-green-600/30 text-green-700 hover:bg-green-600 hover:text-white font-bold text-xs px-3 py-1.5 rounded-full transition-all whitespace-nowrap" href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20tanya%20layanan" target="_blank" rel="noopener">
        <span class="material-symbols-outlined text-sm text-green-600">chat</span>
        <span class="font-mono text-[11px]">0878-6175-6916</span>
      </a>
    </div>
  </div>
</header>

<!-- Android & Mobile Bottom Navigation Bar (Sangat Simpel & Ergonomis di Bawah) -->
<nav class="lg:hidden fixed bottom-0 left-0 right-0 z-50 bg-surface/95 backdrop-blur-xl border-t border-surface-container shadow-[0_-4px_20px_rgba(0,0,0,0.06)] px-2 py-1.5 flex items-center justify-around">
  <!-- 1. Beranda -->
  <a href="<?= $homePrefix ?>#" class="flex flex-col items-center justify-center py-1 px-2.5 rounded-xl <?= !$isProdukPage ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary font-medium' ?> transition-colors active:scale-95">
    <span class="material-symbols-outlined text-2xl">home</span>
    <span class="text-[10px] tracking-tight mt-0.5">Beranda</span>
  </a>

  <!-- 2. Katalog Semua Produk -->
  <a href="produk.php" class="flex flex-col items-center justify-center py-1 px-2.5 rounded-xl <?= $isProdukPage ? 'text-primary font-bold' : 'text-on-surface-variant hover:text-primary font-medium' ?> transition-colors active:scale-95">
    <span class="material-symbols-outlined text-2xl">storefront</span>
    <span class="text-[10px] tracking-tight mt-0.5">Katalog</span>
  </a>

  <!-- 3. WhatsApp Center Action (Tombol Menonjol di Tengah) -->
  <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20%2F%20tanya%20layanan" target="_blank" rel="noopener" class="flex flex-col items-center justify-center -mt-5 group active:scale-95">
    <div class="h-12 w-12 rounded-full bg-green-600 text-white flex items-center justify-center shadow-lg shadow-green-600/30 group-hover:bg-green-700 transition-all border-2 border-surface">
      <span class="material-symbols-outlined text-2xl">chat</span>
    </div>
    <span class="text-[10px] font-bold text-green-700 mt-1">Chat WA</span>
  </a>

  <!-- 4. Portofolio -->
  <a href="<?= $homePrefix ?>#portofolio" class="flex flex-col items-center justify-center py-1 px-2.5 rounded-xl text-on-surface-variant hover:text-primary font-medium transition-colors active:scale-95">
    <span class="material-symbols-outlined text-2xl">work</span>
    <span class="text-[10px] tracking-tight mt-0.5">Portofolio</span>
  </a>

  <!-- 5. Cara Order -->
  <a href="<?= $homePrefix ?>#cara-order" class="flex flex-col items-center justify-center py-1 px-2.5 rounded-xl text-on-surface-variant hover:text-primary font-medium transition-colors active:scale-95">
    <span class="material-symbols-outlined text-2xl">checklist</span>
    <span class="text-[10px] tracking-tight mt-0.5">Cara Pesan</span>
  </a>
</nav>
