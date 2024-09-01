
<?php

class perfil extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre

        // Cada vez que se llame al controllador, renderice su respectiva vista
        $this->view->render('perfil/index');
    }

    // function render(){
    //     $this->view->render('perfil/index');
    // }

}

?>