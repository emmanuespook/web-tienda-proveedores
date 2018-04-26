<?php
include('../config/db.php');
$id=$_POST['id'];

$sql="DELETE FROM products WHERE id=".$id;
$del=$gbd->prepare($sql);

if($del->execute()){
	echo "<script>window.location='../view/auth/home.php'</script>";
}else{
	echo "<script>alert('NO SE ELIMINO');window.location='../view/auth/home.php'</script>";
}
?>