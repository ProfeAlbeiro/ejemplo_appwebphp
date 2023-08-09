<?php
    class User{
        # Atributos
        private $dbh;
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
                $this->dbh = DataBase::connection();
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
        public function __construct7($rolCode,$userCode,$userName,$userLastName,$userEmail,$userPass,$userStatus){
            $this->rolCode = $rolCode;
            $this->userCode = $userCode;
            $this->userName = $userName;
            $this->userLastName = $userLastName;
            $this->userEmail = $userEmail;
            $this->userPass = $userPass;
            $this->userStatus = $userStatus;
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
        public function setUserName($userName){
            $this->userName = $userName;
        } 
        public function getUserName(){
            return $this->userName;
        } 
        # Métodos: userLastName
        public function setUserLastName($userLastName){
            $this->userLastName = $userLastName;
        } 
        public function getUserLastName(){
            return $this->userLastName;
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
        public function setUserStatus($userStatus){
            $this->userStatus = $userStatus;
        } 
        public function getUserStatus(){
            return $this->userStatus;
        }
        
        // 2da Parte. Persistencia a la Bases de Datos

        # CU01 - Iniciar Sesión
        public function login(){
            $sql = 'SELECT * FROM USUARIOS
                    WHERE usuario_correo = :usuario_correo 
                    AND usuario_pass = :usuario_pass';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('usuario_correo', $this->getUserEmail());
            $stmt->bindValue('usuario_pass', sha1($this->getUserPass()));
            $stmt->execute();
            $userDb = $stmt->fetch();
            if ($userDb) {
                $user = new User(
                    $userDb['rol_codigo'],
                    $userDb['usuario_codigo'],
                    $userDb['usuario_nombre'],
                    $userDb['usuario_apellido'],
                    $userDb['usuario_correo'],
                    $userDb['usuario_pass'],
                    $userDb['usuario_estado']
                );
                return $user;
            } else {
                return false;
            }
        }
        # CU02 - Cerrar Sesión
        # CU03 - Recuperar Contraseña
        # CU04 - Registro de Usuario
        # CU05 - Consultar Usuarios
        # CU06 - Actualizar Usuario
        # CU07 - Obtener Usuario por Id
        # CU08 - Eliminar Usuario
    }
?>