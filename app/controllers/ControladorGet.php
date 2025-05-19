<?php

    require 'app/models/Categoria.php';
    require 'app/models/Subcategoria.php';
    require 'app/models/Marca.php';
    require 'app/models/Presentacion.php';

    class Controlador{
        public function obtenerCategorias(){
            $categorias = Categoria::getAll();
            echo json_encode($categorias);    
        }

        public function obtenerMarcas(){
            $marcas = Marca::getAll();
            echo json_encode($marcas);
        }

        public function obtenerPresentaciones(){
            $presentaciones = Presentacion::getAll();
            echo json_encode($presentaciones);
        }

        public function obtenerSubcategorias(){
            $subcategorias = Subcategoria::getAll();
            echo json_encode($subcategorias);
        }
    }
?>