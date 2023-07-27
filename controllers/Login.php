<?php
    class Login{
        public function __construct(){}
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/company/header.view.php";
                require_once "views/company/login.view.php";
                require_once "views/company/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $_POST['email'];
                $pass = $_POST['pass'];
                if ($user == "pepito@correo.com" && $pass == "12345") {
                    header("Location: ?c=Dashboard");
                } else {
                    header("Location: ?");
                }
            }
        }
    }
?>