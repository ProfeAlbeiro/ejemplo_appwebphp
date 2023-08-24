<?php session_start();
    class Logout{
        public function __construct(){}
        # CU02 - Cerrar Sesión
        public function main(){
            session_destroy();
            header("Location: ?");
        }
    }
?>