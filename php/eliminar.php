<?php
require "conexion.php";
if (isset($_GET['id_prod'])) {

  $id = $_GET['id_prod'];
  $buscarId = "SELECT * FROM productos WHERE id_prod LIKE $id;";
  $stmt = $conn->prepare($buscarId);
  $stmt->execute();
  $fila = $stmt->fetch(PDO::FETCH_ASSOC);

}

if (isset($_POST['btn-eliminar'])) {
  $query = "DELETE FROM productos WHERE id_prod=$id;";
  $stmtEliminar = $conn->prepare($query);
  $stmtEliminar->execute();

  header("Location: ../index.php");
}
//DELETE FROM `mydb`.`productos` WHERE `id_prod`='25';



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar producto</title>
</head>
  <body>
    <h1>Eliminar</h1>
    <table class='table table-striped'>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre del producto</th>
                    <th>Precio Costo</th>
                    <th>Precio Venta</th>
                    <th>Proveedor</th>
                    <th>Categoria</th>
                    <th>Ultima mod.</th>
                    <th>Oferta</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $fila['id_prod'] ?></td>
                    <td><?php echo $fila['nombre_prod'] ?></td>
                    <td><?php echo $fila['precio_costo'] ?></td>
                    <td><?php echo $fila['precio_venta'] ?></td>
                    <td><?php echo $fila['proveedor'] ?></td>
                    <td><?php echo $fila['categoria'] ?></td>
                    <td><?php echo $fila['ultima_modificacion'] ?></td>
                    <td><?php echo $fila['oferta'] ?></td>
                  </tr>
                </tbody>
              </table>

              <form class="" action="" method="post">
                <input  class="btn btn-success d-flex justify-content-end" type="submit" name="btn-eliminar" value="ELIMINAR">
              </form>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>
