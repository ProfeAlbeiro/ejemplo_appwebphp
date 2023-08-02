<?php
    class Rol{
        // 1er Parte. Programación Orientada a Objetos
        # Atributos
        private $rolCode;
        private $rolName;
        # Sobrecarga de Constructores
        public function __construct(){
            try {
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        public function __construct2($rolCode, $rolName){
            $this->rolCode = $rolCode;
            $this->rolName = $rolName;
        }
        # Métodos: RolCode
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        } 
        public function getRolCode(){
            return $this->rolCode;
        } 
        # Métodos: RolName
        public function setRolName($rolName){
            $this->rolName = $rolName;
        } 
        public function getRolName(){
            return $this->rolName;
        }
        // 2da Parte. Persistencia a la Bases de Datos
    }

?>