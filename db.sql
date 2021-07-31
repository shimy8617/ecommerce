CREATE TABLE PRODUCTO(
	codpro int not null AUTO_INCREMENT,
	nompro varchar(50)null,
	despro varchar(100)null,
	prepro numeric (6,2)null,
	estado int null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codpro)
	);

alter table PRODUCTO add rutimapro varchar(100) null;

INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('#215','Remera de Morley','1050.00','1','215.jpg'),
('#216','Remera de Morley','1450.00','1','216.jpg'),
('#217','Remera de Morley','1150.00','1','217.jpg'),
('#218','Remera de Morley','1100.00','1','218.jpg'),
('#501','Blusa de Crepe','1050.00','1','501.jpg'),
('#502','Blusa de Crepe','1100.00','1','502.jpg'),
('#503','Blusa de Crepe','1100.00','1','503.jpg'),
('#504','Blusa de Crepe','1050.00','1','504.jpg'),
('#706a','Remera de Jersey','940.00','1','706a.jpg'),
('#706src','Remera de Jersey','940.00','1','706src.jpg'),
('#751','Remera de Jersey','1100.00','1','751.jpg'),
('#753','Remera de Jersey','1050.00','1','753.jpg'),
('#869','Remera de Jersey','900.00','1','869.jpg'),
('#870','Remera de Jersey','1050.00','1','870.jpg'),
('#879','Remera de Jersey','980.00','1','879.jpg'),
('#880','Remera de Jersey','1100.00','1','880.jpg'),
('#891','Remera de Jersey','950.00','1','891.jpg'),
('#8131','Remera de Jersey','1100.00','1','8131.jpg'),
('#8183','Remera de Jersey','1050.00','1','8183.jpg');

CREATE TABLE USUARIO_GESTION(
	codusu int not null AUTO_INCREMENT,
	nomusu varchar(50) not null,
	apeusu varchar(50) not null,
	emausu varchar(50) not null,
	pasusu varchar(20) not null,
	estado int not null,
	CONSTRAINT pk_usuario
	PRIMARY KEY (codusu)
);

INSERT INTO USUARIO_GESTION (nomusu,apeusu,emausu,pasusu,estado)
VALUES ('Aypoo','Admin','aypoo10@gmail.com','4036999',1);