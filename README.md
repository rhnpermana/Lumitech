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
├── api/
│   ├── index.php            # Entry point Serverless Function Vercel (Halaman Utama)
│   └── produk.php           # Entry point Serverless Function Vercel (Katalog Produk)
├── Layout/
│   └── partials/
│       ├── app.php          # HTML <head>, favicon, SEO meta tags, dan Tailwind config
│       ├── navhome.php      # Top notice bar kontak, navbar responsif & mobile menu drawer
│       ├── footer.php       # Footer modular dengan kontak resmi dan navigasi
│       └── whatsapp_helper.php # Helper pembuat format pesan & harga WhatsApp
├── assets/
│   ├── img/                 # Gambar logo, icon, dan flyer
│   └── portfolio/           # Screenshot hasil portofolio nyata
├── view/
│   ├── home.php             # Halaman utama (Hero, Katalog Terpadu, Portofolio, Cara Order, Garansi, FAQ)
│   └── katalog.php          # Halaman katalog produk & layanan berdiri sendiri
├── .gitignore               # Konfigurasi pengabaian Git
├── .vercelignore            # Konfigurasi pengabaian upload Vercel
├── vercel.json              # Konfigurasi runtime PHP & routing Vercel
├── index.php                # Entry point lokal (Laragon / Apache)
├── produk.php               # Entry point lokal (Laragon / Apache)
└── README.md                # Dokumentasi proyek
```

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
Proyek ini sudah dilengkapi konfigurasi runtime Serverless PHP (`vercel.json`, folder `api/`, dan `.vercelignore`):
1. Push commit ke repository GitHub kamu (`main`):
   ```bash
   git add .
   git commit -m "fix: configure Vercel Serverless PHP runtime and routes"
   git push origin main
   ```
2. Vercel akan secara otomatis melakukan rebuild/redeploy.
3. Halaman sekarang akan terbuka normal sebagai website interaktif tanpa mendownload file `.php`.

---

## 🛠️ Kontak & Dukungan
- **Website:** [Lumitech.id](https://lumitech.id)
- **WhatsApp Resmi:** +62 878-6175-6916
- **Email:** halo@lumitech.id
