<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibelane | Services & Offerings</title>

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

        /* Cards */
        .service-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-6px);
            border-color: rgba(139, 44, 245, 0.4);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
        }

        .icon-box {
            width: 56px;
            height: 56px;
            background: rgba(139, 44, 245, 0.15);
            color: var(--accent-purple);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        /* Process Step Cards */
        .step-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 1.5rem;
            position: relative;
        }

        .step-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: rgba(139, 44, 245, 0.25);
            line-height: 1;
            position: absolute;
            top: 1rem;
            right: 1.25rem;
        }

        /* CTA Section Banner */
        .cta-banner {
            background: linear-gradient(135deg, #1e0936 0%, #8b2cf5 100%);
            border-radius: 24px;
            padding: 3.5rem 2rem;
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

        .btn-outline-light-custom {
            background-color: transparent;
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .btn-outline-light-custom:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-color: #fff;
        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . '/partials/header.php'; ?>
    <div class="container">

        <div class="text-center max-w-lg mx-auto mb-5">
            <span class="text-uppercase tracking-wide fw-bold fs-7" style="color: var(--accent-purple);">Our Services</span>
            <h1 class="display-5 fw-extrabold mt-1 mb-3">Tailored for the Culture</h1>
            <p class=" mx-auto" style="max-width: 560px; color: var(--text-muted-bright);">
                From custom limited-edition prints to corporate capsule collections, we bring high-grade streetwear production and curation to your vision.
            </p>
        </div>

        <div class="row g-4 mb-5">

            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="icon-box">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Custom Printing & DTG</h4>
                    <p class="small mb-4" style="color: var(--text-muted-bright);">
                        High-density Direct-To-Garment (DTG) and high-build screen printing on 300+ GSM heavyweight blanks.
                    </p>
                    <a href="#" class="text-decoration-none fw-semibold small" style="color: var(--accent-purple);">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="icon-box">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Bulk Capsule Drops</h4>
                    <p class="small mb-4" style="color: var(--text-muted-bright);">
                        Tailored production runs for creator brands, music collectives, and private labels looking for premium fits.
                    </p>
                    <a href="#" class="text-decoration-none fw-semibold small" style="color: var(--accent-purple);">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="icon-box">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Private Styling</h4>
                    <p class="small mb-4" style="color: var(--text-muted-bright);">
                        1-on-1 consultations with our in-house stylists to curate complete looks for events, tours, or media appearances.
                    </p>
                    <a href="#" class="text-decoration-none fw-semibold small" style="color: var(--accent-purple);">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="icon-box">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4 class="fw-bold mb-2">VIP Vault Access</h4>
                    <p class="small mb-4" style="color: var(--text-muted-bright);">
                        Exclusive early access passes for limited drop runs, archived samples, and unreleased prototype pieces.
                    </p>
                    <a href="#" class="text-decoration-none fw-semibold small" style="color: var(--accent-purple);">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="icon-box">
                        <i class="bi bi-scissors"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Bespoke Alterations</h4>
                    <p class="small mb-4" style="color: var(--text-muted-bright);">
                        Precision garment restructuring, distress work, and custom patch application by master streetwear tailors.
                    </p>
                    <a href="#" class="text-decoration-none fw-semibold small" style="color: var(--accent-purple);">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="icon-box">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Worldwide Logistics</h4>
                    <p class="small mb-4" style="color: var(--text-muted-bright);">
                        End-to-end global fulfillment and localized customs processing for international collaborative collections.
                    </p>
                    <a href="#" class="text-decoration-none fw-semibold small" style="color: var(--accent-purple);">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

        </div>

        <div class="mb-5 py-4">
            <h3 class="fw-bold text-center mb-4">How Custom Orders Work</h3>
            <div class="row g-3">

                <div class="col-md-3">
                    <div class="step-card">
                        <span class="step-number">01</span>
                        <h6 class="fw-bold mb-2">Consultation</h6>
                        <p class="small m-0" style="color: var(--text-muted-bright);">Submit your design specs or layout concept to our dev team.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card">
                        <span class="step-number">02</span>
                        <h6 class="fw-bold mb-2">Sampling</h6>
                        <p class="small m-0" style="color: var(--text-muted-bright);">We produce a physical sample to test weight, wash, and fit print clarity.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card">
                        <span class="step-number">03</span>
                        <h6 class="fw-bold mb-2">Production</h6>
                        <p class="small m-0" style="color: var(--text-muted-bright);">Once approved, full manufacturing begins with strict quality checks.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="step-card">
                        <span class="step-number">04</span>
                        <h6 class="fw-bold mb-2">Delivery</h6>
                        <p class="small m-0" style="color: var(--text-muted-bright);">Tracked worldwide express dispatch directly to your door.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="cta-banner text-center">
            <h2 class="fw-extrabold mb-3">Ready to Bring Your Vision to Life?</h2>
            <p class="text-white-50 mx-auto mb-4" style="max-width: 500px;">
                Get in touch with our team to start your custom project or book a personal styling session.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn btn-purple">Start a Project</a>
                <a href="#" class="btn btn-outline-light-custom">Contact Support</a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>

</html>