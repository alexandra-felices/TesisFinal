
function cargarComboDepartamento(p_nombreCombo, p_tipo){
    $.post
    (
	"../controller/departamento.cargar.datos.controller.php"
    
    ).done(function(resultado){
	var datosJSON = resultado;
	
        if (datosJSON.estado===200){
            var html = "";
            if (p_tipo==="seleccione"){
                html += '<option value="">Seleccione un departamento</option>';
            }else{
                html += '<option value="0">Todos los departamentos</option>';
            }

            
            $.each(datosJSON.datos, function(i,item) {
                html += '<option value="'+item.iddepartamento+'">'+item.nombre +'</option>';
            });
            
            $(p_nombreCombo).html(html);
	}else{
            swal("Mensaje del sistema", resultado , "warning");
        }
    }).fail(function(error){
	var datosJSON = $.parseJSON( error.responseText );
	swal("Error", datosJSON.mensaje , "error");
    });
}

