SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema PizzaPunt
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `PizzaPunt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `PizzaPunt` ;

-- -----------------------------------------------------
-- Table `PizzaPunt`.`Klant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`Klant` (
  `Username` VARCHAR(255) NOT NULL,
  `Naam` VARCHAR(255) NOT NULL,
  `Voornaam` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`Username`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`Category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`Category` (
  `Naam` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`Naam`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`Product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`Product` (
  `ProductID` INT NOT NULL,
  `Naam` VARCHAR(255) NOT NULL,
  `CategoryID` VARCHAR(255) NOT NULL,
  `Beschrijving` TEXT NULL,
  PRIMARY KEY (`ProductID`),
  INDEX `fk_Product_Category_idx` (`CategoryID` ASC),
  CONSTRAINT `fk_Product_Category`
    FOREIGN KEY (`CategoryID`)
    REFERENCES `PizzaPunt`.`Category` (`Naam`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`Adres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`Adres` (
  `AdresID` INT NOT NULL,
  `Straat` VARCHAR(255) NOT NULL,
  `Huisnr` VARCHAR(6) NOT NULL,
  `Gemeente` VARCHAR(255) NOT NULL,
  `Postcode` VARCHAR(4) NOT NULL,
  PRIMARY KEY (`AdresID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`Bestellingen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`Bestellingen` (
  `Username` VARCHAR(255) NOT NULL,
  `ProductID` INT NOT NULL,
  `Aantal` INT NOT NULL,
  `Tijdstip` TIMESTAMP NOT NULL,
  `Bedrag` DOUBLE NOT NULL,
  PRIMARY KEY (`Username`, `ProductID`),
  INDEX `fk_Bestellingen_Product_idx` (`ProductID` ASC),
  CONSTRAINT `fk_Bestellingen_Klant`
    FOREIGN KEY (`Username`)
    REFERENCES `PizzaPunt`.`Klant` (`Username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Bestellingen_Product`
    FOREIGN KEY (`ProductID`)
    REFERENCES `PizzaPunt`.`Product` (`ProductID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`Ingredienten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`Ingredienten` (
  `IngredientenID` VARCHAR(255) NOT NULL,
  `Vegetarisch` TINYINT(1) NOT NULL,
  PRIMARY KEY (`IngredientenID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`Beschikbaarheid`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`Beschikbaarheid` (
  `BeschikbaarheidID` INT NOT NULL,
  `BeginDatum` DATE NOT NULL,
  `EindDatum` DATE NOT NULL,
  PRIMARY KEY (`BeschikbaarheidID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`ProductBeschikbaarheid`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`ProductBeschikbaarheid` (
  `BeschikbaarheidID` INT NOT NULL,
  `ProductID` INT NOT NULL,
  PRIMARY KEY (`BeschikbaarheidID`, `ProductID`),
  INDEX `fk_ProductBeschikbaarheid_Product_idx` (`ProductID` ASC),
  CONSTRAINT `fk_ProductBeschikbaarheid_Beschikbaarheid`
    FOREIGN KEY (`BeschikbaarheidID`)
    REFERENCES `PizzaPunt`.`Beschikbaarheid` (`BeschikbaarheidID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ProductBeschikbaarheid_Product`
    FOREIGN KEY (`ProductID`)
    REFERENCES `PizzaPunt`.`Product` (`ProductID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`ProductIngredienten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`ProductIngredienten` (
  `IngredientenID` VARCHAR(255) NOT NULL,
  `ProductID` INT NOT NULL,
  PRIMARY KEY (`IngredientenID`, `ProductID`),
  INDEX `fk_ProductBeschikbaarheid_Product_idx` (`ProductID` ASC),
  CONSTRAINT `fk_ProductIngredienten_Ingredienten`
    FOREIGN KEY (`IngredientenID`)
    REFERENCES `PizzaPunt`.`Ingredienten` (`IngredientenID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ProductIngredienten_Product0`
    FOREIGN KEY (`ProductID`)
    REFERENCES `PizzaPunt`.`Product` (`ProductID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PizzaPunt`.`KlantAdres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PizzaPunt`.`KlantAdres` (
  `Username` VARCHAR(255) NOT NULL,
  `AdresID` INT NOT NULL,
  PRIMARY KEY (`Username`, `AdresID`),
  CONSTRAINT `fk_KlantAdres_Adres`
    FOREIGN KEY (`AdresID`)
    REFERENCES `PizzaPunt`.`Adres` (`AdresID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_KlantAdres_Klant`
    FOREIGN KEY (`Username`)
    REFERENCES `PizzaPunt`.`Klant` (`Username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE USER 'cursist' IDENTIFIED BY 'cursist';

GRANT ALL ON `PizzaPunt`.* TO 'cursist';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
