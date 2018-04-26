<?php
session_start();
$busqueda='';
if(isset($_GET['busqueda'])){
	$busqueda=$_GET['busqueda'];
}
include("../layouts/appup2.php");
include("../layouts/menu3.php");
?>
<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="../../">Inicio</a></li>
					<li class="active">Productos Recientes</li>
				</ol>
			</div>
		</div>
	</div>
<!--end-breadcrumbs-->
<div class="prdt"> 
	<div class="container">
		<div class="prdt-top">
			<div class="col-md-9 prdt-left">
				<div class="product-one">
<?php
include('../../database/productsbusqueda.php');
foreach($conn as $row){ 
?>
	<div class="col-md-4 product-left p-left">
		<?php
			include("product2.php");
		?>
	</div>
<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>