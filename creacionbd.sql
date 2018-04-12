create user examen2 with encrypted password 'contrasenia';
create database segundoexamenbd owner examen2;
create user segundoexamen_usuario with encrypted password 'contrasenia';
create table usuarios(id_usuario serial primary key,
nombre varchar(15) not null,
apaterno varchar(15) not null,
amaterno varchar(15) not null,
usuario varchar(15) not null,
contrasenia varchar(15) not null);
alter sequence usuarios_id_usuario_seq owner to examen2;
create table libros(id_libro serial primary key,
titulo varchar(25) not null,
id_autor varchar(15) not null,
año_publicacion integer not null);
create table autores(id_autor serial primary key,
nombre varchar(15) not null,
apaterno varchar(15) not null,
amaterno varchar(15) not null,
nacionalidad varchar(15) not null);
grant insert, select, update on autores to segundoexamen_usuario;
grant insert, select, update on libros to segundoexamen_usuario;
grant insert, select, update on usuarios to segundoexamen_usuario;
