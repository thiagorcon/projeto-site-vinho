create database projetoSiteVinho;

use projetoSiteVinho;

create table cliente(
    idusuario int primary key auto_increment,
    nome varchar(30),
    LOGIN VARCHAR(20) UNIQUE,
    email varchar(30) UNIQUE,
    senha VARCHAR(32),
    perfil enum('adm','cliente')
);

INSERT INTO cliente values(null,'Thiago','admin','email',md5('123'),'adm');

SELECT* from cliente;

*****************

create table artigo(
    idartigo int primary key auto_increment,
    titulo varchar(50),
    autor varchar(40), 
    artigo text,
    foto varchar(30) not null
    );

DELETE FROM artigo WHERE idartigo = ....

**********************

 create table produto(
    idvenda int primary key auto_increment,
    Produto varchar(50),
    Quantidade int    
    );


 select * from produto;


