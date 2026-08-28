<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibelane | Contact Us</title>
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
        .contact-card {
            background-color: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 2rem;
            height: 100%;
        }

        .info-box {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 1.25rem;
            transition: all 0.3s ease;
        }

        .info-box:hover {
            border-color: rgba(139, 44, 245, 0.4);
            transform: translateY(-3px);
        }

        .icon-square {
            width: 48px;
            height: 48px;
            background: rgba(139, 44, 245, 0.15);
            color: var(--accent-purple);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }

        /* Form Controls */
        .form-label {
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-select {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: #fff;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
        }

        .form-control:focus,
        .form-select:focus {
            background: rgba(255, 255, 255, 0.06);
            border-color: var(--accent-purple);
            color: #fff;
            box-shadow: 0 0 15px rgba(139, 44, 245, 0.3);
        }

        .form-control::placeholder {
            color: rgba(160, 153, 184, 0.5);
        }

        .form-select option {
            background-color: var(--card-bg);
            color: #fff;
        }

        /* Buttons */
        .btn-purple {
            background-color: var(--accent-purple);
            color: #fff;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.8rem 2rem;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-purple:hover {
            background-color: var(--accent-purple-hover);
            color: #fff;
            box-shadow: 0 8px 25px rgba(139, 44, 245, 0.45);
            transform: translateY(-2px);
        }

        /* Accordion FAQ */
        .accordion-item {
            background-color: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 14px !important;
            margin-bottom: 0.75rem;
            overflow: hidden;
        }

        .accordion-button {
            background-color: transparent;
            color: #fff;
            font-weight: 600;
            padding: 1.2rem;
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(139, 44, 245, 0.1);
            color: #fff;
        }

        .accordion-button::after {
            filter: invert(1);
        }

        .accordion-body {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Map Box */
        .map-container {
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            height: 220px;
        }
    </style>
</head>

<body>

<?php include_once __DIR__ . '/partials/header.php'; ?>

    <div class="container">

        <div class="text-center max-w-lg mx-auto mb-5">
            <span class="text-uppercase tracking-wide fw-bold fs-7" style="color: var(--accent-purple);">Get In Touch</span>
            <h1 class="display-5 fw-extrabold mt-1 mb-3">We’re Here to Help</h1>
            <p class="mx-auto" style="max-width: 540px; color:var(--text-muted-bright)">
                Have questions about your order, custom sizing, or drop releases? Reach out to our customer support crew anytime.
            </p>
        </div>

        <div class="row g-4 mb-5">

            <div class="col-lg-5">
                <div class="d-flex flex-column gap-3 h-100">

                    <div class="info-box d-flex align-items-center gap-3">
                        <div class="icon-square">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <span class="text-muted small d-block">Email Support</span>
                            <a href="mailto:support@vibelane.com" class="text-white text-decoration-none fw-semibold">support@vibelane.com</a>
                        </div>
                    </div>

                    <div class="info-box d-flex align-items-center gap-3">
                        <div class="icon-square">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <span class="text-muted small d-block">Phone / WhatsApp</span>
                            <a href="tel:+18005550199" class="text-white text-decoration-none fw-semibold">+1 (800) 555-0199</a>
                        </div>
                    </div>

                    <div class="info-box d-flex align-items-center gap-3">
                        <div class="icon-square">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div>
                            <span class="text-muted small d-block">Operating Hours</span>
                            <span class="text-white fw-semibold">Mon – Fri: 9:00 AM – 6:00 PM EST</span>
                        </div>
                    </div>

                    <div class="map-container mt-auto">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.2543635164!2d-74.11976373946229!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1680000000000!5m2!1sen!2sus"
                            width="100%"
                            height="100%"
                            style="border:0; filter: invert(90%) hue-rotate(180deg);"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-card">
                    <h4 class="fw-bold mb-4">Send Us a Message</h4>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="e.g. Alex Morgan" required>
                            </div>

                            <div class="col-md-6">
                                <label for="emailAddr" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="emailAddr" placeholder="alex@example.com" required>
                            </div>

                            <div class="col-md-6">
                                <label for="orderNum" class="form-label">Order Number (Optional)</label>
                                <input type="text" class="form-control" id="orderNum" placeholder="#VL-8942">
                            </div>

                            <div class="col-md-6">
                                <label for="inquiryType" class="form-label">Topic</label>
                                <select class="form-select" id="inquiryType">
                                    <option selected>Order Status & Tracking</option>
                                    <option value="1">Returns & Exchanges</option>
                                    <option value="2">Sizing & Product Info</option>
                                    <option value="3">Wholesale & PR</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="messageText" class="form-label">Message</label>
                                <textarea class="form-control" id="messageText" rows="4" placeholder="How can we help you today?" required></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-purple w-100 py-3 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-send-fill"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="mt-5">
            <h4 class="fw-bold text-center mb-4">Frequently Asked Questions</h4>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="contactFAQ">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How long does shipping take for domestic orders?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Standard domestic shipping takes 3-5 business days. Express options are available at checkout for 1-2 day delivery.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What is your return policy?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    We offer a 14-day return policy on all unworn items in original packaging with tags attached.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Are limited drops restocked once sold out?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    Most signature drops are limited runs and will not be restocked. Sign up for our newsletter to get early access to upcoming drops.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>
</body>

</html>