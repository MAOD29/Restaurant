<?php

$error = function ($field) {
    if (isset($_SESSION['errores'])) {
        foreach ($_SESSION['errores'] as $key => $dato) {
            $errores[$key] = $dato;
        }
        if (isset($errores[$field])) return $errores[$field];
    }
};

?>
<br>
<div class="container">
    <div class="row fuente">
        <div class="col-6">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" required name="nombre" value="<?php if (isset($articulo['nombre'])) echo $articulo['nombre']; ?>" placeholder="Ingrese nombre">
             <span class="error"><?php echo$error('nombre') ?></span>
        </div>
        <div class="col-6">
            <label for="descripcion">Descripcion</label>
            <input class="form-control" type="text" required name="descripcion" value="<?php if (isset($articulo['descripcion'])) echo $articulo['descripcion']; ?>" placeholder="Ingrese la descripcion ">
             <span class="error"><?php echo$error('descripcion') ?></span>
        </div>

    </div>
    <br>
    <div class="row fuente">

        <div class="col-6">
            <label for="tipo">Tipo</label>
            <input class="form-control" type="text" required name="tipo" value="<?php if (isset($articulo['tipo'])) echo $articulo['tipo']; ?>" placeholder="Ingrese el tipo ">
             <span class="error"><?php echo$error('tipo') ?></span>
        </div>
        <div class="col-6">
            <label for="precio">precio</label>
            <input class="form-control" type="text" required name="precio" value="<?php if (isset($articulo['precio'])) echo $articulo['precio']; ?>" placeholder="Ingrese precio">
             <span class="error"><?php echo$error('precio') ?></span>
        </div>
    </div>
    <br>
    <div class="row fuente">
    <?php if (isset($articulo['img'])) : ?>
            <div class="col-3">
                <img class="photo-perfil-edit" src="storage/<?php echo $articulo['img'] ?>" alt="foto de perfil">

            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Cambiar imagen de perfil
                </button>
                
            </div>
             <span class="error"><?php echo$error('img') ?></span>
        <?php else : ?>

            <div class="col-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Elegir foto de perfil
                </button>
            </div>
             <span class="error"><?php echo$error('img') ?></span>
        <?php endif; ?>

        </div>
    <br>
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
    </div>
</div>