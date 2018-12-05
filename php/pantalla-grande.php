<?php
include "conexion.php";

$query = "SELECT * FROM productos;";
$stmt = $conn->prepare($query);
$stmt->execute();

$filas = $stmt->rowCount();
$productos;
$i = 0;

if ($filas > 0) {
  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $productos[$i] = $fila;
    $i++;
  }
}
?>
