<?php

class Perfil extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->userInfo = [];
        $this->view->mensaje = "";  // Para mostrar mensajes
    }

    function render(){
        // Renderizar la vista
        $this->view->render('perfil/index');
    }

    function getUserInfo(){
        // Recibo el id_user de la URL o de la sesión
        $id_user = $_GET['id_user'] ?? null;

        if ($id_user) {
            // Obtengo la información del usuario desde el modelo
            $result = $this->model->getUserInfo(['id_user' => $id_user]);
            
            if ($result) {
                // Si se obtiene información, la pasamos a la vista
                $this->view->userInfo = $result;
            } else {
                // Si no hay datos, pasamos un array vacío
                $this->view->userInfo = [];
            }
        } else {
            $this->view->userInfo = [];
        }

        // Renderizamos la vista
        $this->render();
    }

    // Nueva función para actualizar la contraseña
    function updatePassword(){
        // Recibir los datos del formulario
        $id_user = $_POST['id_user'];
        $newPassword = $_POST['new_password'];

        // Llamar al método del modelo para actualizar la contraseña
        if ($this->model->updatePassword($id_user, $newPassword)) {
            // Mensaje de éxito (opcional, no es necesario si redirigimos)
            $this->view->mensaje = "Contraseña actualizada correctamente.";

            // Redirigir a la página del perfil para volver a cargar los datos
            header('Location: ' . constant('URL') . 'perfil/getUserInfo?id_user=' . $id_user);
            exit();
        } else {
            // Mostrar un mensaje de error si la actualización falla
            $this->view->mensaje = "Error al actualizar la contraseña.";
            
            // Renderizar la vista con el mensaje de error
            $this->render();
        }
    }
}
