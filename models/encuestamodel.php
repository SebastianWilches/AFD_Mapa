<?php

class EncuestaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    // Insertar datos en la tabla control_financiero
    public function insertarControlFinanciero($ganancias, $ahorro_actual, $gastos, $meta, $id_user) {
        $query = $this->db->connect()->prepare("INSERT INTO control_financiero (ganancias, ahorro_actual, gastos, meta, id_user) VALUES (:ganancias, :ahorro_actual, :gastos, :meta, :id_user)");
        try {
            $query->execute([
                'ganancias' => $ganancias,
                'ahorro_actual' => $ahorro_actual,
                'gastos' => $gastos,
                'meta' => $meta,
                'id_user' => $id_user
            ]);
            return $this->db->connect()->lastInsertId(); // Devuelve el id_control_financiero insertado
        } catch (PDOException $e) {
            error_log('Error al insertar en control_financiero: ' . $e->getMessage());
            return false;
        }
    }

    // Insertar datos en la tabla encuesta_financiera
    public function insertarEncuestaFinanciera($tiene_presupuesto, $tiene_gastos_innecesarios, $tiene_deudas, $tiene_gastos_fijos, $metodo_pago, $id_user) {
        $query = $this->db->connect()->prepare("INSERT INTO encuesta_financiera (tiene_presupuesto, tiene_gastos_innecesarios, tiene_deudas, tiene_gastos_fijos, metodo_pago, id_user) VALUES (:tiene_presupuesto, :tiene_gastos_innecesarios, :tiene_deudas, :tiene_gastos_fijos, :metodo_pago, :id_user)");
        try {
            $query->execute([
                'tiene_presupuesto' => $tiene_presupuesto,
                'tiene_gastos_innecesarios' => $tiene_gastos_innecesarios,
                'tiene_deudas' => $tiene_deudas,
                'tiene_gastos_fijos' => $tiene_gastos_fijos,
                'metodo_pago' => $metodo_pago,
                'id_user' => $id_user
            ]);
            return true;
        } catch (PDOException $e) {
            error_log('Error al insertar en encuesta_financiera: ' . $e->getMessage());
            return false;
        }
    }
}



?>
