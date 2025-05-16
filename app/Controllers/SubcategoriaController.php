<?php
    // Contolador para manejar la tabla de Subcategorias usando PDO
    require_once 'app/models/Subcategoria.php';
    class SubcategoriaController {
        public function obtenerSubcategorias(){
            $subcategorias = Subcategoria::getAll();
            echo json_encode($subcategorias);
        }
    }
?>