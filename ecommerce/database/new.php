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
$a=$_POST['nombre'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['con_pass'];
$e="Cliente";

if($c==$d){
$c=password_hash($c, PASSWORD_DEFAULT);
 $sentence=$gbd->prepare("INSERT INTO users(name,email,password,tipo,created_at,updated_at,pass) Values (:name, :email, :password, :tipo, NOW(), NOW(), :pass)");

$sentence->bindParam(':name', $a);
$sentence->bindParam(':email', $b);
$sentence->bindParam(':password', $c);
$sentence->bindParam(':tipo', $e);
$sentence->bindParam(':pass', $d);
	if ($sentence->execute()) {

	include('../view/emails/registro.php'); ?>
		
<?php
		//echo "<script>window.location='../view/auth/'</script>";

	}else{
		echo "<script>history.back();</script>";
	};

}else{
	echo "<script>alert('NO COINCIDE LA CONTRASEÑA');history.back();</script>";
}

?>

</body>
</html>