<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        goimail($email);
    }
}

function goimail($to)
{
    require '../Mailer/PHPMailer-master/src/PHPMailer.php';
    require '../Mailer/PHPMailer-master/src/SMTP.php';
    require '../Mailer/PHPMailer-master/src/Exception.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    try {
        // STMP
        $mail->SMTPDebug = 2; 
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = "zen231104@gmail.com";
        $mail->Password   = "qvmw krkv myrj mmgp"; // Dùng App Password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8';

        // tt ng gui
        $mail->setFrom('zen231104@gmail.com', 'VTQ bakery');
        $mail->addAddress($to);

        // noi dung
        $mail->isHTML(true);
        $mail->Subject = 'Đăng ký nhận thông tin khuyến mãi từ VTQ Bakery';
        $mail->Body    = 'Chúc mừng bạn đã đăng ký nhận thông tin khuyến mãi từ VTQ Bakery. 
                          Chúng tôi sẽ gửi thông tin khuyến mãi đến bạn sớm nhất có thể.
                          Cảm ơn bạn đã tin tưởng và ủng hộ VTQ Bakery!';

        // Cấu hình SSL
        $mail->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        // gui
        $mail->send();
        echo 'success';
        exit; // Dừng script sau khi gửi thành công

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
