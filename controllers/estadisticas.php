
<?php

class estadisticas extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre

        // Cada vez que se llame al controllador, renderice su respectiva vista
        $this->view->render('estadisticas/index');
    }

    // function render(){
    //     $this->view->render('estadisticas/index');
    // }

}

?>