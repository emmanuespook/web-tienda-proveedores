 <?php
session_start();
if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
    header("location: ../auth");
    exit();
 }
 include('../../database/seller.php');
 if($tipo=='Cliente'){
 	header("location: ../sellers");
    exit();
 }else{
include("../layouts/appup2.php");
?>
<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="">Inicio</a></li>
					<li class="active">Nuevo Producto</li>
				</ol>
			</div>
		</div>
	</div>
<!--end-breadcrumbs-->
	<!--account-starts-->
	<div class="account">
		<div class="container">
		<div class="account-top heading">
				<h2>Nuevo producto</h2>
			</div>
<form method="POST" action="../../database/newproduct.php" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
		<div class="form-group">
			<input type="text" name="title" class="form-control" maxlength="25" placeholder="Titulo..." required>
		</div>

		<div class="row">
			<div class="col-md-4">
				Cantidad mínima:
				<input type="number" name="minima" class="form-control" placeholder="0" required>
			</div>
			<div class="col-md-4">
				Unidad de medida:
				<select class="form-control" name="unidad" required>
					<option>Selecciona...</option>
					<option value="mts">Metros</option>
					<option value="pza">Piezas</option>
					<option value="kgs">Kilogramos</option>
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">

				Precio desde:
				<input type="number" name="princing" class="form-control" placeholder="Precio minimo del producto..." required>
			</div>
			<div class="col-md-4">
				Precio hasta:
				<input type="number" name="princingMax" class="form-control" placeholder="Precio maximo del producto...">
			</div>
			<div class="col-md-4">
				Descuento por Volumen de Compra:<br>
				<input type="radio" name="descuento" value="no" checked>No
				<input type="radio" name="descuento" value="si">Si
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				Categoria:
				<select class="form-control" name="category" onchange="loadd(this.value);" required>
						<option value="">Selecciona...</option>
					<?php
					include('../../database/category.php');
					foreach($categoria as $row){ 
					?>
						<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-md-4">
				Subcategoria:
				<select class="form-control" id="sub" name="sub" onchange="load(this.value);">
					<option value="">Selecciona...</option>
				</select>
			</div>
			<div class="col-md-4">
				Clasificación:
				<select class="form-control" id="clas" name="clas" >
					<option value="">Selecciona...</option>
				</select>
			</div>
		</div>
		<br>

		<div class="form-group">
			Foto de producto:
			<input type="file" name="cover" required>
		</div>

		<div class="form-group">
			<textarea name="description" class="form-control" placeholder="Describe tu producto..." required rows="7" maxlength="500"></textarea>
		</div>
		<div class="row">
			<hr>
			<div class="col-md-2">
				Envió Gratis:<br>
				<input type="radio" name="envio" value="no" checked>No
				<input type="radio" name="envio" value="si">Si
			</div>
			<div class="col-md-3">
				Tiempo de Entrega:<br>
				<input type="text" name="tiempo" class="form-control" required>
			</div>
			<div class="col-md-3">
				Tiempo de Garantía:
				<select class="form-control" name="garantia" required>
					<option value="">Selecciona...</option>
					<option value="1 mes">1 mes</option>
					<option value="2 meses">2 meses</option>
					<option value="3 meses">3 meses</option>
					<option value="4 meses">4 meses</option>
					<option value="5 meses">5 meses</option>
					<option value="6 meses">6 meses</option>
					<option value="7 meses">7 meses</option>
					<option value="8 meses">8 meses</option>
					<option value="9 meses">9 meses</option>
					<option value="10 meses">10 meses</option>
					<option value="11 meses">11 meses</option>
					<option value="12 meses">12 meses</option>
					<option value="2 años">2 años</option>
					<option value="5 años">5 años</option>
					<option value="10 años">10 años</option>
					<option value="25 años">25 años</option>
					<option value="De por vida">De por vida</option>
					<option value="No aplica">No aplica</option>
				</select>
			</div>
			<div class="col-md-3">
				Devolución sobre Compra:<br>
				<input type="radio" name="devolucion" value="no" checked>No
				<input type="radio" name="devolucion" value="si">Si
			</div>
		</div>


		<div class="form-group text-right">
			<a href="../auth/home.php">Regresar al listado de productos </a>
			<input type="submit" value="Enviar" class="btn btn-success">
		</div>
</form>
			</div>
		</div>
	</div>
	<!--account-end-->
<script type="text/javascript">
function loadd(str){
var x;
 
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
x=new XMLHttpRequest();
}
else
{// code for IE6, IE5
x=new ActiveXObject("Microsoft.XMLHTTP");
}
x.onreadystatechange=function()
{
if (x.readyState==4 && x.status==200)
{
document.getElementById("sub").innerHTML=x.responseText;
}
}
x.open("POST","../../database/sub.php",true);
x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
x.send("q="+str);
}	

/**********/
function load(str){
var x;
 
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
x=new XMLHttpRequest();
}
else
{// code for IE6, IE5
x=new ActiveXObject("Microsoft.XMLHTTP");
}
x.onreadystatechange=function()
{
if (x.readyState==4 && x.status==200)
{
document.getElementById("clas").innerHTML=x.responseText;
}
}
x.open("POST","../../database/clas.php",true);
x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
x.send("p="+str);
}	



</script>

</body>
</html>
<?php } ?>