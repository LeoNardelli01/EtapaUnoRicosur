<?php
require "php/pantalla-uno.php";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pantalla UNO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme|Lobster|Luckiest+Guy|Hammersmith+One" rel="stylesheet">
  </head>

  <body>
    <style media="screen">

      header {
        background-color: rgba(159, 71, 249, 0);
      }

      .card{
        width: 280px;
        height: 422px;
        background: linear-gradient(to right, rgba(0, 143, 10, 0.64), rgba(219, 217, 218, 0.15), rgba(0, 143, 10, 0.64));

      }
      .card img{
        width: 100%;
        max-height: 230px;

      }

      .fondo{
        background-image: url("img/fondo.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;

      }
      h1 {
        color: white;
        font-family: 'Lobster', cursive;
        font-size: 55px;
        background-color: rgba(0, 0, 0, 0.63);
        max-width: 425px;
      }
      #mostrar-dia{
        margin-bottom: 17px;
        font-family: 'Acme', sans-serif;
        padding-top: 17px;
        position: relative;
        right: 15px;
      }
      #precio{
        font-family: 'Luckiest Guy', cursive;
        font-size: 40px;
      }
      #titulo-producto{
        font-family: 'Hammersmith One', sans-serif;
        font-size: 20px;
      }
      #slider-prod {
        margin-left: 86px;
        margin-top: 162px;

      }
      #slideshow > div {
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        bottom: 10px;
      }
      #slider-lista{
        max-width: 450px;
        margin-left: 20px;
      }


    </style>


      <div class="container-fluid fondo">
        <header>
          <h1 id="mes-oferta"></h1>
          <div id="reloj">

          </div>
        </header>

        <div class="row">
          <div class="col-4" >

            <div id="slider-prod">
              <h4 class="text-center" id="mostrar-dia"></h4>
              <?php


                if ($producto == NULL) {
                  echo "<br>
                          <p>Se terminaron las ofertas de hoy...</p>";
                } else{
                  for ($i=0; $i < count($producto); $i++) {
                    echo "
                            <div class='card'>

                              <div class='card-body'>
                                <p id='titulo-producto' class='card-text text-center'>".$producto[$i]["nombre_prod"]."</p>
                              </div>

                              <img src=".$producto[$i]['imagen']." alt='Card image'>
                              <div class='card-body '>
                                <p  id='precio' class='card-text text-right font-weight-bold'>$ ".$producto[$i]['precio_venta']."</p>
                              </div>
                            </div>
                      ";
                  }
                }
              ?>

            </div>
          </div>

          <div class="col-8">
            <h3 class="text-center">Columna de ofertas</h3>

          </div>

        </div>

    </div>
    <!-- Bootstrap y Jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="js/pantallaUno.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


  </body>
</html>
