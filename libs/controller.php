<?php
// El proposito de esta clase es crear el comportamiento común que va a heredar todas las clases respectivas a los controladores
class Controller{

    function __construct(){
        session_start();
        //Cada vez que se llame un controlador, cree su respectiva vista
        $this->view = new View();
    }

    // Se llama esta función en caso que el controllador requiera interactuar con su respectivo modelo
    function loadModel($model){
        $url = 'models/'.$model.'model.php';

        if(file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}

?>