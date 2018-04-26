<!DOCTYPE html>
<html>
<head>
<title>FreemexStore</title>

<!-- ALERTIFY SCRIPTS Y CSS -->
		<script type="text/javascript" src="../js/alertify.js"></script>
		<link rel="stylesheet" href="../css/alertify.core.css" />
		<link rel="stylesheet" href="../css/alertify.default.css" />			
</head>
<body> 
<?php
include('../config/db.php');

$sql="SELECT Max(id) FROM products";
$id=$gbd->query($sql);
foreach($id as $row){ 
$foto=$row[0]+1;
}
$user=$_POST['user'];
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



if (!isset($_FILES["cover"]) || $_FILES["cover"]["error"] > 0){
    echo "Ha ocurrido un error.";
}else{
    // Verificamos si el tipo de archivo es un tipo de imagen permitido.
    // y que el tamaño del archivo no exceda los 16MB
$permitidos = array("image/jpg", "image/jpeg", "image/png");
$limite_kb = 16384;

	if (in_array($_FILES['cover']['type'], $permitidos) && $_FILES['cover']['size'] <= $limite_kb * 1024){

		if($_FILES['cover']['type']=="image/jpg"){
			$tipo=".jpg";
		}else if($_FILES['cover']['type']=="image/jpeg"){
			$tipo=".jpeg";
		}else{
			$tipo=".png";
		}


        // Archivo temporal
        //$foto.=$_FILES["cover"]["name"];
        $ruta = $_FILES['cover']['tmp_name'];
        //$destino="../view/products/image/".$foto.$tipo;

        
        // Tipo de archivo
        //$tipo = $_FILES['cover']['type'];


$sentence=$gbd->prepare("INSERT INTO products (user_id,title,description,princing,created_at,updated_at,extension,minima,ima,Tipo_unidad,princingMax,categoria,sub,clas, t_garantia, devoluciones, t_entrega, envio, descuento_vol) Values (:user_id, :title, :description, :princing, NOW(), NOW(), :extension, :minima, :ima, :Tipo_unidad, :princingMax, :categoria, :sub, :clas, :t_garantia, :devoluciones, :t_entrega, :envio, :descuento_vol)");

$sentence->bindParam(':user_id', $user);
$sentence->bindParam(':title', $a);
$sentence->bindParam(':description', $i);
$sentence->bindParam(':princing', $d);
$sentence->bindParam(':extension', $tipo);
$sentence->bindParam(':minima', $b);
$sentence->bindParam(':ima', $destino);
$sentence->bindParam(':Tipo_unidad', $c);
$sentence->bindParam(':princingMax', $e);
$sentence->bindParam(':categoria', $f);
$sentence->bindParam(':sub', $g);
$sentence->bindParam(':clas', $h);
$sentence->bindParam(':t_garantia', $m);
$sentence->bindParam(':devoluciones', $n);
$sentence->bindParam(':t_entrega', $l);
$sentence->bindParam(':envio', $k);
$sentence->bindParam(':descuento_vol', $j);

if ($sentence->execute()) {
	$foto=$gbd->lastInsertId();
	$destino="../view/products/image/".$foto.$tipo;
	move_uploaded_file($ruta, $destino);
	echo "<script>alertify.success('<b>PRODUCTO GUARDADO</b>'); window.location='../view/auth/home.php'</script>";
}else{
	//echo "error";
	echo "<script>alertify.error('NO SE HA GUARDADO EL PRODUCTO.');history.back();</script>";
}



	}else{
	echo "<script>alert('Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes');history.back();</script>";
	}
}



?>

</body>
</html>