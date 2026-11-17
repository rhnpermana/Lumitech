<?php
require_once __DIR__ . '/auth.php';
requireAdminAuth();

if (triggerSiteRebuild()) {
    setFlashMessage('success', 'File index.html dan produk.html berhasil dikompilasi ulang & disinkronkan!');
} else {
    setFlashMessage('error', 'Terjadi kesalahan saat mengkompilasi ulang static file.');
}

$referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
header("Location: {$referer}");
exit;
