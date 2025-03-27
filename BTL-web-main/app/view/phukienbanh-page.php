<!DOCTYPE html>
<?php
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/Connect/connection.php";
require_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/ProductsModel.php";
$productsModel = new ProductsModel($conn);

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$limit = 4; 
$offset = ($page - 1) * $limit; 


$totalProducts = $productsModel->countSanpham('PKB');
$totalPages = ceil($totalProducts / $limit); 


$result = $productsModel->laySanphamPhanTrang('PKB', $limit, $offset);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bánh sinh nhật</title>
    <link rel="icon" href="images/logo_cake_1-removebg-preview.png" type="image/x-icon"> <!--FAVICON-->
    <link rel="stylesheet" href="./public/css/banhsinhnhat.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/root.css">
    <link rel="stylesheet" href="./public/css/sanpham.css">
    <!-- link font logo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- Nội dung header -->
    </header>

    <!-- Tìm kiếm -->
    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            var query = document.getElementById('search-input').value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, ''); 
            // normalize và loại bỏ dấu
            
            if (query.includes('banh')) {
                window.location.href = 'sanpham.html';
            } else if (query.includes('lien')) {
                window.location.href = 'lienhe.html';
            } else if (query.includes('nhap')) {
                window.location.href = 'dangnhap.html';    
            } else {
                alert('Không có sản phẩm');
            }
        });
    </script>

    <!-- BOOKMARK -->
    <div class="bookmark">
        <div class="content-bookmark">
            <div>
                <h1 style="font-size: 100px;">Phụ Kiện Bánh</h1>
                <h3 style="font-size: 22px;">Dành cho tiệc sinh nhật, hoặc bất kỳ khoảnh khắc nào <br>quan trọng của bạn.</h3>
            </div>
        </div>
    </div>

    <!-- Bánh sinh nhật -->
    <div class='banhsinhnhat'>
        <div class='banh-list'>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class='product-container'>
                        <a href='indexok.php?action=hienchitiet&id=<?php echo $row['MaSP']; ?>'>
                            <p class='product-name'><?php echo $row['TenSP']; ?></p>
                            <p class='price'><?php echo $row['MoTa']; ?><br><?php echo number_format($row['Gia'], 0, ',', '.'); ?> ₫</p>
                            <img src='./images/banhsinhnhat/<?php echo $row['HinhAnh']; ?>' alt=''>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Không có sản phẩm nào.</p>
            <?php endif; ?>
        </div>
    </div>

    <nav class="page">
    <ul class="page-numbers">
        <?php if ($page > 1): ?>
            <li><a href="?action=phukienbanh&page=<?php echo $page - 1; ?>">« Trước</a></li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li>
                <a href="?action=phukienbanh&page=<?php echo $i; ?>" 
                   class="<?php echo ($i == $page) ? 'active' : ''; ?>">
                   <?php echo $i; ?>
                </a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <li><a href="?action=phukienbanh&page=<?php echo $page + 1; ?>">Tiếp »</a></li>
        <?php endif; ?>
    </ul>
</nav>

    <script src="././js/brand.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <img src="./images/logo cake 1.png" width="150px" height="100px" alt="logo" />
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
                        <img src="./images/pay01.png" alt="eon" class="footer-img" style="width: 100px; height: 30px" />
                    </li>
                    <li class="footer-item">
                        <img src="./images/pay02.jpg" alt="" class="footer-img" style="width: 100px; height: 50px" />
                    </li>
                </ul>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <div class="footer-bottom">
            <p>
                Bản quyền
                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#000000" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM199.4 312.6c-31.2-31.2-31.2-81.9 0-113.1s81.9-31.2 113.1 0c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9c-50-50-131-50-181 0s-50 131 0 181s131 50 181 0c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0c-31.2 31.2-81.9 31.2-113.1 0z"/>
                </svg>
                &nbsp;2024 VTQ Bakery - Lập trình và thiết kế bởi Nhóm 2
            </p>
        </div>
    </footer>
</body>
</html>