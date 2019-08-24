-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema SRU
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema SRU
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `SRU` DEFAULT CHARACTER SET utf8 ;
USE `SRU` ;

-- -----------------------------------------------------
-- Table `SRU`.`Perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SRU`.`Perfil` (
  `idPerfil` INT NOT NULL COMMENT '	',
  `nomePerfil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPerfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SRU`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SRU`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `matricula` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(60) NOT NULL,
  `genero` CHAR NULL,
  `cidadeOrigem` VARCHAR(45) NULL,
  `curso` VARCHAR(45) NULL,
  `idPerfil` INT NOT NULL,
  INDEX `fk_Usuarios_Perfil_idx` (`idPerfil` ASC) VISIBLE,
  PRIMARY KEY (`idUsuario`),
  CONSTRAINT `fk_Usuarios_Perfil`
    FOREIGN KEY (`idPerfil`)
    REFERENCES `SRU`.`Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SRU`.`Cardapio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SRU`.`Cardapio` (
  `idCardapio` INT NOT NULL,
  `data` DATE NOT NULL,
  `nomeCardapio` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCardapio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SRU`.`TipoMovimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SRU`.`TipoMovimento` (
  `idTipoMovimento` INT NOT NULL AUTO_INCREMENT,
  `movimento` VARCHAR(45) NULL,
  PRIMARY KEY (`idTipoMovimento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SRU`.`Movimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SRU`.`Movimento` (
  `idMovimento` INT NOT NULL AUTO_INCREMENT,
  `dataHora` DATETIME NOT NULL,
  `iidUsuarios` INT NOT NULL,
  `idCardapio` INT NOT NULL,
  `idTipoMovimento` INT NOT NULL,
  PRIMARY KEY (`idMovimento`),
  INDEX `fk_Movimento_Usuarios1_idx` (`iidUsuarios` ASC) VISIBLE,
  INDEX `fk_Movimento_Cardapio1_idx` (`idCardapio` ASC) VISIBLE,
  INDEX `fk_Movimento_TipoMovimento1_idx` (`idTipoMovimento` ASC) VISIBLE,
  CONSTRAINT `fk_Movimento_Usuarios1`
    FOREIGN KEY (`iidUsuarios`)
    REFERENCES `SRU`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movimento_Cardapio1`
    FOREIGN KEY (`idCardapio`)
    REFERENCES `SRU`.`Cardapio` (`idCardapio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movimento_TipoMovimento1`
    FOREIGN KEY (`idTipoMovimento`)
    REFERENCES `SRU`.`TipoMovimento` (`idTipoMovimento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SRU`.`ItensCardapio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `SRU`.`ItensCardapio` (
  `iditensCardapio` INT NOT NULL,
  `nomeItem` VARCHAR(45) NOT NULL,
  `idCardapio` INT NOT NULL,
  PRIMARY KEY (`iditensCardapio`),
  INDEX `fk_itensCardapio_Cardapio1_idx` (`idCardapio` ASC) VISIBLE,
  CONSTRAINT `fk_itensCardapio_Cardapio1`
    FOREIGN KEY (`idCardapio`)
    REFERENCES `SRU`.`Cardapio` (`idCardapio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
