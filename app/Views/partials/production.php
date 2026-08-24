
    <?php
    require_once __DIR__ . '/../Controllers/ProductController.php';
    $controller = new ProductController();
    $products = $controller->getTopThreeProducts();
    ?>
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Popular Fits</h2>
                    <p class="mb-4">450 GSM fleece, double-lined hoods, and signature embroidered logos. </p>
                    <p><a href="shop.html" class="btn">View Lookbook</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <?php foreach ($products as $row): ?>
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="cart.html">
                            <img src="<?= 'Public/image/productsimages/' . htmlspecialchars($row['product_image']) ?>"
                                class="img-fluid product-thumbnail">
                            <h3 class="product-title"><?= htmlspecialchars($row['name']) ?></h3>
                            <strong class="product-price">Rs.<?= htmlspecialchars($row['price']) ?></strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    <!-- End Column 2 -->

                <?php endforeach; ?>

            </div>
        </div>
    </div>

