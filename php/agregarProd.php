<?php

require "conexion.php";

$directorioDestino = "";

if (isset($_POST['btn-agregar'])){

  $nombre_prod = $_POST['nombre_prod'];
  $precio_costo = $_POST['precio_costo'];
  $precio_venta = $_POST['precio_venta'];
  $proveedor = $_POST['proveedor'];
  $categoria = $_POST['categoria'];
  $oferta = $_POST['check-oferta'];



  if (isset($_FILES['img-producto']['name'])) {

    $directorioDestino = "img/imagenSubidas/";
    $tmp_name = $_FILES['img-producto']['tmp_name'];

    $imgNombre = $_FILES['img-producto']['name'];
    $imgCopiada = $directorioDestino.=$imgNombre;
    
    move_uploaded_file($tmp_name, $imgCopiada);

  }

  $query = "INSERT INTO productos (nombre_prod, precio_costo, precio_venta, proveedor, imagen, categoria, oferta)
            VALUES ('$nombre_prod', '$precio_costo', '$precio_venta', '$proveedor', '$imgCopiada', '$categoria', '$oferta');";

  $stmt = $conn->prepare($query);
  $stmt->execute();

  $conn = null;
}


?>
