create database if not exists Cafeteria;

use Cafeteria;

create table if not exists produtos(
id int auto_increment primary key,
nome varchar(100),
descricao varchar(200),
preco varchar(15),
img varchar(300)
);

drop table produtos; 

select * from produtos;

insert into produtos (nome, descricao, preco, img) values ('Cappuccino','Arabe','R$ 20,00','https://cafehum.com.br/wp-content/uploads/2023/11/Capuccino.jpg');

insert into produtos (nome, descricao, preco, img) values ('Café','Preto','R$ 16,00','https://img.freepik.com/fotos-gratis/close-up-vista-de-sementes-de-cafe-marrom-com-cafe-no-escuro_179666-32787.jpg');

insert into produtos (nome, descricao, preco, img) values ('Café','Expresso','R$ 9,00','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStJZWscibogHVjl7XsMsEFsWJaLMBbU0lZHw&s');


create table if not exists user(
id int auto_increment primary key,
login varchar(100),
senha varchar(50)
);

