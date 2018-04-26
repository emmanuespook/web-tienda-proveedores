<?php

$sql1=$gbd->prepare("SELECT * FROM products WHERE id=?");
$sql1->execute(array($idproduct));

while($r=$sql1->fetch(PDO::FETCH_OBJ)){
	$title=$r->title;
	$description=$r->description;
	$princing=$r->princing;
	$minima=$r->minima;
	$unidad=$r->Tipo_unidad;
	$princingMax=$r->princingMax;
	$categoria=$r->categoria;
	$sub=$r->sub;
	$clas=$r->clas;
	$t_garantia=$r->t_garantia;
	$devoluciones=$r->devoluciones;
	$t_entrega=$r->t_entrega;
	$envio=$r->envio;
	$descuento_vol=$r->descuento_vol;
}

?>