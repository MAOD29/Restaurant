<?php
require_once 'views/header.php';
?>

<br><br>
<br>
<section class="counter-section section center-text" id="counter">
  <div class="container">
    <div class="heading">

      <h2>Ingrese su tarjeta de credito para el pago</h2>
    </div>
  </div><!-- container-->
  <form action="index.php?page=storepedido" method="POST" class="credit-card-div">
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">

          <div class="row ">
            <div class="col-md-12">
              <input type="text" required  minlength="16" class="form-control" placeholder="Ingrese su numero de tarjeta" />
            </div>
          </div>
          <div class="row ">
            <div class="col-md-3 col-sm-3 col-xs-3">
              <span class="help-block text-muted small-font"> Mes de expiracion</span>
              <input type="text" required maxlength="2"  class="form-control" placeholder="MM" />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <span class="help-block  text-muted small-font"> Año de expiracion</span>
              <input type="text" required maxlength="2" class="form-control" placeholder="YY" />
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <span class="help-block text-muted small-font"> CCV</span>
              <input type="text" minlength="3" maxlength="3" required class="form-control" placeholder="CCV" />
            </div>
          </div>
          <div class="row ">
            <div class="col-md-12 pad-adjust">
              <input type="hidden" name="id_cliente" value="<?php echo $datos['id_cliente'] ?>" name="id_cliente">
              <input type="hidden" name="total" value="<?php echo $datos['total'] ?>" name="total">
              <input type="hidden" value="<?php echo $datos['cantidad'] ?>" name="cantidad">
              <input type="hidden" name="descripcion" value="<?php echo $datos['descripcion'] ?>" name="descripcion">
              <input type="text" required class="form-control" placeholder="Nombre de quien pertenece la tajeta" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 pad-adjust">
              <div class="checkbox">
                <label>
                  <input type="checkbox" required checked class="text-muted"> Estoy de acuerdo con los terminos y condiciones</a>
                </label>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
              <input type="submit" class="btn btn-danger" name="cancelar" value="cancelar" />
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
              <input type="submit" class="btn btn-warning btn-block" name="registrar" target="_blank" value="Registrar" />
            </div>
          </div>

        </div>
      </div>
  </form>
  </div>
</section>
<?php
require_once 'views/footer.php';
?>