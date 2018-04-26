<?php

$busqueda="";
if($_GET['busqueda']!=''){
$busqueda=$_GET['busqueda'];
}
include("../layouts/appup.php");
?>

<div class="big-padding text-center blue-grey white-text">
		<h1>Productos</h1>
	</div>
<?php
include('../layouts/menu.php');
?>
<div class="text-center products-container">
	<div class="row">
<?php
	include('../../database/productsbusqueda.php');
	  foreach($conn as $row){ ?>
	  <div class="col-xs-10 col-sm-4 col-md-4">
	  	<?php
			include("product.php");
		?>
	  </div>
	  <?php } ?>
	  </div>
	 <div>
		{{$products->links()}}
	</div>
</div>


<?php
include("../layouts/appdown.php");
?>