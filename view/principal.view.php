<?php
    require_once 'validar.datos.sesion.view.php';
?>
<!doctype html>
<html lang="en">
    <head>
            <title> TESIS IA | Principal</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <?php include_once 'estilos.view.php'; ?>
    </head>
    
    <body>
            <!-- Cargar -->
            <div class="preloader">
                <img src="../util/imagen/preloader.svg" alt="Pre-loader">
            </div>
            <!-- Principal -->
            <?php include_once 'menu-arriba.view.php'; ?>
            
            <div class="content-wrapper" >
    <!-- Content Header (Page header)
    <section class="content-header">
      <h1>
        Bienvenido
      </h1>
    </section> -->

    <!-- Main content -->
   
           <!-- ======================= Main Banner -->
                
	<section class="p-0">
		<div class="swiper-container height-500-responsive swiper-arrow-hover swiper-slider-fade">
                    <div class="swiper-slide bg-overlay-dark-2" style="background-image:url(../util/imagen/fondoo.jpg); background-position: center center; background-size: cover;height: 100%;">
			<div class="container h-100">
                            <div class="row d-flex h-100">
                                <div class="col-lg-8 col-xl-6 mr-auto slider-content justify-content-center align-self-center align-items-start text-left">
                                    <h2 class="animated fadeInUp dealy-500 display-6 display-md-4 display-lg-3 font-weight-bold text-white">Tu salud nuestro compromiso</h2>
                                </div>
                            </div>
			</div>
                    </div>	
		</div>
	</section>
                
	
    
    <!-- /.content -->
  </div>
            
            
	

	
	<?php include_once 'pie.view.php'; ?>
	<div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>
            
	<?php include_once 'scripts.view.php'; ?>
    </body>
</html>

