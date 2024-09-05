<?php

class EstadisticasModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    // Método para obtener los datos financieros de un usuario
    public function getEstadisticas($id_user){
        $query = $this->db->connect()->prepare('
            SELECT 
                u.nombre, 
                cf.ganancias, 
                cf.ahorro_actual, 
                cf.gastos, 
                cf.meta 
            FROM users u
            INNER JOIN control_financiero cf ON u.id_user = cf.id_user
            WHERE u.id_user = :id_user
        ');

        try {
            $query->execute(['id_user' => $id_user]);
            // Retornar los datos financieros
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>
