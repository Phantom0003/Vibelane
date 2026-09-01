<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Extra safety net — index.php should already redirect if not logged in
if (empty($_SESSION['user'])) {
    header('Location: index.php?url=login');
    exit;
}
$currentUser = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vibelane | Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="Public/css/account.css" rel="stylesheet">
  <link href="Public/image/favicon.svg"  rel="shortcut icon">
</head>

<body>
  <?php include_once __DIR__ . '/partials/header.php'; ?>
  <div class="profile-cover"></div>

  <div class="container">
    <div class="row">

      <div class="col-lg-4 mb-4">
        <div class="profile-card text-center">
          <div class="profile-avatar-wrapper mb-3">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80" alt="Alex Morgan" class="profile-avatar">
          </div>

          <span class="badge-vip mb-2 d-inline-block">VIP Collector</span>
          <h4 class="fw-bold mb-1"><?php echo htmlspecialchars($currentUser['fullname']); ?></h4>
          <p class="small mb-3" style="color:var(--text-muted-bright)">@<?php echo htmlspecialchars($currentUser['username']); ?> • Joined Jan 2026</p>

          <div class="d-flex justify-content-center gap-2 mb-4">
            <button class="btn btn-purple btn-sm px-4">Edit Profile</button>
            <button class="btn btn-dark-pill btn-sm"><i class="bi bi-gear-fill"></i></button>
          </div>

          <div class="row g-2">
            <div class="col-4">
              <div class="stat-box">
                <div class="stat-value">24</div>
                <p class="stat-label">Orders</p>
              </div>
            </div>
            <div class="col-4">
              <div class="stat-box">
                <div class="stat-value">12</div>
                <p class="stat-label">Wishlist</p>
              </div>
            </div>
            <div class="col-4">
              <div class="stat-box">
                <div class="stat-value">850</div>
                <p class="stat-label">Points</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8">

        <div class="profile-card mb-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold m-0"><i class="bi bi-geo-alt me-2 text-purple"></i>Primary Address</h5>
            <a href="#" class="text-decoration-none small" style="color: var(--accent-purple);">Manage</a>
          </div>
          <p class="mb-1 fw-semibold">Alex Morgan</p>
          <p class=" small mb-0 style="color:var(--text-muted-bright)">742 Evergreen Terrace, Suite 4B, New York, NY 10001</p>
        </div>

        <div class="profile-card">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold m-0"><i class="bi bi-bag-check me-2 text-purple"></i>Recent Purchases</h5>
            <a href="#" class="text-decoration-none small" style="color: var(--accent-purple);">View All</a>
          </div>

          <div class="activity-item d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
              <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&fit=crop&w=150&q=80" alt="Hoodie" class="rounded" width="50" height="50" style="object-fit: cover;">
              <div>
                <h6 class="fw-bold mb-0">Cyber-Purple Oversized Hoodie</h6>
                <span class="style="color:var(--text-muted-bright) small">Order #VL-8942 • Shipped</span>
              </div>
            </div>
            <span class="fw-bold">$110.00</span>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>

</html>