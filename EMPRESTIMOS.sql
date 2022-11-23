DROP DATABASE IF EXISTS emprestimos;
CREATE DATABASE emprestimos;
USE emprestimos;

CREATE TABLE emprestimos.usuario(
	id_usuario int NOT NULL,
    nome_usuario varchar (45) NOT NULL,
    cpf_usuario int (11) NOT NULL,
	email_usuario varchar (45) NOT NULL,
    login_usuario varchar (45) NOT NULL,
    senha_usuario varchar (45) NOT NULL,
    PRIMARY KEY (id_usuario)
);

CREATE TABLE emprestimos.item(
	id_item int NOT NULL,
    id_dono int NOT NULL,
    nome_item varchar (45) NOT NULL,
    descricao_item varchar (45) NOT NULL,
    categoria_item varchar (45) NOT NULL,
    PRIMARY KEY (id_item),
	FOREIGN KEY (id_dono) REFERENCES emprestimos.usuario(id_usuario)
);

CREATE TABLE emprestimos.usu_item(
	id_item int NOT NULL,
    id_usuario int NOT NULL,
    datadev datetime NOT NULL,
    PRIMARY KEY (id_item, id_usuario),
    FOREIGN KEY (id_item) REFERENCES emprestimos.item(id_item),
	FOREIGN KEY (id_usuario) REFERENCES emprestimos.usuario(id_usuario)
);


INSERT INTO emprestimos.usuario VALUES
	(1, "Joao",34600000143,"fuluno1@gmail.com", "login1",1234 ),
    (2, "Pedro",12000007680,"fuluno2@gmail.com", "login2",12345 ),
    (3, "Maria",28800000766,"fuluna@hotmail.com", "login3",123456 );
    
INSERT INTO emprestimos.item VALUES
	(1,1, "caneta","caneta preta", "objetos"),
    (2,2, "celular","celular motorola", "eletronicos"),
    (3,3, "camiseta","camiseta branca", "roupas");

INSERT INTO emprestimos.usu_item VALUES
	(1,2, "24/12/2022"),
    (2,3, "30/12/2022"), 
    (3,1, "08/01/2023"); 