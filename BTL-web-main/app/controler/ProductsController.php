<?php
require_once __DIR__ . "/../model/ProductsModel.php";
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/Connect/connection.php";

class ProductsController {
    private $conn;
    private $productsModel;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->productsModel = new ProductsModel($conn);
    }

    public function index($loaisp = null) {
        return $this->productsModel->laySanpham($loaisp);
    }
    
    
    public function show($MaSP) {
        return $this->productsModel->laySanphamTheoID($MaSP);
    }

    public function laySanphamTheoLoai($loaiSP) {
        return $this->productsModel->laysptheoloai($loaiSP);
    }


public function fetchSanpham($loaiSP, $page, $limit) {
    $offset = ($page - 1) * $limit;
    $totalProducts = $this->productsModel->countSanpham($loaiSP);
    $totalPages = ceil($totalProducts / $limit);
    $products = $this->productsModel->laySanphamPhanTrang($loaiSP, $limit, $offset);

    $html = '';
    if ($products->num_rows > 0) {
        while ($row = $products->fetch_assoc()) {
            $html .= "
                <div class='product-container'>
                    <a href='indexok.php?action=hienchitiet&id={$row['MaSP']}'>
                        <img src='./images/banhsinhnhat/{$row['HinhAnh']}' alt='{$row['TenSP']}'>
                        <p class='product-name'>{$row['TenSP']}</p>
                        <p class='price'>{$row['MoTa']}<br>" . number_format($row['Gia'], 0, ',', '.') . " ₫</p>
                    </a>
                </div>
            ";
        }
    } else {
        $html = '<p>Không có sản phẩm nào.</p>';
    }

    $pagination = '';
    if ($totalPages > 1) {
        for ($i = 1; $i <= $totalPages; $i++) {
            $active = ($i == $page) ? 'active' : '';
            $pagination .= "<li><a href='#' class='$active' data-page='$i'>$i</a></li>";
        }
    }

    return [
        'html' => $html,
        'pagination' => $pagination
    ];
}
}
?>