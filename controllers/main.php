
<?php

class Main  extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre

        // Cada vez que se llame al controllador, renderice su respectiva vista
        // echo "<p>Nuevo controlador Main</p>";
    }

    function render(){
        $this->view->render('main/index');
    }

    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }
}

?>