<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo_cake_1-removebg-preview.png" type="image/x-icon">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/dangnhap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
</head>
<body>
    <header></header>
    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            var query = document.getElementById('search-input').value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
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
    <div class="body">
        <div class="container" id="container">
            <div class="form-container register-container">
                <form action="index.php?action=handleRequest" method="POST">
                    <h1>Đăng kí</h1>
                    <?php if (!empty($success_message)) : ?>
                        <p style="color: green;"><?php echo $success_message; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($error_message)) : ?>
                        <p style="color: red;"><?php echo $error_message; ?></p>
                    <?php endif; ?>
                    <input type="text" name="username" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <button name="nutdangky">Đăng kí</button>
                    <span>Hoặc sử dụng tài khoản của bạn</span>
                    <div class="social-container">
                        <a href="" class="social"><svg class="register" xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512"><path fill="#005eff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
                        <a href="" class="social"><svg class="register" xmlns="http://www.w3.org/2000/svg" height="25" width="24.34375" viewBox="0 0 488 512"><path fill="#e88617" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg></a>
                    </div>
                </form>
            </div>
            <div class="form-container login-container">
                <form action="index.php?action=handleRequest" method="POST">
                    <h1>Đăng nhập</h1>
                    <?php if (!empty($error_message)) : ?>
                        <p style="color: red; font-weight: bold;"><?php echo $error_message; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($success_message)) : ?>
                        <p style="color: green;"><?php echo $success_message; ?></p>
                    <?php endif; ?>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <div class="content">
                        <div class="checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label>Nhớ tài khoản</label>
                        </div>
                        <div class="pass-link">
                            <a href="">Quên mật khẩu</a>
                        </div>
                    </div>
                    <button name="nutdangnhap">Đăng nhập</button>
                    <span>Hoặc sử dụng tài khoản của bạn</span>
                    <div class="social-container">
                        <a href="" class="social"><svg class="login" xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512"><path fill="#005eff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
                        <a href="" class="social"><svg class="login" xmlns="http://www.w3.org/2000/svg" height="25" width="24.34375" viewBox="0 0 488 512"><path fill="#e88617" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/header.js"></script>
    <script src="js/dangnhap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>