<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vibelane | Transparent Navbar</title>
 
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="Public/css/header.css">
</head>
<body>

  <!-- TRANSPARENT NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-transparent">
    <div class="container">
      <a class="navbar-brand text-white" href="index.php">Vibelane<span>.</span></a>

      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#transparentMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="transparentMenu">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?url=shop">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?url=about">About us</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?url=services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?url=blog">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?url=contact">Contact us</a></li>
        </ul>

        <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
          <a href="index.php?url=account" class="text-white fs-5"><i class="bi bi-person"></i></a>
          <a href="index.php?url=cart" class="text-white fs-5 me-2"><i class="bi bi-bag"></i></a>
          <a href="index.php?url=login" class="btn btn-dark-pill px-4">Login</a>
          <a href="index.php?url=signup" class="btn btn-purple">Sign up</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>