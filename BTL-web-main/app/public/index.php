<?php
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/config/connection.php";
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php";
require_once "../controler/UserController.php";
require_once "../controler/EmailController.php";
require_once "../controler/ProductsController.php";

require_once "../view/header.php";

// dat mac dinh url
$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'home':
        include_once "../view/trangchu.php";
        break;
    case 'login':
        $controller = new UserController($conn);
        $controller->handleRequest();
        break;
    case 'register':
        $controller = new UserController($conn);
        $controller->handleRequest();
        break;
    case 'profile':
        include_once "../view/profile.php";
        break;
    case 'giohang':
        include_once "../view/giohang.php";
        break;
    case 'gioithieu':
        include_once "../view/gioithieu.php";
        break;
    case 'lienhe':
        include_once "../view/lienhe.php";
        break;
    case 'hoidap':
        include_once "../view/hoidap.php";
        break;
    case 'sanpham':
        $loaisp = isset($_GET['loai']) ? $_GET['loai'] : null; // Lấy loại sản phẩm từ URL
        $controller = new ProductsController($conn);
        $products = $controller->index($loaisp);
        include "../view/sanpham.php";
        break;
    case 'tintuc':
        include_once "../view/tintuc.php";
        break;
    case 'doingu':
        include_once "../view/doingu.php";
        break;
    case 'sendEmail':
        $controller = new EmailController();
        $controller->handleRequest();
        break;
    case 'banhsinhnhat':
        $loaisp = isset($_GET['loai']) ? $_GET['loai'] : null; // Lấy loại sản phẩm từ URL
        $controller = new ProductsController($conn);
        $products = $controller->index($loaisp);
        include_once "../view/banhsinhnhat-page.php";
        break;
    case 'banhnuae':
        $loaisp = isset($_GET['loai']) ? $_GET['loai'] : null; // Lấy loại sản phẩm từ URL
        $controller = new ProductsController($conn);
        $products = $controller->index($loaisp);
        include_once "../view/banhnuae-page.php";
        break;
    case 'phukienbanh':
        $loaisp = isset($_GET['loai']) ? $_GET['loai'] : null; // Lấy loại sản phẩm từ URL
        $controller = new ProductsController($conn);
        $products = $controller->index($loaisp);
        include_once "../view/phukienbanh-page.php";
        break;
    case 'hienchitiet':
        $MaSP = isset($_GET['MaSP']) ? $_GET['MaSP'] : null;
        $controller = new ProductsController($conn);
        $products = $controller->show($MaSP);
        include_once "../view/chitietsanpham.php";
        break;
    default:
        include_once "../view/trangchu.php";
        break;
}
?>