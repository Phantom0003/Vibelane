<?php

session_id('login-check');
session_start();

$_POST = [
    'email' => 'alice@example.com',
    'password' => 'secret123',
];

require __DIR__ . '/../Config/DBConnection.php';
require __DIR__ . '/../app/Models/UserModel.php';
require __DIR__ . '/../app/Controllers/UserController.php';

$controller = new AuthController();
$ref = new ReflectionProperty(AuthController::class, 'userModel');
$ref->setAccessible(true);
$ref->setValue($controller, new class {
    public function getUserByEmail($email)
    {
        if ($email === 'alice@example.com') {
            return [
                'id' => 42,
                'fullname' => 'Alice Example',
                'email' => $email,
                'password' => password_hash('secret123', PASSWORD_DEFAULT),
            ];
        }

        return null;
    }
});

$controller->login();

if ($_SESSION['user']['fullname'] !== 'Alice Example') {
    fwrite(STDERR, "valid login failed\n");
    exit(1);
}

$_SESSION = [];
$_POST = [
    'email' => 'alice@example.com',
    'password' => 'wrongpass',
];

$controller = new AuthController();
$ref = new ReflectionProperty(AuthController::class, 'userModel');
$ref->setAccessible(true);
$ref->setValue($controller, new class {
    public function getUserByEmail($email)
    {
        if ($email === 'alice@example.com') {
            return [
                'id' => 42,
                'fullname' => 'Alice Example',
                'email' => $email,
                'password' => password_hash('secret123', PASSWORD_DEFAULT),
            ];
        }

        return null;
    }
});

$controller->login();

if ($_SESSION['login_errors'][0] !== 'Invalid email or password.') {
    fwrite(STDERR, "invalid login failed\n");
    exit(1);
}

echo "login behavior verified\n";
