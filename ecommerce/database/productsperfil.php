<?php
include('../../config/db.php');
$sql2="SELECT * FROM products WHERE user_id=".$_SESSION['SESS_MEMBER_ID'];

$resultado=$gbd->prepare($sql2);
$resultado->execute();
$rows=$resultado->rowCount();
$total_paginas=ceil($rows/$t_paginas);
$next="SELECT * FROM products WHERE user_id=".$_SESSION['SESS_MEMBER_ID']." LIMIT ".$empezar.",".$t_paginas;

$conn=$gbd->prepare($next);
$conn->execute(array());

?>