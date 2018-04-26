<?php
session_start();

unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_correo']);
include("../layouts/appup2.php");
?>
<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="../../">Inicio</a></li>
					<li class="active">Cuenta</li>
				</ol>
			</div>
		</div>
	</div>
<!--end-breadcrumbs-->
	<!--account-starts-->
	<div class="account">
		<div class="container">
		<div class="account-top heading">
				<h2>Cuenta</h2>
			</div>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
			<div class="account-main">
				<div class="col-md-6 account-left">
				<form method="POST" action="../../database/session.php">
					<h3>Login</h3>
					<div class="account-bottom">

						<input placeholder="Email" name="correo" type="text" tabindex="3" required>
						<input placeholder="Password" name="password" type="password" tabindex="4" required>
						<div class="address">
							<a class="forgot" href="#">¿Ha olvidadó su contraseña?</a>
							<input type="submit" value="Iniciar">
						</div>
					</div>
				</form>
				</div>
				<div class="col-md-6 account-right account-left">
					<h3>¿Nuevo Usuario? Crea una Cuenta</h3>
					<p>
						Crear una cuenta en nuestra página puede habilitarte la opción de contactar a los proveedores de los productos de su agrado, oportunidad de subir sus propios productos y ser contactado.
					</p>
					<!--
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p-->
					<a href="registro.php">Crear una Cuenta</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--account-end-->

</body>
</html>