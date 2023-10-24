-- drop database PTCC; 

CREATE DATABASE PTCC;

USE PTCC;

create Table if not exists tb_cidade(
cd_cidade int not null auto_increment,
nm_cidade varchar (40),
nm_estados varchar (80),
constraint pk_cidade
	primary key (cd_cidade)
    )
	engine InnoDB;
    
CREATE TABLE if not exists TB_ONG (
cd_ong int NOT NULL auto_increment,
cd_cidade int not null,
nm_ong VARCHAR(30),
nm_representante VARCHAR(80),
email VARCHAR(90),
cnpj char (14),
senha varchar(20),
telefone varchar (15),
facebook varchar (70),
instagram varchar (30),
sobre varchar (500),
CONSTRAINT PK_ONG PRIMARY KEY(cd_ong))
engine InnoDB;


    
CREATE TABLE if not exists TB_DOADOR (
cd_doador INT auto_increment,
nm_doador VARCHAR(80),
nm_user VARCHAR(80),
cpf CHAR(11),
cnpj char(14),
senha varchar(60),
email VARCHAR(90),
CONSTRAINT PK_DOADOR
	PRIMARY KEY(cd_doador)) 
engine InnoDB;


CREATE TABLE if not exists TB_CATEGORIA(
CD_CATEGORIA INT NOT NULL,
nm_Descricao varchar  (30) not null,
CONSTRAINT PK_CATEGORIA
	PRIMARY KEY(CD_CATEGORIA)
    )
engine InnoDB;


CREATE TABLE if not exists TB_RESOLUCAO(
CD_RESOLUCAO INT NOT NULL,
cd_ong int not null,
cd_categoria int not null,
    
CONSTRAINT PK_RESOLUCAO
	PRIMARY KEY(CD_RESOLUCAO)    
    )
    engine InnoDB;


CREATE TABLE if not exists TB_POST(
cd_post int not null,
cd_ong int not null,
texto_post varchar(600),
CONSTRAINT PK_postagem
	PRIMARY KEY(cd_post)
)
engine InnoDB;

CREATE TABLE if not exists TB_COMENT(
cd_coment int not null,
cd_post int not null,
cd_doador int not null,
texto_coment varchar(600),
CONSTRAINT PK_coment
	PRIMARY KEY(cd_coment))
engine InnoDB;

CREATE TABLE if not exists TB_REACAO(
cd_reacao int not null,
cd_post int not null,
cd_doador int not null,
CONSTRAINT PK_reacao
	PRIMARY KEY(cd_reacao)
)
engine InnoDB;
