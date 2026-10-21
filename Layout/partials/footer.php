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
          Solusi all-in-one pembuatan website, konsultasi bisnis UMKM, desain grafis &amp; branding, video editing, social media management, pembuatan dokumen, dan layanan akademik Joki Cihuyyy.
        </p>
        <!-- Social Icons -->
        <div class="flex items-center gap-space-sm pt-space-xs">
          <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
            <span class="material-symbols-outlined text-lg">photo_camera</span>
          </a>
          <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
            <span class="material-symbols-outlined text-lg">work</span>
          </a>
          <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan" target="_blank" rel="noopener" aria-label="WhatsApp" class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all">
            <span class="material-symbols-outlined text-lg">chat</span>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="md:col-span-3 flex flex-col gap-space-sm">
        <span class="font-label-lg text-label-lg text-on-surface font-bold uppercase tracking-wider">Navigasi Cepat</span>
        <a href="index.php#" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Beranda Utama</a>
        <a href="produk.php" class="font-body-sm text-body-sm text-primary font-bold hover:underline transition-colors flex items-center gap-1.5">
          <span class="material-symbols-outlined text-sm">shopping_bag</span>
          <span>Semua Produk &amp; Harga</span>
        </a>
        <a href="index.php#portofolio" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Portofolio &amp; Hasil Proyek</a>
        <a href="index.php#cara-order" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Cara Pesan Mudah</a>
        <a href="index.php#garansi" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Garansi &amp; Komitmen</a>
        <a href="index.php#faq" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors">Tanya Jawab (FAQ)</a>
      </div>

      <!-- Contact Info (2 Jalur Resmi) -->
      <div class="md:col-span-4 flex flex-col gap-space-sm">
        <span class="font-label-lg text-label-lg text-on-surface font-bold uppercase tracking-wider">Hubungi Tim Kami</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant">
          Punya pertanyaan seputar website atau butuh order cepat? Tim kami siap merespons via WhatsApp:
        </p>
        <div class="space-y-2 pt-1">
          <a href="https://wa.me/6287861756916?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20layanan%20digital" target="_blank" rel="noopener" class="flex items-center gap-2 text-on-surface hover:text-primary font-body-sm text-body-sm transition-colors group">
            <span class="material-symbols-outlined text-green-600 text-lg group-hover:scale-110 transition-transform">forum</span>
            <span><strong>Konsultasi Bisnis:</strong> 0878-6175-6916</span>
          </a>
          <a href="https://wa.me/6281388191291?text=Halo%20Admin%20Lumitech%2C%20saya%20mau%20order%20layanan" target="_blank" rel="noopener" class="flex items-center gap-2 text-on-surface hover:text-primary font-body-sm text-body-sm transition-colors group">
            <span class="material-symbols-outlined text-amber-500 text-lg group-hover:scale-110 transition-transform">support_agent</span>
            <span><strong>Admin &amp; Joki:</strong> 0813-8819-1291</span>
          </a>
          <a href="mailto:halo@lumitech.id" class="flex items-center gap-2 text-on-surface hover:text-primary font-body-sm text-body-sm transition-colors">
            <span class="material-symbols-outlined text-primary text-lg">mail</span>
            <span>halo@lumitech.id</span>
          </a>
        </div>
        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm pt-1">
          <span class="material-symbols-outlined text-primary text-base">schedule</span>
          <span>Buka Setiap Hari: 08:00 - 23:00 WIB</span>
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
