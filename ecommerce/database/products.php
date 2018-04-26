<?php
include('config/db.php');

$sql='SELECT * FROM products';
$resultado=$gbd->prepare($sql);
$resultado->execute();
$rows=$resultado->rowCount();
$total_paginas=ceil($rows/$t_paginas);
$next="SELECT * FROM products LIMIT ".$empezar.",".$t_paginas;

$conn=$gbd->prepare($next);
$conn->execute(array());


?>