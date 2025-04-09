<?php
$db_host = 'localhost';
$db_user = 'root'; // Đây là username của MySQL (mặc định trong XAMPP)
$db_pass = ''; // Mật khẩu MySQL
$db_name = 'vtqmysqli';

// Tạo kết nối
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

?>
