<?php

class LoginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function POSTLoginUser($datos){
        // Preparamos la query
        $query = $this->db->connect()->prepare(
            '
            SELECT 
                id_user
            FROM 
                users
            WHERE 
                email = :email 
                AND password = :password
            LIMIT 1;
            ');
        // La ejecutamos con los datos que vienen en los params
        try{
            $query->execute([
                'email'=>  $datos['email'],
                'password'=>  $datos['password'],
            ]);

            // Extraemos el valor de la consulta
            $result = $query->fetch(PDO::FETCH_ASSOC);
            
            // Verificamos si se encontró el usuario
            if ($result) {
                return [
                    'id_user' => $result['id_user'],
                    'resultado' => true
                ];
            } else {
                return [
                    'id_user' => null,
                    'resultado' => false
                ];
            }
            
        }catch(PDOException $e){
            return false;
        }
    }
}

?>
