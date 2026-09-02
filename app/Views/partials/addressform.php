<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['user'])) {
    header('Location: index.php?url=login');
    exit;
}
require_once __DIR__ . '/../../Models/AddressModel.php';
$addressModel = new AddressModel();
$existing = $addressModel->getAddressByUserId($_SESSION['user']['id']);

$errors = $_SESSION['address_errors'] ?? [];
$old = $_SESSION['old_address'] ?? [];
unset($_SESSION['address_errors'], $_SESSION['old_address']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Public/image/favicon.svg">

    <link href="../Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="Public/css/addaddress.css" rel="stylesheet">
    <title>Add Address -- Vibelane</title>
</head>

<body class="min-vh-100 d-flex flex-column justify-content-between">
    <?php include_once __DIR__ . '/../partials/header.php'; ?>
    <!-- Add Address Form Section -->

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="p-4 p-sm-5 rounded-4 shadow-lg text-white address-card">

                    <!-- Back Button -->
                    <div class="mb-3">
                        <a href="index.php?url=account" class="btn-back text-decoration-none d-inline-flex align-items-center">
                            <i class="fas fa-arrow-left me-2"></i> Back to Profile
                        </a>
                    </div>

                    <div class="card-panel">
                        <h3 class="text-white fw-bold mb-4">Add Shipping Address</h3>
                        <?php if (!empty($errors)): ?>
                            <div class="alert alert-danger">
                                <ul class="mb-0 ps-3">
                                    <?php foreach ($errors as $error): ?>
                                        <li><?= htmlspecialchars($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form action="index.php?url=address" method="POST">
                            <!-- Hidden User ID -->
                            <input type="hidden" name="user_id" value="123">

                            <!-- Full Name -->
                            <div class="mb-3">
                                <label for="full_name" class="form-label text-white fw-semibold small">FULL NAME</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="full_name"
                                    name="full_name"
                                    maxlength="150"
                                    value="<?= htmlspecialchars($old['full_name'] ?? '') ?>"
                                    placeholder="e.g. Jane Doe"
                                    required>
                            </div>

                            <!-- Phone -->
                            <div class="mb-3">
                                <label for="phone" class="form-label text-white fw-semibold small">PHONE NUMBER</label>
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    maxlength="20"
                                    placeholder="+1 (555) 000-0000"
                                    value="<?= htmlspecialchars($old['phone'] ?? '') ?>"
                                    required>
                            </div>

                            <!-- Address Line -->
                            <div class="mb-3">
                                <label for="address_line" class="form-label text-white fw-semibold small">STREET ADDRESS</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="address_line"
                                    name="address_line"
                                    maxlength="255"
                                    placeholder="123 Main St, Apt 4B"
                                    value="<?= htmlspecialchars($old['address_line'] ?? '') ?>"
                                    required>
                            </div>

                            <!-- City & State Row -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label text-white fw-semibold small">CITY</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="city"
                                        name="city"
                                        maxlength="100"
                                        placeholder="New York"
                                        value="<?= htmlspecialchars($old['city'] ?? '') ?>"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state" class="form-label text-white fw-semibold small">STATE / PROVINCE</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="state"
                                        name="state"
                                        maxlength="100"
                                        placeholder="NY"
                                        value="<?= htmlspecialchars($old['state'] ?? '') ?>"
                                        required>
                                </div>
                            </div>

                            <!-- Postal Code -->
                            <div class="mb-4">
                                <label for="postal_code" class="form-label text-white fw-semibold small">POSTAL / ZIP CODE</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="postal_code"
                                    name="postal_code"
                                    maxlength="20"
                                    placeholder="10001"
                                    value="<?= htmlspecialchars($old['postal_code'] ?? '') ?>"
                                    required>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-purple w-100">Save Address</button>
                        </form>
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