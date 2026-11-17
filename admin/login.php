<?php
require_once __DIR__ . '/auth.php';

if (isAdminLoggedIn()) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Username dan password wajib diisi!';
    } elseif (adminLogin($username, $password)) {
        setFlashMessage('success', 'Selamat datang di Dashboard Admin Lumitech.id!');
        header('Location: index.php');
        exit;
    } else {
        $error = 'Username atau password yang Anda masukkan salah.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Lumitech.id</title>
  <link rel="icon" type="image/png" href="../assets/img/logo-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          },
          colors: {
            primary: '#0035c5',
            'primary-dark': '#00258d',
            'primary-light': '#e6edfd',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans min-h-screen flex items-center justify-center p-4">
  
  <div class="w-full max-w-md">
    <!-- Header Brand -->
    <div class="text-center mb-8">
      <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-primary text-white shadow-lg shadow-primary/30 mb-3">
        <span class="material-symbols-outlined text-3xl">admin_panel_settings</span>
      </div>
      <h1 class="text-2xl font-black text-slate-900 tracking-tight">Lumitech Admin</h1>
      <p class="text-xs text-slate-500 mt-1">Masuk untuk mengelola katalog produk &amp; portofolio</p>
    </div>

    <!-- Login Card -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-100">
      
      <?php if (!empty($error)): ?>
      <div class="mb-5 p-3.5 rounded-2xl bg-red-50 border border-red-200 text-red-700 text-xs flex items-center gap-2">
        <span class="material-symbols-outlined text-base shrink-0">error</span>
        <span><?= htmlspecialchars($error) ?></span>
      </div>
      <?php endif; ?>

      <form method="POST" action="login.php" class="space-y-4">
        <div>
          <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" for="username">Username</label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-lg">person</span>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($_POST['username'] ?? 'admin') ?>" required autofocus
              class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
              placeholder="Masukkan username" />
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5" for="password">Password</label>
          <div class="relative">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-lg">lock</span>
            <input type="password" id="password" name="password" required
              class="w-full pl-10 pr-10 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
              placeholder="••••••••" />
            <button type="button" id="togglePasswordBtn" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 transition-colors">
              <span class="material-symbols-outlined text-lg" id="togglePasswordIcon">visibility</span>
            </button>
          </div>
          <div class="mt-1 flex items-center justify-between text-[11px] text-slate-400">
            <span>Default: <strong>admin</strong> / <strong>admin123</strong></span>
          </div>
        </div>

        <button type="submit" class="w-full py-3 px-4 rounded-xl bg-primary hover:bg-primary-dark text-white font-bold text-sm shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 active:scale-[0.99] mt-2">
          <span>Masuk ke Dashboard</span>
          <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </button>
      </form>
    </div>

    <!-- Back to site link -->
    <div class="text-center mt-6">
      <a href="../index.html" class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-primary transition-colors">
        <span class="material-symbols-outlined text-sm">arrow_back</span>
        <span>Kembali ke Website Utama</span>
      </a>
    </div>

  </div>

  <script>
    const passwordInput = document.getElementById('password');
    const toggleBtn = document.getElementById('togglePasswordBtn');
    const toggleIcon = document.getElementById('togglePasswordIcon');

    toggleBtn.addEventListener('click', () => {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      toggleIcon.textContent = type === 'password' ? 'visibility' : 'visibility_off';
    });
  </script>
</body>
</html>
