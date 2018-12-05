<?php
include "php/pantalla-grande.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pantalla Gigante</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    <style media="screen">
      *{
        margin: 0 !important;
        padding: 0 !important;
      }
      .container-fluid {
        background-color: rgb(136, 241, 82);
        width: 100vw;
        height: 100vh;
      }

      #cabecera{
        width: 100%;
        height: 100px;
        background-color: rgb(128, 128, 128);
      }
    </style>

    <div class="container-fluid">
      <header id="cabecera">

      </header>

      <section>
        <?php
          if ($productos == NULL) {
            echo "No hay productos en la base de datos";
          }else{
            for ($i=0; $i < count($productos) ; $i++) {
              echo "
                      <div class='card'>

                        <div class='card-body'>
                          <p id='titulo-producto' class='card-text text-center'>".$productos[$i]["nombre_prod"]."</p>
                        </div>

                        <img src=".$productos[$i]['imagen']." alt='Card image'>
                        <div class='card-body '>
                          <p  id='precio' class='card-text text-right font-weight-bold'>$ ".$productos[$i]['precio_venta']."</p>
                        </div>
                      </div>
                ";
            }
          }
        ?>
      </section>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>
