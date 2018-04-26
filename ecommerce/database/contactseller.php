<?php
include('../../config/db.php');

$ql="SELECT s.*, u.email FROM sellers as s, users as u WHERE u.id=s.user_id AND s.user_id=:id";

$conn=$gbd->prepare($ql);
$conn->bindParam(':id', $seller);

$conn->execute();


?>