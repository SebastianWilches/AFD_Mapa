<?php

class Errores  extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre
        // $this->view->mensaje = "Hubo un error en la solicitud o no existe la página";
        // $this->view->render('errores/index');
        $this->view->render('errores/index');
        // echo "<p>Error al cargar recurso</p>";
    }
}

?>