drop database if exists EMPRESTIMOS;
create database EMPRESTIMOS;
use EMPRESTIMOS;
create table EMPRESTIMOS.USUARIO(
	ID_USUARIO int,
    NOME_USUARIO varchar (45) not null,
    CPF_USUARIO int (11) not null,
	EMAIL_USUARIO varchar (45) not null,
    LOGIN_USUARIO varchar (45) not null,
    SENHA_USUARIO varchar (45) not null,
    primary key (ID_USUARIO)
);
create table EMPRESTIMOS.ITEM(
	ID_ITEM int not null,
    ID_DONO int not null,
    NOME_ITEM varchar (45) not null,
    DESCRICAO_ITEM varchar (45) not null,
    CATEGORIA_ITEM varchar (45) not null,
    primary key (ID_ITEM),
	foreign key (ID_DONO) references EMPRESTIMOS.USUARIO(ID_USUARIO)
);

create table EMPRESTIMOS.USU_ITEM(
	ID_ITEM int,
    ID_USUARIO int,
   
    primary key (ID_ITEM, ID_USUARIO),
    foreign key (ID_ITEM) references EMPRESTIMOS.ITEM(ID_ITEM),
	foreign key (ID_USUARIO) references EMPRESTIMOS.USUARIO(ID_USUARIO)
);


insert into EMPRESTIMOS.USUARIO values
	(1, "Joao",00000000000,"fuluno1@gmail.com", "login1",1234 ),
    (2, "pedro",00000000000,"fuluno2@gmail.com", "login2",12345 ),
    (3, "maria",00000000000,"fuluna@gmail.com", "login3",123456 );
    
insert into EMPRESTIMOS.ITEM values
	(1,1, "caneta","caneta preta", "objeto"),
    (2,2, "celular","celular motorola", "eletronicos"),
    (3,3, "camiseta","camiseta branca", "roupas");

insert into EMPRESTIMOS.USU_ITEM values
	(1,2),
    (2,3), 
    (3,1); 
