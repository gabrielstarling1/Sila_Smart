create database pit;
use pit;

create table usuario(
codigo_usuario int unsigned auto_increment not null primary key,
primeiro_nome varchar(80) not null,
ultimo_nome varchar(80) not null,
email varchar(80) not null,
cpf char(14) not null,
senha varchar(20) not null,
tipo_usuario bool not null
)engine=innodb;

create table silo(
codigo_silo int unsigned auto_increment not null primary key,
nome varchar(80) not null,
capacidade float unsigned not null,
endereco varchar(80) not null,
fk_codigo_usuario int unsigned not null,
foreign key (fk_codigo_usuario) references usuario(codigo_usuario)
)engine=innodb;

insert into usuario
values(null,'Carlos','braga','carlos@gmail.com','123.212.234-09','parederoxa123',true);

insert into silo 
values (null,'Silo dos Andrades',987.50,1);

select * from usuario 
inner join silo on (usuario.codigo_usuario = silo.fk_codigo_usuario);

select * from usuario

