DROP DATABASE IF EXISTS emprestimos;
CREATE DATABASE emprestimos;
USE emprestimos;

CREATE TABLE emprestimos.usuario(
	id_usuario int NOT NULL AUTO_INCREMENT,
    nome_usuario varchar (45) NOT NULL,
    cpf_usuario bigint (11) NOT NULL,
	email_usuario varchar (45) NOT NULL,
    login_usuario varchar (45) NOT NULL,
    senha_usuario varchar (45) NOT NULL,
    PRIMARY KEY (id_usuario)
);

CREATE TABLE emprestimos.item(
	id_item int NOT NULL AUTO_INCREMENT,
    id_dono int NOT NULL,
    nome_item varchar (45) NOT NULL,
    descricao_item varchar (45) NOT NULL,
    categoria_item varchar (45) NOT NULL,
    ultima_devolucao_item datetime,
    PRIMARY KEY (id_item),
	FOREIGN KEY (id_dono) REFERENCES emprestimos.usuario(id_usuario)
);

CREATE TABLE emprestimos.usu_item(
	id_item int NOT NULL,
    id_usuario int NOT NULL,
    datadev date NOT NULL,
    nome_item varchar (45),
    PRIMARY KEY (id_item, id_usuario),
    FOREIGN KEY (id_item) REFERENCES emprestimos.item(id_item),
	FOREIGN KEY (id_usuario) REFERENCES emprestimos.usuario(id_usuario)
   
);

