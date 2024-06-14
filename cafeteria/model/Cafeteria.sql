create database if not exists Cafeteria;

use Cafeteria;

create table if not exists produtos(
id int auto_increment primary key,
nome varchar(100),
descricao varchar(200),
preco varchar(15),
img varchar(300)
);

drop table complementos;

select * from produtos;

select * from usuario;

insert into produtos (nome, descricao, preco, img) values ('Cappuccino','Arabe','R$ 20,00','https://cafehum.com.br/wp-content/uploads/2023/11/Capuccino.jpg');

insert into produtos (nome, descricao, preco, img) values ('Café','Preto','R$ 16,00','https://img.freepik.com/fotos-gratis/close-up-vista-de-sementes-de-cafe-marrom-com-cafe-no-escuro_179666-32787.jpg');

insert into produtos (nome, descricao, preco, img) values ('Café','Expresso','R$ 9,00','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStJZWscibogHVjl7XsMsEFsWJaLMBbU0lZHw&s');

create table if not exists usuario(
id int auto_increment primary key,
email varchar(100),
senha varchar(50)
);

insert into usuario (email, senha) values ('teste@gmauil.com', '123456789');

create table if not exists complementos(
id int auto_increment primary key,
nome varchar(100),
tipo varchar(100),
preco varchar(50),
img varchar(200)
);

insert into complementos (nome, tipo, preco, img) values ('Batata', 'Frita', 'R$ 15,00', 'https://gastronomiacarioca.zonasul.com.br/wp-content/uploads/2023/05/batata_frita_destaque_ilustrativo_zona_sul.jpg');