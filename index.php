<?php
session_start();
require_once __DIR__ .
    '/Config/DBConnection.php';
require_once __DIR__ .
    '/app/Controllers/UserController.php';
require_once __DIR__ .
    '/app/Controllers/AddressController.php';

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
    case 'cart':
        include_once __DIR__ . '/app/Views/cart.php';
        break;
    case 'contact':
        include_once __DIR__ . '/app/Views/contact.php';
        break;
    case 'services':
        include_once __DIR__ . '/app/Views/services.php';
        break;
    case 'blog':
        include_once __DIR__ . '/app/Views/blog.php';
        break; 
    case 'address':
        if (empty($_SESSION['user'])) {
            header('Location: index.php?url=login');
            exit;
        } if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new AddressController())->save();
        } else {
            include_once __DIR__ . '/app/Views/partials/addressform.php';
        }
        break;
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authController = new AuthController();
            $authController->login();
        } else {
            include_once __DIR__ . '/app/Views/login.php';
        }
        break;

    case 'signup':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authController = new AuthController();
            $authController->register(
                $_POST['fullname'] ?? '',
                $_POST['email'] ?? '',
                $_POST['password'] ?? ''
            );
        } else {
            include_once __DIR__ . '/app/Views/signup.php';
        }
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

    case 'account':
        if (empty($_SESSION['user'])) {
            header('Location: index.php?url=login');
            exit;
        }
        include_once __DIR__ . '/app/Views/account.php';
        break;
    default:
        http_response_code(404);
        echo "404 - Page not found";
        break;
}
