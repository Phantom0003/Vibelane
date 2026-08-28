<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibelane | Culture & Journal</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="Public/image/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0c0516;
            --card-bg: #140b24;
            --accent-purple: #8b2cf5;
            --accent-purple-hover: #771ee0;
            --text-muted: #a099b8;
            --text-primary: #ffffff;
            --text-secondary: #e2dcee;
            /* Bright readable light grey */
            --text-muted-bright: #9b9a9cfb;
        }

        body {
            background-color: var(--bg-dark);
            color: #ffffff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding-top: 150px;
            padding-bottom: 5rem;
        }

        /* Category Filter Pills */
        .filter-btn {
            background-color: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: var(--text-muted);
            border-radius: 50px;
            padding: 0.5rem 1.25rem;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background-color: var(--accent-purple);
            border-color: var(--accent-purple);
            color: #ffffff;
        }

        /* Featured Hero Post */
        .featured-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            overflow: hidden;
            transition: border-color 0.3s ease;
        }

        .featured-card:hover {
            border-color: rgba(139, 44, 245, 0.4);
        }

        .featured-img {
            width: 100%;
            height: 100%;
            min-height: 340px;
            object-fit: cover;
        }

        /* Article Card Styling */
        .blog-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-6px);
            border-color: rgba(139, 44, 245, 0.4);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
        }

        .blog-img-wrapper {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .blog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card:hover .blog-img {
            transform: scale(1.05);
        }

        .category-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: rgba(12, 5, 22, 0.75);
            backdrop-filter: blur(8px);
            color: #fff;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.35rem 0.85rem;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .blog-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .blog-meta {
            color: var(--text-muted);
            font-size: 0.8rem;
            margin-bottom: 0.75rem;
        }

        /* Newsletter Card */
        .newsletter-card {
            background: linear-gradient(135deg, #1e0936 0%, #8b2cf5 100%);
            border-radius: 24px;
            padding: 3rem 2rem;
        }

        .newsletter-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            color: #fff;
            padding: 0.75rem 1.5rem;
        }

        .newsletter-input:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #fff;
            color: #fff;
            box-shadow: none;
        }

        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        /* Buttons */
        .btn-purple {
            background-color: var(--accent-purple);
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-purple:hover {
            background-color: var(--accent-purple-hover);
            color: #fff;
        }

        .btn-light-pill {
            background-color: #ffffff;
            color: #0c0516;
            font-weight: 700;
            border-radius: 50px;
            padding: 0.75rem 1.75rem;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-light-pill:hover {
            background-color: rgba(255, 255, 255, 0.85);
            color: #0c0516;
        }

        /* Pagination */
        .page-link {
            background-color: var(--card-bg);
            border-color: rgba(255, 255, 255, 0.08);
            color: var(--text-muted);
            margin: 0 0.25rem;
            border-radius: 10px !important;
            font-weight: 600;
        }

        .page-link:hover,
        .page-item.active .page-link {
            background-color: var(--accent-purple);
            border-color: var(--accent-purple);
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . '/partials/header.php'; ?>
    <div class="container">

        <div class="text-center max-w-lg mx-auto mb-4">
            <span class="text-uppercase tracking-wide fw-bold fs-7" style="color: var(--accent-purple);">The Journal</span>
            <h1 class="display-5 fw-extrabold mt-1 mb-3">Culture & Insights</h1>
            <p class="mx-auto" style="max-width: 520px; color:var(--text-muted-bright)">
                Dive deep into streetwear design, heavyweight fabric engineering, and upcoming drop previews.
            </p>
        </div>

        <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">
            <a href="#" class="filter-btn active">All Stories</a>
            <a href="#" class="filter-btn">Drop Previews</a>
            <a href="#" class="filter-btn">Design Culture</a>
            <a href="#" class="filter-btn">Fabric & Fits</a>
            <a href="#" class="filter-btn">Styling Guides</a>
        </div>

        <div class="featured-card mb-5">
            <div class="row g-0 align-items-center">
                <div class="col-lg-7">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=1000&q=80" alt="Featured Article" class="featured-img">
                </div>
                <div class="col-lg-5 p-4 p-lg-5">
                    <span class="badge bg-purple px-3 py-2 rounded-pill text-uppercase mb-3" style="background-color: var(--accent-purple); font-size: 0.75rem;">Deep Dive</span>
                    <h2 class="fw-bold mb-3">Why 400 GSM Heavyweight Terry is Dictating Modern Streetwear</h2>
                    <p class="small mb-4 style="color:var(--text-muted-brigh)">
                        An exploration of silhouette retention, luxury hand-feel, and why fast fashion blends are losing ground to architectural cotton knits.
                    </p>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-secondary border-opacity-10">
                        <span class="small style="color:var(--text-muted-bright)"><i class="bi bi-clock me-1"></i> 6 min read • Aug 24, 2026</span>
                        <a href="#" class="text-decoration-none fw-semibold" style="color: var(--accent-purple);">Read Story <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <span class="category-badge">Drop Preview</span>
                        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&fit=crop&w=600&q=80" alt="Cyber Hoodie" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta"><i class="bi bi-calendar3 me-1"></i> Aug 20, 2026 • 4 min read</div>
                        <h5 class="fw-bold mb-2">Inside Drop 01: Crafting the Cyber-Purple Palette</h5>
                        <p class="small mb-4 style="color:(--text-muted-brigh)">A behind-the-scenes look into our acid-wash dye processes and signature gradient graphics.</p>
                        <a href="#" class="text-decoration-none fw-semibold mt-auto" style="color: var(--accent-purple);">Read Article <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <span class="category-badge">Styling</span>
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80" alt="Cargo Pants" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta"><i class="bi bi-calendar3 me-1"></i> Aug 15, 2026 • 3 min read</div>
                        <h5 class="fw-bold mb-2">How to Style Tactical Cargoes Across Seasons</h5>
                        <p class="small mb-4 style="color:(--text-muted-bright)">Balancing utility straps, oversized outerwear, and high-top sneakers seamlessly.</p>
                        <a href="#" class="text-decoration-none fw-semibold mt-auto" style="color: var(--accent-purple);">Read Article <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <span class="category-badge">Culture</span>
                        <img src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=600&q=80" alt="Acid Tee" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta"><i class="bi bi-calendar3 me-1"></i> Aug 10, 2026 • 5 min read</div>
                        <h5 class="fw-bold mb-2">The Evolution of the Drop-Shoulder Silhouette</h5>
                        <p class="small mb-4  style="color:(--text-muted-bright)">From 90s skate culture to high-fashion runways: why boxy cuts remain unrivaled.</p>
                        <a href="#" class="text-decoration-none fw-semibold mt-auto" style="color: var(--accent-purple);">Read Article <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="newsletter-card text-center mb-5">
            <h3 class="fw-bold mb-2">Never Miss a Story or Drop</h3>
            <p class="text-white-50 mx-auto mb-4" style="max-width: 480px;">
                Subscribe to get private editorial articles, lookbook previews, and early access codes directly to your inbox.
            </p>
            <form class="d-flex justify-content-center gap-2 max-w-md mx-auto" style="max-width: 460px;">
                <input type="email" class="form-control newsletter-input" placeholder="Enter your email" required>
                <button type="submit" class="btn btn-light-pill">Subscribe</button>
            </form>
        </div>

        <nav class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
            </ul>
        </nav>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>

</html>