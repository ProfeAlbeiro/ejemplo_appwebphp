<?php session_start();
    class Dashboard{
        public function __construct(){}
        public function main(){
            if (isset($_SESSION['session'])) {
                require_once "views/roles/admin/header.view.php";
                require_once "views/roles/admin/admin.view.php";
                require_once "views/roles/admin/footer.view.php";
            } else {                
                header("Location:?");
            }
            
        }
    }

?>