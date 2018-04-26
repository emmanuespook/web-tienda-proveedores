<?php
include("../../config/db.php");

$query = "select ima from products where id=11";
 
$stmt = $gbd->prepare($query);
 
$stmt->execute();
 
//Usamos bindColumn() que se encarga vincular una variable con el resultado de la consulta
 
/* Usamos el procedimiento PDO::PARAM_LOB, esto sirve para asignarle el tipo a la variable, nosotros usaremos el tipo PARAM_LOB para guardar binarios */
 
$stmt->bindColumn(1, $data, PDO::PARAM_LOB);
 
/* FETCH_BOUND: devuelve TRUE y asigna los valores de las columnas definidas anteriormente con bindColumn*/
 
$stmt->fetch(PDO::FETCH_BOUND);
 
//le decimos el tipo de la imagen para que se visualice y la mostramos
 
header("Content-Type: image/png");
 
echo $data;

?>