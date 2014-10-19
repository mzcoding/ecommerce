SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ecommerce` ;

-- -----------------------------------------------------
-- Table `ecommerce`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ecommerce`.`users` (
  `idusers` INT NOT NULL AUTO_INCREMENT ,
  `login` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(65) NOT NULL ,
  `isAdmin` TINYINT(2) NOT NULL DEFAULT 0 COMMENT ' 0 - Пользователь, 1 - администратор' ,
  `isActive` TINYINT(2) NOT NULL DEFAULT 0 COMMENT '0 - Не активирован, 1 - Активирован' ,
  `hash` VARCHAR(65) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
  PRIMARY KEY (`idusers`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ecommerce`.`category`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ecommerce`.`category` (
  `idcategory` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(155) NOT NULL ,
  `alias` VARCHAR(155) NOT NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`idcategory`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ecommerce`.`articles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ecommerce`.`articles` (
  `idarticles` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(155) NOT NULL ,
  `keywords` VARCHAR(155) NULL ,
  `text` TEXT NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
  PRIMARY KEY (`idarticles`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ecommerce`.`catandarticle`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ecommerce`.`catandarticle` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `articles_idarticles` INT NOT NULL ,
  `category_idcategory` INT NOT NULL ,
  PRIMARY KEY (`id`, `articles_idarticles`, `category_idcategory`) ,
  INDEX `fk_catandarticle_articles` (`articles_idarticles` ASC) ,
  INDEX `fk_catandarticle_category1` (`category_idcategory` ASC) ,
  CONSTRAINT `fk_catandarticle_articles`
    FOREIGN KEY (`articles_idarticles` )
    REFERENCES `ecommerce`.`articles` (`idarticles` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_catandarticle_category1`
    FOREIGN KEY (`category_idcategory` )
    REFERENCES `ecommerce`.`category` (`idcategory` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ecommerce`.`payments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ecommerce`.`payments` (
  `idpayments` INT NOT NULL AUTO_INCREMENT ,
  `articles_idarticles` INT NOT NULL ,
  `price` DOUBLE NULL ,
  PRIMARY KEY (`idpayments`, `articles_idarticles`) ,
  INDEX `fk_payments_articles1` (`articles_idarticles` ASC) ,
  CONSTRAINT `fk_payments_articles1`
    FOREIGN KEY (`articles_idarticles` )
    REFERENCES `ecommerce`.`articles` (`idarticles` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ecommerce`.`clients`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ecommerce`.`clients` (
  `idclients` INT NOT NULL AUTO_INCREMENT ,
  `users_idusers` INT NOT NULL ,
  `articles_idarticles` INT NOT NULL ,
  `date_create` INT NOT NULL ,
  `pay_system` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idclients`, `users_idusers`, `articles_idarticles`) ,
  INDEX `fk_clients_users1` (`users_idusers` ASC) ,
  INDEX `fk_clients_articles1` (`articles_idarticles` ASC) ,
  CONSTRAINT `fk_clients_users1`
    FOREIGN KEY (`users_idusers` )
    REFERENCES `ecommerce`.`users` (`idusers` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clients_articles1`
    FOREIGN KEY (`articles_idarticles` )
    REFERENCES `ecommerce`.`articles` (`idarticles` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
