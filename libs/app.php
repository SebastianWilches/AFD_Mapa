<?php
require_once "controllers/errores.php";

class App{

    function __construct(){
        // echo "<p>Nueva app</p>";

        // Vamos a obtener el parametro de la URL y descomponerlo en todas las partes
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        


        // Cuando se ingresa sin definir controlador en una URL vacia me renderiza la vista de Main
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }


        // Dependiendo de la primera parte de la URL voy a instanciar el controlador asociado a esa vista. Ej: localhost/main
        $archivoController = 'controllers/' . $url[0] . '.php';
        if(file_exists($archivoController)){
            require_once $archivoController;

            // Inicializar un controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            

            // Dependiendo de la segunda parte de la URL, voy a ejecutar el método asociado a ese controlador. Ej: localhost/main/saludar
            if(isset($url[1])){
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }



        }else{ //En caso de que no exista cargue el controlador de errores
            $controller = new Errores();
        }
    }
}

?>