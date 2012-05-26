SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `admin_cg` ;
CREATE SCHEMA IF NOT EXISTS `admin_cg` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `admin_cg` ;

-- -----------------------------------------------------
-- Table `admin_cg`.`setting`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `admin_cg`.`setting` ;

CREATE  TABLE IF NOT EXISTS `admin_cg`.`setting` (
  `password` VARCHAR(32) NOT NULL ,
  `email_contactus` TEXT NULL ,
  `email_trading` TEXT NULL ,
  `email_joinus` TEXT NULL )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admin_cg`.`news`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `admin_cg`.`news` ;

CREATE  TABLE IF NOT EXISTS `admin_cg`.`news` (
  `newsid` INT NOT NULL AUTO_INCREMENT ,
  `title_en` VARCHAR(200) NOT NULL ,
  `title_th` VARCHAR(200) NOT NULL ,
  `title_in` VARCHAR(200) NOT NULL ,
  `content_en` TEXT NULL ,
  `content_th` TEXT NULL ,
  `content_in` TEXT NULL ,
  `cover_image` TEXT NULL ,
  `create_datetime` DATETIME NOT NULL ,
  `modified_datetime` DATETIME NULL ,
  PRIMARY KEY (`newsid`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admin_cg`.`report`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `admin_cg`.`report` ;

CREATE  TABLE IF NOT EXISTS `admin_cg`.`report` (
  `newsid` INT NOT NULL AUTO_INCREMENT ,
  `title_en` VARCHAR(200) NOT NULL ,
  `title_th` VARCHAR(200) NOT NULL ,
  `title_in` VARCHAR(200) NOT NULL ,
  `content_en` TEXT NULL ,
  `content_th` TEXT NULL ,
  `content_in` TEXT NULL ,
  `cover_image` TEXT NULL ,
  `create_datetime` DATETIME NOT NULL ,
  `modified_datetime` DATETIME NULL ,
  PRIMARY KEY (`newsid`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admin_cg`.`gold_index`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `admin_cg`.`gold_index` ;

CREATE  TABLE IF NOT EXISTS `admin_cg`.`gold_index` (
  `goldindexid` INT NOT NULL AUTO_INCREMENT ,
  `buy_price` VARCHAR(45) NOT NULL ,
  `sell_price` VARCHAR(45) NOT NULL ,
  `date` DATE NOT NULL ,
  PRIMARY KEY (`goldindexid`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admin_cg`.`currency_index`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `admin_cg`.`currency_index` ;

CREATE  TABLE IF NOT EXISTS `admin_cg`.`currency_index` (
  `currencyindexid` INT NOT NULL AUTO_INCREMENT ,
  `eur_exchange` VARCHAR(45) NOT NULL ,
  `eur_inverse` VARCHAR(45) NOT NULL ,
  `gbp_exchange` VARCHAR(45) NULL ,
  `gbp_inverse` VARCHAR(45) NULL ,
  `jyp_exchange` VARCHAR(45) NULL ,
  `jyp_inverse` VARCHAR(45) NULL ,
  `chf_exchange` VARCHAR(45) NULL ,
  `chf_inverse` VARCHAR(45) NULL ,
  `aud_exchange` VARCHAR(45) NULL ,
  `aud_inverse` VARCHAR(45) NULL ,
  `date` DATE NOT NULL ,
  PRIMARY KEY (`currencyindexid`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admin_cg`.`currency`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `admin_cg`.`currency` ;

CREATE  TABLE IF NOT EXISTS `admin_cg`.`currency` (
  `currencyid` INT NOT NULL AUTO_INCREMENT ,
  `currency` VARCHAR(45) NULL ,
  PRIMARY KEY (`currencyid`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
