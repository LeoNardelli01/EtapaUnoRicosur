<?php
require "php/agregarProd.php";


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Agregar Productos</title>
</head>
  <body>
    <div class="container">
      <header>
        <h1>Agregar Productos</h1>
        <a class="btn btn-primary" href="index.php">Volver al buscador</a>
        <br>
      </header>
      <section class="formulario">
        <form  id="form-agregar" class="" action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nombre_prod">Producto:</label>
            <input required autocomplete="off" class="form-control" id="nombre_prod" type="text" name="nombre_prod" value="">
          </div>

          <div class="form-group">
            <label for="precio_costo">Precio de Costo:</label>
            <input required autocomplete="off" class="form-control" id="precio_costo" type="number" step="any" name="precio_costo" value="">
          </div>

          <div class="form-group">
            <label for="precio_venta">Precio de Venta:</label>
            <input required autocomplete="off" class="form-control" id="precio_venta" type="number" step="any" name="precio_venta" value="">
          </div>

          <div class="form-group">
            <label for="proveedor">Proveedor</label>
            <input autocomplete="off" class="form-control" id="proveedor" type="text" name="proveedor" value="">
          </div>
          <br>
          <select class="custom-select" name="categoria">
            <option value="Sin categoria">Seleccionar categoria</option>
            <option value="fiambreria">Fiambreria</option>
            <option value="almacen">Almacen</option>
            <option value="lacteos">Lacteos</option>
            <option value="congelados">Congelados</option>
            <option value="bebidas_sin_alcohol">Bebidas sin alcohol</option>
            <option value="bebidas_con_alcohol">Bebidas con Alcohol</option>
          </select>

          <div class="form-group">
            <br>
            <label for="imagen">Subir una Imagen</label>
            <input type="file" class="form-control-file" id="imagen" name="img-producto">
          </div>

          <div class="d-flex justify-content-center">
            <div class="custom-control custom-checkbox">
              <input type="checkbox"  name="check-oferta"class="custom-control-input" id="customCheck1" value="1">
              <label class="custom-control-label" for="customCheck1">Quieres ponerlo en OFERTA?</label>
            </div>
          </div>


          <input id="btn-agregar" class="btn btn-success float-right" type="submit" name="btn-agregar" value="Agregar">

        </form>

      </section>

      <!--
      <div id="alerta-guardado" class="alert alert-success" role="alert"><strong>GUARDADO!!!</strong>exitoso</div>
      -->
    </div>

  <script src="js/agregarProd.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
