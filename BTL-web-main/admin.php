<?php
// filepath: /c:/xampp/htdocs/btminhgit-mvc/BTL-web-main/admin.php
include_once "./app/controler/authcontroller/ProductsauthController.php";
include_once "./Connect/connection.php";

// Kiểm tra tham số action trong URL
$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'addProduct':
        $controller = new ProductsAuthController($conn);
        $controller->addSanpham();
        break;
    case 'editProduct':
        $controller = new ProductsAuthController($conn);
        $controller->suaSanpham();
        break;
    case 'hienthiformsua':
        $controller = new ProductsAuthController($conn);
        $controller->hienthiformsua();
        break;
    case 'deleteProduct':
        $controller = new ProductsAuthController($conn);
        $controller->xoaSanpham();
        break;
    case 'quanlisanpham':
        include_once "./app/view/auth/quanlisanpham.php";
        break;
    default:
        echo "Trang quản lý sản phẩm";
        break;
}
?>