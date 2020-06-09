$(document).ready(function(){
    //Esto se ejecuta cuando carga la página
    //alert("ha cargado la página");
    
    cargarComboDepartamento("#cboDepartamento", "seleccione");
    cargarComboGrado("#cboGrado", "seleccione");
    listar();
    
});
$("#cboDepartamento").change(function () {
    
    var codigo = $("#cboDepartamento").val();
           cargarComboProvincia("#cboProvincia", "seleccione", codigo);
    });
$("#cboProvincia").change(function () {
    
    var departamento = $("#cboDepartamento").val();
    var codigo = $("#cboProvincia").val();
           cargarComboDistrito("#cboDistrito", "seleccione",departamento, codigo);
    });


function listar(){
    $.post
    (
        "../controller/personal.listar.controller.php"
        
    ).done(function(resultado){
        var datosJSON = resultado;
        
        if (datosJSON.estado===200){
            var html = "";

            html += '<small>';
            html += '<table id="tabla-listado" class="table table-striped table-bordered">';
            html += '<thead class="all-text-white bg-grad">';
            html += '<tr>';
            html += '<th>DNI</th>';
            html += '<th>GRADO</th>';
            html += '<th>APELLIDOS Y NOMBRES</th>';            
            html += '<th>ESPECIALIDAD</th>';
            html += '<th>N. COLEGIATURA</th>';
	    html += '<th style="text-align: center">OPCIONES</th>';
            html += '</tr>';
            html += '</thead>';
            html += '<tbody>';

            //Detalle
            $.each(datosJSON.datos, function(i,item) {
                html += '<tr>';
                html += '<td>'+item.dni+'</td>';
                html += '<td>'+item.grado+'</td>';
                html += '<td>'+item.nombre_completo+'</td>';
                html += '<td>'+item.especialidad+'</td>';
                html += '<td>'+item.nro_colegiatura+'</td>';
		html += '<td align="center">';
		html += '<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal" onclick="leerDatos(' + item.dni + ')"><i class="fas fa-pencil-alt"></i></button>';
		html += '&nbsp;&nbsp;';
		html += '<button type="button" class="btn btn-danger btn-xs" onclick="eliminar(' + item.dni + ')"><i class="fas fa-times"></i></button>';
		html += '</td>';
                html += '</tr>';
            });

            html += '</tbody>';
            html += '</table>';
            html += '</small>';
            
            $("#listado").html(html);
            
            
            $("#tabla-listado").dataTable({
                "aaSorting": [[2, "asc"]]
            });
            
            
            
	}else{
            //swal("Mensaje del sistema", resultado , "warning");
        }
        
    }).fail(function(error){
        var datosJSON = $.parseJSON( error.responseText );
        //swal("Error", datosJSON.mensaje , "error"); 
    });
}



$("#frmgrabar").submit(function(event){
    event.preventDefault();
    
    swal({
            title: "Confirmar",
            text: "¿Esta seguro de grabar los datos ingresados?",
            showCancelButton: true,
            confirmButtonColor: '#3d9205',
            confirmButtonText: 'Si',
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true,
            imageUrl: "../images/pregunta.png"
    },
    function(isConfirm){ 

        if (isConfirm){ //el usuario hizo clic en el boton SI     
            //procedo a grabar
            //Llamar al controlador para grabar los datos
                   
            $.post(
                "../controller/personal.agregar.editar.controller.php",
                {
                    p_dni : $("#txtDni").val(),
                    p_apellido_paterno : $("#txtApellidoPaterno").val(),
                    p_apellido_materno : $("#txtApellidoMaterno").val(),
                    p_nombres : $("#txtNombres").val(),
                    p_direccion : $("#txtDireccion").val(),
                    p_telefono_fijo : $("#txtTelefonoFijo").val(),
                    p_telefono_movil1 : $("#txtTelefonoMovil").val(),
                    p_telefono_movil2 : $("#txtTelefonoMovil2").val(),
                    p_email: $("#txtEmail").val(),
                    p_codigo_cargo: $("#cboCargo").val(),
                    p_tipo_ope: $("#txtTipoOperacion").val(),
                }
              ).done(function(resultado){                    
                  var datosJSON = resultado;

                  if (datosJSON.estado===200){
                      swal("Exito", datosJSON.mensaje, "success");
                      $("#btncerrar").click(); //Cerrar la ventana 
                      listar(); //actualizar la lista
                  }else{
                      swal("Mensaje del sistema", resultado , "warning");
                  }

              }).fail(function(error){
                    var datosJSON = $.parseJSON( error.responseText );
                    swal("Error", datosJSON.mensaje , "error");
              }) ;
            
        }
    });
    
});


$("#btnagregar").click(function(){
    $("#txtTipoOperacion").val("agregar");
    $("#txtDni").val("");
    $("#txtDni").prop("readonly", false);
    $("#txtApellidoPaterno").val("");
    $("#txtApellidoMaterno").val("");
    $("#txtNombres").val("");
    $("#txtDireccion").val("");
    $("#txtTelefonoFijo").val("");
    $("#txtTelefonoMovil").val("");
    $("#txtTelefonoMovil2").val("");
    $("#txtEmail").val("");
    $("#cboCargo").val("");
    $("#titulomodal").html("Agregar nuevo docente");
});




$("#myModal").on("shown.bs.modal", function(){
    $("#txtDni").focus();
});

//if($("#txtTipoOperacion").val()===("editar")){
//    
//    document.getElementById("txtDni").setAttribute("readonly",true);
//}


//
//if($("#txtTipoOperacion").val() === "editar"){
////    document.getElementById("txtDni").setAttribute("readonly",false);
//}


//if($('#txtTipoOperacion').text("editar")){
//    document.getElementById('txtDni').setAttribute("readOnly",true);
//}



function leerDatos(dni){
    
    $.post
        (
            "../controller/personal.leer.datos.controller.php",
            {
                p_dni: dni
            }
        ).done(function(resultado){
           var jsonResultado = resultado;
           if (jsonResultado.estado === 200){
                $("#txtTipoOperacion").val("editar");
                $("#txtDni").prop("readonly", true);
//                document.getElementById("txtDni").setAttribute("readOnly",true);
                $("#txtDni").val( jsonResultado.datos.dni);
                $("#txtApellidoPaterno").val( jsonResultado.datos.apellido_paterno);
                $("#txtApellidoMaterno").val( jsonResultado.datos.apellido_materno);
                $("#txtNombres").val( jsonResultado.datos.nombres);
                $("#txtDireccion").val( jsonResultado.datos.direccion);
                $("#txtTelefonoFijo").val( jsonResultado.datos.telefono_fijo);
                $("#txtTelefonoMovil").val( jsonResultado.datos.telefono_movil1);
                $("#txtTelefonoMovil2").val( jsonResultado.datos.telefono_movil2);
                $("#txtEmail").val( jsonResultado.datos.email);
                // $("#cboCargo").val( jsonResultado.datos.codigo_cargo);
                // $("#cboCargo").change();
                cargarComboGrado( jsonResultado.datos.codigo_grado)
                $("#titulomodal").html("Modificar datos del personal");
           }
        }).fail(function(error){
            
            var datosJSON = $.parseJSON( error.responseText );
            swal("Error", datosJSON.mensaje , "error");
        });
        
}


function eliminar(dni){
   swal({
            title: "Confirme",
            text: "¿Esta seguro de eliminar el registro seleccionado?",

            showCancelButton: true,
            confirmButtonColor: '#d93f1f',
            confirmButtonText: 'Si',
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true,
            imageUrl: "../util/imagen/eliminar.png"
	},
	function(isConfirm){
            if (isConfirm){
                $.post(
                    "../controller/personal.eliminar.controller.php",
                    {
                        p_dni: dni
                    }
                    ).done(function(resultado){
                        var datosJSON = resultado;   
                        if (datosJSON.estado===200){ //ok
                            listar();
                            swal("Exito", datosJSON.mensaje , "success");
                        }

                    }).fail(function(error){
                        var datosJSON = $.parseJSON( error.responseText );
                        swal("Error", datosJSON.mensaje , "error");
                    });
                
            }
	});
   
}


