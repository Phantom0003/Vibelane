<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibelane | Dress Details</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="Public/image/favicon.svg" type="image/x-icon">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="Public/css/singleproductpage.css">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg custom-navbar py-3 mb-5">
        <div class="container">
            <a class="navbar-brand fs-3" href="#">Vibe<span>lane</span></a>
            <a href="index.php?url=shop" class="btn btn-outline-custom btn-sm"><i class="bi bi-arrow-left me-2"></i>Back to Dresses</a>
        </div>
    </nav>

    <!-- Main Dress Container -->
    <div class="container mb-5">
        <div class="product-card-container">
            <div class="row g-4 align-items-center">

                <!-- Dress Gallery (Left) -->
                <div class="col-lg-6">
                    <div class="main-img-wrap mb-3">
                        <img id="mainDressImg" src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=800&q=80" alt="Silk Evening Dress" class="img-fluid">
                    </div>
                    <!-- Thumbnails -->
                    <div class="d-flex gap-3 justify-content-center">
                        <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=200&q=80" class="thumb-img active" onclick="changeImage(this.src)">
                        <img src="https://images.unsplash.com/photo-1566174053879-31528523f8ae?auto=format&fit=crop&w=200&q=80" class="thumb-img" onclick="changeImage(this.src)">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=200&q=80" class="thumb-img" onclick="changeImage(this.src)">
                    </div>
                </div>

                <!-- Dress Details (Right) -->
                <div class="col-lg-6">
                    <div class="ps-lg-3">

                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge-tag">NEW ARRIVAL</span>
                            <div class="text-warning small ms-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="text-white opacity-75 ms-1">(5.0 / 28 reviews)</span>
                            </div>
                        </div>

                        <h1 class="product-title mb-2">Satin Wrap Evening Gown</h1>

                        <div class="d-flex align-items-baseline gap-3 mb-3">
                            <span class="price-current">$145.00</span>
                            <span class="price-old">$180.00</span>
                        </div>

                        <p class="product-description mb-4">
                            Turn heads with this elegant floor-length satin wrap dress. Features a subtle side slit, adjustable waistband, and a flattering V-neckline designed for galas, evening events, and special occasions.
                        </p>

                        <!-- Dress Customization Form -->
                        <form action="cart.php" method="POST" class="mb-4">
                            <input type="hidden" name="dress_id" value="204">

                            <!-- Color Selection -->
                            <div class="mb-3">
                                <label class="form-label text-white fw-semibold small">COLOR</label>
                                <select name="color" class="form-select custom-select">
                                    <option value="emerald-green">Emerald Green</option>
                                    <option value="midnight-purple">Midnight Purple</option>
                                    <option value="ruby-red">Ruby Red</option>
                                    <option value="classic-black">Classic Black</option>
                                </select>
                            </div>

                            <!-- Size Selection -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <label class="form-label text-white fw-semibold small mb-0">SELECT SIZE</label>
                                    <a href="#" class="text-decoration-none small" style="color: var(--accent-purple);" data-bs-toggle="modal" data-bs-target="#sizeGuideModal">Size Guide</a>
                                </div>

                                <div class="d-flex gap-2 flex-wrap">
                                    <input type="radio" class="btn-check" name="size" id="size-xs" value="XS" autocomplete="off">
                                    <label class="btn btn-size-option d-flex align-items-center justify-content-center" for="size-xs">XS</label>

                                    <input type="radio" class="btn-check" name="size" id="size-s" value="S" autocomplete="off" checked>
                                    <label class="btn btn-size-option d-flex align-items-center justify-content-center" for="size-s">S</label>

                                    <input type="radio" class="btn-check" name="size" id="size-m" value="M" autocomplete="off">
                                    <label class="btn btn-size-option d-flex align-items-center justify-content-center" for="size-m">M</label>

                                    <input type="radio" class="btn-check" name="size" id="size-l" value="L" autocomplete="off">
                                    <label class="btn btn-size-option d-flex align-items-center justify-content-center" for="size-l">L</label>

                                    <input type="radio" class="btn-check" name="size" id="size-xl" value="XL" autocomplete="off">
                                    <label class="btn btn-size-option d-flex align-items-center justify-content-center" for="size-xl">XL</label>
                                </div>
                            </div>

                            <!-- Quantity & Add to Cart -->
                            <div class="row g-3 align-items-center mb-4">
                                <div class="col-auto">
                                    <label class="form-label text-white fw-semibold small d-block">QTY</label>
                                    <input type="number" name="quantity" class="form-control qty-input" value="1" min="1" max="5">
                                </div>
                                <div class="col">
                                    <label class="form-label d-block text-transparent">&nbsp;</label>
                                    <button type="submit" class="btn btn-purple w-100"><i class="bi bi-bag-plus me-2"></i>Add to Bag</button>
                                </div>
                                <div class="col-auto">
                                    <label class="form-label d-block text-transparent">&nbsp;</label>
                                    <button type="button" class="btn btn-outline-custom"><i class="bi bi-heart"></i></button>
                                </div>
                            </div>
                        </form>

                        <!-- Garment Specifications -->
                        <div class="pt-3 border-top border-secondary border-opacity-25">
                            <table class="w-100 spec-table">
                                <tr>
                                    <td class="spec-label">Material & Fabric:</td>
                                    <td class="text-white fw-semibold">95% Silk Satin, 5% Elastane</td>
                                </tr>
                                <tr>
                                    <td class="spec-label">Fit & Silhouette:</td>
                                    <td class="text-white fw-semibold">Slim Fit / A-Line Floor Length</td>
                                </tr>
                                <tr>
                                    <td class="spec-label">Care Instructions:</td>
                                    <td class="text-white fw-semibold">Dry Clean Only / Cool Iron</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript for Image Switcher -->
    <script>
        function changeImage(src) {
            document.getElementById('mainDressImg').src = src;
            document.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active'));
            event.target.classList.add('active');
        }
    </script>

</body>

</html>