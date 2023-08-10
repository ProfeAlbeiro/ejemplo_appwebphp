<?php
    require_once "models/Rol.php";
    class Roles{
        public function __construct(){}
        public function main(){
            header("Location: ?c=Dashboard");
        }
        // Crear Rol
        public function registrarRoles(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/01_users/create_rol.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rol = new Rol(
                    null,
                    $_POST['nombreRol']
                );
                $rol->registrarRol();
                header("Location: ?c=Roles&a=registrarRoles");
                // header("Location: ?c=Roles&a=consultarRoles");
            }
        }
        // Consultar Roles
        public function consultarRoles(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $roles = new Rol;
                $roles = $roles->consultarRoles();                
                echo "Tabla de Roles";
            }
        }
        // Actualizar Rol
        public function actualizarRoles(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = new Rol;
                $rol = $rol->obtenerRolPorId($_GET['codigoRol']);
                echo "Formulario de Actualización Rol";                
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rol = new Rol(
                    null,
                    $_POST['nombreRol']
                );
                $rol->actualizarRol();
                header("Location: ?c=Roles&a=consultarRoles");
            }
        }
        // Eliminar Rol
        public function eliminarRoles(){
            $rol = new Rol;
            $rol->eliminarRol($_GET['codigoRol']);
            header("Location: ?c=Roles&a=consultarRoles");
        }

    }

?>