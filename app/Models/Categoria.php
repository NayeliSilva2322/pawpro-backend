<?php
    // Utilizamos un modelo para tipo POO para nuestra tabla de Categoria
    require_once 'config/database.php';

    class Categoria {
        // Funcion de traer todas las categorias de la tabla Categoria
        public static function getAll(){
            $db = Databse::connect();
            $sql = "SELECT * FROM categoria;";
            $stament = $db->query($sql);
            return $stament->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>