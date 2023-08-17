<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        public function main(){
            header("Location: ?c=Dashboard");
        }
        public function registrarUsuarios(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                echo "Formulario de Registro de Usuario";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                header("Location: ?c=Users&a=consultarUsuarios");
            }            
        }
        public function consultarUsuarios(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = new User;
                $users = $users->consultarUsuarios();
                print_r($users);
            }            
        }
        public function actualizarUsuarios() {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = new User;
                $user = $user->obtenerUserPorId($_GET['codigoUser']);                
                echo "Formulario de Actualización";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $user = new User(                    
                    $_POST['rolCode'],
                    $_POST['userCode'],
                    $_POST['userName'],
                    $_POST['userLastName'],
                    $_POST['userEmail'],
                    $_POST['userPass'],
                    $_POST['userStatus']
                );                
                $user->actualizarUsuario();
                header("Location: ?c=Users&a=consultarUsuarios");
            }
        }
        public function eliminarUsuarios() {
            $user = new User;            
            $user->eliminarUsuario($_GET['codigoRol']);
            header("Location: ?c=Users&a=consultarUsuarios");
        }
    }
?>