<?php

class Estadisticas extends Controller{

    function __construct(){
        parent::__construct();
    }

    function getEstadisticas(){
        // Obtener el id_user de la URL
        $id_user = $_GET['id_user'] ?? null;

        if ($id_user) {
            // Llamar al modelo para obtener las estadísticas del usuario
            $estadisticas = $this->model->getEstadisticas($id_user);
            if ($estadisticas) {
                // Pasar los datos a la vista
                $this->view->estadisticas = $estadisticas;
            } else {
                // Si no se encuentran datos, definir valores predeterminados
                $this->view->estadisticas = [
                    'nombre' => 'Usuario',
                    'ganancias' => 0,
                    'ahorro_actual' => 0,
                    'gastos' => 0,
                    'meta_establecida' => 0
                ];
            }
        } else {
            // Si no hay id_user, también asignamos valores predeterminados
            $this->view->estadisticas = [
                'nombre' => 'Usuario',
                'ganancias' => 0,
                'ahorro_actual' => 0,
                'gastos' => 0,
                'meta_establecida' => 0
            ];
        }

        // Renderizar la vista de estadísticas
        $this->render();
    }

    function render(){
        // Renderizar la vista
        $this->view->render('estadisticas/index');
    }
}

?>
