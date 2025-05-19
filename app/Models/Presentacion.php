<?php
    require_once 'config/database.php';

    class Presentacion{
        public static function getAll(){
            $database = new Database;
            $db = $database->getConnection();
            $sql = "SELECT * FROM Presentacion";
            $stament = $db->query($sql);
            return $stament->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>