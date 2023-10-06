-- Salvando no padrão PTCC 02052023 1400
#drop database PTCC; 

CREATE DATABASE PTCC;

USE PTCC;

CREATE TABLE if not exists TB_ONG (
cd_ong int NOT NULL auto_increment,
nm_ong VARCHAR(30),
nm_representante VARCHAR(80),
email VARCHAR(90),
cnpj char (14),
senha varchar(20),
CONSTRAINT PK_ONG PRIMARY KEY(cd_ong))
engine InnoDB;

create Table if not exists tb_cidade(
cd_cidade int not null auto_increment,
cd_ong int not null,
nm_cidade varchar (40),
nm_estados varchar (80),
constraint pk_cidade
	primary key (cd_cidade),
    CONSTRAINT FK_ONG_cidade FOREIGN KEY (cd_ong) REFERENCES TB_ONG (cd_ong))
	engine InnoDB;
    
CREATE TABLE if not exists TB_DOADOR (
cd_doador INT auto_increment,
cd_ong INT ,
nm_doador VARCHAR(80),
nm_user VARCHAR(80),
documento char(19),
senha varchar(60),
email VARCHAR(90),
CONSTRAINT PK_DOADOR
	PRIMARY KEY(cd_doador),
CONSTRAINT FK_ONG_doador FOREIGN KEY (cd_ong) REFERENCES TB_ONG (cd_ong)
) 
engine InnoDB;
    
		
CREATE TABLE if not exists TB_CATEGORIA(
CD_CATEGORIA INT NOT NULL,
cd_ong int not null,
crianca bool,
idosos bool,
animais bool,
saude bool,
ambiental bool,
alimentos bool,
afro bool,
comunidades bool,
CONSTRAINT PK_CATEGORIA
	PRIMARY KEY(CD_CATEGORIA),
    CONSTRAINT FK_ONG_categoria FOREIGN KEY (cd_ong) REFERENCES TB_ONG (cd_ong)
    )
engine InnoDB;

CREATE TABLE if not exists TB_POST(
cd_post int not null,
cd_ong int not null,
texto_post varchar(600),
CONSTRAINT PK_postagem
	PRIMARY KEY(cd_post),
    CONSTRAINT FK_ong FOREIGN KEY (cd_ong) REFERENCES TB_ONG (cd_ong)
)
engine InnoDB;

CREATE TABLE if not exists TB_COMENT(
cd_coment int not null,
cd_post int not null,
cd_doador int not null,
texto_coment varchar(600),
CONSTRAINT PK_coment
	PRIMARY KEY(cd_coment),
    CONSTRAINT FK_post FOREIGN KEY (cd_post) REFERENCES TB_POST (cd_post)
)
engine InnoDB;

CREATE TABLE if not exists TB_REACAO(
cd_reacao int not null,
cd_post int not null,
cd_doador int not null,
CONSTRAINT PK_reacao
	PRIMARY KEY(cd_reacao),
    CONSTRAINT FK_postagem FOREIGN KEY (cd_post) REFERENCES TB_POST (cd_post)
)
engine InnoDB;
