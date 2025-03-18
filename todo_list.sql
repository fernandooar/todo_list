Anotações Projeto To Do List 


Passo 1 Criando o banco de dados:

-- -----------------------------------------------------
-- Schema todo_list
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `todo_list` DEFAULT CHARACTER SET utf8 ;
USE `todo_list` ;

-- -----------------------------------------------------
-- Table `todo_list`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT COMMENT 
  `nome` VARCHAR(120) NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `data_criacao` DATETIME NOT NULL,
  `ativo` TINYINT(1) NULL DEFAULT 1,
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;

  /*A estrutura está correta e bem definida.

    O campo id_usuario será a chave primária (PRIMARY KEY) e deve ser configurado como AUTO_INCREMENT.

    O campo email deve ser único (UNIQUE) para evitar duplicidades.

    O campo senha deve armazenar a senha em formato hash (usando funções como password_hash() no PHP).

    O campo ativo é útil para controlar se o usuário está ativo (1) ou inativo (0).*/

-- -----------------------------------------------------
-- Table `todo_list`.`tarefas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `todo_list`.`tarefas` (
  `id_tarefa` INT NOT NULL,
  `titulo` VARCHAR(255) NULL,
  `descricao` LONGTEXT NOT NULL,
  `data_criacao` DATETIME NOT NULL,
  `data_conclusao` DATETIME NOT NULL,
  `ultima_edicao` DATETIME NOT NULL,
  `concluida` TINYINT(1) NULL,
  `imagem` VARCHAR(255) NULL,
  `id_usuario` INT NOT NULL,
  PRIMARY KEY (`id_tarefa`),
  UNIQUE INDEX `id_tarefa_UNIQUE` (`id_tarefa` ASC),
  INDEX `fk_tarefas_usuarios_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_tarefas_usuarios`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `todo_list`.`usuarios` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE INDEX idx_email ON usuarios(email);
CREATE INDEX idx_id_usuario ON tarefas(id_usuario);

/*
    Adicionar índices pode melhorar o desempenho das consultas.

    Sugestão de índices:

        Na tabela usuarios, adicione um índice único no campo email.

        Na tabela tarefas, adicione um índice no campo id_usuario para acelerar consultas que filtram tarefas por usuário.
*/

