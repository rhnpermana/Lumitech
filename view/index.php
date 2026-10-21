<?php
$assetBase = (file_exists('assets/img/logo.jpeg')) ? '' : '../';
include_once __DIR__ . '/../Layout/partials/app.php';
include_once __DIR__ . '/../Layout/partials/navhome.php';
?>

  <body class="bg-background font-body-md text-on-surface antialiased">
    <main class="w-full pt-20 bg-background">
      <div class="flex flex-col w-full">

        <!-- Dynamic Hero & Value Proposition -->
        <section class="relative w-full overflow-hidden bg-surface pt-space-xl pb-space-2xl px-gutter">
          <!-- Ambient Glow Orbs -->
          <div class="pointer-events-none absolute -top-24 right-1/4 h-96 w-96 rounded-full bg-primary-container/10 blur-3xl"></div>
          <div class="pointer-events-none absolute top-40 -left-20 h-72 w-72 rounded-full bg-secondary-fixed/40 blur-2xl"></div>

          <div class="mx-auto max-w-[1320px]">
            <!-- Overline Badge -->
            <div class="flex flex-wrap items-center gap-space-xs pb-space-md">
              <span class="inline-flex items-center gap-2 rounded-full bg-surface-container-high px-space-md py-space-xs font-label-sm text-label-sm uppercase tracking-wider text-primary">
                <span class="h-2 w-2 rounded-full bg-primary-container animate-ping"></span>
                Layanan &amp; Paket Website 2025
              </span>
            </div>

            <!-- Hero Split Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
              <div class="lg:col-span-7 flex flex-col gap-space-md">
                <h1 class="font-display-hero text-headline-xl lg:text-display-hero tracking-tight text-on-surface">
                  All in one &amp;
                  <span class="text-primary-container underline decoration-primary-fixed decoration-4">Digital Presence</span>
                  untuk Bisnismu.
                </h1>

                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                  Bikin website bisnis modern, cepat, dan profesional tanpa ribet. Tingkatkan kredibilitas brand dan konversi penjualan dengan solusi teknologi terbaik.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                  <a href="#paket-harga" class="inline-flex items-center gap-space-xs rounded-full bg-primary-container px-space-xl py-space-md font-label-lg text-label-lg text-on-primary shadow-[0_16px_32px_-6px_rgba(0,71,255,0.35)] transition-all hover:-translate-y-0.5 hover:bg-primary">
                    <span>Lihat Paket Harga</span>
                    <span class="material-symbols-outlined text-lg">arrow_downward</span>
                  </a>
                  <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener" class="inline-flex items-center gap-space-xs rounded-full bg-surface-container-lowest px-space-lg py-space-md font-label-lg text-label-lg text-on-surface shadow-sm transition-all hover:bg-surface-container hover:text-primary">
                    <span class="material-symbols-outlined text-primary text-xl">chat</span>
                    <span>Konsultasi WhatsApp</span>
                  </a>
                </div>

                <!-- Metric Highlights -->
                <div class="grid grid-cols-3 gap-space-md pt-space-lg border-t-0">
                  <div class="flex flex-col">
                    <span class="font-headline-md text-headline-md text-primary-container font-bold">99.8%</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Skor Google PageSpeed</span>
                  </div>
                  <div class="flex flex-col">
                    <span class="font-headline-md text-headline-md text-on-surface font-bold">140+</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Brand Terpercaya</span>
                  </div>
                  <div class="flex flex-col">
                    <span class="font-headline-md text-headline-md text-primary font-bold">3 Bulan</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Garansi Purna Jual</span>
                  </div>
                </div>
              </div>

              <!-- Hero Visual Showcase Card -->
              <div class="lg:col-span-5 relative">
                <div class="relative w-full rounded-2xl bg-gradient-to-br from-primary-container to-primary p-space-lg text-on-primary shadow-[0_24px_48px_-12px_rgba(0,71,255,0.35)] overflow-hidden">
                  <div class="flex justify-between items-center pb-space-lg">
                    <div class="inline-flex items-center gap-space-xs rounded-full bg-on-primary/10 backdrop-blur-md px-space-md py-1">
                      <span class="h-2 w-2 rounded-full bg-secondary-fixed animate-pulse"></span>
                      <span class="font-label-sm text-label-sm tracking-widest text-on-primary uppercase">Modern Tech Engine</span>
                    </div>
                    <span class="font-headline-lg text-headline-lg font-bold text-white/40">01</span>
                  </div>

                  <h3 class="font-headline-md text-headline-md font-bold leading-tight pb-space-xs text-white">
                    Punya bisnis tapi belum punya websitenya?
                  </h3>
                  <p class="font-body-sm text-body-sm text-on-primary-container pb-space-lg">
                    Tingkatkan kredibilitas bisnismu dengan website profesional dan katalog produk resmi.
                  </p>

                  <!-- Card Device Mockup Wrapper -->
                  <div class="relative rounded-xl bg-surface-container-lowest p-space-md text-on-surface shadow-2xl">
                    <div class="flex items-center justify-between pb-space-sm border-b-0">
                      <div class="flex items-center gap-space-xs">
                        <div class="h-3 w-3 rounded-full bg-error"></div>
                        <div class="h-3 w-3 rounded-full bg-secondary-fixed"></div>
                        <div class="h-3 w-3 rounded-full bg-surface-tint"></div>
                        <span class="font-label-sm text-label-sm text-on-surface-variant pl-2">lumitech.id/live-preview</span>
                      </div>
                      <span class="material-symbols-outlined text-primary-container text-sm">bolt</span>
                    </div>

                    <!-- Product Preview Image -->
                    <div class="relative overflow-hidden rounded-lg aspect-[16/10] bg-surface-container">
                      <img class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" alt="Lumitech UI Preview" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAp9pGqmEIgCyx9XNdsk5go4OgxALfQeJRBHdIajTYos_zmIRPP4VgSi0wga6EY3U92LmD7yi8lXPN086GFG8-yUBIaFcFXorKGCe9vfnINDRtSSebNYbKG8ieCYy1xnGBFKLrfbDa6Gsg8gvhKAjJ3s6Yei_iwR2EtavoLKZYi32K6X-zW41QagjOLynIuTxTCiTYo86GnbnXv_OtoZHv-G3nyIsMlP6fePdJiho_ca0_JG5VP5w0x" />
                      <div class="absolute bottom-2 left-2 right-2 rounded-lg bg-surface/90 backdrop-blur-md p-space-xs flex items-center justify-between shadow-sm">
                        <div class="flex items-center gap-space-xs">
                          <span class="material-symbols-outlined text-primary-container text-sm">verified</span>
                          <span class="font-label-sm text-label-sm text-on-surface font-semibold">Pesanan Otomatis Masuk</span>
                        </div>
                        <span class="font-label-sm text-label-sm text-primary font-bold">Rp 12.850.000</span>
                      </div>
                    </div>
                  </div>

                  <div class="mt-space-md flex items-center justify-between text-on-primary-container font-label-sm text-label-sm">
                    <span>Lumitech Interactive Engine v2.4</span>
                    <span class="inline-flex items-center gap-1 font-semibold text-white">
                      Full Stack Ready
                      <span class="material-symbols-outlined text-sm">check_circle</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: 4 Layanan Utama -->
        <section class="w-full py-space-2xl px-gutter bg-surface-container-low relative">
          <div class="mx-auto max-w-[1320px]">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pb-space-xl">
              <div class="max-w-2xl">
                <div class="inline-flex items-center gap-space-xs rounded-full bg-primary-fixed px-space-md py-1 font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider mb-space-sm">
                  Layanan Kami
                </div>
                <h2 class="font-headline-xl text-headline-lg md:text-headline-xl text-on-surface tracking-tight">
                  Solusi Digital Lengkap untuk Bisnismu
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant pt-space-xs">
                  Website cepat, SEO-friendly, dan mudah dikelola untuk memperkuat kredibilitas serta penjualan brand Anda.
                </p>
              </div>
              <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm bg-surface-container-lowest px-space-md py-space-sm rounded-full shadow-sm">
                <span class="material-symbols-outlined text-primary-container text-base">verified_user</span>
                <span>Clean Code &amp; Mobile First</span>
              </div>
            </div>

            <!-- 4 Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
              <!-- Service 1 -->
              <div class="group flex flex-col justify-between rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_12px_32px_-4px_rgba(0,71,255,0.06)] transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)]">
                <div>
                  <div class="flex items-center justify-between pb-space-lg">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-fixed text-primary transition-colors group-hover:bg-primary-container group-hover:text-on-primary">
                      <span class="material-symbols-outlined text-2xl">code_blocks</span>
                    </div>
                    <span class="font-headline-sm text-headline-sm font-bold text-outline-variant">01</span>
                  </div>
                  <h3 class="font-headline-sm text-headline-sm text-on-surface pb-space-xs group-hover:text-primary transition-colors">
                    Custom Web Development
                  </h3>
                  <p class="font-body-md text-body-md text-on-surface-variant pb-space-lg">
                    Website bisnis dari nol dengan desain kustom sesuai identitas brand, cepat, dan mudah dikelola.
                  </p>
                  <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface">
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Next.js &amp; Tailwind CSS</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Dashboard Admin CMS Intuitif</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Responsif Mobile &amp; Desktop</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-space-xl">
                  <a href="#paket-harga" class="inline-flex w-full items-center justify-between rounded-xl bg-surface-container px-space-md py-space-sm font-label-lg text-label-lg text-on-surface transition-all group-hover:bg-primary-container group-hover:text-on-primary">
                    <span>Pilih Layanan</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                  </a>
                </div>
              </div>

              <!-- Service 2 -->
              <div class="group flex flex-col justify-between rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_12px_32px_-4px_rgba(0,71,255,0.06)] transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)]">
                <div>
                  <div class="flex items-center justify-between pb-space-lg">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-secondary-container text-secondary transition-colors group-hover:bg-primary-container group-hover:text-on-primary">
                      <span class="material-symbols-outlined text-2xl">speed</span>
                    </div>
                    <span class="font-headline-sm text-headline-sm font-bold text-outline-variant">02</span>
                  </div>
                  <h3 class="font-headline-sm text-headline-sm text-on-surface pb-space-xs group-hover:text-primary transition-colors">
                    Revamp &amp; Speed Boost
                  </h3>
                  <p class="font-body-md text-body-md text-on-surface-variant pb-space-lg">
                    Optimasi kecepatan dan peremajaan tampilan website lama agar loading cepat di bawah 1.5 detik.
                  </p>
                  <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface">
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Audit Core Web Vitals Google</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Optimasi WebP &amp; CDN Global</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Pembersihan Kode Berat</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-space-xl">
                  <a href="#paket-harga" class="inline-flex w-full items-center justify-between rounded-xl bg-surface-container px-space-md py-space-sm font-label-lg text-label-lg text-on-surface transition-all group-hover:bg-primary-container group-hover:text-on-primary">
                    <span>Optimasi Web Lama</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                  </a>
                </div>
              </div>

              <!-- Service 3 -->
              <div class="group flex flex-col justify-between rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_12px_32px_-4px_rgba(0,71,255,0.06)] transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)]">
                <div>
                  <div class="flex items-center justify-between pb-space-lg">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-tertiary-fixed text-tertiary transition-colors group-hover:bg-primary-container group-hover:text-on-primary">
                      <span class="material-symbols-outlined text-2xl">ads_click</span>
                    </div>
                    <span class="font-headline-sm text-headline-sm font-bold text-outline-variant">03</span>
                  </div>
                  <h3 class="font-headline-sm text-headline-sm text-on-surface pb-space-xs group-hover:text-primary transition-colors">
                    Landing Page Konversi Tinggi
                  </h3>
                  <p class="font-body-md text-body-md text-on-surface-variant pb-space-lg">
                    Halaman promosi terarah khusus kampanye Meta Ads, TikTok, dan Google Ads dengan konversi optimal.
                  </p>
                  <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface">
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Copywriting Persuasif</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Setup Pixel Meta, TikTok &amp; GA4</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Direct Click ke WhatsApp</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-space-xl">
                  <a href="#paket-harga" class="inline-flex w-full items-center justify-between rounded-xl bg-surface-container px-space-md py-space-sm font-label-lg text-label-lg text-on-surface transition-all group-hover:bg-primary-container group-hover:text-on-primary">
                    <span>Order Landing Page</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                  </a>
                </div>
              </div>

              <!-- Service 4 -->
              <div class="group flex flex-col justify-between rounded-2xl bg-surface-container-lowest p-space-lg shadow-[0_12px_32px_-4px_rgba(0,71,255,0.06)] transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)]">
                <div>
                  <div class="flex items-center justify-between pb-space-lg">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-fixed-dim text-on-primary-fixed transition-colors group-hover:bg-primary-container group-hover:text-on-primary">
                      <span class="material-symbols-outlined text-2xl">account_balance_wallet</span>
                    </div>
                    <span class="font-headline-sm text-headline-sm font-bold text-outline-variant">04</span>
                  </div>
                  <h3 class="font-headline-sm text-headline-sm text-on-surface pb-space-xs group-hover:text-primary transition-colors">
                    Payment &amp; Checkout Automation
                  </h3>
                  <p class="font-body-md text-body-md text-on-surface-variant pb-space-lg">
                    Otomatisasi pembayaran QRIS, Virtual Account, dan kartu kredit langsung tanpa cek mutasi manual.
                  </p>
                  <ul class="space-y-space-xs font-body-sm text-body-sm text-on-surface">
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Midtrans / Xendit / Tripay</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Notifikasi Invoice WhatsApp Otomatis</span>
                    </li>
                    <li class="flex items-center gap-space-xs">
                      <span class="material-symbols-outlined text-primary-container text-base">check</span>
                      <span>Kalkulasi Ongkir Ekspedisi</span>
                    </li>
                  </ul>
                </div>
                <div class="pt-space-xl">
                  <a href="#paket-harga" class="inline-flex w-full items-center justify-between rounded-xl bg-surface-container px-space-md py-space-sm font-label-lg text-label-lg text-on-surface transition-all group-hover:bg-primary-container group-hover:text-on-primary">
                    <span>Setup Payment Gateway</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: Portofolio & Studi Kasus -->
        <section id="portofolio" class="w-full py-space-2xl px-gutter bg-surface scroll-mt-24">
          <div class="mx-auto max-w-[1320px]">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pb-space-xl">
              <div>
                <span class="inline-flex items-center gap-space-xs rounded-full bg-primary-fixed px-space-md py-1 font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider mb-space-sm">
                  Hasil Produksi Nyata
                </span>
                <h2 class="font-headline-xl text-headline-lg md:text-headline-xl text-on-surface tracking-tight font-bold">
                  Koleksi Portofolio &amp; Studi Kasus
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant pt-space-xs max-w-2xl">
                  Setiap proyek kami rancang dengan metrik performa tinggi, visual berkarakter, dan arsitektur kode yang teruji menghasilkan konversi penjualan.
                </p>
              </div>
              <span class="font-body-sm text-body-sm text-on-surface-variant hidden sm:inline-block bg-surface-container px-space-md py-space-sm rounded-full">
                6 Studi Kasus Unggulan Terverifikasi
              </span>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="portfolioGrid">
              <!-- Project 1: Zenith Audio -->
              <article class="project-card flex flex-col bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0_12px_32px_-4px_rgba(0,71,255,0.08)] hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)] transition-all duration-300 group">
                <div class="relative h-60 w-full overflow-hidden bg-surface-container">
                  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Zenith Audio Store" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0HHxRu5z8bvFhkUSLq0ayCIzL9KskVdFQBrsaBik6d3H42roOOPahWNaiwJFaYclGalEqP6-WYPyzdZxZ1qijqCb5Oy1f4M7nJ-R319beDf1S9ynloQaAAyaxzvdve17SyM8vVyVoXqt9LiknGzFsfoygzp3Ct3ioFSw9gYmYNNk1b9lEdNC-H3-P8YcrzXn260T0bWx1hTgLsu_-rpZdvmzB2RmXee3df6OAjeO6Nhlsm3-ZttkZ" />
                  <div class="absolute top-4 left-4 flex gap-2">
                    <span class="px-3 py-1 rounded-full bg-primary-container text-on-primary font-label-sm text-label-sm font-bold shadow-md">
                      E-Commerce
                    </span>
                  </div>
                  <div class="absolute bottom-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    <span class="font-label-sm text-label-sm text-on-surface font-bold">Konversi +64%</span>
                  </div>
                </div>
                <div class="p-space-lg flex flex-col flex-1 justify-between gap-space-md">
                  <div>
                    <div class="flex items-center justify-between mb-1">
                      <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Perangkat Audio</span>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">2024</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                      Zenith Audio: Flagship Headphone Store &amp; 3D Visualizer
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs line-clamp-2">
                      Pembangunan toko online interaktif berbasis WebGL untuk testing virtual akustik produk headphone nirkabel premium.
                    </p>
                  </div>
                  <div>
                    <div class="flex flex-wrap gap-1.5 mb-space-md">
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Three.js</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Shopify API</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Tailwind</span>
                    </div>
                    <div class="flex items-center justify-between pt-space-xs border-t border-surface-container">
                      <div class="flex flex-col">
                        <span class="text-[11px] text-outline">Checkout Abandonment</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold">Turun 35%</span>
                      </div>
                      <a class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-surface-container hover:bg-primary-container hover:text-on-primary transition-colors text-on-surface" href="#paket-harga">
                        <span class="material-symbols-outlined text-lg">arrow_outward</span>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <!-- Project 2: Nusantara Logistics -->
              <article class="project-card flex flex-col bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0_12px_32px_-4px_rgba(0,71,255,0.08)] hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)] transition-all duration-300 group">
                <div class="relative h-60 w-full overflow-hidden bg-surface-container">
                  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Nusantara Logistics Portal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCW7ljVF2alig9y17E94lDfpVaQm3cK5y6gnER6FCNCsG1inRkyy3aW33YrAjWhkgOa1pDno8MgcC_cZ4vTr5EdhE5loM4UrDFcaLW6Ou912MXAO9apMZbHV-MzCealVSdcdbMFbCM-Skj8DGGiUTB1ORu1IeHFY4elO1r1v9idA6gkwpPnozMSN8qOvf5hv20dzRud4eU41qqTK17Ia5HaOsD0KkCgJPtCa7WeYZQVDFqKfM4fMva_" />
                  <div class="absolute top-4 left-4 flex gap-2">
                    <span class="px-3 py-1 rounded-full bg-primary-container text-on-primary font-label-sm text-label-sm font-bold shadow-md">
                      Custom Web App
                    </span>
                  </div>
                  <div class="absolute bottom-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    <span class="font-label-sm text-label-sm text-on-surface font-bold">12k+ Armada Aktif</span>
                  </div>
                </div>
                <div class="p-space-lg flex flex-col flex-1 justify-between gap-space-md">
                  <div>
                    <div class="flex items-center justify-between mb-1">
                      <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Supply Chain &amp; Tech</span>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">2024</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                      Nusantara Logistics: Dashboard Pelacakan Armada Real-Time
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs line-clamp-2">
                      Sistem internal cloud untuk memonitor 12.000+ armada truk dan kontainer kargo laut dengan latensi di bawah 200ms.
                    </p>
                  </div>
                  <div>
                    <div class="flex flex-wrap gap-1.5 mb-space-md">
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Next.js 14</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Supabase</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">WebSockets</span>
                    </div>
                    <div class="flex items-center justify-between pt-space-xs border-t border-surface-container">
                      <div class="flex flex-col">
                        <span class="text-[11px] text-outline">Efisiensi Rute</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold">+41.2%</span>
                      </div>
                      <a class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-surface-container hover:bg-primary-container hover:text-on-primary transition-colors text-on-surface" href="#paket-harga">
                        <span class="material-symbols-outlined text-lg">arrow_outward</span>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <!-- Project 3: KopiKarsa -->
              <article class="project-card flex flex-col bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0_12px_32px_-4px_rgba(0,71,255,0.08)] hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)] transition-all duration-300 group">
                <div class="relative h-60 w-full overflow-hidden bg-surface-container">
                  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="KopiKarsa Web Ordering" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjgoVWoTpwu3_jtzRS9rl_TFR6RwC-RrIyjVk3zNPd78xRDOVK2T9h6sT6Vu0c0e4ODn7okVFLV5zg2JP0ixfzpi3-brA_vtEgNEE2xsBbLXZOPXhEE2mW85-QQMfKBVMAB9B8gFtYNgszJuCOY_q8PV6tKpt6MLBB9LP20tVrGU_LiNFy1tZ58C75Bm2Ru1dHy5pR3u4OCR3mT-JfNQNvbN6vT2FcmTvof4UItUJJArCNFMlz2ULv" />
                  <div class="absolute top-4 left-4 flex gap-2">
                    <span class="px-3 py-1 rounded-full bg-primary-container text-on-primary font-label-sm text-label-sm font-bold shadow-md">
                      E-Commerce / PWA
                    </span>
                  </div>
                  <div class="absolute bottom-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    <span class="font-label-sm text-label-sm text-on-surface font-bold">180k+ Transaksi</span>
                  </div>
                </div>
                <div class="p-space-lg flex flex-col flex-1 justify-between gap-space-md">
                  <div>
                    <div class="flex items-center justify-between mb-1">
                      <span class="font-label-sm text-label-sm text-primary uppercase font-bold">F&amp;B Retail Chain</span>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">2024</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                      KopiKarsa: Web Ordering System &amp; Loyalitas 35 Gerai
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs line-clamp-2">
                      Progressive Web App tanpa unduh aplikasi, integrasi QR meja langsung dan point system loyalty repeat order.
                    </p>
                  </div>
                  <div>
                    <div class="flex flex-wrap gap-1.5 mb-space-md">
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">React PWA</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">PostgreSQL</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">QRIS API</span>
                    </div>
                    <div class="flex items-center justify-between pt-space-xs border-t border-surface-container">
                      <div class="flex flex-col">
                        <span class="text-[11px] text-outline">Repeat Order Rate</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold">+52%</span>
                      </div>
                      <a class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-surface-container hover:bg-primary-container hover:text-on-primary transition-colors text-on-surface" href="#paket-harga">
                        <span class="material-symbols-outlined text-lg">arrow_outward</span>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <!-- Project 4: Aura Skin Clinic -->
              <article class="project-card flex flex-col bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0_12px_32px_-4px_rgba(0,71,255,0.08)] hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)] transition-all duration-300 group">
                <div class="relative h-60 w-full overflow-hidden bg-surface-container">
                  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Aura Skin Clinic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQYyWMWeMzra1biYFSKJ7SFNLUS-r3MY1rEd6Xp_N1ChCd52ugdNIl6DIfF7It_Y5skuP2UEg2wXxGflQmR8LOgUItjOKp9R3I-jNdntaaZxRVN8vyvsz6No3wci1JeQ6ZOKlLeKccJQBHOJyIsWbynp9-kUHCe1a1B6q-1o1aWY57dUOwkEULkfOHpadjkwI-aFatcGpWLnvnXuwscVqSLz8IrOH0qY_2hmeWrTQdOHzd9-jXgfTm" />
                  <div class="absolute top-4 left-4 flex gap-2">
                    <span class="px-3 py-1 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm font-bold shadow-md">
                      Company Profile
                    </span>
                  </div>
                  <div class="absolute bottom-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    <span class="font-label-sm text-label-sm text-on-surface font-bold">Booking Otomatis 92%</span>
                  </div>
                </div>
                <div class="p-space-lg flex flex-col flex-1 justify-between gap-space-md">
                  <div>
                    <div class="flex items-center justify-between mb-1">
                      <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Beauty &amp; Wellness</span>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">2023</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                      Aura Skin Clinic: Appointment Booking &amp; Catalog
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs line-clamp-2">
                      Migrasi sistem reservasi manual via chat menjadi portal self-service terintegrasi kalender dokter spesialis kulit.
                    </p>
                  </div>
                  <div>
                    <div class="flex flex-wrap gap-1.5 mb-space-md">
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">WordPress Headless</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Next.js</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Twilio WA</span>
                    </div>
                    <div class="flex items-center justify-between pt-space-xs border-t border-surface-container">
                      <div class="flex flex-col">
                        <span class="text-[11px] text-outline">Lead Handling Time</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold">-75% Durasi</span>
                      </div>
                      <a class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-surface-container hover:bg-primary-container hover:text-on-primary transition-colors text-on-surface" href="#paket-harga">
                        <span class="material-symbols-outlined text-lg">arrow_outward</span>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <!-- Project 5: Finova Capital -->
              <article class="project-card flex flex-col bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0_12px_32px_-4px_rgba(0,71,255,0.08)] hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)] transition-all duration-300 group">
                <div class="relative h-60 w-full overflow-hidden bg-surface-container">
                  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Finova Capital Portal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmlfQ1R6xw0-PS3V4bHrssPbpAMf3VH7bdXiFdPHEPRYI8uEyxM0lfw952w26Y4E8kD5EqXsL9aVzUlpvj_GSumi5ATqE5zcAqQ_LCud_4Ntq9vsSvWYzL9bB10yr9yIXc7fQIZe3FUnFCPGhM0CaJGbDvFL87q907grCqkVRt_gOO3SWhoYKnp-PFrvYMpooguw7Zga55O4ey60W1X0bL7fE_4fWg6TekgfDL1TeLvhsDz6KP3J5r" />
                  <div class="absolute top-4 left-4 flex gap-2">
                    <span class="px-3 py-1 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm font-bold shadow-md">
                      Corporate &amp; IR
                    </span>
                  </div>
                  <div class="absolute bottom-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    <span class="font-label-sm text-label-sm text-on-surface font-bold">ISO-27001 Ready</span>
                  </div>
                </div>
                <div class="p-space-lg flex flex-col flex-1 justify-between gap-space-md">
                  <div>
                    <div class="flex items-center justify-between mb-1">
                      <span class="font-label-sm text-label-sm text-primary uppercase font-bold">Financial Services</span>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">2024</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                      Finova Capital: FinTech Institutional Web &amp; IR
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs line-clamp-2">
                      Portal korporat berkeamanan tinggi dengan dynamic compliance report dan live fund performance charting engine.
                    </p>
                  </div>
                  <div>
                    <div class="flex flex-wrap gap-1.5 mb-space-md">
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">TypeScript</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Cloudflare</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Recharts</span>
                    </div>
                    <div class="flex items-center justify-between pt-space-xs border-t border-surface-container">
                      <div class="flex flex-col">
                        <span class="text-[11px] text-outline">Lead Institutional</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold">+120%</span>
                      </div>
                      <a class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-surface-container hover:bg-primary-container hover:text-on-primary transition-colors text-on-surface" href="#paket-harga">
                        <span class="material-symbols-outlined text-lg">arrow_outward</span>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <!-- Project 6: EduPintar -->
              <article class="project-card flex flex-col bg-surface-container-lowest rounded-3xl overflow-hidden shadow-[0_12px_32px_-4px_rgba(0,71,255,0.08)] hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.2)] transition-all duration-300 group">
                <div class="relative h-60 w-full overflow-hidden bg-surface-container">
                  <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="EduPintar Campaign" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCETD6mAFqHCrIiwYNchVjkFC9D1bKpgMgzHGTCEX8-ekAjytYxPSmLRLgd_G_Z64PrUtCn62RhniMFX4AqyCtFxd7x3IZuROy3-QaX20aLqnXd1MaWPoU5PQj8ssDK-mMiGLjg1Aoa3-cJSj44iB53_dz338j1XdbGzVYDtFTf5MwDVFoPEc4p0Kr2cl6P3mLDcFxiikWvVP7BSJF348LdOO7i84H4zWw6DyM7367S2ZwJQcmTaP6r" />
                  <div class="absolute top-4 left-4 flex gap-2">
                    <span class="px-3 py-1 rounded-full bg-primary-container text-on-primary font-label-sm text-label-sm font-bold shadow-md">
                      Campaign Landing Page
                    </span>
                  </div>
                  <div class="absolute bottom-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                    <span class="font-label-sm text-label-sm text-on-surface font-bold">14.2% Opt-In</span>
                  </div>
                </div>
                <div class="p-space-lg flex flex-col flex-1 justify-between gap-space-md">
                  <div>
                    <div class="flex items-center justify-between mb-1">
                      <span class="font-label-sm text-label-sm text-primary uppercase font-bold">EdTech Platform</span>
                      <span class="font-body-sm text-body-sm text-on-surface-variant">2024</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-primary transition-colors">
                      EduPintar: Interactive Bootcamp Enrollment Campaign
                    </h3>
                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs line-clamp-2">
                      Landing page kampanye dengan optimasi SEO teknis &amp; skor Google Lighthouse 100/100, sukses menjaring ribuan pendaftar.
                    </p>
                  </div>
                  <div>
                    <div class="flex flex-wrap gap-1.5 mb-space-md">
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Astro.js</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">Tailwind</span>
                      <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">ActiveCampaign</span>
                    </div>
                    <div class="flex items-center justify-between pt-space-xs border-t border-surface-container">
                      <div class="flex flex-col">
                        <span class="text-[11px] text-outline">Pendaftar Masuk</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold">18,500+</span>
                      </div>
                      <a class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-surface-container hover:bg-primary-container hover:text-on-primary transition-colors text-on-surface" href="#paket-harga">
                        <span class="material-symbols-outlined text-lg">arrow_outward</span>
                      </a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>

        <!-- Section: Cara Kerja Lumitech -->
        <section class="w-full py-space-2xl px-gutter bg-surface">
          <div class="mx-auto max-w-[1320px]">
            <div class="relative rounded-3xl bg-surface-container p-space-xl overflow-hidden shadow-sm">
              <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                <div class="lg:col-span-6 flex flex-col gap-space-md">
                  <span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-bold">
                    Alur Kerja
                  </span>
                  <h2 class="font-headline-lg text-headline-lg text-on-surface">
                    Proses Praktis, Kami Kerjakan Semuanya
                  </h2>
                  <p class="font-body-md text-body-md text-on-surface-variant">
                    Dari perencanaan konsep, domain &amp; hosting, pembuatan website, hingga pelatihan tim kamu sampai siap pakai.
                  </p>

                  <div class="space-y-space-md pt-space-sm">
                    <div class="flex items-start gap-space-md">
                      <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-container text-on-primary font-headline-sm text-headline-sm font-bold">
                        1
                      </div>
                      <div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface">
                          Konsultasi &amp; Konsep Desain
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                          Analisis kebutuhan bisnismu dan perancangan skema tampilan yang paling tepat.
                        </p>
                      </div>
                    </div>

                    <div class="flex items-start gap-space-md">
                      <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-container text-on-primary font-headline-sm text-headline-sm font-bold">
                        2
                      </div>
                      <div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface">
                          Development &amp; Integrasi
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                          Pembuatan website berkecepatan tinggi, setup domain &amp; SSL, serta integrasi fitur.
                        </p>
                      </div>
                    </div>

                    <div class="flex items-start gap-space-md">
                      <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary-container text-on-primary font-headline-sm text-headline-sm font-bold">
                        3
                      </div>
                      <div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface">
                          Serah Terima &amp; Garansi
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                          Pelatihan admin, serah terima kepemilikan aset 100%, dan dukungan garansi purna jual.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Process Visual Mockup -->
                <div class="lg:col-span-6 relative">
                  <div class="relative w-full rounded-2xl bg-surface-container-lowest p-space-lg shadow-xl">
                    <div class="flex items-center justify-between pb-space-md">
                      <div class="flex items-center gap-space-xs">
                        <span class="material-symbols-outlined text-primary-container">dns</span>
                        <span class="font-label-lg text-label-lg text-on-surface">Cloud Server Deployment</span>
                      </div>
                      <span class="inline-flex items-center gap-1 text-primary text-xs font-semibold bg-primary-fixed px-2 py-0.5 rounded-full">
                        Active SSL 256-bit
                      </span>
                    </div>

                    <div class="rounded-xl overflow-hidden aspect-[4/3] bg-surface-container-high relative">
                      <img class="w-full h-full object-cover" alt="Deployment Preview" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVG6gJWa3tdoxHMo4uiqN3jix-8IT63MzhMAugwPJFkdV6tO2L1GiGvXlp5uzv_6y3BvjHRjgcn9wJG0d68h7AwZfNOsnhdU7eTWlQ9SVtdqJvLiQuOBR07ouksCB8rhDSONat4YYDBlj8OoyFcbHma1ABaGM9B0llamNWncVgraXMIB0lbJlS_7EXGXcm4rhNXletEcRoPtmOZunY2JtIPBfg8lhFW6pbgh9Fg8oMLfAdKgosM0KJ" />
                      <div class="absolute inset-0 bg-gradient-to-t from-on-background/70 via-transparent to-transparent"></div>
                      <div class="absolute bottom-4 left-4 right-4 text-on-primary">
                        <div class="flex items-center justify-between">
                          <div>
                            <p class="font-headline-sm text-headline-sm font-bold text-white">Setup Selesai dalam 7 Hari Kerja</p>
                            <p class="font-body-sm text-body-sm text-primary-fixed">Siap dipromosikan ke seluruh media sosial</p>
                          </div>
                          <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-container text-on-primary">
                            <span class="material-symbols-outlined">rocket_launch</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: Paket Harga -->
        <section class="w-full py-space-2xl px-gutter bg-background scroll-mt-24" id="paket-harga">
          <div class="mx-auto max-w-[1320px]">
            <!-- Pricing Header -->
            <div class="text-center max-w-3xl mx-auto pb-space-xl">
              <span class="inline-flex items-center gap-space-xs rounded-full bg-primary-fixed px-space-md py-1 font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider mb-space-sm">
                Paket Investasi
              </span>
              <h2 class="font-headline-xl text-headline-lg md:text-headline-xl text-on-surface tracking-tight">
                Pilih Paket Sesuai Kebutuhan Bisnismu
              </h2>
              <p class="font-body-lg text-body-lg text-on-surface-variant pt-space-xs">
                Transparan tanpa biaya tersembunyi. Sudah termasuk domain premium, cloud hosting, dan SSL di tahun pertama.
              </p>
            </div>

            <!-- Pricing Tier Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-space-lg items-stretch">
              <!-- Tier 1: Starter UMKM -->
              <div class="flex flex-col justify-between rounded-3xl bg-surface-container-lowest p-space-xl shadow-[0_12px_32px_-4px_rgba(0,71,255,0.06)] transition-all hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.15)]">
                <div>
                  <div class="flex items-center justify-between pb-space-sm">
                    <span class="font-label-lg text-label-lg font-bold text-on-surface-variant uppercase tracking-wider">Starter UMKM</span>
                    <span class="rounded-full bg-surface-container px-space-sm py-1 font-label-sm text-label-sm text-on-surface-variant">Katalog Brand</span>
                  </div>
                  <p class="font-body-sm text-body-sm text-on-surface-variant pb-space-md">
                    Cocok untuk bisnis lokal, profil perusahaan, dan portofolio profesional.
                  </p>
                  <div class="pb-space-lg">
                    <div class="flex items-baseline gap-space-xs">
                      <span class="font-headline-xl text-headline-xl font-bold text-on-surface">Rp 1.490</span>
                      <span class="font-headline-md text-headline-md text-on-surface">.000</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Sekali bayar, tanpa biaya bulanan CMS</span>
                  </div>

                  <!-- Features List -->
                  <div class="space-y-space-sm border-t-0 pt-space-md">
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Hingga 5 Halaman Utama</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Gratis Domain (.com/.id) &amp; Cloud Hosting 1 Thn</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Direct Checkout ke WhatsApp Admin</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Desain Responsif &amp; Mobile Friendly</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Sertifikat SSL (HTTPS) Keamanan Data</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-outline-variant">
                      <span class="material-symbols-outlined text-outline-variant text-base shrink-0">cancel</span>
                      <span>Otomatisasi Payment Gateway</span>
                    </div>
                  </div>
                </div>

                <div class="pt-space-xl">
                  <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20berminat%20Paket%20Starter%20UMKM" target="_blank" rel="noopener" class="inline-flex w-full items-center justify-center gap-space-xs rounded-full bg-surface-container px-space-lg py-space-md font-label-lg text-label-lg text-on-surface transition-all hover:bg-primary hover:text-on-primary">
                    <span>Pilih Paket Starter</span>
                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                  </a>
                </div>
              </div>

              <!-- Tier 2: Pro Business (Highlighted) -->
              <div class="relative flex flex-col justify-between rounded-3xl bg-surface-container-lowest p-space-xl shadow-[0_24px_48px_-10px_rgba(0,71,255,0.22)] -translate-y-0 lg:-translate-y-3">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                  <span class="inline-flex items-center gap-1 rounded-full bg-primary-container px-space-md py-1 font-label-sm text-label-sm text-on-primary font-bold shadow-md uppercase tracking-wider">
                    <span class="material-symbols-outlined text-sm">stars</span>
                    Paling Populer
                  </span>
                </div>

                <div>
                  <div class="flex items-center justify-between pb-space-sm pt-space-xs">
                    <span class="font-label-lg text-label-lg font-bold text-primary-container uppercase tracking-wider">Pro Business</span>
                    <span class="rounded-full bg-primary-fixed px-space-sm py-1 font-label-sm text-label-sm text-primary font-bold">E-Commerce &amp; Toko Online</span>
                  </div>
                  <p class="font-body-sm text-body-sm text-on-surface-variant pb-space-md">
                    Solusi mesin penjualan otomatis lengkap dengan payment gateway dan sistem transaksi mandiri.
                  </p>
                  <div class="pb-space-lg">
                    <div class="flex items-baseline gap-space-xs">
                      <span class="font-headline-xl text-headline-xl font-bold text-primary-container">Rp 3.890</span>
                      <span class="font-headline-md text-headline-md text-primary-container">.000</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Investasi sekali, siap jualan online mandiri</span>
                  </div>

                  <!-- Features List -->
                  <div class="space-y-space-sm border-t-0 pt-space-md">
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span class="font-semibold text-on-surface">Halaman &amp; Produk Unlimited (CMS)</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span class="font-semibold text-on-surface">Payment Gateway (QRIS, VA &amp; Kartu Kredit)</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Hitung Ongkir Ekspedisi Otomatis</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>SEO On-Page &amp; Google Schema Markup</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Integrasi Meta, TikTok Pixel &amp; GA4</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Garansi &amp; Maintenance Bebas Bug 3 Bulan</span>
                    </div>
                  </div>
                </div>

                <div class="pt-space-xl">
                  <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20tertarik%20dengan%20Paket%20Pro%20Business" target="_blank" rel="noopener" class="inline-flex w-full items-center justify-center gap-space-xs rounded-full bg-primary-container px-space-lg py-space-md font-label-lg text-label-lg text-on-primary shadow-[0_12px_24px_rgba(0,71,255,0.3)] transition-all hover:bg-primary hover:shadow-[0_16px_32px_rgba(0,71,255,0.4)]">
                    <span>Pilih Pro Business</span>
                    <span class="material-symbols-outlined text-base">bolt</span>
                  </a>
                </div>
              </div>

              <!-- Tier 3: Enterprise & Custom App -->
              <div class="flex flex-col justify-between rounded-3xl bg-surface-container-lowest p-space-xl shadow-[0_12px_32px_-4px_rgba(0,71,255,0.06)] transition-all hover:shadow-[0_20px_40px_-8px_rgba(0,71,255,0.15)]">
                <div>
                  <div class="flex items-center justify-between pb-space-sm">
                    <span class="font-label-lg text-label-lg font-bold text-on-surface-variant uppercase tracking-wider">Enterprise &amp; App</span>
                    <span class="rounded-full bg-surface-container px-space-sm py-1 font-label-sm text-label-sm text-on-surface-variant">Bespoke System</span>
                  </div>
                  <p class="font-body-sm text-body-sm text-on-surface-variant pb-space-md">
                    Sistem kustom tingkat lanjut untuk korporasi, SaaS, membership, atau integrasi API kompleks.
                  </p>
                  <div class="pb-space-lg">
                    <div class="flex items-baseline gap-space-xs">
                      <span class="font-headline-xl text-headline-xl font-bold text-on-surface">Custom</span>
                    </div>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">Mulai dari Rp 8.500.000 sesuai kebutuhan</span>
                  </div>

                  <!-- Features List -->
                  <div class="space-y-space-sm border-t-0 pt-space-md">
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Arsitektur Fullstack Kustom (Node/Next/DB)</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Integrasi Multi-Vendor API, CRM &amp; ERP</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Infrastruktur Cloud High-Volume (AWS / GCP)</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Security Hardening &amp; Pen-Testing</span>
                    </div>
                    <div class="flex items-start gap-space-xs font-body-sm text-body-sm text-on-surface">
                      <span class="material-symbols-outlined text-primary-container text-base shrink-0">check_circle</span>
                      <span>Dedicated Lead Developer &amp; SLA 6 Bulan</span>
                    </div>
                  </div>
                </div>

                <div class="pt-space-xl">
                  <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20diskusi%20kebutuhan%20Enterprise%20System" target="_blank" rel="noopener" class="inline-flex w-full items-center justify-center gap-space-xs rounded-full bg-surface-container px-space-lg py-space-md font-label-lg text-label-lg text-on-surface transition-all hover:bg-primary hover:text-on-primary">
                    <span>Konsultasi Khusus</span>
                    <span class="material-symbols-outlined text-base">hub</span>
                  </a>
                </div>
              </div>
            </div>

            <!-- Payment Termin Banner -->
            <div class="mt-space-xl rounded-2xl bg-primary-fixed/50 p-space-lg flex flex-col md:flex-row items-center justify-between gap-space-md">
              <div class="flex items-center gap-space-md">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-container text-on-primary">
                  <span class="material-symbols-outlined text-2xl">verified</span>
                </div>
                <div>
                  <h4 class="font-headline-sm text-headline-sm text-on-surface">Butuh skema cicilan termin bertahap?</h4>
                  <p class="font-body-sm text-body-sm text-on-surface-variant">Kami mendukung pembayaran DP 50% di awal dan pelunasan setelah website live disetujui.</p>
                </div>
              </div>
              <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20tanya%20skema%20termin%20pembayaran" target="_blank" rel="noopener" class="shrink-0 inline-flex items-center gap-space-xs rounded-full bg-on-surface text-on-primary px-space-lg py-space-sm font-label-lg text-label-lg hover:bg-primary transition-colors">
                <span>Tanya Admin</span>
                <span class="material-symbols-outlined text-sm">chat</span>
              </a>
            </div>
          </div>
        </section>

        <!-- Section: Garansi Lumitech -->
        <section id="garansi" class="w-full py-space-2xl px-gutter bg-surface-container-high/40 scroll-mt-24">
          <div class="mx-auto max-w-[1320px]">
            <div class="text-center max-w-2xl mx-auto pb-space-xl">
              <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Garansi Layanan</span>
              <h2 class="font-headline-lg text-headline-lg text-on-surface pt-1">3 Komitmen Pasti Lumitech</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
              <div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-sm">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-container text-on-primary">
                  <span class="material-symbols-outlined text-2xl">security</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Garansi Bug-Free 3 Bulan</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">
                  Kendala teknis, tombol error, atau masalah tampilan setelah serah terima akan diperbaiki tuntas tanpa biaya tambahan.
                </p>
              </div>

              <div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-sm">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-container text-on-primary">
                  <span class="material-symbols-outlined text-2xl">school</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Pelatihan Sampai Bisa</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">
                  Video tutorial berbahasa Indonesia dan sesi pendampingan agar tim kamu bisa mengubah konten &amp; produk dengan mudah.
                </p>
              </div>

              <div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-sm">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary-container text-on-primary">
                  <span class="material-symbols-outlined text-2xl">vpn_key</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm text-on-surface">100% Kepemilikan Aset</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">
                  Akun domain, cPanel hosting, source code, dan lisensi aset diserahkan sepenuhnya ke kamu tanpa ikatan sewa.
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: FAQ Interaktif -->
        <section id="faq" class="w-full py-space-2xl px-gutter bg-surface scroll-mt-24">
          <div class="mx-auto max-w-[960px]">
            <div class="text-center pb-space-xl">
              <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">FAQ</span>
              <h2 class="font-headline-lg text-headline-lg text-on-surface pt-1">Pertanyaan yang Sering Diajukan</h2>
              <p class="font-body-md text-body-md text-on-surface-variant pt-space-xs">
                Hal-hal penting seputar layanan pembuatan website di Lumitech.
              </p>
            </div>

            <div class="space-y-space-md" id="faq-accordion">
              <!-- FAQ 1 -->
              <div class="rounded-2xl bg-surface-container-lowest shadow-sm overflow-hidden transition-all faq-card">
                <button type="button" aria-expanded="true" class="faq-toggle flex w-full items-center justify-between p-space-lg text-left">
                  <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Berapa lama estimasi pengerjaan website hingga selesai?</span>
                  <span class="material-symbols-outlined text-primary-container transition-transform duration-300 faq-icon rotate-180">expand_more</span>
                </button>
                <div class="faq-content px-space-lg pb-space-lg block">
                  <p class="font-body-md text-body-md text-on-surface-variant">
                    Untuk Paket Landing Page dan Starter UMKM sekitar <strong>5–7 hari kerja</strong> setelah materi diterima. Sedangkan Paket Pro Business E-Commerce membutuhkan <strong>10–14 hari kerja</strong> termasuk pengujian alur transaksi.
                  </p>
                </div>
              </div>

              <!-- FAQ 2 -->
              <div class="rounded-2xl bg-surface-container-lowest shadow-sm overflow-hidden transition-all faq-card">
                <button type="button" aria-expanded="false" class="faq-toggle flex w-full items-center justify-between p-space-lg text-left">
                  <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Apakah biaya sudah termasuk domain dan hosting?</span>
                  <span class="material-symbols-outlined text-primary-container transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content px-space-lg pb-space-lg hidden">
                  <p class="font-body-md text-body-md text-on-surface-variant">
                    <strong>Ya, sudah termasuk.</strong> Semua paket mencakup domain pilihan (.com / .id) dan SSD Cloud Hosting selama 1 tahun pertama. Tahun berikutnya Anda cukup membayar biaya perpanjangan standar tanpa biaya jasa tambahan.
                  </p>
                </div>
              </div>

              <!-- FAQ 3 -->
              <div class="rounded-2xl bg-surface-container-lowest shadow-sm overflow-hidden transition-all faq-card">
                <button type="button" aria-expanded="false" class="faq-toggle flex w-full items-center justify-between p-space-lg text-left">
                  <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Apakah website bisa diedit sendiri nantinya?</span>
                  <span class="material-symbols-outlined text-primary-container transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content px-space-lg pb-space-lg hidden">
                  <p class="font-body-md text-body-md text-on-surface-variant">
                    Sangat mudah. Setiap website dilengkapi dashboard CMS yang praktis sehingga Anda bisa mengubah tulisan, harga produk, foto, dan banner promo kapan saja tanpa perlu paham coding.
                  </p>
                </div>
              </div>

              <!-- FAQ 4 -->
              <div class="rounded-2xl bg-surface-container-lowest shadow-sm overflow-hidden transition-all faq-card">
                <button type="button" aria-expanded="false" class="faq-toggle flex w-full items-center justify-between p-space-lg text-left">
                  <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Bagaimana jika belum punya logo atau materi konten?</span>
                  <span class="material-symbols-outlined text-primary-container transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content px-space-lg pb-space-lg hidden">
                  <p class="font-body-md text-body-md text-on-surface-variant">
                    Tim kami siap membantu penyusunan materi, copywriting persuasif, dan kurasi gambar berlisensi komersial agar website Anda tetap tampil menarik dan profesional.
                  </p>
                </div>
              </div>

              <!-- FAQ 5 -->
              <div class="rounded-2xl bg-surface-container-lowest shadow-sm overflow-hidden transition-all faq-card">
                <button type="button" aria-expanded="false" class="faq-toggle flex w-full items-center justify-between p-space-lg text-left">
                  <span class="font-headline-sm text-headline-sm text-on-surface font-semibold">Apakah uang pembayaran transaksi langsung masuk ke rekening saya?</span>
                  <span class="material-symbols-outlined text-primary-container transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content px-space-lg pb-space-lg hidden">
                  <p class="font-body-md text-body-md text-on-surface-variant">
                    Tentu. Integrasi payment gateway langsung terhubung ke rekening bank Anda secara otomatis tanpa pemotongan komisi dari Lumitech.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Section: Final CTA -->
        <section class="w-full py-space-2xl px-gutter bg-surface-container-low">
          <div class="mx-auto max-w-[1320px]">
            <div class="relative overflow-hidden rounded-3xl bg-primary-container px-space-lg py-space-2xl md:px-space-2xl text-on-primary shadow-2xl">
              <div class="pointer-events-none absolute -right-20 -top-20 h-80 w-80 rounded-full bg-surface-container-lowest/10 blur-3xl"></div>
              <div class="pointer-events-none absolute -left-20 -bottom-20 h-80 w-80 rounded-full bg-secondary-fixed/20 blur-2xl"></div>

              <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                <div class="lg:col-span-8 flex flex-col gap-space-md">
                  <div class="inline-flex items-center gap-space-xs rounded-full bg-on-primary/15 backdrop-blur-md px-space-md py-1 font-label-sm text-label-sm text-on-primary tracking-wide uppercase">
                    <span class="material-symbols-outlined text-sm">support_agent</span>
                    <span>Konsultasi Gratis</span>
                  </div>
                  <h2 class="font-headline-xl text-headline-lg md:text-headline-xl font-bold text-white tracking-tight leading-tight">
                    Punya Rencana Website Bisnis? Yuk, Diskusi Bareng Lumitech.id!
                  </h2>
                  <p class="font-body-lg text-body-lg text-on-primary-container max-w-xl">
                    Ceritakan kebutuhan bisnismu atau kirimkan contoh website impianmu via WhatsApp. Tim kami siap berikan konsep dan estimasi terbaik.
                  </p>
                </div>

                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-space-md justify-center">
                  <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-space-sm rounded-full bg-surface-container-lowest px-space-xl py-space-md font-label-lg text-label-lg text-primary-container shadow-xl transition-all hover:scale-105 hover:bg-surface hover:shadow-2xl">
                    <span class="material-symbols-outlined text-2xl">chat</span>
                    <span>Mulai Diskusi WhatsApp</span>
                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                  </a>
                  <div class="flex items-center justify-center gap-space-xs text-on-primary-container font-body-sm text-body-sm">
                    <span class="material-symbols-outlined text-sm">schedule</span>
                    <span>Respon cepat &lt; 15 menit</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Interactive Scripts -->
        <script>
          document.addEventListener("DOMContentLoaded", function () {
            // FAQ Accordion
            const toggles = document.querySelectorAll(".faq-toggle");
            toggles.forEach((toggle) => {
              toggle.addEventListener("click", function () {
                const content = this.nextElementSibling;
                const icon = this.querySelector(".faq-icon");
                const isExpanded = this.getAttribute("aria-expanded") === "true";

                toggles.forEach((t) => {
                  t.setAttribute("aria-expanded", "false");
                  t.nextElementSibling.classList.add("hidden");
                  t.querySelector(".faq-icon").classList.remove("rotate-180");
                });

                if (!isExpanded) {
                  this.setAttribute("aria-expanded", "true");
                  content.classList.remove("hidden");
                  icon.classList.add("rotate-180");
                }
              });
            });

            // Mobile Navigation Toggle
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

              // Close drawer when clicking any link inside it
              mobileNavLinks.forEach((link) => {
                link.addEventListener("click", function () {
                  mobileMenuDrawer.classList.add("hidden");
                  mobileMenuBtn.setAttribute("aria-expanded", "false");
                  if (menuIcon) menuIcon.textContent = "menu";
                });
              });

              // Close drawer when clicking outside
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
      </div>
    </main>

    <?php include_once __DIR__ . '/../Layout/partials/footer.php'; ?>

    <!-- Sticky Floating WhatsApp CTA Button -->
    <aside aria-label="Kontak WhatsApp Cepat" class="fixed bottom-6 right-6 z-50 flex items-center group">
      <span class="pointer-events-none hidden md:inline-block mr-3 px-3.5 py-1.5 rounded-full bg-surface-container-lowest/95 backdrop-blur-md text-on-surface font-label-sm text-label-sm font-semibold shadow-lg border border-surface-container opacity-0 translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
        Konsultasi via WhatsApp
      </span>
      <a href="https://wa.me/6281234567890?text=Halo%20Lumitech%2C%20saya%20mau%20konsultasi%20pembuatan%20website" target="_blank" rel="noopener" aria-label="Hubungi WhatsApp Lumitech" class="relative flex items-center justify-center w-14 h-14 rounded-full bg-green-500 hover:bg-green-600 text-white shadow-[0_12px_28px_rgba(34,197,94,0.4)] transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-4 focus:ring-green-300">
        <span class="absolute -inset-1 rounded-full bg-green-400 opacity-40 animate-ping"></span>
        <span class="material-symbols-outlined text-3xl relative z-10">chat</span>
      </a>
    </aside>
  </body>
</html>
