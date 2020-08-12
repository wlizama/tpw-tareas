-- show databases;

create database bdFarmacia;

create table tbMedicina(
    codigo int AUTO_INCREMENT PRIMARY KEY,
    descripcion varchar(20),
    anho_caducidad int
);
