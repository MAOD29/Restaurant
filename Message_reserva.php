<?php
require_once 'views/header.php';
?>
<br>
<br>
<section class="story-area left-text center-sm-text">
    <div class="container">
        <div class="heading">
            <br><br>
            <h2>Tu reserva fue realizada con exito</h2>
            <h5 class="mt-10 mb-30">Para hacer valida tu reserva debes presentar el ticket de reserva</h5>
            <a href="index.php?page=imprimirreserva&id=<?php echo $lastid[0] ?>" class='btn btn-outline-info btn-sm' download="ticket.pdf">Imprimir ticket</a>
            <a href="index.php?page=homes" class='btn btn-outline-danger btn-sm'>Volver a menu</a>
        </div>
    </div><!-- container -->
</section>

<?php
require_once 'views/footer.php';
?>