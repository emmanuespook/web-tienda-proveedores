<?php
include('../config/db.php');
$tipo_c="Proveedor";
$user=$_POST['user'];
$a=$_POST['rasocial'];
$b=$_POST['rfc'];
$c=$_POST['address'];
$d=$_POST['postal_code'];
$e=$_POST['state'];
$f=$_POST['town'];
$g=$_POST['country'];
$h='Activo';
$i=1;
	$fecha = date('Y-m-j');
	$fvigencia = strtotime('+'.$i.' month',strtotime($fecha));
$j= date ( 'Y-m-j' , $fvigencia);
$k=$_POST['cobertura'];
$l=$_POST['consigna'];
/*************** pagos *********/
$m="";
if ($_POST['formas']!="") {
	foreach ($_POST['formas'] as $formas){
		$m.= $formas." / ";
	}
}

$n=$_POST['plazos'];

$o="archivo";

$p=$_POST['servicio'];
$q=$_POST['quejas'];
$r=$_POST['de'];
$s=$_POST['hasta'];

/*************** dias *********/
$t="";
if ($_POST['dia']!="") {
	foreach ($_POST['dia'] as $dia){
		$t.= $dia." / ";
	}
}

$u=$_POST['tipo'];



/*°°°°°°°°°°°°°°°°°°°°°°°   C  O  N  S  U  L  T  A  °°°°°°°°°°°°°°°°°°°°°°°°°°*/
$sentence=$gbd->prepare("INSERT INTO sellers (user_id,rsocial,rfc,t_empresa,address,postal_code,state,town,country,status,Vigencia,f_vencimiento,cobertura,consigna,pagos,credito,calidad,servicio,quejas,de,hasta,dias,created_at,updated_at)  Values (:user_id, :rsocial, :rfc, :t_empresa, :address, :postal_code, :state, :town, :country, :status, :Vigencia, :f_vencimiento, :cobertura, :consigna, :pagos, :credito, :calidad, :servicio, :quejas, :de, :hasta, :dias, NOW(), NOW())");


$sentence->bindParam(':user_id', $user);
$sentence->bindParam(':rsocial', $a);
$sentence->bindParam(':rfc', $b);
$sentence->bindParam(':t_empresa', $u);
$sentence->bindParam(':address', $c);
$sentence->bindParam(':postal_code', $d);
$sentence->bindParam(':state', $e);
$sentence->bindParam(':town', $f);
$sentence->bindParam(':country', $g);
$sentence->bindParam(':status', $h);
$sentence->bindParam(':Vigencia', $i);
$sentence->bindParam(':f_vencimiento', $j);
$sentence->bindParam(':cobertura', $k);
$sentence->bindParam(':consigna', $l);
$sentence->bindParam(':pagos', $m);
$sentence->bindParam(':credito', $n);
$sentence->bindParam(':calidad', $o);
$sentence->bindParam(':servicio', $p);
$sentence->bindParam(':quejas', $q);
$sentence->bindParam(':de', $r);
$sentence->bindParam(':hasta', $s);
$sentence->bindParam(':dias', $t);

$sec=$gbd->prepare("UPDATE users SET tipo = :tipo, updated_at = NOW() WHERE id=:user");
$sec->bindParam(':tipo', $tipo_c);
$sec->bindParam(':user', $user);

if ($sentence->execute()) {
	$sec->execute();
	echo "<script>window.location='../view/auth/home.php'</script>";
}else{
	//echo "<script>history.back();</script>";
	echo "error";
};

/*  */
?>