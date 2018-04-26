<?php
include('../config/db.php');

$a=$_POST['title'];
$b=$_POST['minima'];
$c=$_POST['unidad'];
$d=$_POST['princing'];
$e=$_POST['princingMax'];
$f=$_POST['category'];
$g=$_POST['sub'];
$h=$_POST['clas'];
$i=nl2br($_POST['description']);

$j=$_POST['descuento'];
$k=$_POST['envio'];
$l=$_POST['tiempo'];
$m=$_POST['garantia'];
$n=$_POST['devolucion'];
$idp=$_POST['idproduct'];

$sentence=$gbd->prepare("UPDATE products SET title=:a, description=:i, princing=:d, minima=:b, Tipo_unidad=:c, princingMax=:e, categoria=:f, sub=:g, clas=:h, t_garantia=:m, devoluciones=:n, t_entrega=:l, envio=:k, descuento_vol=:j WHERE id=:id");

$sentence->bindParam(':a', $a);
$sentence->bindParam(':i', $i);
$sentence->bindParam(':d', $d);
$sentence->bindParam(':b', $b);
$sentence->bindParam(':c', $c);
$sentence->bindParam(':e', $e);
$sentence->bindParam(':f', $f);
$sentence->bindParam(':g', $g);
$sentence->bindParam(':h', $h);
$sentence->bindParam(':m', $m);
$sentence->bindParam(':n', $n);
$sentence->bindParam(':l', $l);
$sentence->bindParam(':k', $k);
$sentence->bindParam(':j', $j);
$sentence->bindParam(':id', $idp);

if ($sentence->execute()) {
	echo "<script>window.location='../view/auth/home.php'</script>";
}else{
	//echo "error";
	echo "<script>history.back();</script>";
}

?>