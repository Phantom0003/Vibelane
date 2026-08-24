<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Public/image/favicon.svg">
    
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="Public/css/signupformstyle.css" rel="stylesheet">
    <title>Sign Up -- Vibelane</title>
</head>

<body class="min-vh-100 d-flex flex-column justify-content-between">

    <!-- Sign Up Form Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="p-4 p-sm-5 rounded-4 shadow-lg text-white signup-card">
                    
                    <!-- Back to Home Button -->
                    <div class="mb-3">
                        <a href="index.php" class="btn-back text-decoration-none d-inline-flex align-items-center">
                            <i class="fas fa-arrow-left me-2"></i> Back to Home
                        </a>
                    </div>

                    <div class="text-center mb-4">
                        <h2 class="section-title fw-bold mb-1">Create Account</h2>
                        <p class="text-white-50 small">Join Vibelane to access exclusive drops</p>
                    </div>

                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-white-50 small fw-semibold">FULL NAME</label>
                            <input type="text" class="form-control" placeholder="Alex Morgan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white-50 small fw-semibold">EMAIL ADDRESS</label>
                            <input type="email" class="form-control" placeholder="alex@vibelane.com" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white-50 small fw-semibold">PASSWORD</label>
                            <input type="password" class="form-control" placeholder="••••••••" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white-50 small fw-semibold">CONFIRM PASSWORD</label>
                            <input type="password" class="form-control" placeholder="••••••••" required>
                        </div>

                        <div class="form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label text-white-50 small" for="terms">
                                I agree to the <a href="#" class="terms-link">Terms & Conditions</a>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 mb-2">Sign Up</button>
                    </form>

                    <div class="text-center mt-4 pt-3 border-top border-secondary border-opacity-25">
                        <p class="text-white-50 small mb-0">Already have an account? 
                            <a href="login.html" class="text-white fw-bold text-decoration-none ms-1">Log in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-section py-4 text-center text-white-50 small">
        <div class="container">
            <p class="mb-0">&copy; Vibelane Streetwear. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>