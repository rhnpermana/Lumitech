<?php
/**
 * Lumitech.id - Vercel Serverless Function Router for Admin Dashboard
 * Menjembatani seluruh route /admin/* di Vercel ke panel admin dinamis.
 */

$requestUri = $_SERVER['REQUEST_URI'] ?? '/admin/';
$parsedPath = parse_url($requestUri, PHP_URL_PATH);

// Pastikan trailing slash untuk /admin agar relative path URL & asset di HTML aman
if ($parsedPath === '/admin') {
    header('Location: /admin/');
    exit;
}

// Ekstrak nama file setelah /admin/
$relative = preg_replace('#^/admin/?#', '', $parsedPath);
$relative = trim($relative, '/');

if ($relative === '' || $relative === 'index.php') {
    $targetFile = dirname(__DIR__) . '/admin/index.php';
} else {
    $cleanFile = basename($relative);
    // Tambahkan ekstensi .php jika pengguna mengetik /admin/products tanpa .php
    if (strpos($cleanFile, '.') === false) {
        $cleanFile .= '.php';
    }
    $targetFile = dirname(__DIR__) . '/admin/' . $cleanFile;
}

if (file_exists($targetFile)) {
    require $targetFile;
} else {
    http_response_code(404);
    echo '<!DOCTYPE html><html lang="id"><head><meta charset="utf-8"><title>404 Not Found</title></head><body style="font-family:sans-serif;text-align:center;padding:50px;"><h2>404 - Halaman Admin Tidak Ditemukan</h2><p><a href="/admin/">Kembali ke Dashboard Admin</a></p></body></html>';
}
