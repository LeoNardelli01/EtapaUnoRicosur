<?php
require "php/conexion.php";

$query = "SELECT * FROM productos WHERE oferta LIKE '1'";
$stmt = $conn->prepare($query);
$stmt->execute();

$filas = $stmt->rowCount();

$producto;
$i = 0;

if ($filas > 0) {
  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $producto[$i] = $fila;
    $i++;
  }
}


$conn = NULL;

?>
