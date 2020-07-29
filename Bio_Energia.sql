create database bd_BioEnergia
use bd_BioEnergia
go

create table tbl_sucursal
(
id_sucursal int Identity(1,1),
vchDireccion varchar(100) NOT NULL,
vchCorreo varchar(100)NOT NULL,
intTelefono bigint NOT NULL,
CONSTRAINT PK_tbl_sucursal PRIMARY KEY(id_sucursal),
check(intTelefono LIKE'[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
)
GO

create table tbl_usuario
(
id_usuario int Identity(1,1),
vchUser varchar(100) NOT NULL,
vchPass binary(100)NOT NULL,
vchNewPass binary(100)NULL,
intEstado bigint  NULL,
vchRoll varchar(100) NULL,
vchCode varchar(100) NULL,
dtDate smalldatetime default getdate(),
id_perso int NULL,
CONSTRAINT PK_tbl_usuario PRIMARY KEY(id_usuario),
CONSTRAINT FK_tbl_p FOREIGN KEY (id_perso) REFERENCES tbl_persona(id_persona),
)
GO


go



create table tbl_persona
(
id_persona int Identity(1,1),
vchNombreCompleto varchar(200) NOT NULL,
vchClave_electoral varchar(18) NOT NULL unique,
vchCorreo varchar(100)NULL,
intTelefono bigint NULL,
vchRfc varchar(50) null unique,
id_sucursal1 int not null,
CONSTRAINT PK_tbl_persona PRIMARY KEY(id_persona),
CONSTRAINT FK_tbl_sucursal1 FOREIGN KEY (id_sucursal1) REFERENCES tbl_sucursal(id_sucursal),
check(intTelefono LIKE'[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
)
go



create table tbl_area
(
id_area int Identity(1,1),
vchNombre varchar(100)NOT NULL unique,
CONSTRAINT PK_tbl_area PRIMARY KEY(id_area)
)
GO
create table tbl_departamento
(
id_departamento int Identity(1,1),
vchNombre varchar(100)NOT NULL unique,
id_area int NULL,
CONSTRAINT PK_tbl_depa PRIMARY KEY(id_departamento),
CONSTRAINT FK_tbl_area FOREIGN KEY (id_area) REFERENCES tbl_area(id_area),

)
GO

create table tbl_empleado
(
id_empleado int Identity(1,1),
dtFecha_ingreso smalldatetime default getdate(),
id_departamento int not null,
id_persona int not null,
CONSTRAINT PK_tbl_empleado PRIMARY KEY(id_empleado),
CONSTRAINT FK_tbl_perspona FOREIGN KEY (id_persona) REFERENCES tbl_persona(id_persona),
CONSTRAINT FK_tbl_departamento FOREIGN KEY (id_departamento) REFERENCES tbl_departamento(id_departamento),
)
go 

create table tbl_cliente
(
id_cliente int identity(1,1),
id_persona int not null,
tipo_consumidor varchar(50)
check(tipo_consumidor IN('Privado','Instituciòn/Empresa','Domestico')),
constraint PK_tbl_cliente primary key(id_cliente),
CONSTRAINT PK_tbl_persona1 FOREIGN KEY (id_persona) REFERENCES tbl_persona(id_persona)
)
go


create table tbl_zona_mun
(
id_zona int identity(1,1),
vchMunicipio varchar(100) not null unique,
constraint PK_tbl_zona primary key(id_zona)
)
go

create table tbl_camion_rec
(
id_camion int identity(1,1),
vchMarca varchar(20)not null,
vchModelo varchar(20) not null,
chofer int not null,
id_zona int not null,
constraint PK_tbl_camion primary key(id_camion),
constraint FK_tbl_chofer foreign key(chofer) references tbl_empleado(id_empleado),
constraint FK_tbl_zona foreign key(id_zona) references tbl_zona_mun(id_zona)
)
go

create table tbl_forma_pago
(
id_forma_pago int identity(1,1),
vchNombreFP varchar(50) unique,
constraint PK_tbl_forma_pago primary key(id_forma_pago)
check(id_forma_pago<=3)
)

go



create table tbl_almacen
( 
id_almacen int identity(1,1),
dtFecha smalldatetime default getdate(),
fltCantidad_Kilo float not null,
id_camion int not null,
constraint PK_tbl_almacen primary key(id_almacen),
constraint FK_tbl_camion foreign key(id_camion) references tbl_camion_rec(id_camion)
)
 go

 create table tbl_produccion
( 
id_produccion int identity(1,1),
dtFecha smalldatetime default getdate(),
fltCant_prod_kWh float not null,
id_almacen int not null,
constraint PK_tbl_prod primary key(id_produccion),
constraint FK_tbl_almacen1 foreign key(id_almacen) references tbl_almacen(id_almacen)
)
 go



create table tbl_suministro
( 
id_suministro int identity(1,1),
fltTotal_kWh float not null,
fltPrecio_Mxn float not null,
intIva int not null,
constraint PK_tbl_suministro primary key(id_suministro),
check(fltTotal_kWh>100),
check(intIva<50)
)
 go


create table tbl_venta
(
id_venta int identity(1,1),
dtFecha smalldatetime default getdate(),
fltCant_kWh float ,
fltSubtotal float,
fltDescuento float,
id_suministro int not null,
id_cliente_ int not null ,
id_empleado_ int ,
id_forma_pago int,
constraint PK_tbl_venta primary key(id_venta),
constraint FK_tbl_suministtro foreign key(id_suministro) references tbl_suministro(id_suministro),
constraint FK_tbl_clien foreign key(id_cliente_) references tbl_cliente(id_cliente),
constraint FK_tbl_emplead foreign key(id_empleado_) references tbl_empleado(id_empleado),
constraint FK_tbl_forma_pago foreign key(id_forma_pago) references tbl_forma_pago(id_forma_pago),
)
go


create table tbl_factura
(
id_factura int identity(1,1),
dtFecha_Factura smalldatetime default getdate(),
vchCodigo_factura varchar(20) unique,
id_venta int not null,
constraint PK_tbl_factura primary key(id_factura),
constraint FK_tbl_v foreign key(id_venta) references tbl_venta(id_venta)
)


go


insert into dbo.tbl_sucursal values ('Huejutla de Reyes','BioEnergia_huejutla@gmail.com',7711881281)
insert into dbo.tbl_sucursal values ('Atlapexco','BioEnergia_Atlapexco@gmail.com',7711881283)
insert into dbo.tbl_sucursal values ('Huazalingo','BioEnergia_huazalingo@gmail.com',7711881284)
insert into dbo.tbl_sucursal values ('San Felipe','BioEnergia_sanfelipe@gmail.com',7711881285)

insert into dbo.tbl_persona values ('Karlin Cruz Ambrosio','CUAK971201HHGMRM04','karlinkd010@gmail.com',7711881285,'HHQHGQ121',1)
insert into dbo.tbl_persona values ('Jose Adair Cruz Reyes','JACR971201HHGMRM01','jose@gmail.com',7711881286,'HHQHGQ122',1)
insert into dbo.tbl_persona values ('Mario Martinez Olivarez','MAMO971201HHGMRM04','Mario@gmail.com',7711881287,'HHQHGQ123',1)
insert into dbo.tbl_persona values ('Sacarias Lucas Bartolome','SLUB971201HHGMRM04','Sacarias@gmail.com',7711881288,'HHQHGQ124',1)
insert into dbo.tbl_persona values ('Ana Brenda Morales Martinez','ABMM971201HHGMRM04','aan@gmail.com',7711881289,'HHQHGQ125',1)
insert into dbo.tbl_persona values ('Fausto Roberto Bautisa','FROB971201HHGMRM04','Fausto1@gmail.com',7711881290,'HHQHGQ126',1)
insert into dbo.tbl_persona values ('Alicia Martinez De la Cruz','AMDC971201HHGMRM04','Alicias12@gmail.com',7711881291,'HHQHGQ127',1)
insert into dbo.tbl_persona values ('Micaela Hernandez','MIHE971201HHGMRM04','mica@gmail.com',7712881285,'1HHQHGQ121',1)
insert into dbo.tbl_persona values ('Rogelio Bautista','ROCR971201HHGMRM01','ro@gmail.com',7713881286,'2HHQHGQ122',1)
insert into dbo.tbl_persona values ('Mario Bautista','MABA971201HHGMRM04','mario0123@gmail.com',7714881287,'3HHQHGQ123',2)
insert into dbo.tbl_persona values ('Marisol Martinez','MAMA971201HHGMRM04','Marisol10@gmail.com',7715881288,'4HHQHGQ124',2)
insert into dbo.tbl_persona values ('Roberto Martinez','ROMA971201HHGMRM04','robert@gmail.com',7716881289,'5HHQHGQ125',2)
insert into dbo.tbl_persona values ('Nordely Cruz','NOCUB971201HHGMRM04','Nor@gmail.com',7717881290,'6HHQHGQ126',2)
insert into dbo.tbl_persona values ('Yonatan Zuñiga','YOZU971201HHGMRM04','Yona_@gmail.com',7718881291,'7HHQHGQ127',2)
insert into dbo.tbl_persona values ('Maria','MARI971201HHGMRM04','maria_@gmail.com',7718881591,'7HHQHGQ1274',2)
insert into dbo.tbl_persona values ('Luca Bautista','YOZU971201HHGMRM88','luc@gmail.com',7718881491,'7HHQHGQ128',2)
insert into dbo.tbl_persona values ('Gerardo','YOZU971201HHGMRM99','gera@gmail.com',7718881391,'7HHQHGQ129',2)


go

create proc sp_ventaEnergia
@cantidad as float,
@id_suministro as int,
@id_cliente as int,
@id_empleado as int,
@id_forma_pago as int
as 
declare @precio float
declare @iva int
declare @calculaiva float
declare @subtotal float
declare @totalventa  float

select @precio=(select fltPrecio_Mxn from tbl_suministro where id_suministro=@id_suministro)
select @iva=(select intIva from tbl_suministro where id_suministro=@id_suministro)

select @subtotal=(@cantidad*@precio)
select @calculaiva=(0.16*@subtotal)
select @totalventa=(@subtotal+@calculaiva)

insert into dbo.tbl_venta values(GETDATE(),@cantidad,@totalventa,@id_suministro,@id_cliente,@id_empleado,@id_forma_pago)
go


exec sp_ventaEnergia 100,2,3,5,3


create trigger tr_almacen_produccion
on tbl_almacen for insert
as

declare @total float
declare @id int
select @total =(inserted.fltCantidad_Kilo*5) from inserted
select @id =(select id_almacen1 from tbl_almacen where tbl_almacen.id_almacen1=inserted.id_almacen1)
from inserted

insert into tbl_produccion values(GETDATE(),@total,@id)
 go

create trigger tr_TotalkWh
on tbl_produccion for insert
as
declare @total float 
select @total =(select sum(fltCant_prod_kWh) from tbl_produccion)
from inserted
update tbl_suministro
		set fltTotal_kWh=@total
go




create trigger tr_existencia
on tbl_venta for insert
as

update tbl_suministro  set fltTotal_kWh=(inserted.fltCant_kWh-tbl_suministro.fltTotal_kWh) from inserted

go


create function encriptar_pass(@valor varchar(255))
returns binary(100)
as
begin 
declare @encriptado binary(100);

set @encriptado=HASHBYTES('SHA1',@valor);

return @encriptado;

end









