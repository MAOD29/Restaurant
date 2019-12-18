<?php
require_once 'Utilidades/Validator.php';
class Request extends Validator
{
    public function validateuser($datos){
        $errores = [];

        $errores = $this->require($datos);
        $email = $this->validate_email($datos['email']);
        $edad = $this->validar_entero($datos['edad']);

        $telefono = $this->validate_telefono($datos['telefono']);
        $password = $this->validatePassword($datos['password']);
        $nombre = $this->soloLetras($datos['nombre']);
        $apellidos = $this->soloLetras($datos['apellidos']);
     
        if($email) $errores['email'] = $email;
        if($telefono) $errores['telefono'] = $telefono;
        if($edad) $errores['edad'] = $edad;
        if($password) $errores['password'] = $password;
        if($nombre) $errores['nombre'] = $nombre;
        if($apellidos) $errores['apellidos'] = $apellidos;



       return $errores;

    } 
    public function validatearticulo($datos){
        $errores = [];

        $errores = $this->require($datos);
        $precio = $this->validar_entero($datos['precio']);
      
     
        if($precio) $errores['precio'] = $precio;
      
      

       return $errores;

    } 
    
    
    

   
}
    

    




    

