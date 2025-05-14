USE pawpro_database;

-- -----------------------------------------------------
-- Table `pawpro_database`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE Categoria (
	id_categoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_categoria VARCHAR(100) NOT NULL,
	descripcion TEXT,
    fecha_creacion TIMESTAMP,
    fecha_modificacion TIMESTAMP
);
-- -----------------------------------------------------
-- Table `pawpro_database`.`Subcategoria`
-- -----------------------------------------------------
CREATE TABLE Subcategoria(
	id_subcategoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_categoria INT NULL DEFAULT NULL COMMENT 'Categoria asociado a cada subcategoria',
    nombre_subcategoria VARCHAR(100) NOT NULL,
    descripcion TEXT,
    fecha_creacion TIMESTAMP,
    fecha_modificacion TIMESTAMP,
    CONSTRAINT `categoria_fk`
		FOREIGN KEY (`id_categoria`)
        REFERENCES `pawpro_database`.`Categoria`(`id_categoria`)
);

-- -----------------------------------------------------
-- Table `pawpro_database`.`Presentacion`
-- -----------------------------------------------------
CREATE TABLE Presentacion(
	id_presentacion INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_presentacion VARCHAR(100) NOT NULL,
    fecha_creacion TIMESTAMP,
    fecha_modificacion TIMESTAMP
);