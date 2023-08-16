<?php
    require_once "Models/User.php";
    class Login{
        public function __construct(){}        
        public function main(){
            $mensaje = "";
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/company/header.view.php";
                require_once "views/company/login.view.php";
                require_once "views/company/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User($_POST['email'], $_POST['pass']);
                $user = $user->login();                
                if ($user) {
                    header("Location: ?c=Dashboard");
                } else {                    
                    $mensaje = "Usuario Incorrecto";
                    require_once "views/company/header.view.php";
                    require_once "views/company/login.view.php";
                    require_once "views/company/footer.view.php";
                    // echo "<script>alert('Usuario Incorrecto')</script>";
                }
            }
        }
    }
?>