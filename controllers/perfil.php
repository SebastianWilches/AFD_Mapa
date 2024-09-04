
<?php

class perfil extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre

        // Recibimos el ID que nos da el login
        $this->view->id_user = "";
    }

    function render(){
        $this->view->id_user = $_GET['id_user']; // Recuperar el id_user de la URL
        $this->view->render('perfil/index');
    }

}

?>