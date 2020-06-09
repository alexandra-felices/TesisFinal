
function cargarComboDistrito(p_nombreCombo, p_tipo, p_cod_dep, p_cod_pro){
    $.post
    (
	"../controller/distrito.cargar.datos.controller.php",
{
    p_codigo_dep : p_cod_dep,
    p_codigo_pro : p_cod_pro
    }
    
    ).done(function(resultado){
	var datosJSON = resultado;
	
        if (datosJSON.estado===200){
            var html = "";
            if (p_tipo==="seleccione"){
                html += '<option value="">Seleccione un distrito</option>';
            }else{
                html += '<option value="0">Todos los distritos</option>';
            }

            
            $.each(datosJSON.datos, function(i,item) {
                html += '<option value="'+item.iddistrito+'">'+item.nombre +'</option>';
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
