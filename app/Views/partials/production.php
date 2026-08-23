<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="../public/image/favicon.svg">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../public/css/tiny-slider.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <title>Vibelane -- Street Wear</title>
</head>

<body>
    <?php
    require_once __DIR__ . '/../../Controllers/ProductController.php';
    $controller = new ProductController();
    $products = $controller->getTopThreeProducts();
    ?>
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Popular Fits</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. </p>
                    <p><a href="shop.html" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <?php foreach ($products as $row): ?>
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="cart.html">
                            <img src="<?= '/Vibelane_final/Public/image/productsimages/' . htmlspecialchars($row['product_image']) ?>" class="img-fluid product-thumbnail">
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
</body>

</html>