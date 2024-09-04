<?php

class Login extends Controller{

    function __construct(){
        parent::__construct(); // Constructor de la clase padre
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('login/index');
    }

    function POSTLoginUser(){
        // Recibo los datos del formulario
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Toda la info se la vamos a pasar en forma de array
        $result = $this->model->POSTLoginUser([
            'email' => $email, 
            'password' => $password, 
        ]);

        if ($result['resultado']) {
            // Si las credenciales son correctas, redirigimos a la vista /perfil
            // y pasamos el id_user como un parámetro en la URL
            header('Location: ' . constant('URL') . 'perfil?id_user=' . $result['id_user']);
            exit();
        } else {
            // Si las credenciales son incorrectas, mostramos el mensaje en la vista de login
            $this->view->mensaje = "Credenciales incorrectas";
            $this->render();
        }
    }
}

?>
