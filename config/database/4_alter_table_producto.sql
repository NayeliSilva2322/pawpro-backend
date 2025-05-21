USE pawpro_database;
ALTER TABLE Productos DROP COLUMN unidad_medida;
ALTER TABLE Productos ADD column urlImagenProducto VARCHAR(200);