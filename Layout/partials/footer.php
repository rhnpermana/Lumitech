<?php
$assetBase = (isset($assetBase)) ? $assetBase : ((file_exists('assets/img/logo.jpeg')) ? '' : '../');
?>
<footer class="w-full bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-t border-surface-container mt-space-2xl">
  <div class="w-full px-gutter py-space-2xl max-w-[1320px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-space-xl">
      <!-- Brand Summary -->
      <div class="md:col-span-5 flex flex-col gap-space-md">
        <div class="flex items-center gap-space-sm">
          <img alt="Lumitech Logo" class="h-8 w-auto object-contain rounded" src="<?= $assetBase ?>assets/img/logo.jpeg" />
          <span class="font-headline-md text-headline-md tracking-tight font-bold text-on-surface">
            Lumitech<span class="text-primary-container">.id</span>
          </span>
        </div>
        <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
          Solusi pembuatan website bisnis modern, landing page konversi tinggi, dan sistem e-commerce terpercaya untuk kembangkan bisnismu di era digital.
        </p>
        <!-- Social Icons -->
        <div class="flex items-center gap-space-sm pt-space-xs">
          <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
            <span class="material-symbols-outlined text-lg">photo_camera</span>
          </a>
          <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
            <span class="material-symbols-outlined text-lg">work</span>
          </a>
          <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener" aria-label="WhatsApp" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
            <span class="material-symbols-outlined text-lg">chat</span>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="md:col-span-3 flex flex-col gap-space-sm">
        <span class="font-label-lg text-label-lg text-on-surface font-bold uppercase tracking-wider">Eksplorasi</span>
        <a href="#" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Beranda</a>
        <a href="#portofolio" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Portofolio &amp; Studi Kasus</a>
        <a href="#paket-harga" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Paket &amp; Layanan</a>
        <a href="#garansi" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Garansi &amp; Komitmen</a>
        <a href="#faq" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">FAQ</a>
      </div>

      <!-- Contact Info -->
      <div class="md:col-span-4 flex flex-col gap-space-sm">
        <span class="font-label-lg text-label-lg text-on-surface font-bold uppercase tracking-wider">Hubungi Tim Kami</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Siap meningkatkan performa digital bisnismu? Hubungi kami langsung via WhatsApp atau email konsultasi.
        </p>
        <a href="mailto:halo@lumitech.id" class="flex items-center gap-space-xs text-on-surface hover:text-primary font-body-sm text-body-sm pt-space-xs transition-colors">
          <span class="material-symbols-outlined text-primary-container text-base">mail</span>
          <span>halo@lumitech.id</span>
        </a>
        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="flex items-center gap-space-xs text-on-surface hover:text-primary font-body-sm text-body-sm transition-colors">
          <span class="material-symbols-outlined text-primary-container text-base">call</span>
          <span>+62 812-3456-7890</span>
        </a>
        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
          <span class="material-symbols-outlined text-primary-container text-base">schedule</span>
          <span>Senin - Sabtu: 09:00 - 18:00 WIB</span>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="mt-space-xl pt-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-md border-t border-surface-container">
      <span class="font-body-sm text-body-sm text-on-surface-variant">
        &copy; <?= date('Y') ?> Lumitech.id. All rights reserved.
      </span>
      <div class="flex items-center gap-space-md font-body-sm text-body-sm text-on-surface-variant">
        <a href="#faq" class="hover:text-primary transition-colors">Kebijakan Layanan</a>
        <a href="#garansi" class="hover:text-primary transition-colors">Syarat &amp; Ketentuan Garansi</a>
      </div>
    </div>
  </div>
</footer>
