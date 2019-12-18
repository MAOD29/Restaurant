<?php

    $error = function($field){
        if (isset($_SESSION['errores'])){
            foreach ($_SESSION['errores'] as $key =>$dato) {
                $errores[$key]= $dato;
            }
            if(isset($errores[$field])) return $errores[$field];
        }
    };

?>
<div class="container">
    <div class="row fuente">
        <div class="col-4">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" required name="nombre"
            value ="<?php if(isset($user['nombre'])) echo $user['nombre'];?>"  placeholder="Ingrese nombre">
             <span class="error"><?php echo$error('nombre') ?></span>

        </div>
        <div class="col-4">
            <label for="materno">Apellidos</label>
            <input class="form-control" type="text" required name="apellidos" 
            value ="<?php if(isset($user['apellidos'])) echo $user['apellidos'];?>" placeholder="Ingrese el apellidos ">
            <span class="error"><?php echo$error('apellidos') ?></span>
        </div>
        <div class="col-4">
            <label for="edad">Edad</label>
            <input class="form-control" type="text" required name="edad"
            value ="<?php if(isset($user['edad'])) echo $user['edad'];?>"  placeholder="Ingrese edad">
            <span class="error"><?php echo$error('edad') ?></span>
        </div>

    </div>
    <br>
    <div class="row fuente">
       
        <div class="col-4">
            <label for="telefono">Telefono</label>
            <input class="form-control" type="text"required name="telefono" 
            value ="<?php if(isset($user['telefono'])) echo $user['telefono'];?>" placeholder="Ingrese numero telefonico">
            <span class="error"><?php echo$error('telefono') ?></span>
        </div>
        <div class="col-8">
            <label for="direccion">Direccion</label>
            <input class="form-control" type="text" required name="direccion"
            value ="<?php if(isset($user['direccion'])) echo $user['direccion'];?>"  placeholder="Ingrese la direccion">
              <span class="error"><?php echo$error('direccion') ?></span>
        </div>
      

       
    </div>
    <br>
    <div class="row fuente">
    <div class="col-4">
            <label for="paterno">Email</label>
            <input class="form-control" type="text" required name="email"
            value ="<?php if(isset($user['email'])) echo $user['email'];?>"  placeholder="Ingrese el email">
            <span class="error"><?php echo$error('email') ?></span>
        </div>

        <div class="col-4">
            <label for="paterno">Contraseña</label>
            <input class="form-control" type="password" required name="password" 
            value ="<?php if(isset($user['password'])) echo $user['password'];?>" placeholder="Ingrese contraseña para el sistema">
              <span class="error"><?php echo$error('password') ?></span>
        </div>

    </div>
    <br>