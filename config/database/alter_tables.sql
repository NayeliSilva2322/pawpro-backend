-- -----------------------------------------------------
-- Agregar columnas a la tabla para vincularlo con las tablas de subcategoria y presentacion
-- -----------------------------------------------------

ALTER TABLE `pawpro_database`.`Productos` 
ADD COLUMN `subcategoria_id` INT NULL AFTER `fecha_modificacion`,
ADD COLUMN `presentacion_id` INT NULL AFTER `subcategoria_id`;

-- -----------------------------------------------------
-- Agregar llaves foraneas a la tabla de productos
-- -----------------------------------------------------

ALTER TABLE `pawpro_database`.`Productos` 
ADD INDEX `subcategoria_fk_idx` (`subcategoria_id` ASC) VISIBLE,
ADD INDEX `presentacion_fk_idx` (`presentacion_id` ASC) VISIBLE;
;
ALTER TABLE `pawpro_database`.`Productos` 
ADD CONSTRAINT `subcategoria_fk`
  FOREIGN KEY (`subcategoria_id`)
  REFERENCES `pawpro_database`.`Subcategoria` (`id_subcategoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `presentacion_fk`
  FOREIGN KEY (`presentacion_id`)
  REFERENCES `pawpro_database`.`Presentacion` (`id_presentacion`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
