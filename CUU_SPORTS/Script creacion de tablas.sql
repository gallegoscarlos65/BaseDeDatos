CREATE DATABASE CUU_SPORTS;
USE CUU_SPORTS;
DROP DATABASE CUU_SPORTS;

-- Table `mydb`.`Catalogo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Catalogo (
  `idCodigo` INT NOT NULL AUTO_INCREMENT,
  `cantidad` INT NULL,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idCodigo`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `mydb`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Productos (
  `idProductos` INT NOT NULL AUTO_INCREMENT,
  `Talla` VARCHAR(45) NULL,
  `Diseño` VARCHAR(45) NULL,
  `color` VARCHAR(45) NULL,
  `Tela` VARCHAR(45) NULL,
  `precio` DOUBLE NULL,
  `Catalogo_idCodigo` INT NOT NULL,
  PRIMARY KEY (`idProductos`),
  INDEX `fk_Productos_Catalogo1_idx` (`Catalogo_idCodigo` ASC) VISIBLE,
  CONSTRAINT `fk_Productos_Catalogo1`
    FOREIGN KEY (`Catalogo_idCodigo`)
    REFERENCES Catalogo (`idCodigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `mydb`.`Accesorios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Accesorios (
  `idAccesorios` INT NOT NULL AUTO_INCREMENT,
  `Tamaño` VARCHAR(45) NULL,
  `Comodidad` VARCHAR(45) NULL,
  `color` VARCHAR(45) NULL,
  `Grip` VARCHAR(45) NULL,
  `Material` VARCHAR(45) NULL,
  `precio` DOUBLE NULL,
  `Catalogo_idCodigo` INT NOT NULL,
  PRIMARY KEY (`idAccesorios`),
  INDEX `fk_Accesorios_Catalogo1_idx` (`Catalogo_idCodigo` ASC) VISIBLE,
  CONSTRAINT `fk_Accesorios_Catalogo1`
    FOREIGN KEY (`Catalogo_idCodigo`)
    REFERENCES `mydb`.`Catalogo` (`idCodigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Empresa (
  `idEmpresa` INT NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  `Catalogo_idCodigo` INT NOT NULL,
  PRIMARY KEY (`idEmpresa`),
  INDEX `fk_Empresa_Catalogo_idx` (`Catalogo_idCodigo` ASC) VISIBLE,
  CONSTRAINT `fk_Empresa_Catalogo`
    FOREIGN KEY (`Catalogo_idCodigo`)
    REFERENCES `mydb`.`Catalogo` (`idCodigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Clientes(
  `idClientes` INT NOT NULL AUTO_INCREMENT,
  `edad` INT NULL,
  `domicilio` VARCHAR(45) NULL,
  `correo electronico` VARCHAR(45) NULL,
  `Empresa_idEmpresa` INT NOT NULL,
  PRIMARY KEY (`idClientes`),
  INDEX `fk_Clientes_Empresa1_idx` (`Empresa_idEmpresa` ASC) VISIBLE,
  CONSTRAINT `fk_Clientes_Empresa1`
    FOREIGN KEY (`Empresa_idEmpresa`)
    REFERENCES `mydb`.`Empresa` (`idEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Orden de compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Orden_de_compra (
  `idOrden de compra` INT NOT NULL AUTO_INCREMENT,
  `RFC` VARCHAR(45) NULL,
  `Metodo de pago` VARCHAR(45) NULL,
  `Fecha` DATE NULL,
  `Clientes_idClientes` INT NOT NULL,
  PRIMARY KEY (`idOrden de compra`),
  INDEX `fk_Orden de compra_Clientes1_idx` (`Clientes_idClientes` ASC) VISIBLE,
  CONSTRAINT `fk_Orden de compra_Clientes1`
    FOREIGN KEY (`Clientes_idClientes`)
    REFERENCES `mydb`.`Clientes` (`idClientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`bitacora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS bitacora (
  `idbitacora` INT NOT NULL AUTO_INCREMENT,
  `nombre_tabla` VARCHAR(45) NULL,
  `accion` TEXT(45) NULL,
  `usuario` VARCHAR(45) NULL,
  `fecha` DATE NULL,
  PRIMARY KEY (`idbitacora`))
ENGINE = InnoDB;

