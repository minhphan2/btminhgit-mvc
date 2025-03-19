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

    public function index() {
        return $this->productsModel->laySanpham(); 
    }

    public function show() {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']);
            $product = $this->productsModel->laySanphamTheoID($id);
            include __DIR__ . "/../view/chitietsanpham.php";
        } else {
            echo "Không tìm thấy sản phẩm!";
        }
    }
}
?>