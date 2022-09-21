create database biblioteca;

use biblioteca;

create table usuario (
id smallint primary key auto_increment,
email varchar(50) not null,
nome varchar(50) not null,
senha varchar(30) not null
);

create table administrador (
id smallint primary key auto_increment,
email varchar(50) not null,
nome varchar(50) not null,
senha varchar(30) not null
);

insert into administrador (email, nome, senha) values ("admin@admin.com","admin", "Admin123");
insert into usuario (email, nome, senha) values ("teste@teste.com","Teste", "teste");

DELETE FROM usuario
 WHERE email = 'Matheus Borges'; 

create table livro(
id smallint primary key auto_increment,
titulo varchar(50) not null,
genero varchar(50) not null,
autor varchar(50) not null,
observacao varchar(50)
);

create table emprestimo(
id smallint primary key auto_increment,
titulo varchar(50) not null,
entrega date not null
);

insert into livro (titulo, genero, autor, observacao, imagem) values ("Livro Teste", "Terror", "Teste", "Nada", "teste.png");

select * from livro;

delete from usuario where id = 5;

drop table livro