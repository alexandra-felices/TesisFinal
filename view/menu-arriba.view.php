<header class="header-static navbar-sticky navbar-light">
    <!-- Contactos y Uusario-->
    <div class="navbar-top d-none d-lg-block p-2">
	<div class="container" >
            <div class="d-flex justify-content-between align-items-center">
		<!-- Izquierda: Informacion-->
                    <div class="d-flex align-items-center">
                        <ul class="nav list-unstyled ml-3">
                            <li class="nav-item mr-3">
				<a class="navbar" href="#"><i class="fas fa-address-card mr-1"></i><strong>Cargo: </strong> &nbsp <?php echo $cargoUsuario; ?></a>
                            </li>
                            <li class="nav-item mr-3">
				<a class="navbar" href="#"><i class="fas fa-at mr-1"></i><strong>Email: </strong> &nbsp <?php echo $emailUsuario; ?></a>
                            </li>
			</ul>
                    </div>
                <!-- Derecha:Usuario-->
                    <div class="d-flex align-items-center">
			<!-- Cuenta -->
			<div class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownAccount" aria-haspopup="true" aria-expanded="false">
                                <img src="fotos/<?php echo $fotoUsuario; ?>" class="user-image" alt="User Image" width="13" height="13">
                                <span class="hidden-xs"><?php echo $nombreUsuario; ?></span>
                            </a>
                            <div class="dropdown-menu mt-2" aria-labelledby="dropdownAccount">
				<a class="dropdown-item" href="../controller/sesion.cerrar.controller.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                            </div>
			</div>
                    </div>
            </div>
	</div>
    </div>
    
    <!-- Logo y Menu de opciones -->
    <nav class="navbar navbar-expand-lg py-0 p-2">
	<div class="container">
            <!-- Logo -->
                <center><h3 class="font-weight-light">
                    <img src="../util/imagen/favicon.ico" class="img-circle"width="26">
                    PREVENCIÓN DE RIESGOS CARDIOVASCULARES
                </h3></center>
            
            <!-- Menu de opciones-->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"> </span>
            </button>
            
            <!--Contenido del menu  -->
            <div class="collapse navbar-collapse" id="navbarCollapse" style="height: 70px">
		<ul class="navbar-nav ml-auto">
                    <!-- Menu item 1 Admision-->
                    <li class="nav-item dropdown active">
			<a class="nav-link dropdown-toggle " href="#" id="admisionMenu" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i> Encuestas</a>
			<ul class="dropdown-menu" aria-labelledby="admisionMenu" >
                            <li><a class="dropdown-item" href="paginanoencontrada.view.php">Nueva encuesta<span class="badge badge-success ml-2">Importante</span></a></li>    
			</ul>
                    </li>
                   
                     <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="MantenimientoMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-edit"></i> Mantenimiento</a>
                            <ul class="dropdown-menu" aria-labelledby="MantenimientoMenu">
                                <div class="dropdown-submenu">
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Personal</li>
                                        <li> <a class="dropdown-item" href="personal.view.php">Personal<span class="badge badge-success ml-2">Importante</span></a> </li>
                                        <li> <a class="dropdown-item" href="usuario.view.php">Usuario<span class="badge badge-success ml-2">Importante</span></a></li>
                                        <li> <a class="dropdown-item" href="otros.view.php">Otros</a> </li>
                                    </ul>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Encuesta</li>
                                            <li> <a class="dropdown-item" href="paginanoencontrada.view.php">Variable</a> </li>
                                            <li> <a class="dropdown-item" href="paginanoencontrada.view.php">Pregunta</a> </li>
                                            <li> <a class="dropdown-item" href="paginanoencontrada.view.php">Nivel de Riesgo</a> </li>
                                            <li> <a class="dropdown-item" href="paginanoencontrada.view.php">Reglas<span class="badge badge-success ml-2">Importante</span></a> </li>
                                            <li> <a class="dropdown-item" href="paginanoencontrada.view.php">Plantilla<span class="badge badge-success ml-2">Importante</span></a> </li>
                                    </ul>
                                </div>                                               
                            </ul>
                    </li>
                    <div class="nav-item border-0 d-none d-lg-inline-block align-self-center">
                        <a href="#" class=" btn btn-sm btn-grad text-white mb-0" ><i class="fas fa-chart-area"></i>Reportes</a>
                </div>
                    
                   
                </ul>
            </div>
            <!-- Fin del Menu -->
            
	</div>
        
    </nav>
    <div class="divider"></div>
    <div class="container" style="height: 20px"></div>
    <!-- Fin de logo y menu -->
</header>
	<!-- =======================
	header End-->