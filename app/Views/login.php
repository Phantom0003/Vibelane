<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$errors = $_SESSION['login_errors'] ?? [];
$old = $_SESSION['old_input'] ?? [];
unset($_SESSION['login_errors'], $_SESSION['old_input']);
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="Public/image/favicon.svg">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="Public/css/tiny-slider.css" rel="stylesheet">
    <link href='Public/css/style.css' rel="stylesheet">
    <link href='Public/css/loginstyle.css' rel="stylesheet">
    <title>Vibelane -- Login</title>
</head>
<body>
    <body class="min-vh-100 d-flex flex-column justify-content-between">
    <!-- Login Form Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="p-4 p-sm-5 rounded-4 shadow-lg text-white login-card">
                    <!-- Back to Home Button -->
                <div class="mb-3">
                    <a href="index.php" class="btn-back text-decoration-none d-inline-flex align-items-center">
                        <i class="fas fa-arrow-left me-2"></i> Back to Home
                    </a>
                </div>
                    <div class="text-center mb-4">
                        <h2 class="section-title fw-bold mb-1">Welcome Back</h2>
                        <p class="text-white-50 small">Enter your credentials to access your account</p>
                    </div>
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0 ps-3">
                                <?php foreach ($errors as $error): ?>
                                    <li><?= htmlspecialchars($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="index.php?url=login" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-white-50 small fw-semibold">EMAIL ADDRESS</label>
                            <input type="email" name="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>" class="form-control" placeholder="alex@vibelane.com" required>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label text-white-50 small fw-semibold">PASSWORD</label>
                                <a href="#" class="small text-decoration-none forgot-password">Forgot?</a>
                            </div>
                            <input type="password" name="password" value="<?= htmlspecialchars($old['password'] ?? '') ?>" class="form-control" placeholder="••••••••" required>
                        </div>

                        <div class="form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label text-white-50 small" for="remember">
                                Keep me logged in
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 mb-2">Log In</button>
                    </form>

                    <div class="text-center mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <p class="text-white-50 small mb-0">Don't have an account? 
                            <a href="index.php?url=signup" class="text-white fw-bold text-decoration-none ms-1">Sign up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>