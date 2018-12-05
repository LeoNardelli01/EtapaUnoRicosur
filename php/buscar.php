<?php

require "conexion.php";

$salida = "";
$query = "SELECT * FROM productos ORDER BY ultima_modificacion DESC LIMIT 8;";


if (isset($_GET['buscar'])) {
  $buscar = $_GET['buscar'];
  $query = "SELECT * FROM productos WHERE nombre_prod LIKE '%".$buscar."%'
            OR proveedor LIKE '%".$buscar."%';";
}


$stmt = $conn->prepare($query);
$resultado = $stmt->execute();
$filas = $stmt->rowCount();


if ($filas > 0) {
  $salida.= "<table class='table table-striped'>
              <thead>
                <tr>
                  <th>IMG</th>
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
              <tbody>";


  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)){

    $salida.= "<tr>
              <td><img src='".$fila['imagen']."' alt='' width='45' heigth='45'></td>
              <td>".$fila['nombre_prod']."</td>
              <td>$".$fila['precio_costo']."</td>
              <td class='font-weight-bold'>$".$fila['precio_venta']."</td>
              <td>".$fila['proveedor']."</td>
              <td>".$fila['categoria']."</td>
              <td>".$fila['ultima_modificacion']."</td>
              <td>".$fila['oferta']."</td>
              <td>
                    
                <a class='btn btn-warning' href='php/modificar.php?id_prod=".$fila['id_prod']."'>&#9998;</a>

                <a class='btn btn-danger' href='php/eliminar.php?id_prod=".$fila['id_prod']."'>&times;</a>

              </td>
            </tr>";
  }

  $salida.= "</tbody></table>";

}else{
  $salida.= "No se encontraron coincidencias";
}

echo $salida;


$conn = null;

?>
