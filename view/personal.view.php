<?php
    require_once 'validar.datos.sesion.view.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> TESIS IA | Docente</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <?php include_once 'estilos.view.php'; ?>
</head>

<body >
    <!-- Site wrapper -->
  
    <!-- Cargar -->
            <div class="preloader">
                <img src="../util/imagen/preloader.svg" alt="Pre-loader">
            </div>
            <!-- Principal -->
            
            
             <?php include_once 'menu-arriba.view.php'; ?>
           

     
    
        <!-- Content Header (Page header) -->
        
         <section class="p-0">
		<div class="container">
			<div class="d-block d-md-flex bg-grad p-4 p-sm-5 all-text-white border-radius-3 pattern-overlay-3">
				<div class="align-self-center text-center text-md-left">
					<h3> <i class="fas fa-user-check fa-1x"></i> Gestión de docentes de la Facultad de Ingeniería</h3>
				</div>
				<div class="mt-3 mt-md-0 text-center text-md-right ml-md-auto align-self-center">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" id="btnagregar"><i class="fa fa-copy"></i> Agregar nuevo docente</button>
				</div>
			</div>
		</div>
	</section>
        <div class="container" style="height: 20px"></div>
        
        <!-- Main content -->
        
          <section class="content  p-2">
              <div class="container">
              <div class="col-sm-12 mb-5">
            <div class="table-responsive-sm">
                            <div id="listado"></div>
            </div>
                </div>
              </div>
            
            <!-- INICIO del formulario modal -->
            <small>
                <form id="frmgrabar">
                    <div class="modal fade text-left" id="myModal" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header bg-primary ">
                            <h5 class="modal-title text-white" id="titulomodal">Título de la ventana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body ">
                                <div class="row">
                                    <div class="col-md-6">
                                    
                                        <p >
                                            Tipo de documento <span style="color: red">*</span>
                                            <select name="cboTipoDocumento" id="cboTipoDocumento" class="custom-select input-sm" required="" >
                                            <option value="0">Seleccione un tipo de documento</option>    
                                            <option value="1">Documento de identidad</option>    
                                            <option value="2">Pasaporte</option>    
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <span   id="txtTipoOperacion" name="txtTipoOperacion"></span>
                                            Número de documento <span style="color: red">*</span>
                                            <input type="text number" 
                                                          name="txtDni"
                                                          required=""
                                                          id="txtDni" 
                                                          class="form-control input-sm" 
                                                          size="15" maxlength="15"
                                                          onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;"
                                            >
                                        </p>
                                    </div>
                                    
<!--                                    <div class="col-md-6">
                                        <p>
                                            
                                            Grado<span style="color: red">*</span>
                                            <select name="cboGrado" id="cboGrado" class="custom-select imput-sm" required="" >
                                                
                                            </select>
                                        </p>
                                    </div>
<!--                                    <div class="col-md-6">
                                        <p>
                                            
                                            Número Colegiatura<span style="color: red">*</span>
                                            <input type="text number" 
                                                          name="txtNumColegiatura"
                                                          required=""
                                                          id="txtNumColegiatura" 
                                                          class="form-control input-sm" 
                                                          size="6" maxlength="6"
                                                          onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;"
                                                          >
                                        </p>
                                    </div>-->
                                
                                    <div class="col-md-6">
                                        <p>
                                            Apellido Paterno <span style="color: red">*</span>
                                            <input type="text" 
                                                          name="txtApellidoPaterno" 
                                                          id="txtApellidoPaterno" 
                                                          required=""
                                                          class="form-control input-sm text-bold">
                                        </p>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <p>
                                            Apellido Materno  <span style="color: red">*</span>
                                            <input type="text" 
                                                          name="txtApellidoMaterno" 
                                                          id="txtApellidoMaterno" 
                                                          required=""
                                                          class="form-control input-sm text-bold">
                                        </p>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <p>
                                            Nombres <span style="color: red">*</span>
                                            <input type="text" 
                                                          name="txtNombres" 
                                                          id="txtNombres" 
                                                          required=""
                                                          class="form-control input-sm text-bold">
                                        </p>
                                    </div>
                               
                              
                                  <div class="col-md-6">
                                        <p>
                                            Fecha de Nacimiento <span style="color: red">*</span>
                                            <input type="date" 
                                                          name="txtFechaNacimiento" 
                                                          id="txtFechaNacimiento" 
                                                          class="form-select input-sm" required="">
                                        </p>
                                    </div>
                                  <div class="col-md-6">
                                        <p>
                                            Sexo <span style="color: red">*</span>
                                            <select name="cboSexo" id="cboSexo" class="custom-select input-sm" required="" >
                                            <option value="0">Seleccione sexo</option>    
                                            <option value="M">MASCULINO</option>    
                                            <option value="F">FEMENINO</option>    
                                            </select>
                                        </p>
                                    </div>
 </div>
                          <div class="divider py-3"></div>
                              
                              <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            Dirección <span style="color: red">*</span>
                                            <input type="text" 
                                                          name="txtDireccion" 
                                                          id="txtDireccion" 
                                                          required=""
                                                          class="form-control input-sm text-bold">
                                        </p>
                                    </div>
                                    
                                
<!--                                      <div class="col-md-6">
                                        <p>
                                            Telefono Fijo <span style="color: red">*</span>
                                            <input type="text" 
                                                          name="txtTelefonoFijo" 
                                                          id="txtTelefonoFijo" 
                                                          class="form-control input-sm text-bold " required=""
                                                          onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
                                        </p>
                                    </div>
-->                                    
                                    <div class="col-md-6">
                                        <p>
                                            Telefono Movil <span style="color: red">*</span>
                                            <input type="text number" 
                                                          name="txtTelefonoMovil" 
                                                          id="txtTelefonoMovil" 
                                                          class="form-control input-sm text-bold" required=""
                                                          size="9" maxlength="9"
                                                          onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
                                        </p>
                                    </div>
                                    
<!--                                       <div class="col-md-6">
                                        <p>
                                            Telefono Movil 2 <input type="text number" 
                                                          name="txtTelefonoMovil2" 
                                                          id="txtTelefonoMovil2" 
                                                          class="form-control input-sm text-bold" 
                                                          onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
                                        </p>
                                    </div>

                                  <div class="col-md-12">
                                        <p>
                                            E-mail
                                            <input type="email" 
                                                          name="txtEmail" 
                                                          id="txtEmail" 
                                                          class="form-control input-sm text-bold">
                                        </p>
                                    </div>
<div class="col-md-4">
                                        <p>
                                            Número de colegiatura <span style="color: red">*</span>
                                            <input type="text number" 
                                                          name="txtNroColegiatura" 
                                                          id="txtNroColegiatura" 
                                                          class="form-control input-sm text-bold"
                                                          required=""
                                        </p>
                                    </div>
                                  -->
                                  <div class="col-md-4">
                                    
                                        <p >
                                            Departamento <span style="color: red">*</span>
                                            <select name="cboDepartamento" id="cboDepartamento" class="custom-select input-sm" required="" >
                                                
                                            </select>
                                        </p>
                                   
                                </div>
                                  <div class="col-md-4">
                                    
                                        <p >
                                            Provincia <span style="color: red">*</span>
                                            <select name="cboProvincia" id="cboProvincia" class="custom-select input-sm" required="" >
                                                
                                            </select>
                                        </p>
                                   
                                </div>
                                  <div class="col-md-4">
                                    
                                        <p >
                                            Distrito <span style="color: red">*</span>
                                            <select name="cboDistrito" id="cboDistrito" class="custom-select input-sm" required="" >
                                                
                                            </select>
                                        </p>
                                   
                                </div>
                                </div>
                               <div class="divider py-3"></div>
                              <div class="row">
                                  <div class="col-md-4">
                                        <p>
                                            
                                            Grado académico<span style="color: red">*</span>
                                            <select name="cboGrado" id="cboGrado" class="custom-select imput-sm" required="" >
                                                
                                            </select>
                                        </p>
                                    </div>
                                  <div class="col-md-8">
                                    
                                        <p>
                                            Título Académico <span style="color: red">*</span>
                                            <input type="text" 
                                                          name="txtTitulo" 
                                                          id="txtTitulo" 
                                                          class="form-control input-sm text-bold"
                                                          required="">
                                        </p>
                                   
                                </div>

                                    </div>
<!--                                    <div class="col-md-6">
                                    
                                        <p >
                                            Cargo <span style="color: red">*</span>
                                            <select name="cboCargo" id="cboCargo" class="custom-select imput-sm" required="" >
                                                
                                            </select>
                                        </p>
                                   
                                </div>-->
                                  
                                  
                                </div>
                              
                          
                          <div class="modal-footer bg-light">
                              <button type="submit" class="btn btn-success" aria-hidden="true"><i class="fa fa-save"></i> Grabar</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btncerrar"><i class="fas fa-times-circle"></i> Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
            </small>
            <!-- FIN del formulario modal -->
            
        </section>
       
        <!-- /.content -->
      
      <!-- /.content-wrapper -->

      
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <!-- Main content -->
    <section class="content">
    </section>
    <!-- /.content -->
  </div>
         <?php include_once 'pie.view.php'; ?>
	<div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

	<?php include_once 'scripts.view.php'; ?>
        
      
    <script src="js/departamento.js" type="text/javascript"></script>
  <script src="js/provincia.js" type="text/javascript"></script>
  <script src="js/distrito.js" type="text/javascript"></script>
    <script src="js/grado.js" type="text/javascript"></script>
    <script src="js/personal.js" type="text/javascript"></script>
    
    
    
</body>
</html>

