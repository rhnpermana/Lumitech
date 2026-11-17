    </main>

    <!-- Admin Desktop Footer -->
    <footer class="hidden lg:block py-4 px-6 border-t border-slate-200 text-center text-xs text-slate-400 bg-white">
      <span>Lumitech.id &copy; <?= date('Y') ?> • Panel Manajemen Konten &amp; Aiven Cloud MySQL</span>
    </footer>

  </div>

  <!-- ======================================================== -->
  <!-- ANDROID MOBILE BOTTOM NAVIGATION BAR (Thumb-Friendly UX)  -->
  <!-- ======================================================== -->
  <nav class="lg:hidden fixed bottom-0 inset-x-0 z-40 bg-white/95 backdrop-blur-md border-t border-slate-200 px-2 py-1 shadow-[0_-4px_20px_rgba(0,0,0,0.06)] flex items-center justify-around h-16">
    
    <!-- 1. Beranda / Overview -->
    <a href="index.php" class="flex flex-col items-center justify-center w-14 py-1 rounded-xl transition-all <?= ($currentPage ?? '') === 'dashboard' ? 'text-primary font-bold' : 'text-slate-400 hover:text-slate-600' ?>">
      <span class="material-symbols-outlined text-2xl <?= ($currentPage ?? '') === 'dashboard' ? 'text-primary' : 'text-slate-400' ?>">dashboard</span>
      <span class="text-[10px] mt-0.5 tracking-tight">Overview</span>
    </a>

    <!-- 2. Produk & Layanan -->
    <a href="products.php" class="flex flex-col items-center justify-center w-14 py-1 rounded-xl transition-all <?= ($currentPage ?? '') === 'products' ? 'text-primary font-bold' : 'text-slate-400 hover:text-slate-600' ?>">
      <span class="material-symbols-outlined text-2xl <?= ($currentPage ?? '') === 'products' ? 'text-primary' : 'text-slate-400' ?>">inventory_2</span>
      <span class="text-[10px] mt-0.5 tracking-tight">Produk</span>
    </a>

    <!-- 3. Raised Floating Action Button (+) -->
    <button type="button" id="openAndroidActionBtn" aria-label="Tambah Konten Cepat" class="w-12 h-12 -mt-6 rounded-full bg-primary hover:bg-primary-dark text-white flex items-center justify-center shadow-lg shadow-primary/40 active:scale-95 transition-all">
      <span class="material-symbols-outlined text-2xl">add</span>
    </button>

    <!-- 4. Portofolio -->
    <a href="portfolios.php" class="flex flex-col items-center justify-center w-14 py-1 rounded-xl transition-all <?= ($currentPage ?? '') === 'portfolios' ? 'text-primary font-bold' : 'text-slate-400 hover:text-slate-600' ?>">
      <span class="material-symbols-outlined text-2xl <?= ($currentPage ?? '') === 'portfolios' ? 'text-primary' : 'text-slate-400' ?>">photo_library</span>
      <span class="text-[10px] mt-0.5 tracking-tight">Portofolio</span>
    </a>

    <!-- 5. Database Aiven MySQL -->
    <a href="database.php" class="flex flex-col items-center justify-center w-14 py-1 rounded-xl transition-all <?= ($currentPage ?? '') === 'database' ? 'text-primary font-bold' : 'text-slate-400 hover:text-slate-600' ?>">
      <span class="material-symbols-outlined text-2xl <?= ($currentPage ?? '') === 'database' ? 'text-primary' : 'text-slate-400' ?>">database</span>
      <span class="text-[10px] mt-0.5 tracking-tight">Database</span>
    </a>

  </nav>

  <!-- ======================================================== -->
  <!-- ANDROID BOTTOM SHEET MODAL (Quick Actions Menu)          -->
  <!-- ======================================================== -->
  <div id="androidActionSheet" class="lg:hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-sm hidden flex flex-col justify-end transition-opacity duration-200">
    <div id="sheetCard" class="bg-white rounded-t-3xl p-5 shadow-2xl space-y-3 transform translate-y-full transition-transform duration-300">
      
      <!-- Drag Handle Bar -->
      <div class="w-12 h-1.5 rounded-full bg-slate-200 mx-auto mb-2"></div>

      <div class="text-center pb-2 border-b border-slate-100">
        <h3 class="text-sm font-black text-slate-900">Aksi Cepat Lumitech Admin</h3>
        <p class="text-[11px] text-slate-400">Pilih menu yang ingin Anda buat atau sinkronkan</p>
      </div>

      <div class="grid grid-cols-2 gap-2.5 pt-1">
        <!-- Tambah Produk -->
        <a href="product-form.php?action=create" class="flex flex-col items-center justify-center p-3.5 rounded-2xl bg-primary-light text-primary hover:bg-primary/20 transition-all border border-primary/20 text-center active:scale-95">
          <span class="material-symbols-outlined text-2xl mb-1">add_box</span>
          <span class="text-xs font-bold">Tambah Produk</span>
          <span class="text-[10px] text-slate-500 mt-0.5">Katalog &amp; Layanan</span>
        </a>

        <!-- Tambah Portofolio -->
        <a href="portfolio-form.php?action=create" class="flex flex-col items-center justify-center p-3.5 rounded-2xl bg-emerald-50 text-emerald-700 hover:bg-emerald-100 transition-all border border-emerald-200 text-center active:scale-95">
          <span class="material-symbols-outlined text-2xl mb-1">add_photo_alternate</span>
          <span class="text-xs font-bold">Tambah Portofolio</span>
          <span class="text-[10px] text-slate-500 mt-0.5">Upload Karya Baru</span>
        </a>
      </div>

      <div class="space-y-1.5 pt-1">
        <!-- Rebuild Static Site -->
        <a href="rebuild.php" class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-700 text-xs font-bold transition-all">
          <span class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-base">sync</span>
          </span>
          <div class="grow">
            <div>Sinkronkan HTML (Rebuild)</div>
            <div class="text-[10px] text-slate-400 font-normal">Perbarui index.html &amp; produk.html</div>
          </div>
          <span class="material-symbols-outlined text-sm text-slate-400">chevron_right</span>
        </a>

        <!-- Aiven Database -->
        <a href="database.php" class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-700 text-xs font-bold transition-all">
          <span class="w-8 h-8 rounded-lg bg-blue-100 text-primary flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-base">database</span>
          </span>
          <div class="grow">
            <div>Kelola Aiven MySQL</div>
            <div class="text-[10px] text-slate-400 font-normal">Pengaturan koneksi &amp; migrasi</div>
          </div>
          <span class="material-symbols-outlined text-sm text-slate-400">chevron_right</span>
        </a>

        <!-- Lihat Website -->
        <a href="../index.html" target="_blank" class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 text-slate-700 text-xs font-bold transition-all">
          <span class="w-8 h-8 rounded-lg bg-slate-200 text-slate-700 flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-base">visibility</span>
          </span>
          <div class="grow">
            <div>Buka Website Live</div>
            <div class="text-[10px] text-slate-400 font-normal">Tinjau landing page utama</div>
          </div>
          <span class="material-symbols-outlined text-sm text-slate-400">open_in_new</span>
        </a>
      </div>

      <!-- Close Sheet Button -->
      <button type="button" id="closeAndroidActionBtn" class="w-full py-3 rounded-2xl bg-slate-100 text-slate-700 text-xs font-bold hover:bg-slate-200 transition-colors mt-2 active:scale-98">
        Tutup
      </button>

    </div>
  </div>

  <!-- Scripts: Sidebar & Bottom Sheet Logic -->
  <script>
    // Desktop / Drawer Sidebar
    const sidebar = document.getElementById('adminSidebar');
    const backdrop = document.getElementById('sidebarBackdrop');
    const openBtn = document.getElementById('openSidebarBtn');
    const closeBtn = document.getElementById('closeSidebarBtn');

    if (openBtn && closeBtn && sidebar && backdrop) {
      const openSidebar = () => {
        sidebar.classList.remove('-translate-x-full');
        backdrop.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      };

      const closeSidebar = () => {
        sidebar.classList.add('-translate-x-full');
        backdrop.classList.add('hidden');
        document.body.style.overflow = '';
      };

      openBtn.addEventListener('click', openSidebar);
      closeBtn.addEventListener('click', closeSidebar);
      backdrop.addEventListener('click', closeSidebar);
    }

    // Android Bottom Sheet Action Menu
    const actionBtn = document.getElementById('openAndroidActionBtn');
    const actionSheet = document.getElementById('androidActionSheet');
    const sheetCard = document.getElementById('sheetCard');
    const closeSheetBtn = document.getElementById('closeAndroidActionBtn');

    if (actionBtn && actionSheet && sheetCard && closeSheetBtn) {
      const openSheet = () => {
        actionSheet.classList.remove('hidden');
        setTimeout(() => {
          sheetCard.classList.remove('translate-y-full');
        }, 10);
        document.body.style.overflow = 'hidden';
      };

      const closeSheet = () => {
        sheetCard.classList.add('translate-y-full');
        setTimeout(() => {
          actionSheet.classList.add('hidden');
          document.body.style.overflow = '';
        }, 300);
      };

      actionBtn.addEventListener('click', openSheet);
      closeSheetBtn.addEventListener('click', closeSheet);
      actionSheet.addEventListener('click', (e) => {
        if (e.target === actionSheet) closeSheet();
      });
    }
  </script>
</body>
</html>
