<?php
include_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/Connect/connection.php";
include_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php";
include_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/controler/authcontroller/ProductsauthController.php";
?>

<form action="../../../admin.php?action=editProduct" method="POST" enctype="multipart/form-data">
    <p>Bạn đang sửa sp có mã</p> <?php echo $row['MaSP'] ?>  
    
    <p>Tên sản phẩm</p>
    <input type="text" name="Tensp" value="<?php echo $row['TenSP'] ?>" required>

    <p>Anh san pham</p>
    <input type="file" name="anhsp" value="<?php echo $row['HinhAnh'] ?>" required>

    <p> Gia san pham</p>
    <input type="text" name="giasp" value="<?php echo $row['Gia'] ?>" required>

    <p>Mo ta</p>
    <input type="text" name="mota" value="<?php echo $row['MoTa'] ?>" required>

    <button name="btnsua" type="submit">Sua san pham</button>
</form>
