
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Public/image/favicon.svg">

    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="Public/css/cart.css" rel="stylesheet">
    <link href="Public/css/style.css" rel="stylesheet">

    <title>Shopping Cart -- Vibelane</title>
</head>

<body class="min-vh-100 d-flex flex-column justify-content-between">

    <?php include_once __DIR__ . '/partials/header.php'; ?>

    <!-- Cart Hero Banner -->
    <section class="cart-hero py-4 text-center">
        <div class="container">
            <h1 class="fw-bold text-white mb-2">Your Bag</h1>
            <p class="text-white-50">Review your selected items and proceed to checkout.</p>
        </div>
    </section>

    <!-- Main Cart Content -->
    <div class="container mb-5">
        <?php if (empty($cartItems)): ?>
            <div class="text-center py-5 empty-cart-box rounded-4 p-5">
                <i class="fas fa-shopping-bag fa-4x text-white-50 mb-3"></i>
                <h3 class="text-white fw-bold mb-2">Your cart is currently empty</h3>
                <p class="text-white-50 mb-4">Looks like you haven't added any streetwear gear yet.</p>
                <a href="index.php?url=shop" class="btn btn-primary px-4 py-3">Explore Shop</a>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <!-- Cart Items Table (Left Side) -->
                <div class="col-lg-8">
                    <div class="cart-card p-4 rounded-4 shadow-lg">
                        <div class="table-responsive">
                            <table class="table align-middle text-white custom-cart-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="pb-3">Product</th>
                                        <th scope="col" class="pb-3 text-center">Price</th>
                                        <th scope="col" class="pb-3 text-center">Quantity</th>
                                        <th scope="col" class="pb-3 text-end">Total</th>
                                        <th scope="col" class="pb-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cartItems as $item): ?>
                                        <tr>
                                            <!-- Product Info -->
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="cart-img-wrap rounded-3 p-2">
                                                        <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1 fw-bold text-white"><?= htmlspecialchars($item['name']) ?></h6>
                                                        <span class="badge bg-secondary-subtle text-white-50 fs-7">Size: <?= htmlspecialchars($item['size']) ?></span>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Unit Price -->
                                            <td class="text-center fw-semibold">
                                                Rs. <?= number_format($item['price']) ?>
                                            </td>

                                            <!-- Quantity Controls -->
                                            <td>
                                                <div class="qty-counter d-flex align-items-center justify-content-center mx-auto">
                                                    <button class="btn btn-qty" type="button"><i class="fas fa-minus"></i></button>
                                                    <input type="number" class="form-control text-center qty-input" value="<?= (int) $item['quantity'] ?>" min="1">
                                                    <button class="btn btn-qty" type="button"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </td>

                                            <!-- Row Subtotal -->
                                            <td class="text-end fw-bold text-gradient">
                                                Rs. <?= number_format($item['price'] * $item['quantity']) ?>
                                            </td>

                                            <!-- Remove Action -->
                                            <td class="text-end">
                                                <a href="#" class="btn-remove-item text-white-50" title="Remove Item">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Table Footer Actions -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mt-4 pt-3 border-top border-secondary border-opacity-25">
                            <a href="index.php?url=shop" class="btn-back text-decoration-none d-inline-flex align-items-center">
                                <i class="fas fa-arrow-left me-2"></i> Continue Shopping
                            </a>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Clear Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Sidebar (Right Side) -->
                <div class="col-lg-4">
                    <div class="cart-summary-card p-4 rounded-4 shadow-lg text-white">
                        <h4 class="fw-bold mb-4 pb-2 border-bottom border-secondary border-opacity-25">Order Summary</h4>

                        <!-- Promo Code Input -->
                        <div class="mb-4">
                            <label class="form-label text-white-50 small fw-semibold">PROMO CODE</label>
                            <div class="input-group">
                                <input type="text" class="form-control promo-input" placeholder="Enter code">
                                <button class="btn btn-primary px-3" type="button">Apply</button>
                            </div>
                        </div>

                        <!-- Calculations -->
                        <div class="d-flex justify-content-between mb-3 text-white-50">
                            <span>Subtotal</span>
                            <span class="text-white fw-semibold">Rs. <?= number_format($subtotal) ?></span>
                        </div>
                        <div class="d-flex justify-content-between mb-3 text-white-50">
                            <span>Estimated Delivery</span>
                            <span class="text-white fw-semibold">Rs. <?= number_format($shipping) ?></span>
                        </div>

                        <hr class="border-secondary border-opacity-25 my-3">

                        <div class="d-flex justify-content-between mb-4 align-items-center">
                            <span class="fw-bold fs-5">Total</span>
                            <span class="fw-bold fs-4 text-gradient">Rs. <?= number_format($total) ?></span>
                        </div>

                        <!-- Checkout Button -->
                        <a href="index.php?url=checkout" class="btn btn-primary w-100 py-3 fw-bold text-uppercase tracking-wider">
                            Proceed to Checkout <i class="fas fa-arrow-right ms-2"></i>
                        </a>

                        <!-- Security Notice -->
                        <div class="text-center mt-3">
                            <span class="small text-white-50"><i class="fas fa-lock me-1"></i> Encrypted 256-Bit Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php include_once __DIR__ . '/partials/footer.php'; ?>

    <script src="Public/js/bootstrap.bundle.min.js"></script>
</body>

</html>