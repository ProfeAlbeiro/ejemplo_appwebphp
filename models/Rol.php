<?php
    class Rol{
        // 1er Parte. Programación Orientada a Objetos
        # Atributos
        private $rolCode;
        private $rolName;

        # Métodos: RolCode
        public function setRolCode ($rolCode){
            $this->rolCode = $rolCode;
        } 
        public function getRolCode (){
            return $this->rolCode;
        } 
        # Métodos: RolName
        public function setRolName ($rolName){
            $this->rolName = $rolName;
        } 
        public function getRolName (){
            return $this->rolName;
        } 

        public function __construct(){}
        
        // 2da Parte. Persistencia a la Bases de Datos
    }

?>