
<?php

class datosPersonales extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre

        // Cada vez que se llame al controllador, renderice su respectiva vista
    }

    function render(){
        $this->view->render('datosPersonales/index');
    }

}

?>