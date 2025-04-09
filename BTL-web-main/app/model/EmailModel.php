<?php
require '../Mailer/PHPMailer-master/src/PHPMailer.php';
require '../Mailer/PHPMailer-master/src/SMTP.php';
require '../Mailer/PHPMailer-master/src/Exception.php';


class EmailModel{
    public function goimail($to)
    {
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        try {
            // Cấu hình SMTP
            $mail->SMTPDebug = 0; 
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = "zen231104@gmail.com";
            $mail->Password   = "qvmw krkv myrj mmgp"; // Dùng App Password
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->CharSet    = 'UTF-8';

            // Người gửi
            $mail->setFrom('zen231104@gmail.com', 'VTQ bakery');
            $mail->addAddress($to);

            // Nội dung email
            $mail->isHTML(true);
            $mail->Subject = 'Đăng ký nhận thông tin khuyến mãi từ VTQ Bakery';
            $mail->Body    = 'Chúc mừng bạn đã đăng ký nhận thông tin khuyến mãi từ VTQ Bakery. 
                              Cảm ơn bạn đã tin tưởng và ủng hộ VTQ Bakery!';

            // Cấu hình SSL
            $mail->smtpConnect([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]);

            // Gửi email
            if ($mail->send()) {
                return 'success';
            } else {
                return 'error';
            }
        } catch (Exception $e) {
            return 'error';
        }
    }
}

?>