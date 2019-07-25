<?php
require_once(__DIR__ . '/../Repository/AdminRepository.php');
require_once(__DIR__ . '/../includes/sessionStart.php');

if (!isset($_POST['password']) || empty($_POST['password'])) {
    header('Location: /index.php');
    exit();
}

if (!isset($_POST['email']) || empty($_POST['email'])) {
    header('location: /index.php');
}

$data = $_POST;

$adminRepo = new AdminRepository();
$admin = $adminRepo->login($data['email'], $data['password']);

if ($admin) {
    $_SESSION['admin'] = $admin;
    header('Location: /home.php');
    exit();

} else {

    header('Location: /index.php');
    exit();
}