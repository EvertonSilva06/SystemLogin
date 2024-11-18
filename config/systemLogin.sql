create database SystemLogin;

use SystemLogin;

create table usuario(
	id int primary key auto_increment,
    nome varchar(80) not null,
    dataNasc date,
    email varchar(80) not null unique,
    senha varchar(70) not null,
    endereco varchar (70) not null
);

select * from usuario;	    