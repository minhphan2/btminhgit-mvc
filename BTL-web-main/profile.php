<?php
session_start();


if (!isset($_SESSION['usernamesql'])) {
    header("Location: dangnhap.php");
    exit();
}

include "../Connect/connection.php";

$username = $_SESSION['usernamesql'];
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "Không tìm thấy thông tin người dùng.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ người dùng</title>
</head>
<body>
    <div class="profile-container">
        <h2>Hồ sơ của bạn</h2>
        <div class="profile-info"><strong>Tên người dùng:</strong> <?php echo htmlspecialchars($user['userName']); ?></div>
        <div class="profile-info"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></div>
        <!-- Nếu muốn thêm các thông tin khác, bổ sung tại đây -->
        <div class="logout-btn">
            <a href="dangxuat.php">Đăng xuất</a>
        </div>
    </div>
</body>
</html>
