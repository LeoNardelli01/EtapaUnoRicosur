$(document).ready(function(){


  $("#caja_busqueda").focus();

  $(buscar_datos());
  function buscar_datos(consulta){
    $.ajax({
      url: "php/buscar.php",
      data: {'buscar':consulta},
      method: 'GET',
      success: function(respuesta){
        $(".mostrar-datos").html(respuesta);
      }
    });
  }

  $(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if (valor != "") {
      buscar_datos(valor);
    }else{
      buscar_datos();
    }
  });


});//fin .ready
