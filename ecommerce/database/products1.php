<?php
include('config/db.php');

$sql='SELECT * FROM products WHERE  categoria="Uso Personal" ORDER BY rand() LIMIT 4';
$conn=$gbd->prepare($sql);

$conn->execute(array());


$ql='SELECT * FROM products ORDER BY rand() LIMIT 4';
$con=$gbd->prepare($ql);

$con->execute(array());
?>
