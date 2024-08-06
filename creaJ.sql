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
constraint primary key (idCliente)
);
/*
-- Tabla aerolinea
create table aerolinea(
idAero int auto_increment,
nombreAereo varchar(100),
telefonoAero varchar(20),
correoAereo varchar(45),
baseAereo varchar(100),
codigoIATA varchar(9),
CEO varchar(25),
constraint primary key (idAero)
);
*/
/*
create table servicios(
	idServicio int auto_increment,
    nomServcio varchar(100),
    descripcion varchar(500),
    precio float,
   constraint primary key (idServicio)
);
*/
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
-- Tabla empleado
/*
create table empleado(
	idEmpleado int auto_increment,
    idAero int,
    expeLaboral varchar(100),
    nomEmpleado varchar(100),
    apeEmpleado varchar(100),
    correoEmple varchar(100),
    telefonoEmpleado varchar(20),
    genero varchar(30),
    departamento varchar(500),
    dui varchar(15),
    descri varchar(600),
    constraint primary key (idEmpleado)
);
*/
/*
-- Tabla alianza
 create table alianza(
	idAli int auto_increment,
    idAero int,
    miembros varchar(500),
    coberturaGeo varchar(300),
    nombreAli varchar(200),
    constraint primary key (idAli)
 );
 
-- Tabla aeropuerto
 create table aeropuerto(
	idAeropuerto int auto_increment,
    pistas varchar(500),
    capacidad varchar(100),
    coordenadasGeo varchar(100),
    tipo varchar(100),
    ciudad varchar(100),
    pais varchar(100),
    codigoIATA varchar(9),
    constraint primary key (idAeropuerto)
 );
 
-- Tabla avion
create table avion(
	idAvion int auto_increment,
    pesoMax varchar(30),
    equipamento varchar(200),
    fabricante varchar(100),
    capacidad varchar(100),
    modeloAvion varchar(100),
    numSerie varchar(100),
    constraint primary key (idAvion)
);

*/
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
/*
-- TABLAS INTERMEDIAS:
-- Tabla aerolineaAsistente
create table aerolineaAsistente(
	idAero int, 
    idAsistente int, 
    constraint foreign key (idAero) references aerolinea(idAero),
    constraint foreign key (idAsistente)references asistente(idAsistente)
);


-- Tabla empleadoAerolinea
create table empleadoAerolinea(
	idAero int,
    idEmpleado int, 
    constraint foreign key (idAero)references aerolinea(idAero),
    constraint foreign key (idEmpleado)references empleado(idEmpleado)
);


-- Tabla usuarioAerolinea
create table usuarioAerolinea(
	idAero int,
    idCliente int, 
    tipoServicio varchar(100),
    tipoPago varchar(100),
    constraint foreign key (idAero) references aerolinea(idAero),
    constraint foreign key (idCliente) references usuario(idCliente)
);


-- Tabla aeropuertoAlianza
create table aeropuertoAlianza(
	idAli int,
    idAeropuerto int,
    constraint foreign key (idAli) references alianza(idAli),
    constraint foreign key (idAeropuerto) references aeropuerto(idAeropuerto)
);


-- Tabla aeropuertoAvion
create table aeropuertoAvion(
	idAvion int, 
    idAeropuerto int,
    constraint foreign key (idAvion) references avion(idAvion),
    constraint foreign key (idAeropuerto)references aeropuerto(idAeropuerto)
);


-- Tabla aerolineaVuelo
create table aerolineaVuelo(
	idVuelo int, 
    idAero int, 
    constraint foreign key (idVuelo)references vuelo(idVuelo),
    constraint foreign key (idAero)references aerolinea(idAero)
);

-- Tabla vueloAvion
  create table vueloAvion(
	idAvion int, 
    idVuelo int, 
    constraint foreign key (idAvion) references avion(idAvion),
    constraint foreign key (idVuelo) references vuelo(idVuelo)
  );    
  
  
-- Tabla aerolineaAlianza
  create table aerolineaAlianza(
	idAero int,
    idAli int,
    constraint foreign key (idAero)references aerolinea(idAero),
    constraint foreign key (idAli) references alianza(idAli)
  );
  
   create table servicioAerolinea (
	idServicio int,
    idAero int,
    foreign key (idServicio) references servicios(idServicio),
    foreign key (idAero) references aerolinea(idAero)
  );
  -- INSERTANDO DATOS: 

-- Ingreso de datos de usuario
Insert into usuario values 
("Miguel", "López", "Masculino","11110", "miguel.lopez@gmail.com", "Casa #10, Colonia San Benito, San Salvador, El Salvador","2222-1234", "SV1234567", "00123456-8", null),
("Laura", "Chinchilla", "Femenino","22220", "laura.chinchilla@gmail.com", "Apartamento #3B, Condominio Las Palmas, Boulevard de los Héroes, San Salvador, El Salvador","7777-5678", "ESA876543", "09876543-1", null),
("Keila", "Castillo", "Femenino","33330", "keila.castillo@gmail.com", "Lote #15, Residencial Los Almendros, Santa Tecla, La Libertad, El Salvador","2345-6789", "P12345678", "11223344-5", null),
("Nicole", "Campos", "Femenino","44440", "nicole.campos@gmail.com", "Calle Principal, Barrio El Centro, Suchitoto, Cuscatlán, El Salvador", " 7654-3210", "SVS456789", "55443322-9", null),
("Josué", "de Paz", "Masculino","55550", "josue.depaz@gmail.com", "Casa #25, Urbanización Las Mercedes, Ciudad Arce, La Libertad, El Salvador","8888-9999", "PAS456789", "98765432-0", null);


-- Ingreso de datos de aerolinea
Insert into aerolinea values
(null,"Esfly", "2109-8765", "esfly@gmail.com","Aeropuerto de El Salvador ", "(ESF)-SAL","CEO"),
(null,"Avianca", " 7878-4321", "avianca@gmail.com","Aeropuerto de El Salvador ", "(AVI)-SAL","CEO"),
(null,"Volaris ", "2200-3456", "volaris@gmail.com","Aeropuerto de El Salvador ", "(VOL)-SAL","CEO"),
(null,"American Airlines", "7171-9876", "americanairlines@gmail.com","Aeropuerto de El Salvador ", "(AAL)-SAL","CEO"),
(null,"Copa Airlines", "2332-6789", "copaairlines@gmail.com","Aeropuerto de El Salvador ", "(CAL)-SAL","CEO");


-- Ingreso de datos de asistente
insert into asistente values
(null, 1, "Jorge","Martínez","7000-1234","Especiales","Matutino","Mascculino"),
(null, 2, "Diego","Hernandéz","7777-8888","Especiales","Vespertino","Mascculino"),
(null, 3, "María","Rivas","2345-6789","Especiales","Nocturno","Femenino"),
(null, 4, "Blanca","Quintanilla","6000-1111","Especiales","Matutino","Femenino"),
(null, 5, "Olivia","Escalante","8000-9999","Especiales","Nocturno","Femenino");


-- Ingreso de datos de empleado
insert into empleado values
(null,5, "Piloto de Aviación Comercial","Manuel","González","manuel.gonzalez@gmail.com","6000-1234","Masculino","San Salvador","00123457-8"),
(null,4,"Auxiliar de Vuelo","Margarita","Ramos","margarita.ramos@gmail.com","7000-5678","Femenino","La Libertad","98765421-0"),
(null,3,"Ingeniero de Mantenimiento de Aeronaves","Giovanni","Hernandéz","giovanni.hernandez@gmail.com","8000-9012","Masculino","Santa Ana","11223345-5"),
(null,2,"Controlador de Tráfico Aéreo","Ana","Martínez"," ana.martinez@gmail.com","9000-3456","Femenino","San Miguel","55443221-9"),
(null,1,"Técnico en Aviónica","Luis","Ramírez","luis.ramirez@gmail.com","6100-7890","Masculino","Sonsonate","76543219-8");


-- Ingreso de datos de Alianza
Insert into alianza values
(null,1,"SkyWings, AeroUnión, AirConnect","Centro América","Estrella del Cielo"),
(null,2," BlueSky, GlobalAir, FlyLink","América del Norte","Vuelo Continental"),
(null,3,"AeroCaribe, LatinoJet, AirPanam","América del Sur","AireLatino"),
(null,4,"SkyPacific, OceanAir, IslandHopper","América del Norte","PacificWings"),
(null,5,"AirLink, FlyTogether, SkyAlliance","América del Sur","SkyUnity");


-- Ingreso de datos de aeropuerto
Insert into aeropuerto values
(null,"2F","50,000 personas","13.8167° N, 89.6333° O","Nacional","San Salvador","El Salvador","(AIS)-SSV"),
(null,"4R","80,000 personas","13.8775° N, 89.5464° O","Internacional","Santa Ana","El Salvador","(ARA)-SNA"),
(null,"6Q","60,000 personas","13.4822° N, 89.3717° O","Internacional","La Unión","El Salvador","(AIU)-LIU"),
(null,"9U","30,000 personas","13.6736° N, 89.2906° O","Nacional","San Vicente","El Salvador","(ASV)-SVC"),
(null,"2A","25,000 personas","13.8559° N, 89.0305° O","Internacional","La Libertad","El Salvador","(ALL)-LLD");


-- Ingreso de datos de aerolineaasistenteavion
Insert into avion values
(null,"79,000 kg","Sistema de entretenimiento a bordo","Boeing","6,000 personas","Boeing 737","SN 34567"),
(null,"78,000 kg","Sistema de navegación","Boeing","8,000 personas","Airbus A320neo","SN 78901"),
(null,"50,300 kg","Sistema de comunicaciones","Boeing","10,000 personas","Embraer E190","SN 12345"),
(null,"351,500 kg","Sistema de propulsión","Boeing","9,000 personas","Lockheed C-130 Hercules","SN 67890"),
(null,"1,275,000 kg","Sistema de control de vuelo","Boeing","12,000 personas","Bombardier CRJ900","SN 23456");

-- Ingreso de datos de vuelo
Insert into vuelo values
(null,1,"América del Norte","Especial","3,000 kilómetros","2024-05-01 00:00:00","2024-05-02 08:00:00","El Salvador","8 horas","Carlos Guerra",6000,70.75),
(null,2,"América del Sur","VIP","2,200 kilómetros ","2024-06-01 00:00:00","2024-06-02 09:00:00","El Salvador","9 horas","Sofía Flores",8000,80.00),
(null,3,"América del Sur","VIP","2,200 kilómetros ","2024-09-01 00:00:00","2024-09-02 10:00:00","El Salvador","10 horas","Melanie Hernandéz",7000,80.00),
(null,4,"América del Norte","Normal","3,000 kilómetros","2024-07-01 00:00:00","2024-07-02 07:00:00","El Salvador","7 horas","Carmen Guevara",5000,60.75),
(null,5,"América del Norte","VIP","3,000 kilómetros","2024-09-01 00:00:00","2024-09-02 06:00:00","El Salvador","6 horas","Mauricio Peréz",13000,80.50);



-- INSERTANDO DATOS DE LAS TABLAS INTERMEDIAS:

-- Ingreso de datos de aerolineaAsistente
insert into aerolineaAsistente values
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);


-- Ingreso de datos de empleadoAerolinea
insert into empleadoAerolinea values
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);


-- Ingreso de datos de usuarioAerolinea
insert into usuarioAerolinea values
(1,5,"Especial","Crédito"),
(2,4,"VIP","Débito"),
(3,3,"normal","Crédito"),
(4,2,"VIP","Débito"),
(5,1,"normal","Crédito");


-- Ingreso de datos de aeropuertoAlianza
insert into aeropuertoAlianza values
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);


-- Ingreso de datos de aeropuertoAvion
insert into aeropuertoAvion values
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);


-- Ingreso de datos de aerolineaVuelo
insert into aerolineaVuelo values
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);


-- Ingreso de datos de vueloAvion
insert into vueloAvion values
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);


-- Ingreso de datos de aerolineaAlianza
insert into aerolineaAlianza values
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);*/
-- select 
--  select * from empleado;
--  select * from aerolinea;
-- select * from aeropuerto;
--  select * from alianza;
--  select * from avion;
select * from usuario;
select * from asistente;
select * from vuelo;
select * from asientos;
select * from administradores;
select * from form;
select * from notiAsistente;
truncate table form;
select * from mensajes;
use railway; 
-- tener un usuario ya por defecto
insert into usuario VALUES 
("Edwin Gabriel","Medrano Yanes","$2y$10$C1OU5QbxIBKBJN0sRXpTNOrtIVvtnt0BkHEN.52wEKb37AmY8vnCG","edwin@gmail.com","123456789","12345678-9",null,null);
-- tener un administrador por defecto
insert into administradores values
(null,"Edwin Gabriel","Medrano Yanes","$2y$10$VtGH0Tnc92OJ7UTI5XIvc.n0bdpGjEoYIqtWSvYArr8OdGawdrQpO","admin@gmail.com","123456789","12345678-9","Administrador de Operaciones",null,"Hola mundo","admin");
-- tener un asistente por defecto
insert into asistente values 
(null,"Edwin Gabriel","Medrano Yanes","60120538","Completo","De lunes a viernes","Masculino","Hola mundo","armando@gmail.com","$2y$10$rT4hQ3as1Bj8an1Yi/s9H.WnnDbyU5E4QcYtxWtItZSD3C3wZb88y","12345678-9","123456789",null);