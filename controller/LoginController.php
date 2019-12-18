<?php
require_once 'model/Usuario.php';
class LoginController
{
    public function login()
    {
         session_start();
        require_once('./views/login.php');
    }

    public function loginAcceso()
    {
        session_start();
        $user = new Usuario();
        $respuesta = $user->login($_POST['email'], $_POST['password']);

        if ($respuesta) {
            if ($respuesta['admin'] == 1) {
                $_SESSION['usuario'] = $respuesta;
                header('Location: index.php?page=dashboard');
                die();
            } else if($respuesta['admin'] == 2){
                $_SESSION['cliente'] = $respuesta;
                header('Location: index.php?page=index');
            }else {
                $_SESSION['alertMensaje'] = "Usuario y/o contraseña incorrectos";
                header('Location: index.php?page=login');
                
                die();
            }
        } else {
             $_SESSION['alertMensaje'] = "Usuario y/o contraseña incorrectos";
            header('Location: index.php?page=login');
                   
             }
    }
}
