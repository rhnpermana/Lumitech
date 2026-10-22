<?php
/**
 * Lumitech.id - WhatsApp Helper & Service Catalog Pricing
 * Menyediakan sinkronisasi pesan WhatsApp yang detail, sopan, dan harga yang sesuai front-end.
 */

if (!function_exists('getWaPhoneNumber')) {
    function getWaPhoneNumber(): string
    {
        return '6287861756916';
    }
}

if (!function_exists('getServiceDetails')) {
    function getServiceDetails(): array
    {
        return [
            'starter_umkm' => [
                'name'        => 'Paket Starter Website UMKM',
                'price'       => 'Rp 150.000',
                'price_label' => 'Mulai Harga:',
                'price_sub'   => 'Belum Termasuk Domain .com + hosting 1 tahun',
                'category'    => 'Website UMKM',
                'facilities'  => [
                    '1 Halaman Landing Page Responsif',
                    'Tombol Pesan Langsung WhatsApp',
                    'Integrasi Google Maps & Medsos',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Nama Usaha / Brand',
                    'Bidang Usaha',
                    'Status Domain/Hosting (Sudah Ada / Belum)',
                    'Catatan / Request Khusus',
                ],
            ],

            'pro_business' => [
                'name'        => 'Website Professional Business',
                'price'       => 'Rp 1.000.000',
                'price_label' => 'Mulai Harga :',
                'price_sub'   => 'Gratis email bisnis (nama@perusahaan.com)',
                'category'    => 'Multi-Halaman & Bisnis Pro',
                'facilities'  => [
                    '5-7 Halaman (Home, Tentang, Layanan, Kontak, dll)',
                    'Panel Admin Mudah Update Artikel / Produk',
                    'Garansi Maintenance 6 Bulan + Backup Rutin',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Nama Perusahaan / Instansi',
                    'Bidang Usaha',
                    'Kebutuhan Fitur / Halaman',
                    'Catatan Tambahan',
                ],
            ],

            'custom_app' => [
                'name'        => 'Toko Online / Web Aplikasi Custom',
                'price'       => 'Sesuai Kebutuhan',
                'price_label' => 'Mulai Harga:',
                'price_sub'   => 'Estimasi transparan setelah diskusi santai',
                'category'    => 'Custom & Toko Online',
                'facilities'  => [
                    'Keranjang Belanja & Pembayaran Otomatis QRIS',
                    'Hitung Ongkos Kirim Kurir Otomatis',
                    'Laporan Penjualan & Database Terstruktur Sesuai Request',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Nama Usaha / Proyek',
                    'Konsep Sistem / Aplikasi yang Diinginkan',
                    'Fitur Utama yang Dibutuhkan',
                    'Target Deadline',
                ],
            ],

            'konsultasi_umkm' => [
                'name'        => 'Konsultasi Bisnis UMKM',
                'price'       => 'Rp 30.000',
                'price_label' => 'Harga Mulai:',
                'price_sub'   => 'Via Google Meet atau WhatsApp Call/Chat',
                'category'    => 'Konsultasi UMKM',
                'facilities'  => [
                    'Bedah Kelemahan Promosi & Sosmed Usaha',
                    'Rencana Aksi Praktis Langsung Terarah',
                    'Rangkuman Insight Materi Format PDF',
                ],
                'form_fields' => [
                    'Nama',
                    'Nama Usaha / Produk',
                    'Bidang Usaha',
                    'Topik / Kendala yang Ingin Dibahas',
                    'Pilihan Waktu Luang Konsultasi (Hari & Jam)',
                ],
            ],

            'desain_grafis' => [
                'name'        => 'Desain Grafis & Logo',
                'price'       => 'Rp 30.000',
                'price_label' => 'Harga Mulai:',
                'price_sub'   => 'Desain Perkonten • Bebas Revisi',
                'category'    => 'Desain Grafis',
                'facilities'  => [
                    'Desain Resolusi Tinggi HD Siap Cetak / Sosmed',
                    'File Lengkap (PNG Transparan, JPG, PDF)',
                    'Gratis Revisi Sampai Puas',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Jenis Desain (Logo / Kemasan / Poster / Feed Sosmed)',
                    'Nama Brand / Teks dalam Desain',
                    'Konsep / Nuansa Warna yang Diinginkan',
                    'Deadline Pengerjaan',
                ],
            ],

            'video_editing' => [
                'name'        => 'Video Editing Reels & TikTok',
                'price'       => 'Rp 40.000',
                'price_label' => 'Tarif Mulai:',
                'price_sub'   => 'Per video durasi 30 - 60 detik',
                'category'    => 'Video Creative',
                'facilities'  => [
                    'Subtitle Dinamis Kekinian & Sound Effect',
                    'Format 9:16 Pas untuk IG Reels & TikTok',
                    'Pengerjaan Kilat 1-2 Hari Kerja',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Jumlah Video yang Ingin Diedit',
                    'Tema / Gaya Video',
                    'Status Bahan Mentahan Video (Sudah Ada / Belum)',
                    'Deadline Pengerjaan',
                ],
            ],

            'sosmed_management' => [
                'name'        => 'Analisis Insight Dan Pengelolaan Media Sosial',
                'price'       => 'Rp 30.000',
                'price_label' => 'Mulai Harga:',
                'price_sub'   => 'Perpostingan',
                'category'    => 'Sosial Media',
                'facilities'  => [
                    'Desain Feed Estetik + Teks Caption Menarik',
                    'Riset Hashtag Relevan Sesuai Target Audiens',
                    'Jadwal Upload Rapi & Konsisten',
                    'Riset Berbentuk Dokumen Insight',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Username Akun Instagram / TikTok',
                    'Bidang Usaha / Niche',
                    'Rencana Pemesanan (Satuan Perpostingan / Paket)',
                    'Catatan / Kebutuhan Khusus',
                ],
            ],

            'format_dokumen' => [
                'name'        => 'Format Dokumen Word & Pengetikan',
                'price'       => 'Rp 25.000',
                'price_label' => 'Tarif Mulai:',
                'price_sub'   => 'Format rapi standar resmi siap cetak',
                'category'    => 'Dokumen & Administrasi',
                'facilities'  => [
                    'Daftar Isi, Daftar Gambar & Halaman Otomatis',
                    'Format Margin & Spasi Rapi Standar Resmi',
                    'Pengerjaan Kilat dan Hasil Rapi',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Jenis Dokumen (Makalah / Skripsi / SOP / Surat Resmi / Laporan)',
                    'Perkiraan Jumlah Halaman',
                    'Kebutuhan (Perapian Format / Pengetikan Ulang)',
                    'Deadline Pengerjaan',
                ],
            ],

            'desain_pakaian' => [
                'name'        => 'Jasa Desain Pakaian & Apparel',
                'price'       => 'Rp 45.000',
                'price_label' => 'Tarif Mulai:',
                'price_sub'   => 'Mockup depan & belakang • Siap kirim ke vendor konveksi',
                'category'    => 'Desain Pakaian & Apparel',
                'facilities'  => [
                    'Desain Mockup Depan & Belakang Resolusi Tinggi HD',
                    'File Mentahan Siap Sablon / Bordir (PNG Transparan & PDF)',
                    'Free Konsultasi Konsep, Pilihan Font & Palet Warna',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Jenis Pakaian (Kaos / Hoodie / Kemeja / Jersey / Celana)',
                    'Tema / Konsep Desain yang Diinginkan',
                    'Teks / Logo yang Ingin Dicantumkan',
                    'Deadline Pengerjaan',
                ],
            ],

            // Fallback alias jika masih ada pemanggilan dengan key lama
            'konveksi_pakaian' => [
                'name'        => 'Jasa Desain Pakaian & Apparel',
                'price'       => 'Rp 45.000',
                'price_label' => 'Tarif Mulai:',
                'price_sub'   => 'Mockup depan & belakang • Siap kirim ke vendor konveksi',
                'category'    => 'Desain Pakaian & Apparel',
                'facilities'  => [
                    'Desain Mockup Depan & Belakang Resolusi Tinggi HD',
                    'File Mentahan Siap Sablon / Bordir (PNG Transparan & PDF)',
                    'Free Konsultasi Konsep, Pilihan Font & Palet Warna',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Jenis Pakaian (Kaos / Hoodie / Kemeja / Jersey / Celana)',
                    'Tema / Konsep Desain yang Diinginkan',
                    'Teks / Logo yang Ingin Dicantumkan',
                    'Deadline Pengerjaan',
                ],
            ],

            'excel_olah_data' => [
                'name'        => 'Jasa Olah Data Microsoft Excel',
                'price'       => 'Rp 25.000',
                'price_label' => 'Tarif Mulai:',
                'price_sub'   => 'File otomatis & bebas error • Pengerjaan cepat',
                'category'    => 'Microsoft Excel & Data',
                'facilities'  => [
                    'Rumus Otomatis (VLOOKUP, INDEX MATCH, IF, dll)',
                    'Dashboard Grafik Visual & Pivot Table',
                    'Rekap Kas Keuangan, Stok & Tugas Praktikum',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Kebutuhan (Rumus / Dashboard / Pembukuan Kas / Tugas Excel)',
                    'Ringkasan Masalah / Deskripsi Data',
                    'Deadline Pengerjaan',
                ],
            ],

            'ppt_slide' => [
                'name'        => 'Jasa Slide Microsoft PowerPoint (PPT)',
                'price'       => 'Rp 25.000',
                'price_label' => 'Tarif Mulai:',
                'price_sub'   => 'Desain visual memukau • Termasuk animasi',
                'category'    => 'PowerPoint & Presentasi',
                'facilities'  => [
                    'Desain Modern, Rapi & Tidak Membosankan',
                    'Transisi & Animasi Halus Siap Presentasi',
                    'File Mentahan .PPTX Editable + File PDF',
                ],
                'form_fields' => [
                    'Nama Pemesan',
                    'Tema / Topik Presentasi',
                    'Perkiraan Jumlah Slide',
                    'Status Bahan Materi (Sudah Ada / Perlu Dirangkum)',
                    'Deadline Presentasi',
                ],
            ],

            'joki_tugas' => [
                'name'        => 'Joki Tugas Pelajar & Kuliah',
                'price'       => 'Rp 10.000',
                'price_label' => 'Mulai Harga:',
                'price_sub'   => 'Pengerjaan kilat 1 - 24 jam • Privasi Aman',
                'category'    => 'Joki All Tugas',
                'facilities'  => [
                    '100% Rahasia & Identitas Aman Terjamin',
                    'Free 3x Revisi Sampai Nilai Aman',
                    'Bisa Format Word, PPT, dan PDF',
                ],
                'form_fields' => [
                    'Nama / Inisial',
                    'Jenjang Pendidikan (SMP / SMA / SMK / Kuliah)',
                    'Mata Pelajaran / Mata Kuliah',
                    'Format Tugas yang Diminta',
                    'Deadline Pengumpulan (Hari & Jam)',
                ],
            ],

            'joki_coding' => [
                'name'        => 'Joki Website & Coding',
                'price'       => 'Rp 30.000',
                'price_label' => 'Harga Mulai:',
                'price_sub'   => 'Include bimbingan kodingan & instalasi',
                'category'    => 'Tugas Coding & Praktikum',
                'facilities'  => [
                    'Source Code Rapi & Database Terstruktur',
                    'Penjelasan Alur Sistem untuk Presentasi / Demo',
                    'Bimbingan Sampai Program Berjalan Lancar',
                ],
                'form_fields' => [
                    'Nama / Inisial',
                    'Bahasa Pemrograman / Stack (PHP / Laravel / HTML-CSS-JS / dll)',
                    'Deskripsi Tugas / Fitur CRUD yang Dibutuhkan',
                    'Deadline Pengerjaan',
                ],
            ],

            'joki_canva' => [
                'name'        => 'Joki Desain Canva & PPT',
                'price'       => 'Rp 20.000',
                'price_label' => 'Tarif Mulai:',
                'price_sub'   => 'Termasuk link template Canva bisa diedit',
                'category'    => 'Desain Tugas Pelajar/Mhs',
                'facilities'  => [
                    'Layout Kekinian, Rapi, dan Menarik',
                    'Free 2x Revisi Cepat',
                    'Ekspor PDF & PPTX Resolusi Tinggi',
                ],
                'form_fields' => [
                    'Nama / Inisial',
                    'Jenis Desain (Slide PPT / Poster Ilmiah / Infografis / Banner)',
                    'Topik Tugas & Nuansa Warna',
                    'Deadline Pengerjaan',
                ],
            ],
        ];
    }
}

if (!function_exists('getWaOrderUrl')) {
    /**
     * Menghasilkan URL pemesanan WhatsApp dengan teks terperinci dan harga yang sinkron
     */
    function getWaOrderUrl(string $serviceKey): string
    {
        $services = getServiceDetails();
        $phone = getWaPhoneNumber();

        if (!isset($services[$serviceKey])) {
            return "https://wa.me/{$phone}?text=" . rawurlencode("Halo Lumitech, saya ingin konsultasi layanan.");
        }

        $s = $services[$serviceKey];

        $lines = [];
        $lines[] = "Halo Admin Lumitech, saya ingin memesan layanan berikut:";
        $lines[] = "";
        $lines[] = "📌 Layanan: " . $s['name'];
        $lines[] = "💰 Harga: " . $s['price'] . ($s['price_sub'] ? " (" . $s['price_sub'] . ")" : "");
        $lines[] = "📋 Kategori: " . $s['category'];

        if (!empty($s['facilities'])) {
            $lines[] = "";
            $lines[] = "✨ Fasilitas Termasuk:";
            foreach ($s['facilities'] as $fac) {
                $lines[] = "  • " . $fac;
            }
        }

        if (!empty($s['form_fields'])) {
            $lines[] = "";
            $lines[] = "--- Form Pemesanan Singkat ---";
            foreach ($s['form_fields'] as $field) {
                $lines[] = "• " . $field . ": ";
            }
        }

        $lines[] = "";
        $lines[] = "Mohon informasi ketersediaan slot pengerjaan dan langkah selanjutnya. Terima kasih!";

        $message = implode("\n", $lines);

        return "https://wa.me/{$phone}?text=" . rawurlencode($message);
    }
}
