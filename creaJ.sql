-- CREACION DE LA BASE DE DATOS:

create database railway;
Use railway;
-- CREACION DE TABLAS: 
-- Tabla usuario
create table usuario(
nomCliente varchar(100),
apeCliente varchar(100),
pass varchar(100),
correo varchar(20),
pasaporte varchar(15),
dui varchar(10),
idCliente int auto_increment,
foto longblob,
notificacion TINYINT(1) DEFAULT 0,
constraint primary key (idCliente)
);

-- Tabla asistente
create table asistente(
idAsistente int auto_increment,
nomAsistente varchar(100),
apeAsistente varchar(100),
numTelefono varchar(15),
servicios varchar(400),
horarioTrabajo varchar(200),
genero varchar(20),
descri varchar(600),
correoAsisten varchar(50),
passAsisten varchar(100),
dui varchar (11),
pasaporte varchar(20),
foto longblob,
primary key (idAsistente)
);

-- Tabla vuelo
create table vuelo(
	idVuelo int auto_increment,
    origen varchar(80),
	destino varchar(80),
    fechaSalida datetime,
    fechaEntrada datetime,
    precio float,
    foto longblob,
    constraint primary key (idVuelo)
);
CREATE TABLE asientos (
    idVuelo VARCHAR(500),
    destino VARCHAR(500),
    A1 VARCHAR(50), clienteA1 VARCHAR(50),
    A2 VARCHAR(50), clienteA2 VARCHAR(50),
    A3 VARCHAR(50), clienteA3 VARCHAR(50),
    A4 VARCHAR(50), clienteA4 VARCHAR(50),
    A5 VARCHAR(50), clienteA5 VARCHAR(50),
    A6 VARCHAR(50), clienteA6 VARCHAR(50),
    B1 VARCHAR(50), clienteB1 VARCHAR(50),
    B2 VARCHAR(50), clienteB2 VARCHAR(50),
    B3 VARCHAR(50), clienteB3 VARCHAR(50),
    B4 VARCHAR(50), clienteB4 VARCHAR(50),
    B5 VARCHAR(50), clienteB5 VARCHAR(50),
    B6 VARCHAR(50), clienteB6 VARCHAR(50),
    C1 VARCHAR(50), clienteC1 VARCHAR(50),
    C2 VARCHAR(50), clienteC2 VARCHAR(50),
    C3 VARCHAR(50), clienteC3 VARCHAR(50),
    C4 VARCHAR(50), clienteC4 VARCHAR(50),
    C5 VARCHAR(50), clienteC5 VARCHAR(50),
    C6 VARCHAR(50), clienteC6 VARCHAR(50),
    D1 VARCHAR(50), clienteD1 VARCHAR(50),
    D2 VARCHAR(50), clienteD2 VARCHAR(50),
    D3 VARCHAR(50), clienteD3 VARCHAR(50),
    D4 VARCHAR(50), clienteD4 VARCHAR(50),
    D5 VARCHAR(50), clienteD5 VARCHAR(50),
    D6 VARCHAR(50), clienteD6 VARCHAR(50),
    E1 VARCHAR(50), clienteE1 VARCHAR(50),
    E2 VARCHAR(50), clienteE2 VARCHAR(50),
    E3 VARCHAR(50), clienteE3 VARCHAR(50),
    E4 VARCHAR(50), clienteE4 VARCHAR(50),
    E5 VARCHAR(50), clienteE5 VARCHAR(50),
    E6 VARCHAR(50), clienteE6 VARCHAR(50),
    F1 VARCHAR(50), clienteF1 VARCHAR(50),
    F2 VARCHAR(50), clienteF2 VARCHAR(50),
    F3 VARCHAR(50), clienteF3 VARCHAR(50),
    F4 VARCHAR(50), clienteF4 VARCHAR(50),
    F5 VARCHAR(50), clienteF5 VARCHAR(50),
    F6 VARCHAR(50), clienteF6 VARCHAR(50),
    G1 VARCHAR(50), clienteG1 VARCHAR(50),
    G2 VARCHAR(50), clienteG2 VARCHAR(50),
    G3 VARCHAR(50), clienteG3 VARCHAR(50),
    G4 VARCHAR(50), clienteG4 VARCHAR(50),
    G5 VARCHAR(50), clienteG5 VARCHAR(50),
    G6 VARCHAR(50), clienteG6 VARCHAR(50),
    H1 VARCHAR(50), clienteH1 VARCHAR(50),
    H2 VARCHAR(50), clienteH2 VARCHAR(50),
    H3 VARCHAR(50), clienteH3 VARCHAR(50),
    H4 VARCHAR(50), clienteH4 VARCHAR(50),
    H5 VARCHAR(50), clienteH5 VARCHAR(50),
    H6 VARCHAR(50), clienteH6 VARCHAR(50),
    I1 VARCHAR(50), clienteI1 VARCHAR(50),
    I2 VARCHAR(50), clienteI2 VARCHAR(50),
    I3 VARCHAR(50), clienteI3 VARCHAR(50),
    I4 VARCHAR(50), clienteI4 VARCHAR(50),
    I5 VARCHAR(50), clienteI5 VARCHAR(50),
    I6 VARCHAR(50), clienteI6 VARCHAR(50),
    J1 VARCHAR(50), clienteJ1 VARCHAR(50),
    J2 VARCHAR(50), clienteJ2 VARCHAR(50),
    J3 VARCHAR(50), clienteJ3 VARCHAR(50),
    J4 VARCHAR(50), clienteJ4 VARCHAR(50),
    J5 VARCHAR(50), clienteJ5 VARCHAR(50),
    J6 VARCHAR(50), clienteJ6 VARCHAR(50),
    K1 VARCHAR(50), clienteK1 VARCHAR(50),
    K2 VARCHAR(50), clienteK2 VARCHAR(50),
    K3 VARCHAR(50), clienteK3 VARCHAR(50),
    K4 VARCHAR(50), clienteK4 VARCHAR(50),
    K5 VARCHAR(50), clienteK5 VARCHAR(50),
    K6 VARCHAR(50), clienteK6 VARCHAR(50),
    PRIMARY KEY (idVuelo)
);

-- Asientos VIP
CREATE TABLE asientosVIP (
    idVuelo VARCHAR(500),
    destino VARCHAR(500),
    A1 VARCHAR(50), clienteA1 VARCHAR(50),
    A2 VARCHAR(50), clienteA2 VARCHAR(50),
    A3 VARCHAR(50), clienteA3 VARCHAR(50),
    A4 VARCHAR(50), clienteA4 VARCHAR(50),
    A5 VARCHAR(50), clienteA5 VARCHAR(50),
    A6 VARCHAR(50), clienteA6 VARCHAR(50),
    B1 VARCHAR(50), clienteB1 VARCHAR(50),
    B2 VARCHAR(50), clienteB2 VARCHAR(50),
    B3 VARCHAR(50), clienteB3 VARCHAR(50),
    B4 VARCHAR(50), clienteB4 VARCHAR(50),
    B5 VARCHAR(50), clienteB5 VARCHAR(50),
    B6 VARCHAR(50), clienteB6 VARCHAR(50),
    C1 VARCHAR(50), clienteC1 VARCHAR(50),
    C2 VARCHAR(50), clienteC2 VARCHAR(50),
    C3 VARCHAR(50), clienteC3 VARCHAR(50),
    C4 VARCHAR(50), clienteC4 VARCHAR(50),
    C5 VARCHAR(50), clienteC5 VARCHAR(50),
    C6 VARCHAR(50), clienteC6 VARCHAR(50),
    D1 VARCHAR(50), clienteD1 VARCHAR(50),
    D2 VARCHAR(50), clienteD2 VARCHAR(50),
    D3 VARCHAR(50), clienteD3 VARCHAR(50),
    D4 VARCHAR(50), clienteD4 VARCHAR(50),
    D5 VARCHAR(50), clienteD5 VARCHAR(50),
    D6 VARCHAR(50), clienteD6 VARCHAR(50),
    E1 VARCHAR(50), clienteE1 VARCHAR(50),
    E2 VARCHAR(50), clienteE2 VARCHAR(50),
    E3 VARCHAR(50), clienteE3 VARCHAR(50),
    E4 VARCHAR(50), clienteE4 VARCHAR(50),
    E5 VARCHAR(50), clienteE5 VARCHAR(50),
    E6 VARCHAR(50), clienteE6 VARCHAR(50),
    F1 VARCHAR(50), clienteF1 VARCHAR(50),
    F2 VARCHAR(50), clienteF2 VARCHAR(50),
    F3 VARCHAR(50), clienteF3 VARCHAR(50),
    F4 VARCHAR(50), clienteF4 VARCHAR(50),
    F5 VARCHAR(50), clienteF5 VARCHAR(50),
    F6 VARCHAR(50), clienteF6 VARCHAR(50),
    G1 VARCHAR(50), clienteG1 VARCHAR(50),
    G2 VARCHAR(50), clienteG2 VARCHAR(50),
    G3 VARCHAR(50), clienteG3 VARCHAR(50),
    G4 VARCHAR(50), clienteG4 VARCHAR(50),
    G5 VARCHAR(50), clienteG5 VARCHAR(50),
    G6 VARCHAR(50), clienteG6 VARCHAR(50),
    H1 VARCHAR(50), clienteH1 VARCHAR(50),
    H2 VARCHAR(50), clienteH2 VARCHAR(50),
    H3 VARCHAR(50), clienteH3 VARCHAR(50),
    H4 VARCHAR(50), clienteH4 VARCHAR(50),
    H5 VARCHAR(50), clienteH5 VARCHAR(50),
    H6 VARCHAR(50), clienteH6 VARCHAR(50),
    I1 VARCHAR(50), clienteI1 VARCHAR(50),
    I2 VARCHAR(50), clienteI2 VARCHAR(50),
    I3 VARCHAR(50), clienteI3 VARCHAR(50),
    I4 VARCHAR(50), clienteI4 VARCHAR(50),
    I5 VARCHAR(50), clienteI5 VARCHAR(50),
    I6 VARCHAR(50), clienteI6 VARCHAR(50),
    J1 VARCHAR(50), clienteJ1 VARCHAR(50),
    J2 VARCHAR(50), clienteJ2 VARCHAR(50),
    J3 VARCHAR(50), clienteJ3 VARCHAR(50),
    J4 VARCHAR(50), clienteJ4 VARCHAR(50),
    J5 VARCHAR(50), clienteJ5 VARCHAR(50),
    J6 VARCHAR(50), clienteJ6 VARCHAR(50),
    K1 VARCHAR(50), clienteK1 VARCHAR(50),
    K2 VARCHAR(50), clienteK2 VARCHAR(50),
    K3 VARCHAR(50), clienteK3 VARCHAR(50),
    K4 VARCHAR(50), clienteK4 VARCHAR(50),
    K5 VARCHAR(50), clienteK5 VARCHAR(50),
    K6 VARCHAR(50), clienteK6 VARCHAR(50),
    PRIMARY KEY (idVuelo)
);
--

create table administradores(
	idAdmin int auto_increment, -- llave primaria
    nomAdmin varchar(100),
    apeAdmin varchar(100),
    pass varchar(100),
    email varchar(100),
    pasaporte varchar(15),
    dui varchar(15),
    cargo varchar(500),
    foto longblob,
    descri varchar(500),
    rol varchar(100),
    primary key (idAdmin)
);

-- formulario al momento de hacer un vuelo especial
create table form(
	-- informacion de el usuario
	idForm int auto_increment, -- id de el usuario
    idVuelo int,
    idUsuario int,
	nombreUsu varchar(100), -- nombre completo de el usuario 
    duiUsu varchar(15), -- dui de usuario
    pasaporteUsu varchar(12),
    -- fin info de usuario
    -- info de el usuario con discapacidad
	nombrePasajero varchar(100),
    duiPasajero varchar(12), -- este dato solo se usa si el acompañante no es menor de edad
    tipoIncapacidad varchar(100),
    -- info de segundo usuario EN CASO que haya acompañante
    segundoNombre varchar(100),
    segundoDui varchar(12),
    -- info en caso de que sea menor de edad
    pdf longblob,
    carnetMino int(9), 
    -- mascotas de el pasajero 
    -- se toma el valor de quien es
    paraQuien varchar(30),
    perro int,
    gato int,
    apoyoGato varchar(10),
    apoyoPerro varchar(10),
    -- articulos de pasajero
    artiPersona int,
    equiMano int,
    equiBodega int,
    tipoVuelo varchar(15),
    primary key (idForm)
);
-- fin formulario

CREATE TABLE mensajes (
    id INT AUTO_INCREMENT,
    mensaje TEXT,
    idUsuario INT,
    idAdmin INT,
    remitente VARCHAR(10), -- Puede ser 'cliente' o 'admin'
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	foto longblob,
    archivo longblob,
    tipo_archivo varchar(255),
    PRIMARY KEY (id)
);

create table notiAsistente(
	idNoti int auto_increment,
    idAsistente int, 
    idCliente int,
    msj varchar(5),
    primary key (idNoti),
    foreign key (idAsistente) references asistente(idAsistente),
    foreign key (idCliente) references usuario(idCliente)
);

create table vueloUsuarioAsistente(
	id int auto_increment,
    idUsuario int,
    idVuelo int,
    idAsistente int,
    estado int,
    primary key(id)
);

create table criticas(
	id int auto_increment,
    idUsuario int, 
    fecha date,
    estrella int, 
    msj varchar(500),
    likes int, 
    msjAdmin varchar(500),
    idAdmin int,
    estado int,
    primary key(id),
    foreign key (idUsuario)references usuario(idCliente)
);

create table facturaAsientos(
	id int auto_increment, -- llave primaria  
	A1 VARCHAR(50), clienteA1 VARCHAR(50),
    A2 VARCHAR(50), clienteA2 VARCHAR(50),
    A3 VARCHAR(50), clienteA3 VARCHAR(50),
    A4 VARCHAR(50), clienteA4 VARCHAR(50),
    A5 VARCHAR(50), clienteA5 VARCHAR(50),
    A6 VARCHAR(50), clienteA6 VARCHAR(50),
    B1 VARCHAR(50), clienteB1 VARCHAR(50),
    B2 VARCHAR(50), clienteB2 VARCHAR(50),
    B3 VARCHAR(50), clienteB3 VARCHAR(50),
    B4 VARCHAR(50), clienteB4 VARCHAR(50),
    B5 VARCHAR(50), clienteB5 VARCHAR(50),
    B6 VARCHAR(50), clienteB6 VARCHAR(50),
    C1 VARCHAR(50), clienteC1 VARCHAR(50),
    C2 VARCHAR(50), clienteC2 VARCHAR(50),
    C3 VARCHAR(50), clienteC3 VARCHAR(50),
    C4 VARCHAR(50), clienteC4 VARCHAR(50),
    C5 VARCHAR(50), clienteC5 VARCHAR(50),
    C6 VARCHAR(50), clienteC6 VARCHAR(50),
    D1 VARCHAR(50), clienteD1 VARCHAR(50),
    D2 VARCHAR(50), clienteD2 VARCHAR(50),
    D3 VARCHAR(50), clienteD3 VARCHAR(50),
    D4 VARCHAR(50), clienteD4 VARCHAR(50),
    D5 VARCHAR(50), clienteD5 VARCHAR(50),
    D6 VARCHAR(50), clienteD6 VARCHAR(50),
    E1 VARCHAR(50), clienteE1 VARCHAR(50),
    E2 VARCHAR(50), clienteE2 VARCHAR(50),
    E3 VARCHAR(50), clienteE3 VARCHAR(50),
    E4 VARCHAR(50), clienteE4 VARCHAR(50),
    E5 VARCHAR(50), clienteE5 VARCHAR(50),
    E6 VARCHAR(50), clienteE6 VARCHAR(50),
    F1 VARCHAR(50), clienteF1 VARCHAR(50),
    F2 VARCHAR(50), clienteF2 VARCHAR(50),
    F3 VARCHAR(50), clienteF3 VARCHAR(50),
    F4 VARCHAR(50), clienteF4 VARCHAR(50),
    F5 VARCHAR(50), clienteF5 VARCHAR(50),
    F6 VARCHAR(50), clienteF6 VARCHAR(50),
    G1 VARCHAR(50), clienteG1 VARCHAR(50),
    G2 VARCHAR(50), clienteG2 VARCHAR(50),
    G3 VARCHAR(50), clienteG3 VARCHAR(50),
    G4 VARCHAR(50), clienteG4 VARCHAR(50),
    G5 VARCHAR(50), clienteG5 VARCHAR(50),
    G6 VARCHAR(50), clienteG6 VARCHAR(50),
    H1 VARCHAR(50), clienteH1 VARCHAR(50),
    H2 VARCHAR(50), clienteH2 VARCHAR(50),
    H3 VARCHAR(50), clienteH3 VARCHAR(50),
    H4 VARCHAR(50), clienteH4 VARCHAR(50),
    H5 VARCHAR(50), clienteH5 VARCHAR(50),
    H6 VARCHAR(50), clienteH6 VARCHAR(50),
    I1 VARCHAR(50), clienteI1 VARCHAR(50),
    I2 VARCHAR(50), clienteI2 VARCHAR(50),
    I3 VARCHAR(50), clienteI3 VARCHAR(50),
    I4 VARCHAR(50), clienteI4 VARCHAR(50),
    I5 VARCHAR(50), clienteI5 VARCHAR(50),
    I6 VARCHAR(50), clienteI6 VARCHAR(50),
    J1 VARCHAR(50), clienteJ1 VARCHAR(50),
    J2 VARCHAR(50), clienteJ2 VARCHAR(50),
    J3 VARCHAR(50), clienteJ3 VARCHAR(50),
    J4 VARCHAR(50), clienteJ4 VARCHAR(50),
    J5 VARCHAR(50), clienteJ5 VARCHAR(50),
    J6 VARCHAR(50), clienteJ6 VARCHAR(50),
    K1 VARCHAR(50), clienteK1 VARCHAR(50),
    K2 VARCHAR(50), clienteK2 VARCHAR(50),
    K3 VARCHAR(50), clienteK3 VARCHAR(50),
    K4 VARCHAR(50), clienteK4 VARCHAR(50),
    K5 VARCHAR(50), clienteK5 VARCHAR(50),
    K6 VARCHAR(50), clienteK6 VARCHAR(50), 
    idVuelo int, 
    idUsuario int, 
    primary key (id)
);

create table facturaVueloEspecial(
	id int auto_increment, 
    idAsientos int auto_increment, 
    idUsuario int auto_increment, 
	nombreUsu varchar(100), 
    duiUsu varchar(15),
    pasaporteUsu varchar(12),
	nombrePasajero varchar(100),
    duiPasajero varchar(12), 
    tipoIncapacidad varchar(100),
    segundoNombre varchar(100),
    segundoDui varchar(12),
    pdf longblob,
    carnetMino int(9), 
    paraQuien varchar(30),
    perro int,
    gato int,
    apoyoGato varchar(10),
    apoyoPerro varchar(10),
    artiPersona int,
    equiMano int,
    equiBodega int,
    tipoVuelo varchar(15),
    pasoFactura int,
    primary key (id),
    foreign key (idAsientos)references facturaAsientos(id)
);
create table facturaVueloNormal(
	id int auto_increment, 
    idAsientos int ,
    idVuelo int, 
    idUsuario int, 
	artiPersona int,
    equiMano int,
    equiBodega int,
    cantidadAsientos int, 
    precio double,
    tipoVuelo int, 
    primary key (id),
    foreign key (idAsientos)references facturaAsientos(id)
    );
-- inner join entre tablas 
select * from usuario;
select * from asistente;
select * from vueloUsuarioAsistente;
select * from vuelo;
select * from asientos;
select * from asientosVIP;
select * from administradores;
select * from form;
select * from notiAsistente;
select * from mensajes;
select * from criticas;
select * from facturaVueloNormal;
select * from facturaAsientos;
use railway; 
select * from facturaVueloNormal inner join facturaAsientos on facturaVueloNormal.idAsientos = facturaAsientos.id;
-- script para truncar las tablas de información
-- truncate table vuelo; 
-- truncate table vueloUsuarioAsistente;
-- truncate table asientos;
-- truncate table usuario;
-- truncate table criticas;
-- truncate table form;
-- truncate table notiAsistente;
-- truncate table asistente;

SET FOREIGN_KEY_CHECKS = 1;
-- tener un usuario ya por defecto
insert into usuario VALUES 
("Diego Alejandro","Campos Hernández","$2y$10$C1OU5QbxIBKBJN0sRXpTNOrtIVvtnt0BkHEN.52wEKb37AmY8vnCG","diego@gmail.com","123456789","12345678-9",null,null,null);
-- tener un administrador por defecto
insert into administradores values
(null,"Edwin Gabriel","Medrano Yanes","$2y$10$VtGH0Tnc92OJ7UTI5XIvc.n0bdpGjEoYIqtWSvYArr8OdGawdrQpO","admin@gmail.com","123456789","12345678-9","Administrador de Operaciones",null,"Hola mundo","admin");
-- tener un asistente por defecto
insert into asistente values 
(null,"Jose Armando","Contreras Rosales","60120538","Completo","De lunes a viernes","Masculino","Hola mundo","armando@gmail.com","$2y$10$rT4hQ3as1Bj8an1Yi/s9H.WnnDbyU5E4QcYtxWtItZSD3C3wZb88y","12345678-9","123456789",null);