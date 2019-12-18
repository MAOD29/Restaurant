<?php
require_once 'views/header.php';
?>

<br><br><br><br>
<section class="counter-section section center-text" id="counter">
    <div class="container">
        <div class="heading">

            <h2>Nuestros Servicios</h2>
        </div>
        <br> <br><br>
        <div class="row">
            <div class="col-sm-12 col-md-4 ">
                <div class="mb-30 ">
                    <i class="fas fa-parking fa-7x"></i>

                    <h3><b><span>Estacionamiento</span></b>
                    </h3>

                </div><!-- margin-b-30 -->
            </div><!-- col-md-3-->


            <div class="col-sm-12 col-md-4">
                <div class="mb-30">
                    <i class="fas fa-truck fa-7x"></i>
                    <h3><b><span>Domicilio</span></b>
                </div><!-- margin-b-30 -->
            </div><!-- col-md-3-->

            <div class="col-sm-12 col-md-4 ">
                <div class="mb-30">
                    <i class="fas fa-music fa-7x"></i>
                    <h3><b><span>Musica en vivo</span></b>
                </div><!-- margin-b-30 -->
            </div><!-- col-md-3-->

        </div><!-- row-->
    </div><!-- container-->
</section><!-- counter-section-->

<section class="story-area  pos-relative">
    <div class="pos-bottom triangle-up"></div>
    <div class="pos-top triangle-bottom"></div>
    <div class="container">
        <div class="heading">

            <h2>Que dicen nuestros clientes</h2>
        </div>

        <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3" data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true" data-swpr-responsive="[1, 2]">

            <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">
              

                <div class="swiper-slide">
                    <h4>Los mejores tacos</h4>
                    <p class="color-ash mb-50 mb-sm-30 mt-20"> 10% recomendado para toda la familia lo vuelvo a repetir  100% recomendado</p>
                    
                    <h6><b class="color-primary">Daniela Sanchez</b>,<b class="color-ash">Cliente</b>
                    </h6>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <h4>Los mejores antojitos en la ciudad</h4>
                    <p class="color-ash mb-50 mb-sm-30 mt-20">Nunca crei decir esto pero es lo mejor que hay en la ciudad. </p>
                  
                    <h6><b class="color-primary">Javier Lopez</b>,<b class="color-ash">Visitante</b></h6>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <h4>Riquisimo</h4>
                    <p class="color-ash mb-50 mb-sm-30 mt-20">Muy recomendable excelente comida y ambiente</p>
                   
                    <h6><b class="color-primary">Emmanuel Hernandez</b>,<b class="color-ash">Visitante</b>
                    </h6>
                </div><!-- swiper-slide -->
            </div><!-- swiper-wrapper -->

            <div class="swiper-pagination"></div>
        </div><!-- swiper-container -->
    </div><!-- container -->
</section>



<?php
require_once 'views/footer.php';
?>