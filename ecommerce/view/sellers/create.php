<?php
session_start();
if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
    header("location: ../auth");
    exit();
  }
include('../../database/seller.php');
include("../layouts/appup2.php");

?>
<script type="text/javascript">
    function ActivarCredito(){		
    	var contenedor = document.getElementById("credito");		
    	contenedor.style.display = "block";		
    	return true;	
    }
    function DesactivarCredito(){		
    	var contenedor = document.getElementById("credito");		
    	contenedor.style.display = "none";		
    	return true;	
    }
</script>
<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="../../">Inicio</a></li>
					<li class="active">Proveedor</li>
				</ol>
			</div>
		</div>
	</div>
<!--end-breadcrumbs-->
	<!--account-starts-->
	<div class="account">
		<div class="container">
		<div class="account-top heading">
				<h2>Crea tu cuenta para empezar a Vender.</h2>
			</div>

		<div class="col-md-6">
<?php if($tipo=="Cliente"){ ?>
			<form method="POST" action="../../database/newseller.php">
			<input type="hidden" name="user" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
				<div class="form-group">
					<label>Datos Generales:</label>
					<input type="text" name="rasocial" class="form-control" placeholder="Razon Social o Nombre Comercial" required>
				</div>
				<!--<div class="form-group">
					<input type="text" name="rfc" class="form-control" placeholder="R.F.C.">
				</div>-->
				<div class="form-group">
					Tipo de Empresa:
					<select class="form-control" name="tipo" required>
						<option>Selecciona...</option>
						<option value="Fabricante">Fabricante</option>
						<option value="Mayorista">Mayorista</option>
						<option value="Comercializadora">Comercializadora</option>
						<option value="Detallista">Detallista</option>
						<option value="Distribuidor">Distribuidor</option>
						<option value="Persona Física">Persona Física</option>
						<option value="Productor">Productor</option>
						<option value="Negocio Local">Negocio Local</option>
					</select>
				</div>
				<div class="form-group">
					<label>Direccion:*</label>
					<input type="text" name="address" class="form-control" placeholder="Calle y numero" required>
				</div>
				<div class="form-group">
					<input type="number" name="postal_code" class="form-control" placeholder="Codigo Postal" required>
				</div>
				<div class="form-group">
					<input type="text" name="state" class="form-control" placeholder="Estado..." required>
				</div>
				<div class="form-group">
					<input type="text" name="town" class="form-control" placeholder="Municipio..." required>
				</div>
				<div class="form-group">
					<input type="text" name="country" class="form-control" placeholder="País..." required>
				</div>

				<div class="form-group">
					<label>Cobertura de Mercado:</label>
					<select class="form-control" name="cobertura" required>
						<option disabled>Selecciona...</option>
						<option>Local</option>
						<option>Regional</option>
						<option>Nacional</option>
						<option>Multinacional</option>
						<option>Transnacional</option>
					</select>
				</div>

<!---------------------------------- ANEXADO ---------------------------------->
				<div class="form-group">
					<label>Producto en Consigna :</label><br>
					<input type="radio" name="consigna" value="no" checked>No
					<input type="radio" name="consigna" value="si">Si
				</div>
				<div class="form-group">
					<label>Medios de Pago que acepta tu negocio</label><br>
					<input type="checkbox" class="form-check-input" name="formas[]" value="Tranferencia">Tranferencia
					<input type="checkbox" class="form-check-input" name="formas[]" value="Cheque">Cheque
					<input type="checkbox" class="form-check-input" name="formas[]" value="Efectivo">Efectivo
					<input type="checkbox" class="form-check-input" name="formas[]" value="Paypal">Paypal
					<input type="checkbox" class="form-check-input" name="formas[]" value="Oxxo">Oxxo
					<input type="checkbox" class="form-check-input" name="formas[]" value="MercadoPago">MercadoPago
					<input type="checkbox" class="form-check-input" name="formas[]" value="Meses sin intereses">Meses sin intereses
					<input type="checkbox" class="form-check-input" name="formas[]" value="Tarjeta debito
					">Tarjeta debito
					<input type="checkbox" class="form-check-input" name="formas[]" value="Tarjeta de crédito">Tarjeta de crédito
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label>Posible Crédito</label><br>
						<input type="radio" name="credito" value="no" checked onclick="DesactivarCredito();">No
						<input type="radio" name="credito" value="si"  onclick="ActivarCredito();">Si
					</div>
					<div class="col-md-6" id="credito" style="display: none;">
						<br>
						<select name="plazos" class="form-control">
							<option value="">Plazos a...</option>
							<option value="30">30 días</option>
							<option value="60">60 días</option>
							<option value="90">90 días</option>
							<option value="Más de 90">Más de 90 días</option>
						</select>
					</div>
					<br>	
				</div>
				<br>
				<!--<div class="row">
					<div class="col-md-6">
						<label>Certificado de Calidad :</label><br>
						<input type="radio" name="calidad" value="no" checked>No
						<input type="radio" name="calidad" value="si">Si
					</div>
					<div class="col-md-6">
						<br>
						<input type="file" name="certificado">
					</div>
				</div>-->
				<hr>
				<h3>Servicios y atención que da tu negocio</h3>
				<div class="row">
					<div class="col-md-4">
						<label>Servicio a cliente:</label><br>
						<input type="radio" name="servicio" value="no" checked>No
						<input type="radio" name="servicio" value="si">Si
					</div>
					<div class="col-md-4">
						<label>Atención de quejas:</label><br>
						<input type="radio" name="quejas" value="no" checked>No
						<input type="radio" name="quejas" value="si">Si
					</div>
				</div>
				<div class="form-group">
					<label>Horario de atención:</label>
					<div class="row">
						<div class="col-md-3">
							<label>De:</label><br>
							<input type="text" class="form-control" name="de" required>
						</div>
						<div class="col-md-3">
							<label>Hasta:</label><br>
							<input type="text" class="form-control" name="hasta" required>
						</div>
						<div class="col-md-6">
							<label>Días:</label><br>
							<input type="checkbox" name="dia[]" value="Lunes">Lunes
							<input type="checkbox" name="dia[]" value="Martes">Martes
							<input type="checkbox" name="dia[]" value="Miercoles">Miercoles
							<input type="checkbox" name="dia[]" value="Jueves">Jueves
							<input type="checkbox" name="dia[]" value="Viernes">Viernes
							<input type="checkbox" name="dia[]" value="Sabado">Sabado
							<input type="checkbox" name="dia[]" value="Domingo">Domingo
						</div>
					</div>
				</div>

				<div class="form-group text-right">
					<p>Datos Obligatorios *</p><br>
					<a href="../auth/home.php">Regresar a mi Perfil</a>
					<input type="submit" name="" value="Crear" class="btn btn-success">
				</div>
			</form>
<?php }else{ ?>
		<center>
			<h3>Ya cuentas con Cuenta Proveedor.</h3>
			<label><a href="../auth/home.php">Regresar a mi perfil</a></label>
		</center>

<?php } ?>
		</div>
		<div class="col-md-6">
			<br><br>
			<label style="text-align: justify; font-size: 1.2em;">
				Esta información es importante para que los usuarios de la pagina puedan tener la información
			necesaria para la toma de desición a la hora de realizar la compra.
			</label>


			<!--<center><h2>Costos</h2></center>
			<table class="table table-sm">
				<tr class="bg-danger">
					<th scope="col">VIGENCIA</th>
					<th scope="col">PRECIO</th>
				</tr>
				<tr>
					<td>1 Mes</td>
					<td>$600</td>
				</tr>
				<tr>
					<td>3 Meses</td>
					<td>$2,025</td>
				</tr>
				<tr>
					<td>6 Meses</td>
					<td>$3,300</td>
				</tr>
				<tr>
					<td>1 Año</td>
					<td>$6,000</td>
				</tr>
			</table>-->
		</div>
	</div>
			</div>
		</div>
	</div>
	<!--account-end-->

</body>
</html>