
<?php

class registro extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre


        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('registro/index');
    }

    function POSTRegisterUser(){
        // Recibo los datos del form
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $tipo_documento = $_POST['tipo_documento'];
        $numero_documento = $_POST['numero_documento'];
        $telefono = $_POST['telefono'];
        $estado_civil = $_POST['estado_civil'];
        $estado_laboral = $_POST['estado_laboral'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $mensaje = "";
        // Toda la info se la vamos a pasar en forma de array
        if($this->model->POSTRegisterUser([
            'nombre'=> $nombre, 
            'apellido'=> $apellido, 
            'edad'=> $edad, 
            'tipo_documento'=> $tipo_documento, 
            'numero_documento'=> $numero_documento, 
            'telefono'=> $telefono, 
            'estado_civil'=> $estado_civil, 
            'estado_laboral'=> $estado_laboral, 
            'email'=> $email, 
            'password'=> $password, 
        ])){
            $mensaje = "Usuario registrado";
        }else{
            $mensaje = "Este usuario ya existe";
        }


        // Agregamos un nuevo mensaje a nuestra vista
        $this->view->mensaje = $mensaje;

        //Si cambiamos algo en la vista tenemos que volver a renderizar
        $this->render();

    }

}

?>