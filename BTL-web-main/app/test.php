<?php
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/Connect/connection.php"; 
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php";

$productsModel = new ProductsModel($conn);
$result = $productsModel->laySanpham();

// Debug dữ liệu trả về
if ($result->num_rows > 0) {
    echo "<pre>";
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
    echo "</pre>";
} else {
    echo "❌ Không có dữ liệu trong bảng 'sanpham'.";
}

?>
