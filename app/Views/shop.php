<?php
    require_once __DIR__ . '/../Controllers/ProductController.php';
    $controller = new ProductController();
    $products   = $controller->getAllProducts();
    // $categories = $controller->getCategories();
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
                    <button class="btn btn-filter active" data-category="All Products">All Products</button>
                    <?php foreach ($categories as $category): ?>
                        <button class="btn btn-filter" data-category="<?= htmlspecialchars($category) ?>">
                            <?= htmlspecialchars($category) ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="input-group search-box">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search items...">
                    <button class="btn btn-primary" type="button" id="searchBtn"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row g-4" id="productGrid">
            <?php if (empty($products)): ?>
                <p class="text-center text-muted py-5">No products found.</p>
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
                                    <a href="product.php?id="><?= htmlspecialchars($product['name']) ?></a>
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

    <script>
        const productGrid = document.getElementById('productGrid');
        const filterButtons = document.querySelectorAll('.btn-filter');
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');

        function renderProducts(products) {
            if (!products.length) {
                productGrid.innerHTML = '<p class="text-center text-muted py-5">No products found.</p>';
                return;
            }
            productGrid.innerHTML = products.map(p => `
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <span class="badge-tag">NEW</span>
                            <img src="Public/image/productsimages/${p.product_image}" alt="${p.name}" class="img-fluid">
                            <button class="btn-add-cart" data-id="${p.productid}" aria-label="Add to cart">
                                <i class="fas fa-shopping-bag"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="product.php?id=${p.productid}">${p.name}</a></h3>
                            <span class="product-price">Rs.${Number(p.price).toLocaleString()}</span>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        filterButtons.forEach(btn => {
            btn.addEventListener('click', async () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const category = btn.dataset.category;
                const res = await fetch(`ajax/filter.php?category=${encodeURIComponent(category)}`);
                const data = await res.json();
                if (data.success) renderProducts(data.products);
            });
        });

        async function runSearch() {
            const q = searchInput.value.trim();
            const res = await fetch(`ajax/search.php?q=${encodeURIComponent(q)}`);
            const data = await res.json();
            if (data.success) renderProducts(data.products);
        }

        searchBtn.addEventListener('click', runSearch);
        searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') runSearch();
        });
    </script>

</body>

</html>