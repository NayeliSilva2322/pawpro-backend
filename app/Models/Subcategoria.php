<?php
    // Utilizamos el modelo de tipo PDO para nuestra tabla de Subcategorias
    require_once 'config/database.php';
    // El modelo ingresa la query a la base de datos
    class Subcategoria{
        public static function getAll(){
            $database = new Database;
            $db = $database->getConection();
            $sql = "SELECT * FROM Subcategoria;";
            $statement = $db->query($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>