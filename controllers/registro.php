
<?php

class registro extends Controller{

    function __construct(){
        parent::__construct(); //Constructor de la clase padre

        // Cada vez que se llame al controllador, renderice su respectiva vista
        $this->view->render('registro/index');
    }

    // function render(){
    //     $this->view->render('registro/index');
    // }

    function POSTRegisterUser(){
        // Recibo los datos del form
        $iduser = $_POST['iduser'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        $email  = $_POST['email'];
        $password  = $_POST['password'];

        echo $iduser,
        $nombre,
        $apellido,
        $email,
        $password;

        // Toda la info se la vamos a pasar en forma de array
        $this->model->POSTRegisterUser(['iduser'=> $iduser, 'nombre'=>$nombre, 'apellido'=>$apellido, 'email'=>$email, 'password'=>$password]);
        // $mensaje = "";

        // if($this->model->POSTRegisterUser(['nombre' => $nombre,'apellido' => $apellido,'email' => $email,'password' => $password])){
        //     $mensaje = "Nuevo usuario creado";
        // }else{
        //     $mensaje = "El usuario ya existe";
        // }

        // $this->view->mensaje = $mensaje;
        // $this->render();
    }

}

?>