# Lumitech.id - Jasa Pembuatan Website & Digital Presence

Website resmi landing page dan profil bisnis untuk **Lumitech.id** — solusi pembuatan website profesional, cepat, responsif, dan siap konversi untuk UMKM, korporasi, dan brand modern.

---

## 🚀 Fitur Unggulan

- **Bottom Navigation Bar Android:** Navigasi mobile diletakkan di bawah layar (*thumb-friendly bottom bar*) layaknya aplikasi Android modern (Beranda, Katalog, Tombol Utama Chat WA di tengah, Portofolio, dan Cara Pesan) sehingga tampilan HP jauh lebih simpel, bersih, dan bebas repot.
- **Katalog Produk & Layanan Ringkas (14 Layanan):** Seluruh 14 layanan (Website, Konsultasi UMKM, Desain Grafis, Video Editing, Social Media, Format Word, Pembuatan Pakaian/Konveksi, Olah Data Microsoft Excel, Slide Microsoft PowerPoint, dan Joki Tugas Cihuyyy) didesain kompak, rapi, dan proporsional dengan filter instan di `index.php#katalog` dan halaman khusus `produk.php`.
- **Desain Ramah Semua Umur (*All-Ages Friendly*):** Tampilan bersih, tipografi besar dan jelas, bahasa sederhana tanpa istilah teknis membingungkan, dan tombol pemesanan WhatsApp yang mudah ditekan.
- **WhatsApp Terpusat Tanpa Admin Lain:** Seluruh 14 layanan ditangani langsung melalui satu nomor resmi: `+62 878-6175-6916`.
- **Arsitektur Modular PHP:** Terstruktur rapi dengan pemisahan komponen `Layout/partials/app.php`, `navhome.php`, `footer.php`, `view/home.php`, dan `view/katalog.php`.
- **Floating WhatsApp Button Cerdas:** Otomatis tampil di desktop dan berintegrasi harmonis di mobile navbar tanpa tumpang tindih.
- **Showcase Portofolio & Karya Nyata:** Menampilkan hasil kerja live project dengan screenshot asli (`barbershop.png`, `mathlab.png`, `tempat spot.png`, `hbd.jpg`), caption penjelasan mendalam, fitur utama, dan metrik hasil konversi nyata.

---

## 📁 Struktur Folder

```
Lumitech/
├── admin/                   # Panel Dashboard Admin (CRUD Produk & Portofolio)
│   ├── index.php            # Dashboard overview & statistik
│   ├── login.php            # Autentikasi admin
│   ├── logout.php           # Logout session
│   ├── products.php         # Daftar & filter produk
│   ├── product-form.php     # Form tambah & edit produk
│   ├── portfolios.php       # Daftar & filter portofolio
│   ├── portfolio-form.php   # Form tambah, edit & upload portofolio
│   ├── settings.php         # Pengaturan keamanan & ganti password
│   └── rebuild.php          # Manual trigger static generator
├── data/                    # Penyimpanan data terstruktur JSON
│   ├── products.json        # Database katalog produk & layanan
│   ├── portfolios.json      # Database showcase portofolio
│   └── admin_config.json    # Konfigurasi akun admin terenkripsi
├── api/
│   ├── index.php            # Entry point Serverless Function Vercel (Halaman Utama)
│   └── produk.php           # Entry point Serverless Function Vercel (Katalog Produk)
├── Layout/
│   └── partials/
│       ├── app.php          # HTML <head>, favicon, SEO meta tags, dan Tailwind config
│       ├── navhome.php      # Top notice bar kontak, navbar responsif & mobile menu drawer
│       ├── footer.php       # Footer modular dengan kontak resmi dan navigasi
│       ├── data_helper.php  # Core helper CRUD JSON, auth admin & auto-rebuild static
│       └── whatsapp_helper.php # Helper pembuat format pesan & harga WhatsApp
├── assets/
│   ├── img/                 # Gambar logo, icon, dan flyer
│   └── portfolio/           # Screenshot hasil portofolio nyata
├── view/
│   ├── home.php             # Halaman utama dinamis
│   └── katalog.php          # Halaman katalog produk dinamis
├── .gitignore               # Konfigurasi pengabaian Git
├── .vercelignore            # Konfigurasi pengabaian upload Vercel
├── vercel.json              # Konfigurasi runtime PHP & routing Vercel
├── index.php                # Entry point lokal (Laragon / Apache)
├── produk.php               # Entry point lokal (Laragon / Apache)
└── README.md                # Dokumentasi proyek
```

---

## 🔐 Panel Dashboard Admin

Website kini telah dilengkapi dengan **Dashboard Admin Modern** untuk mengelola seluruh konten secara visual tanpa harus menyentuh kode manual:

### 1. Akses Admin
- URL Lokal Laragon: `http://localhost/Lumitech/admin/` atau `http://localhost:8000/admin/`
- **Username Default:** `admin`
- **Password Default:** `admin123`
*(Password dapat diubah kapan saja di menu **Pengaturan Akun** pada dashboard).*

### 2. Fitur-Fitur Admin:
- **Dashboard Overview:** Statistik jumlah produk, produk unggulan di beranda (featured), total portofolio, dan status sinkronisasi static site.
- **Android & Mobile-First Experience:**
  - **Bottom Navigation Bar Android:** Menu navigasi jempol di bawah layar (Overview, Produk, Portofolio, Database Aiven) layaknya aplikasi Android asli.
  - **Center Floating Action Button (+):** Tombol aksi cepat di tengah dengan Bottom Sheet Modal untuk menambah produk, menambah portofolio, atau rebuild dalam 1 ketukan.
  - **Responsive Mobile Cards:** Di layar HP, data produk otomatis berubah menjadi kartu yang rapi dengan tombol aksi besar (tanpa scroll horizontal yang menyulitkan).
  - **Sticky Action Bar:** Tombol simpan dan batal tetap melayang di bawah layar form sehingga tidak perlu scroll ke paling bawah.
  - **Dukungan Kamera HP:** Form portofolio mendukung upload foto langsung dari kamera smartphone maupun galeri foto.
- **Integrasi Database Cloud Aiven MySQL:**
  - Terhubung langsung ke cloud database **Aiven MySQL** via PDO dengan proteksi SSL bawaan.
  - **Pengaturan Database Visual (`admin/database.php`):** Masukkan Host, Port, User, dan Password Aiven langsung dari browser atau melalui file `.env`.
  - **Fitur Uji Koneksi:** Tes koneksi langsung dengan status real-time.
  - **Migrasi Data 1-Klik:** Inisialisasi tabel `products`, `portfolios`, dan `admins` otomatis di Aiven serta memindahkan seluruh 14 produk dan 6 portofolio bawaan ke cloud.
  - **Hybrid Graceful Fallback:** Jika Aiven MySQL belum diisi atau offline, sistem otomatis menggunakan cache JSON lokal sehingga website tidak akan pernah mengalami downtime.
- **Kelola Produk & Layanan (CRUD):**
  - Menambahkan layanan baru lengkap dengan ikon Material Symbols, badge kategori, harga, sub-harga, tags keunggulan, dan deskripsi.
  - Mengubah (edit) seluruh detail produk kapan saja.
  - Menghapus produk lama dengan konfirmasi aman.
  - Toggle 1-klik untuk status **Unggulan Beranda (Featured)** agar langsung tampil di landing page depan.
  - Integrasi otomatis dengan generator pemesanan WhatsApp.
- **Kelola Portofolio Hasil Kerja (CRUD):**
  - Menambahkan karya baru dengan **upload foto langsung dari kamera/galeri HP atau laptop** (JPG/PNG/WebP) atau **memilih foto yang sudah ada** di server.
  - Mengubah judul, kategori tab filter (`desain`, `website`, `dokumen`), badge, ikon, deskripsi, dan tags spesifikasi.
  - Menghubungkan portofolio dengan template chat WhatsApp terkait.
  - Menghapus portofolio lama dengan konfirmasi aman.
- **Auto-Sync & Rebuild:** Setiap kali menyimpan data dari admin, database Aiven MySQL diperbarui, cache JSON disinkronkan, dan static HTML (`index.html` & `produk.html`) otomatis dikompilasi ulang secara instan!

---

## 💻 Cara Menjalankan Proyek

### 1. Menggunakan Laragon (Lokal)
- Pastikan folder proyek berada di direktori `C:\laragon\www\Lumitech`.
- Buka Laragon lalu klik **Start All**.
- Akses website melalui browser di: `http://localhost/Lumitech` atau `http://localhost/Lumitech/produk.php`.

### 2. Menggunakan PHP Built-in Server
Buka terminal PowerShell / Command Prompt di folder proyek:
```bash
php -S localhost:8000
```
Lalu buka browser di `http://localhost:8000` atau `http://localhost:8000/produk.php`.

### 3. Deploy ke Vercel (Online / Production)
Proyek ini siap dideploy ke Vercel dengan performa super cepat (Edge CDN):
1. Jika baru saja mengubah tampilan PHP di folder `view/` atau `Layout/`, jalankan build terlebih dahulu:
   ```bash
   php build.php
   # atau klik ganda build.bat di Windows
   ```
2. Push commit ke repository GitHub kamu (`main`):
   ```bash
   git add .
   git commit -m "fix: static html build & routing for Vercel"
   git push origin main
   ```
3. Vercel akan otomatis melakukan deploy dalam beberapa detik dan website langsung live di domain Vercel kamu tanpa error 404!

---

## 🛠️ Kontak & Dukungan
- **Website:** [Lumitech.id](https://lumitech.id)
- **WhatsApp Resmi:** +62 878-6175-6916
- **Email:** halo@lumitech.id
