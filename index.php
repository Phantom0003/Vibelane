<?php

require_once __DIR__ .
    '/Config/DBConnection.php';

// Get the requested path, strip query string and trailing slash
$url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';

// Define routes here — map a URL path to a view/action
switch ($url) {
    case '':
        include_once __DIR__ . '/app/Views/home.php';
        break;
    case 'about':
        include_once __DIR__ . '/app/Views/about.php';
        break;
    case 'shop':
        include_once __DIR__ . '/app/Views/shop.php';
        break;
    case 'login':
        include_once __DIR__ . '/app/Views/login.php';
        break;
    case 'signup':
        include_once __DIR__ . '/app/Views/signup.php';
        break;
    case 'account':
        include_once __DIR__ . '/app/Views/account.php';
        break;
    case 'cart':
        include_once __DIR__ . '/app/Views/cart.php';
        break;
    case 'contact' :
        include_once __DIR__ . '/app/Views/contact.php';
        break;
    case 'services':
        include_once __DIR__ . '/app/Views/services.php';
        break;
    case 'blog':
        include_once __DIR__ . '/app/Views/blog.php';
        break;
    default:
        http_response_code(404);
        echo "404 - Page not found";
        break;
}
