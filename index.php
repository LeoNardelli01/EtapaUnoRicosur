
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Buscador de Productos</title>
  </head>
  <body>
    <div class="container-fluid">
      <header>
        <h1 class="text-center">Ricosur</h1>
        <h6 class="text-center">Tu super Online...</h6>
      </header>

      <section class="buscar">
        <div class="form-group">
          <input id="caja_busqueda" class="form-control" type="text" name="caja_busqueda" value="" placeholder="Nombre del producto, nombre del proveedor">
        </div>
      </section>

      <div class="container-fluid">
        <a  class="btn btn-success" href="agregar.php">Agregar Producto</a>
        <a  class="btn btn-primary float-right" id="btn-pantallaUno" target="_blank" href="pantallaUno.php">Pantalla UNO</a>
        <a  class="btn btn-warning float-right" id="btn-pantallaGrande" href="pantallaGrande.php" target="_blank">Pantalla Grande</a>
      </div>
      <br><br>
      <section class="mostrar-datos"><!-- DATOS--></section>

    </div> <!--FIN container-fluid -->

  
  <script src="js/index.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
