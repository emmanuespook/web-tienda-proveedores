<?php
$dsn = 'mysql:host=localhost;dbname=ecommerce;charset=utf8';
$usuario = 'root';
$contra= '';
$error='';
try{
	$gbd = new PDO($dsn,$usuario,$contra);

}catch(PDOException $e){
	$error = '<div><h2>LO SENTIMOS FALLO LA CONEXION...<h2></div>';
}

?>
