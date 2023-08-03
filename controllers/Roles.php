<?php
    require_once "models/Rol.php";
    class Roles{
        public function __construct(){}
        public function main(){
            $rol = new Rol();
            $rol->eliminarRol(6);
            // $rol1 = new Rol;
            // $rol1 = $rol->obtenerRolPorId(6);
            // $rol2 = new Rol(5,"Employee");
            // $rol2->actualizarRol();
            // print_r($rol2);
            
            // $rol = new Rol();
            // $rol = $rol->obtenerRolPorId(6);
            // print_r($rol);
            // $roles = new Rol();
            // $roles = $roles->consultarRoles();
            // print_r($roles);
            // $rol = new Rol(6,"Coordinador");
            // $rol->registrarRol();
            // print_r($rol);

            // echo "Estoy en el controlador Roles";
            // $roles = new Rol(2,"Vendedor");
            // echo "<br>";
            // echo "<br>" . $roles->getRolCode();
            // echo "<br>" . $roles->getRolName();
        }
    }

?>