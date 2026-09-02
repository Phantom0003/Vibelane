<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    protected function setUp(): void
    {
        $_SESSION = [];
        $_POST = [];
        header_remove();
    }

    public function testLoginAcceptsValidCredentials(): void
    {
        $_POST = ['email' => 'alice@example.com', 'password' => 'secret123'];

        $controller = new AuthController();
        $this->setUserModel($controller, [
            'id' => 42,
            'fullname' => 'Alice Example',
            'email' => 'alice@example.com',
            'password' => password_hash('secret123', PASSWORD_DEFAULT),
        ]);

        ob_start();
        $controller->login();
        ob_end_clean();

        $this->assertSame('Alice Example', $_SESSION['user']['fullname']);
        $this->assertSame('alice@example.com', $_SESSION['user']['email']);
    }

    public function testLoginRejectsInvalidCredentials(): void
    {
        $_POST = ['email' => 'alice@example.com', 'password' => 'wrongpass'];

        $controller = new AuthController();
        $this->setUserModel($controller, [
            'id' => 42,
            'fullname' => 'Alice Example',
            'email' => 'alice@example.com',
            'password' => password_hash('secret123', PASSWORD_DEFAULT),
        ]);

        ob_start();
        $controller->login();
        ob_end_clean();

        $this->assertSame(['Invalid email or password.'], $_SESSION['login_errors']);
        $this->assertSame(['email' => 'alice@example.com'], $_SESSION['old_input']);
    }

    private function setUserModel(AuthController $controller, array $user): void
    {
        $property = new ReflectionProperty(AuthController::class, 'userModel');
        $property->setAccessible(true);
        $property->setValue($controller, new class($user) {
            private $user;

            public function __construct(array $user)
            {
                $this->user = $user;
            }

            public function getUserByEmail($email)
            {
                return $this->user['email'] === $email ? $this->user : null;
            }
        });
    }
}
