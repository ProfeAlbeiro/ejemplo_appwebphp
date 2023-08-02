DROP DATABASE bbdd_app_web_compras_linea;
CREATE DATABASE bbdd_app_web_compras_linea DEFAULT CHARACTER SET utf8 ;
USE bbdd_app_web_compras_linea ;

-- -----------------------------------------------------
-- Table bbdd_app_web_compras_linea.ROLES
-- -----------------------------------------------------
CREATE TABLE ROLES (
  rol_codigo INT NOT NULL AUTO_INCREMENT,
  rol_nombre VARCHAR(45) NULL,
  PRIMARY KEY (rol_codigo))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table bbdd_app_web_compras_linea.USUARIOS
-- -----------------------------------------------------
CREATE TABLE USUARIOS (
  rol_codigo INT NOT NULL,
  usuario_codigo INT NOT NULL,
  usuario_nombre VARCHAR(45) NOT NULL,
  usuario_apellido VARCHAR(45) NOT NULL,
  usuario_correo VARCHAR(45) NOT NULL,
  usuario_pass VARCHAR(200) NOT NULL,
  usuario_estado TINYINT NOT NULL,
  PRIMARY KEY (usuario_codigo),
  INDEX ind_usuarios_roles (rol_codigo ASC),
  CONSTRAINT fk_usuarios_roles
    FOREIGN KEY (rol_codigo)
    REFERENCES bbdd_app_web_compras_linea.ROLES (rol_codigo)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;