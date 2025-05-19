<?php
    require_once 'config/database.php';

    class Marca{
        public static function getAll(){
            $database = new Database;
            $db = $database->getConnection();
            $sql = "SELECT * FROM Marcas;";
            $stament = $db->query($sql);
            return $stament->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>