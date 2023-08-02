# DROP DATABASE bbdd_app_web_compras_linea;
-- -----------------------------------------------------
-- Schema bbdd_app_web_compras_linea
-- -----------------------------------------------------
CREATE DATABASE bbdd_app_web_compras_linea DEFAULT CHARACTER SET utf8 ;
USE bbdd_app_web_compras_linea ;

-- -----------------------------------------------------
-- Table ROLES
-- -----------------------------------------------------
CREATE TABLE ROLES (
  rol_codigo INT(11) NOT NULL AUTO_INCREMENT,
  rol_nombre VARCHAR(45) NOT NULL,
  PRIMARY KEY (rol_codigo)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table USUARIOS
-- -----------------------------------------------------
CREATE TABLE USUARIOS (
  rol_codigo INT(11) NOT NULL,
  usuario_codigo INT(11) NOT NULL,
  usuario_nombre VARCHAR(45) NOT NULL,
  usuario_apellido VARCHAR(45) NOT NULL,
  usuario_correo VARCHAR(45) NOT NULL,
  usuario_pass VARCHAR(200) NOT NULL,
  usuario_estado TINYINT(4) NOT NULL,
  PRIMARY KEY (usuario_codigo),
  INDEX ind_usuarios_roles (rol_codigo ASC),
  CONSTRAINT fk_usuarios_roles
    FOREIGN KEY (rol_codigo)
    REFERENCES ROLES (rol_codigo)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table CLIENTES
-- -----------------------------------------------------
CREATE TABLE CLIENTES (
  cliente_codigo INT NOT NULL,
  PRIMARY KEY (cliente_codigo),
  INDEX ind_cliente_usuarios (cliente_codigo ASC),
  CONSTRAINT fk_clientes_usaurios
    FOREIGN KEY (cliente_codigo)
    REFERENCES USUARIOS (usuario_codigo)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table PEDIDOS
-- -----------------------------------------------------
CREATE TABLE PEDIDOS (
  cliente_codigo INT NOT NULL,
  pedido_codigo INT NOT NULL,
  PRIMARY KEY (pedido_codigo),
  INDEX ind_pedidos_clientes (cliente_codigo ASC),
  CONSTRAINT fk_pedidos_clientes
    FOREIGN KEY (cliente_codigo)
    REFERENCES CLIENTES (cliente_codigo)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table CATEGORIAS
-- -----------------------------------------------------
CREATE TABLE CATEGORIAS (
  categoria_codigo INT NOT NULL,
  PRIMARY KEY (categoria_codigo)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table PRODUCTOS
-- -----------------------------------------------------
CREATE TABLE PRODUCTOS (
  categoria_codigo INT NOT NULL,
  producto_codigo INT NOT NULL,
  PRIMARY KEY (producto_codigo),
  INDEX ind_productos_categorias (categoria_codigo ASC),
  CONSTRAINT fk_productos_categorias
    FOREIGN KEY (categoria_codigo)
    REFERENCES CATEGORIAS (categoria_codigo)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table LISTA_PRODUCTOS
-- -----------------------------------------------------
CREATE TABLE LISTA_PRODUCTOS (
  pedido_codigo INT NOT NULL,
  producto_codigo INT NOT NULL,
  INDEX ind_lista_productos_pedidos (pedido_codigo ASC),
  INDEX ind_lista_productos_producto (producto_codigo ASC),
  CONSTRAINT fk_lista_productos_pedido
    FOREIGN KEY (pedido_codigo)
    REFERENCES PEDIDOS (pedido_codigo)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_lista_productos_producto
    FOREIGN KEY (producto_codigo)
    REFERENCES PRODUCTOS (producto_codigo)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;