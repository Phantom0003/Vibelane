<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Public/image/favicon.svg">
    
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="Public/css/shopstyles.css" rel="stylesheet">
    <link href="Public/css/tiny-slider.css" rel="stylesheet">
    <link href='Public/css/style.css' rel="stylesheet">

    <title>Shop -- Vibelane</title>
</head>

<body class="min-vh-100 d-flex flex-column justify-content-between">

    <?php include_once __DIR__ . '/partials/header.php'; ?>
    <!-- Shop Hero Banner -->
    <section class="shop-hero py-4 text-center">
        <div class="container">
            <h1 class="fw-bold text-white mb-2">Streetwear Collection</h1>
            <p class="text-white-50">Explore our exclusive lineup of oversized drops, hoodies, and accessories.</p>
        </div>
    </section>

    <!-- Main Shop Section -->
    <div class="container mb-5">
        <!-- Controls: Filters & Search -->
        <div class="row align-items-center justify-content-between mb-4 g-3">
            <div class="col-md-7 col-lg-8">
                <div class="d-flex flex-wrap gap-2 shop-filters">
                    <button class="btn btn-filter active">All Products</button>
                    <button class="btn btn-filter">Hoodies</button>
                    <button class="btn btn-filter">Tees</button>
                    <button class="btn btn-filter">Pants</button>
                    <button class="btn btn-filter">Accessories</button>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="input-group search-box">
                    <input type="text" class="form-control" placeholder="Search items...">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <span class="badge-tag">NEW</span>
                        <img src="../public/image/product-1.png" alt="Oversized Purple Hoodie" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Vibelane Cyber Hoodie</a></h3>
                        <span class="product-price">$65.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <img src="../public/image/product-2.png" alt="Graphic Street Tee" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Acid Wash Graphic Tee</a></h3>
                        <span class="product-price">$38.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <span class="badge-tag sale">SALE</span>
                        <img src="../public/image/product-3.png" alt="Cargo Pants" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Tactical Cargo Pants</a></h3>
                        <div class="d-flex align-items-center gap-2">
                            <span class="product-price">$72.00</span>
                            <span class="product-price-old">$88.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <img src="../public/image/product-1.png" alt="Neon Beanie" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Signature Beanie</a></h3>
                        <span class="product-price">$25.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <img src="../public/image/product-2.png" alt="Puffer Jacket" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Dark Matter Puffer</a></h3>
                        <span class="product-price">$120.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <span class="badge-tag">NEW</span>
                        <img src="../public/image/product-3.png" alt="Relaxed Joggers" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Heavyweight Joggers</a></h3>
                        <span class="product-price">$58.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <img src="../public/image/product-1.png" alt="Crossbody Bag" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Utility Crossbody Bag</a></h3>
                        <span class="product-price">$42.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <div class="product-img-wrap">
                        <img src="../public/image/product-2.png" alt="Boxy Long Sleeve" class="img-fluid">
                        <button class="btn-add-cart" aria-label="Add to cart"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><a href="#">Boxy Fit Longsleeve</a></h3>
                        <span class="product-price">$45.00</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <ul class="custom-pagination">
                    <li class="disabled"><span><i class="fas fa-chevron-left"></i></span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php include_once __DIR__ . '/partials/footer.php'; ?>

</body>

</html>