# Lumitech.id - Jasa Pembuatan Website & Digital Presence

Website resmi landing page dan profil bisnis untuk **Lumitech.id** — solusi pembuatan website profesional, cepat, responsif, dan siap konversi untuk UMKM, korporasi, dan brand modern.

---

## 🚀 Fitur Unggulan

- **Katalog Produk & Layanan Terpadu:** Seluruh 11 layanan (Website, Konsultasi UMKM, Desain Grafis, Video Editing, Social Media, Format Word, dan Joki Tugas Cihuyyy) digabung dalam satu katalog interaktif dengan filter instan di `index.php#katalog` dan halaman khusus `produk.php`.
- **Desain Ramah Semua Umur (*All-Ages Friendly*):** Tampilan bersih, tipografi besar dan jelas, bahasa sederhana tanpa istilah teknis membingungkan, dan tombol pemesanan WhatsApp yang mudah ditekan.
- **Dua Jalur Kontak Resmi:**
  - 💬 **Konsultasi Bisnis & Website:** `+62 878-6175-6916`
  - ⚡ **Admin Pemesanan & Joki Tugas:** `+62 813-8819-1291`
- **Arsitektur Modular PHP:** Terstruktur rapi dengan pemisahan komponen `Layout/partials/app.php`, `navhome.php`, `footer.php`, `view/index.php`, dan `view/produk.php`.
- **Dual Floating WhatsApp Button:** Tombol melayang cerdas dengan menu pop-up untuk memilih chat Konsultasi atau Admin.
- **Showcase Portofolio & Studi Kasus:** Menampilkan hasil kerja pilihan dengan penjelasan sederhana dan metrik konversi nyata.

---

## 📁 Struktur Folder

```
Lumitech/
├── Layout/
│   └── partials/
│       ├── app.php          # HTML <head>, favicon, SEO meta tags, dan Tailwind config
│       ├── navhome.php      # Top notice bar kontak, navbar responsif & mobile menu drawer
│       └── footer.php       # Footer modular dengan kontak resmi dan navigasi
├── assets/
│   └── img/
│       ├── logo.jpeg        # Banner utama logo Lumitech
│       ├── logo-icon.png    # High-res square icon neon L untuk favicon & navbar
│       ├── joki-logo.png    # Logo heksagonal Joki Cihuyyy
│       └── joki-flyer.jpg   # Flyer referensi Joki Cihuyyy
├── view/
│   ├── index.php            # Halaman utama (Hero, Katalog Terpadu, Portofolio, Cara Order, Garansi, FAQ)
│   └── produk.php           # Halaman katalog produk & layanan berdiri sendiri
├── .gitignore               # Konfigurasi pengabaian Git
├── index.php                # Entry point utama aplikasi
├── produk.php               # Entry point katalog produk
└── README.md                # Dokumentasi proyek
```

---

## 💻 Cara Menjalankan Proyek

### 1. Menggunakan Laragon (Rekomendasi)
- Pastikan folder proyek berada di direktori `C:\laragon\www\Lumitech`.
- Buka Laragon lalu klik **Start All**.
- Akses website melalui browser di: `http://localhost/Lumitech` atau `http://localhost/Lumitech/produk.php`.

### 2. Menggunakan PHP Built-in Server
Buka terminal PowerShell / Command Prompt di folder proyek:
```bash
php -S localhost:8000
```
Lalu buka browser di `http://localhost:8000` atau `http://localhost:8000/produk.php`.

---

## 🛠️ Kontak & Dukungan
- **Website:** [Lumitech.id](https://lumitech.id)
- **Konsultasi Bisnis & Web:** +62 878-6175-6916
- **Admin Pemesanan & Joki:** +62 813-8819-1291
- **Email:** halo@lumitech.id
