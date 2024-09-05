<?php

class Registro extends Controller {

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('registro/index');
    }

    function POSTRegisterUser(){
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

        if ($id_user = $this->model->POSTRegisterUser([
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
        ])) {
            // Guarda el ID del usuario en la sesión
            session_start();
            $_SESSION['id_user'] = $id_user;

            // Redirigir a /encuesta
            header('Location: ' . constant('URL') . 'encuesta');
            exit();
        } else {
            $this->view->mensaje = "Error al crear el usuario";
            $this->render();
        }
    }
}

?>
