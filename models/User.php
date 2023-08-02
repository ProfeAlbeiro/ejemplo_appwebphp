<?php
    class User{
        # Atributos
        protected $rolCode;
        protected $userCode;
        protected $userName;
        protected $userLastName;
        protected $userEmail;
        protected $userPass;
        protected $userStatus;

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
        public function __construct2($userEmail, $userPass){
            $this->userEmail = $userEmail;
            $this->userPass = $userPass;
        }

        # Métodos: RolCode
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        } 
        public function getRolCode(){
            return $this->rolCode;
        } 
        # Métodos: userCode
        public function setUserCode($userCode){
            $this->userCode = $userCode;
        } 
        public function getUserCode(){
            return $this->userCode;
        } 
        # Métodos: userName
        public function setUserName($UserName){
            $this->UserName = $UserName;
        } 
        public function getUserName(){
            return $this->UserName;
        } 
        # Métodos: userLastName
        public function setUserLastName($UserLastName){
            $this->UserLastName = $UserLastName;
        } 
        public function getUserLastName(){
            return $this->UserLastName;
        } 
        # Métodos: userEmail
        public function setUserEmail($userEmail){
            $this->userEmail = $userEmail;
        } 
        public function getUserEmail(){
            return $this->userEmail;
        } 
        # Métodos: userPass
        public function setUserPass($userPass){
            $this->userPass = $userPass;
        } 
        public function getUserPass(){
            return $this->userPass;
        } 
        # Métodos: userStatus
        public function setUserStatus($UserStatus){
            $this->UserStatus = $UserStatus;
        } 
        public function getUserStatus(){
            return $this->UserStatus;
        } 
    }
?>