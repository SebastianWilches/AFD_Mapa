
<?php

class registro extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre


        $this->view->mensaje = "";
        // Cada vez que se llame al controllador, renderice su respectiva vista
    }

    function render(){
        $this->view->render('registro/index');
    }

    function POSTRegisterUser(){
        // Recibo los datos del form
        $iduser = $_POST['iduser'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        $email  = $_POST['email'];
        $password  = $_POST['password'];


        $mensaje = "";
        // Toda la info se la vamos a pasar en forma de array
        if($this->model->POSTRegisterUser(['iduser'=> $iduser, 'nombre'=>$nombre, 'apellido'=>$apellido, 'email'=>$email, 'password'=>$password])){
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