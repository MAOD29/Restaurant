<?php
require_once 'views/header.php';

$error = function($field){
        if (isset($_SESSION['errores'])){
            foreach ($_SESSION['errores'] as $key =>$dato) {
                $errores[$key]= $dato;
            }
            if(isset($errores[$field])) return $errores[$field];
        }
    };

?>
<body>

    <br><br>
<br>
<section class="counter-section section center-text" id="counter">
<div class="container">
        <div class="heading">

            <h2>Formulario de registro</h2>
        </div>
    </div><!-- container-->
    <form method="POST" action="index.php?page=storeusuario" >
        <div class="container">
            <div class="row fuente">
                <div class="col-6">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" required name="nombre" placeholder="Ingrese nombre">
                    <span class="error"><?php echo$error('nombre') ?></span>

                </div>
                <div class="col-6">
                    <label for="materno">Apellidos</label>
                    <input class="form-control" type="text" required name="apellidos" placeholder="Ingrese el apellidos ">
                      <span class="error"><?php echo$error('apellidos') ?></span>
                </div>

            </div>
            <br>
            <div class="row fuente">
                <div class="col-4">
                    <label for="edad">Edad</label>
                    <input class="form-control" type="text" required name="edad" placeholder="Ingrese edad">
                      <span class="error"><?php echo$error('edad') ?></span>
                </div>
                <div class="col-4">
                    <label for="telefono">Telefono</label>
                    <input class="form-control" type="text" required name="telefono" placeholder="Ingrese numero telefonico">
                     <span class="error"><?php echo$error('telefono') ?></span>
                </div>

                <div class="col-4">
                    <label for="paterno">Email</label>
                    <input class="form-control" type="text" required name="email" placeholder="Ingrese el email">
                      <span class="error"><?php echo$error('email') ?></span>
                </div>
            </div>
            <br>
            <div class="row fuente">
                <div class="col-4">
                    <label for="paterno">Contraseña</label>
                    <input class="form-control" type="password" required name="password" placeholder="Ingrese contraseña para el sistema">
                    <span class="error"><?php echo$error('password') ?></span>

                </div>
                 <div class="col-8">
                    <label for="direccion">Direccion</label>
                    <input class="form-control" type="text" required name="direccion" placeholder="Ingrese su direccion">
                     <span class="error"><?php echo$error('direccion') ?></span>
                </div>
            </div>
            <br>
            <br>
            <button class="btn btn-primary  btn-block" name="cliente" value="cliente">Registrar</button>
        </div>
    </form>
</section>  
</body>

<?php
require_once 'views/footer.php';
?>