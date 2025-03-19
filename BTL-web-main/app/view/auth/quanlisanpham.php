<?php
require "/xampp/htdocs/btminhgit-mvc/BTL-web-main/Connect/connection.php";
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php";

$productsModel = new ProductsModel($conn);
$result = $productsModel->laySanpham();

if($result->num_rows){
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<tr>";
        echo "<td>".$row['MaSP']."</td>";
        echo "<td>".$row['TenSP']."</td>";
        echo "<td>".$row['Gia']."</td>";
        echo "<td>".$row['HinhAnh']."</td>";
        echo "<td>".$row['MoTa']."</td>";
        echo "<td><a href='../../../admin.php?action=hienthiformsua&id=".$row['MaSP']."'>Sua</a></td>";
        echo "<td><a href='../../../admin.php?action=deleteProduct&id=".$row['MaSP']."'>Xoa</a></td>";
        echo "</tr>";
    }
}

?>
