<?php
include_once "./model/UserModel.php";

class UserController {
    private $conn;
    private $userModel;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->userModel = new User($conn);
    }

    public function handleRequest() {
        $error_message = "";
        $success_message = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nutdangnhap'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $user = $this->userModel->checkLogin($email, $password);

                if ($user) {
                    session_start();
                    $_SESSION['usernamesql'] = $user['username'];
                    header("Location: ./indexok.php");
                    exit();
                } else {
                    $error_message = "Sai tài khoản hoặc mật khẩu!";
                }
            } elseif (isset($_POST['nutdangky'])) {
                $username = $_POST['username'] ?? '';
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';

                if (!empty($username) && !empty($email) && !empty($password)) {
                    $result = $this->userModel->register($username, $email, $password);
                    if ($result === "Đăng ký thành công! Bạn có thể đăng nhập.") {
                        $success_message = $result;
                    } else {
                        $error_message = $result;
                    }
                } else {
                    $error_message = "Vui lòng nhập đầy đủ thông tin!";
                }
            }
        }

        include __DIR__ . "/../view/Dangnhapdangky.php";
    }
}
?>