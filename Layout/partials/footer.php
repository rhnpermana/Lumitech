<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo-icon.png')) ? '' : '../');
?>
<footer class="w-full bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-t border-surface-container mt-space-2xl">
  <div class="w-full px-gutter py-space-2xl max-w-[1320px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-space-xl">
      <!-- Brand Summary -->
      <div class="md:col-span-5 flex flex-col gap-space-md">
        <div class="flex items-center gap-space-sm">
          <div class="h-9 w-9 rounded-xl bg-[#0b0e14] p-1 shadow-md border border-slate-700/40 flex items-center justify-center">
            <img alt="Lumitech Logo" class="h-full w-full object-contain rounded-lg" src="<?= $assetBase ?>assets/img/logo-icon.png" />
          </div>
          <span class="font-headline-md text-headline-md tracking-tight font-bold text-on-surface">
            Lumitech<span class="text-primary-container">.id</span>
          </span>
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
          Partner digital terpercaya: Pembuatan website bisnis, desain grafis &amp; pakaian, olah data dokumen, dan bantuan tugas akademik.
        </p>
        <!-- Social Icons -->
        <div class="flex items-center gap-space-sm pt-space-xs">
          <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan" target="_blank" rel="noopener" aria-label="WhatsApp" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-green-600 hover:text-white transition-all">
            <span class="material-symbols-outlined text-lg">chat</span>
          </a>
          <a href="mailto:lumitech.id43@gmail.com" aria-label="Email" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary hover:text-white transition-all">
            <span class="material-symbols-outlined text-lg">mail</span>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="md:col-span-3 flex flex-col gap-space-sm">
        <span class="font-label-lg text-label-lg text-on-surface font-bold uppercase tracking-wider">Navigasi</span>
        <a href="index.html#" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Beranda Utama</a>
        <a href="produk.html" class="font-body-sm text-body-sm text-primary font-bold hover:underline transition-colors flex items-center gap-1.5">
          <span class="material-symbols-outlined text-sm">grid_view</span>
          <span>Dashboard Produk &amp; Harga</span>
        </a>
        <a href="index.html#portofolio" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Portofolio Hasil Kerja</a>
        <a href="index.html#cara-order" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Cara Pesan</a>
        <a href="index.html#garansi" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Garansi &amp; Komitmen</a>
      </div>

      <!-- Contact Info -->
      <div class="md:col-span-4 flex flex-col gap-space-sm">
        <span class="font-label-lg text-label-lg text-on-surface font-bold uppercase tracking-wider">Kontak Cepat</span>
        <div class="space-y-2 pt-1">
          <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20order%20%2F%20tanya%20layanan" target="_blank" rel="noopener" class="flex items-center gap-2 text-on-surface hover:text-primary font-body-sm text-body-sm transition-colors group">
            <span class="material-symbols-outlined text-green-600 text-lg group-hover:scale-110 transition-transform">chat</span>
            <span><strong>WhatsApp:</strong> 0878-6175-6916</span>
          </a>
          <a href="mailto:lumitech.id43@gmail.com" class="flex items-center gap-2 text-on-surface hover:text-primary font-body-sm text-body-sm transition-colors">
            <span class="material-symbols-outlined text-primary text-lg">mail</span>
            <span>lumitech.id43@gmail.com</span>
          </a>
        </div>
        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm pt-1">
          <span class="material-symbols-outlined text-primary text-base">schedule</span>
          <span>Fast Response: 08:00 - 23:00 WIB</span>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="mt-space-xl pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md border-t border-surface-container">
      <span class="font-body-sm text-body-sm text-on-surface-variant">
        &copy; <?= date('Y') ?> Lumitech.id. All rights reserved.
      </span>
      <div class="flex items-center gap-space-md font-body-sm text-body-sm text-on-surface-variant">
        <a href="index.html#garansi" class="hover:text-primary transition-colors">Ketentuan Garansi</a>
        <a href="https://wa.me/6287861756916" target="_blank" rel="noopener" class="hover:text-primary transition-colors">Customer Service</a>
      </div>
    </div>
  </div>
</footer>
