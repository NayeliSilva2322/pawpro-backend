<?php 

    // Comando para levantar servidor en mac
    // php -S localhost:8000 
    header("Access-Control-Allow-Origin:*");
    header("Content-Type: application/json");

    require_once 'config/database.php';
    require_once 'app/controllers/ControladorGet.php';

    $request = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($request) {
        case '/api/categorias':
            if ($method === 'GET') {
                $contoller = new Controlador();
                $contoller->obtenerCategorias();
            }else {
                http_response_code(405);
                echo json_encode(["message"=> "Metodo no permitido"]);
            }
            break;
        case '/api/subcategorias':
            if ($method === 'GET') {
                $contoller = new Controlador();
                $contoller->obtenerSubcategorias(); 
            }else{
                http_response_code(405);
                echo json_encode(["message"=>"Metodo no permitido"]);
            }
            break;
        case '/api/presentaciones':
            if ($method === 'GET') {
                $controller = new Controlador();
                $controller->obtenerPresentaciones();
            }else{
                http_response_code(405);
                echo json_encode(["message"=>"Metodo no permitido"]);
            }
            break;
        case '/api/marcas':
            if ($method === 'GET') {
                $controller = new Controlador();
                $controller->obtenerMarcas();
            }else{
                http_response_code(405);
                echo json_encode(["message"=>"Metodo no permitido"]);
            }
            break;
        default:
            http_response_code(404);
            echo json_encode(["message" => "Ruta no encontrada"]);
            break;
    }
?>