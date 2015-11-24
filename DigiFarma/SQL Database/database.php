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

    ALTER TABLE `digifarma`.`pessoas` 
RENAME TO  `digifarma`.`clientes` ;


CREATE TABLE `digifarma`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` DOUBLE NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `imagem` BLOB NOT NULL,
  PRIMARY KEY (`idprodutos`));