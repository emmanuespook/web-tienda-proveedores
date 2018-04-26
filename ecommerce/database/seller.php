<?php

include('../../config/db.php');

$sql=$gbd->prepare("SELECT * FROM users WHERE id=?");


$sql->execute(array($_SESSION['SESS_MEMBER_ID']));

while($row=$sql->fetch(PDO::FETCH_OBJ)){
	$id=$row->id;
	$email=$row->email;
	$name=$row->name;
	$tipo=$row->tipo;
}
?>