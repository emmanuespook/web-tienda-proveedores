<?php
include('../config/db.php');

$cat="SELECT * FROM categoria";

$categoria=$gbd->query($cat);
?>