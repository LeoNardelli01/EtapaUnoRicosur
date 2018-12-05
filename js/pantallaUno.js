$(document).ready(function(){

  $("#slider-prod > div:gt(0)").hide();

  setInterval(function(){
    $('#slider-prod > div:first')
    .slideToggle(2000)
    .next()
    .slideToggle(2000)
    .end()
    .appendTo('#slider-prod');
  }, 6000);



 var now = new Date();
 var mes = now.getMonth();
 var dia = now.getDay();
 var numeroDia = now.getDate();
 var hora = now.getHours();
 var minuto = now.getMinutes();

 var meses = ["Enero",
              "Febrero",
              "Marzo",
              "Abril",
              "Mayo",
              "junio",
              "Julio",
              "Agosto",
              "Septiembre",
              "Octubre",
              "Noviembre",
              "Diciembre"
              ];

var texto = meses[mes] + " en Rico Sur.";
$("#mes-oferta").append(texto);

var dias = ["Domingo",
            "Lunes",
            "Martes",
            "Miercoles",
            "Jueves",
            "Viernes",
            "Sabado"
            ];

var tituloDia = "Lo mejor del " + dias[dia] + " " + numeroDia;
$("#mostrar-dia").append(tituloDia);


});
