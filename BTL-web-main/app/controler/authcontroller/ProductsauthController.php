<?php
include_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php";

class ProductsauthController{
    private $conn;
    private $productsModel;

    public function __construct($conn){
        $this->conn = $conn;
        $this->productsModel = new ProductsModel($conn);
    }

    public function addSanpham() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnthem'])) {
            $tensp = $_POST['Tensp'];
            $anhsp = $_FILES['anhsp']['name'];
            $anhsp_tmp_name = $_FILES['anhsp']['tmp_name'];
            $giasp = $_POST['giasp'];
            $mota = $_POST['mota'];

            // Xử lý upload ảnh
            $targetDir = "../../uploads/";
            $targetFile = $targetDir . basename($anhsp);
            move_uploaded_file($anhsp_tmp_name, $targetFile);

            // Thêm sản phẩm vào cơ sở dữ liệu
            $result = $this->productsModel->themSanpham(null, $tensp, $giasp, $targetFile, $mota);

            if ($result) {
                header("Location: admin.php?action=quanlisanpham");
            } else {
                echo "Có lỗi xảy ra khi thêm sản phẩm.";
            }
        }
    }

    public function suaSanpham(){
        if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['MaSP'])){
            $MaSP = $_POST['MaSP'];
            $tensp = $_POST['Tensp'];
            $anhsp = $_FILES['anhsp']['name'];//chi hien ten hhinh anh
            $anhsp_tmp_name = $_FILES['anhsp']['tmp_name'];
            $giasp = $_POST['giasp'];
            $mota = $_POST['mota'];
            $sql = $this->productsModel->suaSanpham($MaSP, $tensp, $anhsp, $giasp, $mota);
            if($sql){
                move_uploaded_file($anhsp_tmp_name, "./uploads/".$anhsp);
                header("Location: admin.php?action=quanlisanpham.php");
            }
        }
    }

    public function hienThiformsua() {
        if (isset($_GET['id'])) {
            $masp = $_GET['id'];
            $result = $this->productsModel->laySanphamTheoID($masp);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                include_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/view/auth/suasanpham.php";
            } else {
                echo "Không tìm thấy sản phẩm.";
            }
        }
    }


    

    public function xoaSanpham(){
        if(isset($_GET['MaSP'])){
            $id = $_GET['MaSP'];
            $sql = $this->productsModel->xoaSanpham($id);
            if($sql){
                header("Location: admin.php?action=quanlisanpham.php");
            }
        }
    }

}
?>