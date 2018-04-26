<?php
include("../layouts/appup2.php");
?>
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Inicio</a></li>
					<li class="active">Registro</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--register-starts-->
	<div class="register">
		<div class="container">

			<div class="register-top heading">
				<h2>REGISTRO</h2>
			</div>
		<form method="POST" action="../../database/new.php">
			<div class="register-main">
				<div class="col-md-4">
					<input placeholder="Nombre Completo" class="form-control" name="nombre" type="text" tabindex="1" required>
					<br>	
					<input placeholder="Correo electronico" type="email" name="email" class="form-control" tabindex="1" required>
				</div>
				<div class="col-md-4 ">
					<input placeholder="Contraseña" class="form-control" name="pass" type="password" tabindex="4" required>
					<br>
					<input placeholder="Confirmar contraseña" class="form-control" name="con_pass" type="password" tabindex="4" required>
				</div>
				<div class="clearfix"></div>
			</div>
			<br>
			<div class="address submit">
							<input type="submit" value="Registrar">
						</div>
		</form>
		</div>
	</div>
	<!--register-end account-left-->
</body>
</html>