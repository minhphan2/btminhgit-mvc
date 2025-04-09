<?php

include_once "/xampp/htdocs/btminhgit-mvc/BTL-web-main/app/model/EmailModel.php";

class EmailController {
    private $emailModel;

    public function __construct() {
        $this->emailModel = new EmailModel();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                $result = $this->emailModel->goimail($email);
                
                if ($result === 'success') {
                    echo 'success';
                } else {
                    echo 'error';
                }
                exit();
            }
        }
    }
}
?>
