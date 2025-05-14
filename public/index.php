<?php 
    header("Access-Control-Allow-Origin:*");
    header("Content-Type: application/json");

    require_once 'config/database.php';
    require_once 'contollers/CategoriContoller.php';

    $request = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($request) {
        case '/api/categorias':
            if ($method === 'GET') {
                $contoller = new CategoriContoller();
                
            }
            break;
        
        default:
            # code...
            break;
    }
?>