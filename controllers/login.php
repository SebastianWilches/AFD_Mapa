
<?php

class Login extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre

        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('login/index');
    }


    function POSTLoginUser(){
        // Recibo los datos del form
        $email = $_POST['email'];
        $password = $_POST['password'];


        $mensaje = "";

        // Toda la info se la vamos a pasar en forma de array
        $result = $this->model->POSTLoginUser([
            'email'=> $email, 
            'password'=> $password, 
        ]);

        if ($result['resultado']) {
            $mensaje = "Credenciales correctas. ID de usuario: " . $result['id_user'];
        } else {
            $mensaje = "Credenciales incorrectas";
        }

        // Agregamos un nuevo mensaje a nuestra vista
        $this->view->mensaje = $mensaje;

        //Si cambiamos algo en la vista tenemos que volver a renderizar
        $this->render();
    }

}

?>