<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vibelane | Profile</title>
  <link rel="shortcut icon" href="Public/image/favicon.svg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --bg-dark: #0c0516;
      --card-bg: #140b24;
      --accent-purple: #8b2cf5;
      --accent-purple-hover: #771ee0;
      --text-muted: #a099b8;
    }

    body {
      background-color: var(--bg-dark);
      color: #ffffff;
      font-family: 'Plus Jakarta Sans', sans-serif;
      padding-bottom: 4rem;
    }

    /* Cover Banner */
    .profile-cover {
      height: 240px;
      background: linear-gradient(135deg, #1e0936 0%, #8b2cf5 100%);
      border-radius: 0 0 24px 24px;
      position: relative;
    }

    /* Profile Header Layout */
    .profile-avatar-wrapper {
      position: relative;
      margin-top: -75px;
    }

    .profile-avatar {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 5px solid var(--bg-dark);
      object-fit: cover;
      background-color: var(--card-bg);
    }

    .badge-vip {
      background: linear-gradient(45deg, #8b2cf5, #d69eff);
      color: #fff;
      font-weight: 700;
      font-size: 0.75rem;
      padding: 0.35rem 0.75rem;
      border-radius: 50px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    /* Card Styling */
    .profile-card {
      background-color: var(--card-bg);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      padding: 1.5rem;
    }

    /* Stats Grid */
    .stat-box {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.05);
      border-radius: 14px;
      padding: 1rem;
      text-align: center;
    }

    .stat-value {
      font-size: 1.5rem;
      font-weight: 800;
      color: #fff;
    }

    .stat-label {
      color: var(--text-muted);
      font-size: 0.85rem;
      margin: 0;
    }

    /* Buttons */
    .btn-purple {
      background-color: var(--accent-purple);
      color: #fff;
      font-weight: 600;
      border-radius: 50px;
      padding: 0.6rem 1.5rem;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-purple:hover {
      background-color: var(--accent-purple-hover);
      color: #fff;
    }

    .btn-dark-pill {
      background-color: rgba(255, 255, 255, 0.08);
      color: #fff;
      font-weight: 600;
      border-radius: 50px;
      padding: 0.6rem 1.5rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .btn-dark-pill:hover {
      background-color: rgba(255, 255, 255, 0.15);
      color: #fff;
    }

    /* Activity List */
    .activity-item {
      padding: 1rem 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .activity-item:last-child {
      border-bottom: none;
    }
  </style>
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
          <h4 class="fw-bold mb-1">Alex Morgan</h4>
          <p class="text-muted small mb-3">@alex_vibelane • Joined Jan 2026</p>

          <p class="small text-muted mb-4">
            Streetwear enthusiast, heavy cotton minimalist, and graphics collector based in NYC.
          </p>

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
          <p class="text-muted small mb-0">742 Evergreen Terrace, Suite 4B, New York, NY 10001</p>
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
                <span class="text-muted small">Order #VL-8942 • Shipped</span>
              </div>
            </div>
            <span class="fw-bold">$110.00</span>
          </div>

          <div class="activity-item d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
              <img src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=150&q=80" alt="Tee" class="rounded" width="50" height="50" style="object-fit: cover;">
              <div>
                <h6 class="fw-bold mb-0">Monochrome Acid Tee</h6>
                <span class="text-muted small">Order #VL-8821 • Delivered</span>
              </div>
            </div>
            <span class="fw-bold">$65.00</span>
          </div>

        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>
</html>