<?php
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/config/connection.php";

require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php";

// Lấy ID sản phẩm từ URL
$productsModel = new ProductsModel($conn);
$product = $productsModel->laySanphamTheoID($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm - <?php echo htmlspecialchars($product['TenSP']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/chitietsanpham.css">
    <link rel="icon" href="images/logo_cake_1-removebg-preview.png" type="image/x-icon">
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- Nội dung header -->
    </header>

    <!-- Chi tiết sản phẩm -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo htmlspecialchars($product['HinhAnh']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($product['TenSP']); ?>">
            </div>
            <div class="col-md-6">
                <h1><?php echo htmlspecialchars($product['TenSP']); ?></h1>
                <p class="price"><?php echo number_format($product['Gia'], 0, ',', '.'); ?> ₫</p>
                <p class="description"><?php echo htmlspecialchars($product['MoTa']); ?></p>
                <button class="btn btn-primary">Thêm vào giỏ hàng</button>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
          <div class="footer-info">
            <img
              src="./images/logo cake 1.png"
              width="150px"
              height="100px"
              alt="logo"
            />
            <h2>VTQ Bakery</h2>
            <p>Trụ sở 1: 12 Chùa Bộc, Đống Đa, Hà Nội</p>
            <p>Trụ sở 2: 232 Lê Lợi, Quận 1, TP.Hồ Chí Minh</p>
            <p>Email: VTQ@gmail.com</p>
            <p>SDT: 0987654321</p>
          </div>
          <div class="footer-gioithieu">
            <h3>Thông tin</h3>
            <ul>
              <li><a href="">>> &nbsp; Giới thiệu</a></li>
              <li><a href="">>> &nbsp; Tin tức</a></li>
              <li><a href="">>> &nbsp; Đội ngũ</a></li>
              <li><a href="">>> &nbsp; Liên hệ</a></li>
            </ul>
          </div>
          <div class="footer-sanpham">
            <h3>Sản Phẩm</h3>
            <ul>
              <li><a href="">>> &nbsp; Bánh sinh nhật</a></li>
              <li><a href="">>> &nbsp; Bánh nửa Entremet</a></li>
              <li><a href="">>> &nbsp; Phụ kiện bánh</a></li>
            </ul>
          </div>
          <div class="footer-phanphoi">
            <h3 style="padding-left : 30px; padding-bottom: 10px;">Cổng giao dịch</h3>
            <ul class="image-container">
              <li class="footer-item">
                <img
                  src="./images/pay01.png"
                  alt="eon"
                  class="footer-img"
                  style="width: 100px; height: 30px"
                />
              </li>
              <li class="footer-item">
                <img
                  src="./images/pay02.jpg"
                  alt=""
                  class="footer-img"
                  style="width: 100px; height: 50px"
                />
              </li>
             
              </li>
            </ul>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <div class="footer-bottom">
          <p>
            Bản quyền
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="14"
              width="14"
              viewBox="0 0 512 512"
            >
              <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                fill="#000000"
                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM199.4 312.6c-31.2-31.2-31.2-81.9 0-113.1s81.9-31.2 113.1 0c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9c-50-50-131-50-181 0s-50 131 0 181s131 50 181 0c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0c-31.2 31.2-81.9 31.2-113.1 0z"/>
            </svg>
            &nbsp;2024 VTQ Bakery - Lập trình và thiết kế bởi Nhóm 2
          </p>
        </div>
      </footer>
    <script src="js/header.js"></script>
</body>
</html>