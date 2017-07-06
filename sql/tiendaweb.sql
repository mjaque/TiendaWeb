DROP DATABASE TiendaWeb;
CREATE DATABASE TiendaWeb;
USE TiendaWeb;

CREATE TABLE Cliente(
	id INT PRIMARY KEY,
	usuario VARCHAR(100),
	clave VARCHAR(100),
	nombreCompleto VARCHAR(512),
	direccion VARCHAR(512)
);

CREATE TABLE Producto(
	id INT PRIMARY KEY,
	nombre VARCHAR(100),
	descripcion VARCHAR(512),
	precio DECIMAL(5,2),
	imagen VARCHAR(512)
);

CREATE TABLE Pedido (
	id INT PRIMARY KEY,
	fecha DATE,
	idCliente INT,
	FOREIGN KEY (idCliente) REFERENCES Cliente(id)
);

CREATE TABLE LineaPedido(
	id INT PRIMARY KEY,
	cantidad INT,
	idPedido INT,
	idProducto INT,
	FOREIGN KEY (idPedido) REFERENCES Pedido(id),
	FOREIGN KEY (idProducto) REFERENCES Producto(id)
);

CREATE TABLE Categoria(
	id INT PRIMARY KEY,
	nombre VARCHAR(100),
	idPadre INT,
	FOREIGN KEY (idPadre) REFERENCES Categoria(id)
);

CREATE TABLE Categoria_Producto(
	idCategoria INT,
	idProducto INT,
	PRIMARY KEY (idCategoria, idProducto), 
	FOREIGN KEY (idCategoria) REFERENCES Categoria(id),
	FOREIGN KEY (idProducto) REFERENCES Producto(id)
);
