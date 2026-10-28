<?php
/**
 * Lumitech.id - Static Site Generator for Vercel Deployment
 * Menghasilkan file static index.html dan produk.html dari view PHP
 */

echo "==> Memulai build HTML Lumitech.id...\n";

// 1. Build index.html (Halaman Beranda)
ob_start();
$assetBase = '';
$currentPage = 'home';
require __DIR__ . '/view/home.php';
$homeHtml = ob_get_clean();

file_put_contents(__DIR__ . '/index.html', $homeHtml);
echo " [OK] index.html berhasil dibuat (" . number_format(strlen($homeHtml)) . " bytes)\n";

// 2. Build produk.html (Halaman Katalog Produk)
ob_start();
$assetBase = '';
$currentPage = 'produk';
require __DIR__ . '/view/katalog.php';
$katalogHtml = ob_get_clean();

file_put_contents(__DIR__ . '/produk.html', $katalogHtml);
echo " [OK] produk.html berhasil dibuat (" . number_format(strlen($katalogHtml)) . " bytes)\n";

echo "==> Build selesai! Website siap di-deploy ke Vercel.\n";
