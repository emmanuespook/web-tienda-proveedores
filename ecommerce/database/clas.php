<?php
include('../config/db.php');
$p=$_POST['p'];



$re="SELECT c.name FROM clasificacion as c, subcategoria as s WHERE c.id_subcategoria=s.id AND s.name='".$p."'";


$clas=$gbd->query($re);
?>

<select class="form-control" id="clas" name="clas">
	<option value="">Selecciona...</option>
	<?php foreach($clas as $cla){ ?>
	<option value="<?php echo $cla['name']; ?>"><?php echo $cla['name']; ?></option>
	<?php } ?>
</select>