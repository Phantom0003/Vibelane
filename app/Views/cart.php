<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibelane | Shopping Cart</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="Public/image/favicon.svg">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
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
            padding-top: 150px;
            padding-bottom: 4rem;
        }

        /* Card Panels */
        .cart-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 1.75rem;
        }

        /* Cart Items */
        .cart-item {
            padding: 1.25rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .cart-item:first-child {
            padding-top: 0;
        }

        .cart-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .cart-item-img {
            width: 90px;
            height: 100px;
            object-fit: cover;
            border-radius: 12px;
        }

        /* Quantity Controls */
        .qty-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            padding: 0.25rem 0.5rem;
            display: inline-flex;
            align-items: center;
        }

        .qty-btn {
            background: transparent;
            border: none;
            color: #fff;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .qty-btn:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .qty-val {
            width: 32px;
            text-align: center;
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Coupon Form */
        .promo-input {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            color: #fff;
            padding: 0.6rem 1.25rem;
            font-size: 0.9rem;
        }

        .promo-input:focus {
            background: rgba(255, 255, 255, 0.06);
            border-color: var(--accent-purple);
            color: #fff;
            box-shadow: none;
        }

        .promo-input::placeholder {
            color: var(--text-muted);
        }

        /* Buttons */
        .btn-purple {
            background-color: var(--accent-purple);
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            border: none;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-purple:hover {
            background-color: var(--accent-purple-hover);
            color: #fff;
            box-shadow: 0 8px 20px rgba(139, 44, 245, 0.4);
        }

        .btn-dark-pill {
            background-color: rgba(255, 255, 255, 0.08);
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.6rem 1.25rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-dark-pill:hover {
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        .remove-btn {
            color: var(--text-muted);
            background: none;
            border: none;
            transition: color 0.2s;
        }

        .remove-btn:hover {
            color: #ff4d4d;
        }

        /* Price Breakdown */
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.85rem;
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 1.25rem;
            font-weight: 700;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . '/partials/header.php'; ?>

    <div class="container">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <a href="#" class="text-decoration-none text-muted small mb-2 d-inline-block"><i class="bi bi-arrow-left me-1"></i> Continue Shopping</a>
                <h2 class="fw-bold m-0">Your Bag <span class="fs-5 text-muted fw-normal">(2 items)</span></h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Item List Left Column -->
            <div class="col-lg-8">
                <div class="cart-card">

                    <!-- Item 1 -->
                    <div class="cart-item d-flex gap-3 align-items-center">
                        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&fit=crop&w=300&q=80" alt="Cyber Hoodie" class="cart-item-img">

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="fw-bold mb-1">Cyber-Purple Oversized Hoodie</h6>
                                    <p class="text-muted small mb-2">Size: <strong>L</strong> | Color: <strong>Deep Purple</strong></p>
                                </div>
                                <button class="remove-btn"><i class="bi bi-trash3"></i></button>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <div class="qty-control">
                                    <button class="qty-btn"><i class="bi bi-dash"></i></button>
                                    <span class="qty-val">1</span>
                                    <button class="qty-btn"><i class="bi bi-plus"></i></button>
                                </div>
                                <span class="fw-bold fs-5">$110.00</span>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="cart-item d-flex gap-3 align-items-center">
                        <img src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=300&q=80" alt="Acid Tee" class="cart-item-img">

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="fw-bold mb-1">Monochrome Acid Tee</h6>
                                    <p class="text-muted small mb-2">Size: <strong>XL</strong> | Color: <strong>Acid Black</strong></p>
                                </div>
                                <button class="remove-btn"><i class="bi bi-trash3"></i></button>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <div class="qty-control">
                                    <button class="qty-btn"><i class="bi bi-dash"></i></button>
                                    <span class="qty-val">2</span>
                                    <button class="qty-btn"><i class="bi bi-plus"></i></button>
                                </div>
                                <span class="fw-bold fs-5">$130.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Summary Right Column -->
            <div class="col-lg-4">
                <div class="cart-card">
                    <h5 class="fw-bold mb-4">Order Summary</h5>

                    <!-- Promo Code Input -->
                    <div class="mb-4">
                        <label class="form-label text-muted small">Discount Code</label>
                        <div class="d-flex gap-2">
                            <input type="text" class="form-control promo-input" placeholder="Enter code">
                            <button class="btn btn-dark-pill">Apply</button>
                        </div>
                    </div>

                    <!-- Costs Breakdown -->
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span class="text-white fw-semibold">$240.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Estimated Shipping</span>
                        <span class="text-white fw-semibold">$12.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Tax</span>
                        <span class="text-white fw-semibold">$19.20</span>
                    </div>

                    <!-- Final Total -->
                    <div class="summary-total">
                        <span>Total</span>
                        <span style="color: var(--accent-purple);">$271.20</span>
                    </div>

                    <!-- Checkout Button -->
                    <button class="btn btn-purple mt-4 py-3"><i class="bi bi-shield-lock me-2"></i>Proceed to Checkout</button>

                    <!-- Perks -->
                    <div class="mt-4 pt-3 border-top border-secondary border-opacity-10 text-center">
                        <p class="text-muted small m-0"><i class="bi bi-truck me-1"></i> Free express shipping on orders over $300</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>

</html>