<?php

?>

<form action="../../../admin.php?action=addProduct" method="POST" enctype="multipart/form-data">
    <p>Tên sản phẩm</p>
    <input type="text" name="Tensp" required>

    <p>Anh san pham</p>
    <input type="file" name="anhsp" required>

    <p> Gia san pham</p>
    <input type="text" name="giasp" required>

    <p>Mo ta</p>
    <input type="text" name="mota" required>


    <button name="btnthem" type="submit">them san pham</button>

</form>