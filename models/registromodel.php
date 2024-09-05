<?php

class RegistroModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function POSTRegisterUser($datos) {
        $pdo = $this->db->connect();
        $query = $pdo->prepare(
            'INSERT INTO users (
                nombre,
                apellido,
                edad,
                tipo_documento,
                numero_documento,
                telefono,
                estado_civil,
                estado_laboral,
                email,
                password
            ) VALUES (
                :nombre, 
                :apellido, 
                :edad, 
                :tipo_documento, 
                :numero_documento, 
                :telefono, 
                :estado_civil, 
                :estado_laboral, 
                :email, 
                :password
            )'
        );

        try {
            $query->execute([
                'nombre' => $datos['nombre'],
                'apellido' => $datos['apellido'],
                'edad' => $datos['edad'],
                'tipo_documento' => $datos['tipo_documento'],
                'numero_documento' => $datos['numero_documento'],
                'telefono' => $datos['telefono'],
                'estado_civil' => $datos['estado_civil'],
                'estado_laboral' => $datos['estado_laboral'],
                'email' => $datos['email'],
                'password' => $datos['password'],
            ]);

            // Obtener el último ID insertado
            return $pdo->lastInsertId();
        } catch (PDOException $e) {
            // Mostrar error detallado
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
}
?>
