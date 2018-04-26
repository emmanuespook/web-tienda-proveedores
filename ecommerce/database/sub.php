<?php
include('../config/db.php');
$q=$_POST['q'];



$res="SELECT s.name FROM subcategoria as s, categoria as c WHERE s.id_categoria=c.id AND c.name='".$q."'";


$sub=$gbd->query($res);
?>

<select class="form-control" id="sub" name="sub" onchange="load(this.value);">
	<option value="">Selecciona...</option>
	<?php foreach($sub as $su){ ?>
	<option value="<?php echo $su['name']; ?>"><?php echo $su['name']; ?></option>
	<?php } ?>
</select>