<?php

require_once __DIR__ .
    '/../Config/DBConnection.php';

// Get the requested path, strip query string and trailing slash
$url = isset($_GET['url']) ? trim($_GET['url'], '/') : '';

// Define routes here — map a URL path to a view/action
switch ($url) {
    case '':
        include_once __DIR__ . '/../app/Views/home.php';
        break;
    case 'about':
        include_once __DIR__ . '/../app/Views/about.php';
        break;
    case 'login':
        include_once __DIR__ . '/../app/Views/login.php';
        break;

    default:
        http_response_code(404);
        echo "404 - Page not found";
        break;
}