<?php
require_once __DIR__ . '/../Controllers/ProductController.php';
$controller = new ProductController();
$categories = $controller->getCatagories();
$searchTerm       = trim($_GET['q'] ?? '');
$categoryFilter   = trim($_GET['category'] ?? 'All Products');

if ($searchTerm !== '') {
    $products = $controller->searchProducts($searchTerm);
} else if ($categoryFilter !== 'All Products') {
    $products = $controller->getProductsByCategory($categoryFilter);
} else {
    $products = $controller->getAllProducts();
}
?>
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
                    <a href="index.php?url=shop"
                        class="btn btn-filter <?= ($categoryFilter === 'All Products' && $searchTerm === '') ? 'active' : '' ?>">
                        All Products
                    </a>
                    <?php foreach ($categories as $category): $cat = trim($category); ?>
                        <a href="index.php?url=shop&category=<?= urlencode($cat) ?>"
                            class="btn btn-filter <?= ($categoryFilter === $cat) ? 'active' : '' ?>">
                            <?= htmlspecialchars($cat) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <form action="index.php" method="GET" class="search-box">
                    <input type="hidden" name="url" value="shop">
                    <div class="input-group">
                        <input type="text" name="q" id="searchInput" class="form-control"
                            placeholder="Search items..." value="<?= htmlspecialchars($searchTerm) ?>">
                        <button class="btn btn-primary" type="submit" id="searchBtn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row g-4" id="productGrid">
            <?php if (empty($products)): ?>
                <div class="col-12">
                    <p class="text-center text-muted py-5">No products found.</p>
                </div>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card">
                            <div class="product-img-wrap">
                                <span class="badge-tag">NEW</span>
                                <img src="<?= 'Public/image/productsimages/' . htmlspecialchars($product['product_image']) ?>"
                                    alt="<?= htmlspecialchars($product['name']) ?>" class="img-fluid">
                                <button class="btn-add-cart" data-id="<?= (int) $product['productid'] ?>" aria-label="Add to cart">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">
                                    <a href="index.php?url=product&id=<?= (int) $product['productid'] ?>"><?= htmlspecialchars($product['name']) ?></a>
                                </h3>
                                <span class="product-price">Rs.<?= htmlspecialchars(number_format((float) $product['price'])) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
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

    <script src="Public/js/bootstrap.bundle.min.js"></script>
    <script src="Public/js/tiny-slider.js"></script>

</body>

</html>