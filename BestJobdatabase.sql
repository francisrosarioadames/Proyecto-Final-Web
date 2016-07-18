create database bestjob
go

use  bestjob
go

create table Administrador(
idAdministrador int not null primary key,
Username varchar(50),
Clave varchar(50)

) 
go

select * from Ofertas
go


create table Ofertas(
IdOferta int not null primary key,
Puesto varchar(100),
Descripcion varchar(200),
Nivel_Academico varchar(100),
Edad_Maxima varchar(100),
Horario datetime,
salario decimal(5,2),
Comentario varchar(200),
Fecha date,
IdAdministrador int,
constraint fk_Administrador foreign key (IdAdministrador) references Administrador(IdAdministrador)
)

go

select * from candidato
go

create table candidato(

idcandidato int not null primary key,
Email varchar (40),
Clave varchar (30),
Nombre Varchar (50),
Apellido varchar (60),
Cedula int,
Sexo Varchar (20),
Foto image,
Direccion varchar (40),
Ciudad varchar (50),
Fecha_de_nacimiento date,
Nacionalidad varchar(40),
Estado_civel varchar(40),
Nivel_academico varchar(40),
Esta_laborando varchar(40),
IdAdministrador int,
IdEmpresa int,
constraint fk_Administrador1 foreign key (IdAdministrador) references Administrador(IdAdministrador),
constraint fk_Empresa foreign key (IdEmpresa) references Empresa(IdEmpresa)
)
go


select * from Empresa
go

create table Empresa 
(

IdEmpresa int not null primary key,
Email varchar(40),
Clave varchar(30),
Nombre Varchar(50),
Rnc int,
Dedicacion varchar(40),
logo image,
Direccion varchar(40),
Pagina_web varchar(40),
Ciudad varchar(40),
Pais varchar(40),
Nombre_persona_contacto varchar(40),
Departamento_Contacto varchar(30),
Telefono_Contacto varchar(50),
Email_Contacto varchar(40),
IdAministrador int
constraint fk_Administrador2 foreign key (IdAministrador) references Administrador(IdAdministrador)
)
go
