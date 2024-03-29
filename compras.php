<?php
require_once 'views/header.php';
?>
<br>
<br>
<section class="story-area left-text center-sm-text">
  <div class="container">
    <div class="heading">
      <br><br>
      <h2>Mis compras</h2>
    </div>

    <?php if (!empty($compras)) : ?>
    <div class="table-responsive">
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th width="25%">ID</th>
            <th width="40%">Fecha</th>
            <th width="25%">Total</th>
            <th width="10%">Ticket</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($compras as $u) : ?>
            <tr>
              <td><?php echo $u['id'] ?></td>
              <td> <?php echo $u['fecha'] ?> </td>
              <td>$ <?php echo $u['total'] ?> </td>
              <td>
                <a href="index.php?page=imprimirpedido&id=<?php echo $u['id'] ?>" class='btn btn-outline-info btn-sm' download="ticket.pdf">Imprimir ticket</a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
    <?php endif; ?>
  </div><!-- container -->
</section>


<?php
require_once 'views/footer.php';
?>