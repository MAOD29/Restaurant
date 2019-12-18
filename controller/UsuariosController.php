<?php
require_once 'model/Usuario.php';
require_once 'utilidades/Utilidades.php';
require_once 'utilidades/Request.php';



class UsuariosController
{
    function __construct(){
        if(!isset($_SESSION)){  
            session_start(); 
        }  
    }
    public function index()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: home.php');
        }
        #inicializando los valores
        $users = new Usuario;
        $utilities = new Utilidades();
        $startOfPaging = 0;
        $amountOfThePaging = 8;
        $search = "";
        #asignando el inicio de de los articulos a paginar
        if (isset($_GET['p'])) $startOfPaging = $utilities->pagination($_GET['p'], $amountOfThePaging);
        #asignando la busqueda si existe
        if (isset($_GET['search'])) $search =  $_GET['search'];

        $section = $users->paginationuser($search);
        $users = $users->indexuser($search, $startOfPaging, $amountOfThePaging);


        require_once('./views/usuarios/index.php');
    }
    public function show()
    { }
    public function create()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: home.php');
        }
        require_once('./views/usuarios/create.php');
    }

    public function store()
    {

        if (isset($_POST['registrar'])) {
            $datos = array(
                'nombre' => $_POST['nombre'],
                'apellidos' => $_POST['apellidos'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'edad' => $_POST['edad'],
                'telefono' => $_POST['telefono'],
                'password' => $_POST['password'],
                'admin' => "2",
            );
            $validate = new Request(); 
            $errores = $validate->validateuser($datos);
            if(empty($errores)){

                $email = $datos['email'];
                $user = new Usuario();
                $user = $user->emailuser($email);
                if($user){
                    $errores['email'] = 'este email ya existe';
                     $_SESSION['errores'] = $errores;
                    require_once('./views/usuarios/create.php');
                    unset($_SESSION['errores']);
                }else{
                    $createuser = new Usuario();
                    $createuser->storeuser($datos);
                    $_SESSION['mensaje-usuario'] = "creado correctamente";
                    require_once('./views/usuarios/create.php');
                    unset($_SESSION['mensaje-usuario']);
                }

                
            }
            else{
               $_SESSION['errores'] = $errores;
                require_once('./views/usuarios/create.php');
                unset($_SESSION['errores']);

             }

        } else if (isset($_POST['cliente'])) {
            $datos = array(
                'nombre' => $_POST['nombre'],
                'apellidos' => $_POST['apellidos'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'edad' => $_POST['edad'],
                'telefono' => $_POST['telefono'],
                'password' => $_POST['password'],
                'admin' => "2",
            );
            $validate = new Request(); 
            $errores = $validate->validateuser($datos);
            if(empty($errores)){

                $email = $datos['email'];
                $user = new Usuario();
                $user = $user->emailuser($email);
                if($user){
                    $errores['email'] = 'este email ya existe';
                     $_SESSION['errores'] = $errores;
                    require_once('./registrar.php');
                    unset($_SESSION['errores']);
                }else{
                    
                    $createuser = new Usuario();
                    $createuser->storeuser($datos);
                    unset($_SESSION['mensaje-usuario']);
                    header('Location: home.php');
                }
             }else{
               $_SESSION['errores'] = $errores;
                require_once('./registrar.php');
                unset($_SESSION['errores']);

             }   
            
        }
        
        else{
            require_once('./views/usuarios/create.php');
        }



    }


    public function edit()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: home.php');
        }
        $id = $_GET['id'];
        $user = new Usuario();
        $user = $user->edituser($id);


        require_once('./views/usuarios/edit.php');
    }

    public function update()
    {
        if (!isset($_SESSION['usuario'])) {
        header('Location: home.php');
    }

        if (isset($_POST['editar'])) {

            $datos = array(
                'id'   =>  $_GET['id'],
                'nombre' => $_POST['nombre'],
                'apellidos' => $_POST['apellidos'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'edad' => $_POST['edad'],
                'telefono' => $_POST['telefono'],
                'password' => $_POST['password'],

            );
            $validate = new Request(); 
            $errores = $validate->validateuser($datos);
            if(empty($errores)){
                $user = new Usuario;
                $user = $user->updateuser($datos);
                header('Location: index.php?page=usuario');
            }else{
                 $id = $datos['id'];
                 $user = new Usuario();
                $user = $user->edituser($id);
                $_SESSION['errores'] = $errores;
                require_once('./views/usuarios/edit.php');
                unset($_SESSION['errores']);

             }   
        }
       
    }

    public function destroy()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: home.php');
        }
        if (isset($_POST['eliminar'])) {
            $id = $_GET['id'];

            $user = new Usuario();
            if ($user->destroyuser($id)) {
                header('Location: index.php?page=usuario');
            } else {
             echo "error";
            }
        }
    }
}
