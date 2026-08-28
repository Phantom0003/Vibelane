<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibelane | Our Story & Manifesto</title>
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
        }

        body {
            background-color: var(--bg-dark);
            color: #ffffff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding-top: 150px;
            padding-bottom: 5rem;
        }

        /* Cards */
        .about-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .about-card:hover {
            transform: translateY(-4px);
            border-color: rgba(139, 44, 245, 0.4);
        }

        /* Image Wrapper */
        .about-img-wrapper {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .about-img {
            width: 100%;
            height: 100%;
            min-height: 380px;
            object-fit: cover;
        }

        /* Icon Box */
        .icon-box {
            width: 52px;
            height: 52px;
            background: rgba(139, 44, 245, 0.15);
            color: var(--accent-purple);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            margin-bottom: 1.25rem;
        }

        /* Stats Box */
        .stat-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 1.75rem 1rem;
            text-align: center;
        }

        .stat-number {
            font-size: 2.75rem;
            font-weight: 800;
            color: var(--accent-purple);
            line-height: 1;
            margin-bottom: 0.5rem;
        }

        /* Manifesto Section */
        .manifesto-box {
            background: linear-gradient(135deg, #1e0936 0%, #8b2cf5 100%);
            border-radius: 24px;
            padding: 4rem 2rem;
            position: relative;
            overflow: hidden;
        }

        /* Team Member Card */
        .team-avatar {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 16px;
            margin-bottom: 1.25rem;
        }

        /* Buttons */
        .btn-purple {
            background-color: var(--accent-purple);
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-purple:hover {
            background-color: var(--accent-purple-hover);
            color: #fff;
            box-shadow: 0 8px 25px rgba(139, 44, 245, 0.45);
        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . '/partials/header.php'; ?>
    <div class="container">

        <div class="text-center max-w-lg mx-auto mb-5">
            <span class="text-uppercase tracking-wide fw-bold fs-7" style="color: var(--accent-purple);">Who We Are</span>
            <h1 class="display-5 fw-extrabold mt-1 mb-3">Redefining Streetwear Culture</h1>
            <p class="text-muted mx-auto" style="max-width: 540px;">
                Born at the intersection of architectural cuts, heavy cotton textiles, and digital subcultures.
            </p>
        </div>

        <div class="row g-4 align-items-center mb-5 pb-3">
            <div class="col-lg-6">
                <div class="about-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=800&q=80" alt="Vibelane Culture" class="about-img">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="text-uppercase fw-bold text-purple mb-2 d-block" style="color: var(--accent-purple); font-size: 0.85rem;">Established 2024</span>
                <h2 class="fw-extrabold mb-3">Built for Comfort. Engineered for the Culture.</h2>
                <p class="text-muted mb-3" style="line-height: 1.7;">
                    Vibelane was founded on a simple premise: modern streetwear shouldn't compromise on fabric weight or architectural silhouette. We stepped away from fast fashion blends to focus exclusively on high-density 300+ GSM French Terry and heavy carded cotton.
                </p>
                <p class="text-muted mb-4" style="line-height: 1.7;">
                    Every stitch, drop-shoulder slope, and print technique is engineered in small batches to preserve authenticity and uniqueness for creators worldwide.
                </p>
                <a href="#" class="btn btn-purple">Explore Our Drops</a>
            </div>
        </div>

        <div class="row g-3 mb-5">
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">400+</div>
                    <p class="text-muted small m-0">GSM Heavy Fabric</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <p class="text-muted small m-0">Organic Cotton</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">50K+</div>
                    <p class="text-muted small m-0">Global Community</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <p class="text-muted small m-0">Dedicated Support</p>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <h3 class="fw-bold text-center mb-4">Our Core Pillars</h3>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="about-card">
                        <div class="icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Uncompromising Quality</h5>
                        <p class="text-muted small m-0">
                            We source custom-milled heavyweight knits designed to retain shape, washing after washing, without shrinkage.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-card">
                        <div class="icon-box">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Limited Batch Drops</h5>
                        <p class="text-muted small m-0">
                            To reduce waste and maintain rarity, every capsule drop is strictly limited and never overproduced.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-card">
                        <div class="icon-box">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Community Driven</h5>
                        <p class="text-muted small m-0">
                            Co-created alongside artists, musicians, and digital creators shaping the modern streetwear aesthetic.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="manifesto-box text-center mb-5">
            <span class="text-uppercase fw-bold text-white-50 tracking-wide small d-block mb-2">The Vibelane Manifesto</span>
            <h2 class="fw-extrabold text-white mb-3" style="max-width: 680px; margin: 0 auto;">"We don't follow seasonal trends. We craft heavy essentials that outlast them."</h2>
        </div>

        <div class="mb-4">
            <h3 class="fw-bold text-center mb-4">The Minds Behind Vibelane</h3>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="about-card text-center">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80" alt="Alex Morgan" class="team-avatar">
                        <h5 class="fw-bold mb-1">Alex Morgan</h5>
                        <p class="text-muted small mb-0">Creative Director & Founder</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-card text-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="Devon Chen" class="team-avatar">
                        <h5 class="fw-bold mb-1">Devon Chen</h5>
                        <p class="text-muted small mb-0">Head of Textile Engineering</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-card text-center">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=400&q=80" alt="Elena Rostova" class="team-avatar">
                        <h5 class="fw-bold mb-1">Elena Rostova</h5>
                        <p class="text-muted small mb-0">Lead Graphic & Apparel Designer</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>

</html>