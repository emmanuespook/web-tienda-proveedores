<?php
session_start();
if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
    header("location: ../auth");
    exit();
 }
$seller=$_GET['seller'];
$product=$_GET['id'];

include("../layouts/appup2.php");
include("../layouts/menuconper.php");

?>
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Inicio</a></li>
					<li class="active">Contacto Proveedor</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--contact-start-->
	<div class="contact">
		<div class="container">
		<form action="email.php" method="POST">
			<div class="contact-top heading">
				<h2>Contacto con Proveedor</h2>
			</div>
<?php
include('../../database/contactproduct.php');
while($res=$cn->fetch()){
?>
				<div class="contact-text">
				<div class="col-md-3 contact-left">
						<div class="address">
							<img src="../products/image/<?php echo $res['id'].$res['extension']; ?>" style="max-width: 100%;">
						</div>
					</div>
					<div class="col-md-4 contact-right">
						<input type="hidden" name="nombre_product" value="<?php echo $res['title']; ?>">
						<div class="address">
							<h5><?php echo $res['title']; ?></h5>
							<p>PRECIO DE $<?php echo $res['princing']; ?> <?php if($res['princingMax']!=''){ echo "- HASTA $".$res['princingMax']; }?></p>
							<label>Cantidad:
							<input type="number" class="form-control" min="<?php echo $res['minima']; ?>" value="<?php echo $res['minima']; ?>" name="cantidad">
							</label>
						</div>
					</div>	
					<div class="clearfix"></div>
				</div>
<?php } ?>

				<div class="contact-text">
				<div class="col-md-5 contact-left">
						<div class="address">
<?php
include('../../database/contactseller.php');
while($row=$conn->fetch()){
?>

							<h3><?php echo $row['rsocial']; ?> </h3>
							<p><span><?php echo $row['state'].", ".$row['country']; ?></span>
							Cobertura: <?php echo $row['cobertura']; ?>.</p>
							<p>Horario de Servicio:  <?php echo $row['de']; ?> - <?php echo $row['hasta']; ?> <br> Días laborales:  <br><?php echo $row['dias']; ?> </p>

						<?php if($row['calidad']==""){ ?>
							<h5><img style="width: 60px;" src="medalla.png"><?php echo "Certificado de Calidad: ".$row['calidad']; ?> </h5>
						<?php } ?>
							<b><p>Formas de Pago:  <br>  <?php echo $row['pagos']; ?> </p></b>

						</div>
					</div>
					<div class="col-md-7 contact-right">
						<form>
							<input type="text" class="form-control" name="nombre" placeholder="Nombre">
							<!--<input type="text" placeholder="Phone">-->
							<input type="hidden" name="emailseller" value="<?php echo $row['email']; ?>">
							<input type="hidden" name="email" value="<?php echo $_SESSION['SESS_correo']; ?>">
							<textarea placeholder="Mensaje" name="mensaje" required=""></textarea>
							<div class="submit-btn">
								<input type="submit" value="Enviar">
							</div>
						</form>
					</div>	
					<div class="clearfix"></div>
				</div>
<?php } ?>
		</form>
		</div>
	</div>
	<!--contact-end-->

</body>
</html>