<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        public function main(){
            header("Location: ?c=Dashboard");
        }
        public function registrarUsuarios(){
            $user = new User(
                $_POST['rolCode'],
                $_POST['userCode'],
                $_POST['userName'],
                $_POST['userLastName'],
                $_POST['userEmail'],
                $_POST['userPass'],
                $_POST['userStatus']
            );            
            $user->registrarUsuario();
        }
        public function consultarUsuarios(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = new User;
                $users = $users->consultarUsuarios();
                print_r($users);
            }
        }

    }
?>