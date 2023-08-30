<?php session_start();
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
                    $status = $user->getUserStatus();
                    $rol = $user->getRolCode();
                    if ($status == 1) {
                        if ($rol == 1) {
                            $_SESSION['session'] = "admin";                            
                            $_SESSION['rol'] = $rol;                            
                        } elseif ($rol == 2) {
                            $_SESSION['session'] = "customer";
                            $_SESSION['rol'] = $rol;                            
                        } elseif ($rol == 3) {
                            $_SESSION['session'] = "seller";                            
                            $_SESSION['rol'] = $rol;                            
                        }
                        $user = serialize($user);                        
                        $_SESSION['profile'] = $user;
                        header("Location: ?c=Dashboard");
                    } else {
                        echo "Estás registrado, pero no estás activo";
                    }
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