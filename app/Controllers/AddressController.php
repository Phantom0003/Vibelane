<?php
require_once __DIR__ . '/../Models/AddressModel.php';

class AddressController
{

    private $addressModel;

    public function __construct()
    {
        $this->addressModel = new AddressModel();
    }

    public function save()
    {
        if (empty($_SESSION['user'])) {
            header('Location: index.php?url=login');
            exit();
        }
            $userId = $_SESSION['user']['id'];
            $fullName = trim($_POST['full_name'] ?? '');
            $phone = trim($_POST['phone'] ?? '');
            $address_line = trim($_POST['address_line'] ?? '');
            $city = trim($_POST['city'] ?? '');
            $state = trim($_POST['state'] ?? '');
            $postal_code = trim($_POST['postal_code'] ?? '');

            $errors = [];
            if (empty($fullName)) {
                $errors[] = 'Full name is required.';
            }
            if (empty($phone)) {
                $errors[] = 'Phone number is required.';
            }
            if (empty($address_line)) {
                $errors[] = 'Address line is required.';
            }
            if (empty($city)) {
                $errors[] = 'City is required.';
            }
            if (empty($state)) {
                $errors[] = 'State is required.';
            }
            if (empty($postal_code)) {
                $errors[] = 'Postal code is required.';
            }

            if (!empty($errors)) {
                $_SESSION['address_errors'] = $errors;
                $_SESSION['old_address'] = $_POST;
                header('Location: index.php?url=address');
                exit();
            }

            $this->addressModel->addAddress($userId, $fullName, $phone, $address_line, $city, $state, $postal_code);
            header('Location: index.php?url=account');
            exit();
        }
    }

