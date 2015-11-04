CREATE SCHEMA `digifarma` ;

CREATE TABLE `digifarma`.`pessoas` (
  `idPessoas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,  
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `confirmasenha` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `admin` CHAR(1) NOT NULL,
  PRIMARY KEY (`idPessoas`));
