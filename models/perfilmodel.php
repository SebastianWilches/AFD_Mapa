<?php

class PerfilModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getUserInfo($datos){
        // Preparamos la query
        $query = $this->db->connect()->prepare(
            '
            SELECT 
                nombre, 
                apellido, 
                edad, 
                tipo_documento, 
                numero_documento, 
                telefono, 
                estado_civil, 
                estado_laboral 
            FROM users 
            WHERE id_user = :id_user;
            ');

        // La ejecutamos con los datos que vienen en los params
        try{
            $query->execute([
                'id_user'=>  $datos['id_user'],
            ]);

            // Extraemos el valor de la consulta
            $result = $query->fetch(PDO::FETCH_ASSOC);
            
            // Retornamos los datos obtenidos
            return $result;
            
        }catch(PDOException $e){
            // En caso de error, podrías manejarlo de manera específica o retornar false
            return false;
        }
    }


    // Nueva función para actualizar el password
    public function updatePassword($id_user, $newPassword){
        // Preparamos la query para actualizar el campo password
        $query = $this->db->connect()->prepare(
            '
            UPDATE users 
            SET password = :password 
            WHERE id_user = :id_user;
            ');

        // Ejecutamos la query con los valores proporcionados
        try {
            $query->execute([
                'password' => $newPassword,
                'id_user' => $id_user
            ]);

            // Si la actualización fue exitosa, retornamos true
            return true;
            
        } catch(PDOException $e) {
            // En caso de error, podrías manejarlo de manera específica o retornar false
            return false;
        }
    }
}

?>
