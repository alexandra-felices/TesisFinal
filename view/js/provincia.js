
function cargarComboProvincia(p_nombreCombo, p_tipo, p_cod_dep){
    $.post
    (
	"../controller/provincia.cargar.datos.controller.php",
{
    p_codigo_dep : p_cod_dep
    }
    
    ).done(function(resultado){
	var datosJSON = resultado;
	
        if (datosJSON.estado===200){
            var html = "";
            if (p_tipo==="seleccione"){
                html += '<option value="">Seleccione una provincia</option>';
            }else{
                html += '<option value="0">Todas las provincias</option>';
            }

            
            $.each(datosJSON.datos, function(i,item) {
                html += '<option value="'+item.idprovincia+'">'+item.nombre +'</option>';
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
