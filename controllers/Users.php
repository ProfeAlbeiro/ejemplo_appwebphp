<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        public function main(){
            header("Location: ?c=Dashboard");
        }
        public function registrarUsuario(){
            $user = new User(
                1,
                1,
                "Pepito",
                "Perez",
                "pepito@perez.com",
                sha1("12345"),
                1
            );
            $user->registrarUsuario();
        }

    }
?>