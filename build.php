<?php
/**
 * Lumitech.id - Static Site Generator for Vercel Deployment
 * Menghasilkan file static index.html dan produk.html dari view PHP
 */

echo "==> Memulai build HTML Lumitech.id...\n";

function buildHtml(string $viewPath, string $targetFile, string $currentPage): void {
    ob_start();
    $assetBase = '';
    require $viewPath;
    $content = ob_get_clean();
    
    file_put_contents(__DIR__ . '/' . $targetFile, $content);
    echo " [OK] {$targetFile} berhasil dibuat (" . number_format(strlen($content)) . " bytes)\n";
}

// 1. Build index.html (Halaman Beranda)
buildHtml(__DIR__ . '/view/home.php', 'index.html', 'home');

// 2. Build produk.html (Halaman Katalog Produk)
buildHtml(__DIR__ . '/view/katalog.php', 'produk.html', 'produk');

echo "==> Build selesai! Website siap di-deploy ke Vercel.\n";
