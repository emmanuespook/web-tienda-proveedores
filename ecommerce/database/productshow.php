<?php
include('../../config/db.php');

$sql='SELECT p.*,s.rsocial,s.country,s.state, s.cobertura FROM products as p, sellers as s WHERE s.user_id=p.user_id AND p.id=?';

$conn=$gbd->prepare($sql);

$conn->execute(array($id));

while($row=$conn->fetch(PDO::FETCH_OBJ)){
	$image="image/".$row->id.$row->extension;
	$iduser=$row->user_id;
	$title=$row->title;
	$princing=$row->princing;
	$princingMax=$row->princingMax;
	$description=$row->description;
	$extension=$row->extension;
	$minima=$row->minima;
	$Tipo_unidad=$row->Tipo_unidad;
	$razon=$row->rsocial;
	$ubicacion=$row->country.", ".$row->state.".";
	$cobertura=$row->cobertura;
}

?>