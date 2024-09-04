<?php

class RegistroModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    // El modelo lo unico que se va a encargar es hacer la transaccion con la DB
    public function POSTRegisterUser($datos){
        // Preparamos la query
        $query = $this->db->connect()->prepare('INSERT INTO user (iduser, nombre, apellido, email, password) VALUES(:iduser, :nombre, :apellido, :email, :password)');
        // La ejecutamos con los datos que vienen en los params
        try{
            $query->execute([
                'iduser'=>  $datos['iduser'], 
                'nombre'=> $datos['nombre'], 
                'apellido'=> $datos['apellido'], 
                'email'=> $datos['email'], 
                'password'=> $datos['password']
                ]);
            return true; //Retornamos el estado de la transaccion al controller
        }catch(PDOException $e){
            return false;
        }



        // try{
        //     $query = $this->db->connect()->prepare('INSERT INTO user (iduser,nombre,apellido,email,password) VALUES(:nombre, :apellido, :email, :password)');
        //     $query->execute(['nombre' => $nombre,'apellido' => $apellido,'email' => $email,'password' => $password]);
        //     return true;
        // }catch(PDOException $e){
        //     //echo $e->getMessage();
        //     //echo "Ya existe esa matrícula";
        //     return false;
        // }
        
    }
}

?>