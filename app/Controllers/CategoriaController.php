<?php 
    // Contolador para manejar la tabla de Categoría usano PDO
    require_once 'app/models/Categoria.php';
    class CategoriaController{
        public function obtenerCategorias(){
            $categorias = Categoria::getAll();
            echo json_encode($categorias);
        }
    }
?>