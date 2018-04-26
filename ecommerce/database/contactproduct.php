<?php
include('../../config/db.php');

$sql="SELECT * FROM products WHERE id=:id";

$cn=$gbd->prepare($sql);
$cn->bindParam(':id', $product);

$cn->execute();


?>