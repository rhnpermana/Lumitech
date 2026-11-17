<?php
/**
 * Lumitech Admin - Auth Guard & Flash Message Utility
 */

// Aktifkan output buffering agar redirect header('Location: ...') selalu aman
if (ob_get_level() === 0) {
    ob_start();
}

require_once __DIR__ . '/../Layout/partials/data_helper.php';

adminSessionStart();

/**
 * Simpan pesan flash ke session
 */
function setFlashMessage(string $type, string $message): void
{
    $_SESSION['lumitech_flash'] = [
        'type'    => $type, // 'success', 'error', 'info', 'warning'
        'message' => $message,
    ];
}

/**
 * Ambil dan hapus pesan flash dari session
 */
function getFlashMessage(): ?array
{
    if (isset($_SESSION['lumitech_flash'])) {
        $flash = $_SESSION['lumitech_flash'];
        unset($_SESSION['lumitech_flash']);
        return $flash;
    }
    return null;
}
