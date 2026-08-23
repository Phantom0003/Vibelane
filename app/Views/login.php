<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../public/image/favicon.svg">
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <title>Login -- Vibelane</title>
</head>

<body class="bg-dark text-white min-vh-100 d-flex flex-column justify-content-between">

    <!-- Navigation Bar -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Vibelane<span>.</span></a>
            <a href="index.html" class="text-white text-decoration-none"><i class="fas fa-arrow-left me-2"></i>Back to
                Shop</a>
        </div>
    </nav>

    <!-- Login Card -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="p-4 p-md-5 rounded-4 shadow-lg"
                    style="background-color: #121212; border: 1px solid #2a2a2a;">
                    <h2 class="text-center fw-bold mb-2">Welcome Back</h2>
                    <p class="text-center text-secondary mb-4">Enter your credentials to access your account</p>

                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary fs-7">EMAIL ADDRESS</label>
                            <input type="email" class="form-control bg-dark text-white border-secondary" id="email"
                                placeholder="name@vibelane.com" required>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="password" class="form-label text-secondary fs-7">PASSWORD</label>
                                <a href="#" class="text-decoration-none text-secondary small">Forgot?</a>
                            </div>
                            <input type="password" class="form-control bg-dark text-white border-secondary"
                                id="password" placeholder="••••••••" required>
                        </div>

                        <div class="form-check mb-4">
                            <input type="checkbox" class="form-check-input bg-dark border-secondary" id="remember">
                            <label class="form-check-label text-secondary small" for="remember">Remember me on this
                                device</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold rounded-pill">Sign
                            In</button>
                    </form>

                    <div class="text-center mt-4 pt-3 border-top border-secondary">
                        <p class="text-secondary mb-0">Don't have an account? <a href="signup.html"
                                class="text-white fw-bold text-decoration-none">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Minimal Footer -->
    <footer class="text-center py-3 text-secondary small">
        <p class="mb-0">&copy; Vibelane Streetwear. All rights reserved.</p>
    </footer>

</body>

</html>