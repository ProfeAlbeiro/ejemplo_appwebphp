<?php session_start();
    require_once "models/User.php";
    class Dashboard{
        public function __construct(){
            if (empty($_SESSION['profile'])) {
                $_SESSION['profile'] = null;
                $_SESSION['session'] = null;
            }
        }
        public function main(){
            if (isset($_SESSION['session'])) {
                $session = $_SESSION['session'];                
                $user = unserialize($_SESSION['profile']);                
                require_once "views/roles/". $session . "/header.view.php";
                echo "<br>" . $user->getRolName();
                echo "<br>" . $user->getUserName();
                echo "<br>" . $user->getUserLastName();
                echo "<br>" . $user->getUserEmail();                
                // require_once "views/roles/". $session. "/". $session .".view.php";
                require_once "views/roles/". $session ."/footer.view.php";
            } else {                
                header("Location:?");
            }
            
        }
    }

?>