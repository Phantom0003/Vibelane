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

require_once __DIR__ . '/../Models/AddressModel.php';
$addressModel = new AddressModel();
$address = $addressModel->getAddressByUserId($currentUser['id']);
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
  <link href="Public/image/favicon.svg" rel="shortcut icon">
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
            <a href="index.php?url=address" class="text-decoration-none small" style="color: var(--accent-purple);">
              <?= $address ? 'Edit' : 'Add' ?>
            </a>
          </div>
          <?php if ($address): ?>
            <p class="mb-1 fw-semibold"><?= htmlspecialchars($address['full_name']) ?></p>
            <p class="small mb-0" style="color:var(--text-muted-bright)">
              <?= htmlspecialchars($address['address_line']) ?>, <?= htmlspecialchars($address['city']) ?>,
              <?= htmlspecialchars($address['state']) ?> <?= htmlspecialchars($address['postal_code']) ?>
              &middot; <?= htmlspecialchars($address['phone']) ?>
            </p>
          <?php else: ?>
            <p class="small mb-0" style="color:var(--text-muted-bright)">No address on file yet.</p>
          <?php endif; ?>
        </div>

        <div class="profile-card mb-4">
          <h5 class="fw-bold mb-3"><i class="bi bi-bag-check me-2 text-purple"></i>Recent Purchases</h5>
          <?php if (empty($recentItems)): ?>
            <p class="small mb-0" style="color:var(--text-muted-bright)">No purchases yet.</p>
          <?php else: ?>
            <?php foreach ($recentItems as $item): ?>
              <div class="d-flex align-items-center gap-3 mb-3">
                <img src="Public/image/productsimages/<?= htmlspecialchars($item['product_image']) ?>"
                  alt="<?= htmlspecialchars($item['name']) ?>" style="width:56px;height:56px;object-fit:cover;border-radius:8px;">
                <div class="flex-grow-1">
                  <p class="mb-0 fw-semibold"><?= htmlspecialchars($item['name']) ?></p>
                  <p class="small mb-0" style="color:var(--text-muted-bright)">
                    Qty <?= (int) $item['quality'] ?> &middot; Rs.<?= number_format((float) $item['price']) ?>
                    &middot; <?= htmlspecialchars(date('M j, Y', strtotime($item['orderdate']))) ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>

</html>