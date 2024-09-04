<?php

class RegistroModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    // El modelo lo unico que se va a encargar es hacer la transaccion con la DB
    public function POSTRegisterUser($datos){
        // Preparamos la query
        $query = $this->db->connect()->prepare(
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
            ) VALUES(
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
            )');
        // La ejecutamos con los datos que vienen en los params
        try{
            $query->execute([
                'nombre'=>  $datos['nombre'],
                'apellido'=>  $datos['apellido'],
                'edad'=>  $datos['edad'],
                'tipo_documento'=>  $datos['tipo_documento'],
                'numero_documento'=>  $datos['numero_documento'],
                'telefono'=>  $datos['telefono'],
                'estado_civil'=>  $datos['estado_civil'],
                'estado_laboral'=>  $datos['estado_laboral'],
                'email'=>  $datos['email'],
                'password'=>  $datos['password'],
                ]);
            return true; //Retornamos el estado de la transaccion al controller
        }catch(PDOException $e){
            return false;
        }


    }
}

?>