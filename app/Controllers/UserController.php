<?php

include_once __DIR__ . '/../Models/UserModel.php';

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register($name, $email, $password)
    {
        $fullname = trim($_POST['fullname'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $confirmPassword = trim($_POST['confirm_password'] ?? '');

        $errors = [];

        if ($fullname === '') {
            $errors[] = 'Full name is required.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format.';
        }

        if (strlen($password) < 8) {
            $errors[] = 'Password must be at least 8 characters long.';
        }

        if ($password !== $confirmPassword) {
            $errors[] = 'Passwords do not match.';
        }

        if (!empty($errors)) {
            $_SESSION['signup_errors'] = $errors;
            $_SESSION['old_input'] = ['fullname' => $fullname, 'email' => $email];
            header('Location: index.php?url=signup');
            exit;

        if ($this->userModel->getUserByEmail($email)) {
                $_SESSION['signup_errors'] = ['An account with that email already exists.'];
                $_SESSION['old_input'] = ['fullname' => $fullname, 'email' => $email];
                header('Location: index.php?url=signup');
                exit;
            }
            
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->userModel->createUser($fullname, $email, $hashedPassword);

        $user = $this->userModel->getUserByEmail($email);
        $this->startSession($user);
    }


    public function login()
    {
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        $errors = [];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format.';
        } else {
            $user = $this->userModel->getUserByEmail($email);
        }
        if (empty($errors) && (!$user || !password_verify($password, $user['password']))) {
            $errors[] = 'Invalid email or password.';
        }

        if (!empty($errors)) {
            $_SESSION['login_errors'] = $errors;
            $_SESSION['old_input'] = ['email' => $email];
            header('Location: index.php?url=login');
            exit;
        }

        $this->startSession($user);

        header('Location: index.php?url=account');
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: index.php?url=login');
        exit;
    }

    private function startSession($user)
    {
        session_regenerate_id(true);
        $_SESSION['user'] = [
            'id'       => $user['id'],
            'fullname' => $user['fullname'],
            'email'    => $user['email'],
        ];
    }
}
