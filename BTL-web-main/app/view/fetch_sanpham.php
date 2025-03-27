<?php
require_once '/xampp/htdocs/btminhgit-mvc/BTL-web-main/Connect/connection.php';
require_once '/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php';
require_once '/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/controler/ProductsController.php';

// Khởi tạo Controller
$controller = new ProductsController($conn);

// Lấy tham số từ yêu cầu AJAX
$limit = 1;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$loaiSP = isset($_GET['loai']) ? $_GET['loai'] : ''; // Mặc định là loại BNE

// Gọi phương thức từ Controller để lấy dữ liệu
$response = $controller->fetchSanpham($loaiSP, $page, $limit);

// Trả về dữ liệu dưới dạng JSON
echo json_encode($response, JSON_UNESCAPED_UNICODE);
?>