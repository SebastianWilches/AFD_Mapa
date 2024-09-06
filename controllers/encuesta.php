<?php

class Encuesta extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('encuesta/index');
    }

    function enviarEncuesta(){
        session_start();
        if (!isset($_SESSION['id_user'])) {
            $this->view->mensaje = "Usuario no autenticado.";
            $this->render();
            return;
        }

        $id_user = $_SESSION['id_user'];

        // Recoger los datos de control_financiero
        $ganancias = $_POST['ganancias'];
        $ahorro_actual = $_POST['ahorro_actual'];
        $gastos = $_POST['gastos'];
        $meta = $_POST['meta'];

        // Insertar los datos en la tabla control_financiero (sin validar el retorno)
        $id_control_financiero = $this->model->insertarControlFinanciero($ganancias, $ahorro_actual, $gastos, $meta, $id_user);

        // Recoger los datos de encuesta_financiera
        $tiene_presupuesto = $_POST['tiene_presupuesto'] === 'Si' ? 1 : 0;
        $tiene_gastos_innecesarios = $_POST['tiene_gastos_innecesarios'] === 'Si' ? 1 : 0;
        $tiene_deudas = $_POST['tiene_deudas'] === 'Si' ? 1 : 0;
        $tiene_gastos_fijos = $_POST['tiene_gastos_fijos'] === 'Si' ? 1 : 0;
        $metodo_pago = $_POST['metodo_pago'];

        // Insertar los datos en la tabla encuesta_financiera y verificar el éxito
        if ($this->model->insertarEncuestaFinanciera($tiene_presupuesto, $tiene_gastos_innecesarios, $tiene_deudas, $tiene_gastos_fijos, $metodo_pago, $id_user)) {
            // Redirigir a la página principal después del éxito
            header('Location: ' . constant('URL') . 'main/');
            exit(); // Asegúrate de usar exit después de header para detener la ejecución del script
        } else {
            $this->view->mensaje = "Hubo un error al insertar los datos de la encuesta financiera.";
            $this->render();
        }
    }

    function success(){
        $this->view->mensaje = "¡Encuesta enviada con éxito!";
        $this->render();
    }
}

?>
