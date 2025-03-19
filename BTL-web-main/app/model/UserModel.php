<?php
class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function checkLogin($email, $password) {
        $email = mysqli_real_escape_string($this->conn, $email);
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                return $row;
            }
        }
        return false;
    }

    public function register($username, $email, $password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql_check = "SELECT * FROM users WHERE email = '$email' or username = '$username'";
        $result_check = mysqli_query($this->conn, $sql_check);

        if (mysqli_num_rows($result_check) > 0) {
            return "Email hoặc username đã được sử dụng!";
        } else {
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
            if (mysqli_query($this->conn, $sql)) {
                return "Đăng ký thành công! Bạn có thể đăng nhập.";
            } else {
                return "Lỗi khi đăng ký. Vui lòng thử lại!";
            }
        }
    }
}
?>