CREATE TABLE empresa(
  codigo int NOT NULL,
  NIT char(10) DEFAULT NULL,
  nombre varchar(50) NOT NULL,
  encargado varchar(50) NOT NULL,
  telefono varchar(20) NOT NULL,
  direccion varchar(50) NOT NULL,
  ciudad varchar(50) NOT NULL,
  region varchar(50) DEFAULT NULL,
  pais varchar(50) DEFAULT NULL,
  diasCompra varchar(50) NOT NULL,
  horario varchar(25) NOT NULL,
  numLlamadas int DEFAULT NULL,
  acumulado double DEFAULT NULL,
  PRIMARY KEY (codigo)
);

CREATE TABLE paciente (
  tipo_id char(5) NOT NULL,
  id int NOT NULL,
  nombre varchar(50) NOT NULL,
  telefono int NOT NULL,
  direccion varchar(60) DEFAULT NULL,
  interes varchar(50) NOT NULL,
  PRIMARY KEY (tipo_id, id)
);

-- ml mililitros
CREATE TABLE producto (
  nombre varchar(50) NOT NULL,
  precio double NOT NULL,
  ml float DEFAULT NULL,
  PRIMARY KEY (nombre)
);

CREATE TABLE compra (
  idCompra int NOT NULL AUTO_INCREMENT,
  codigo int DEFAULT NULL,
  tipo_id char(5) DEFAULT NULL,
  id int DEFAULT NULL,
  fecha date NOT NULL,
  valor double NOT NULL,
  cantidad int NOT NULL,
  PRIMARY KEY (idCompra),
  FOREIGN KEY (codigo) REFERENCES empresa (codigo),
  FOREIGN KEY (tipo_id, id) REFERENCES paciente (tipo_id, id)
);

CREATE TABLE llamada (
  idLlamada int NOT NULL AUTO_INCREMENT,
  codigo int DEFAULT NULL,
  tipo_id char(5) DEFAULT NULL,
  id int DEFAULT NULL,
  estado char(15) NOT NULL,
  fecha date DEFAULT NULL,
  hora time DEFAULT NULL,
  comentario varchar(350) DEFAULT NULL,
  PRIMARY KEY (idLlamada),
  FOREIGN KEY (codigo) REFERENCES empresa (codigo),
  FOREIGN KEY (tipo_id, id) REFERENCES paciente (tipo_id, id)
);
