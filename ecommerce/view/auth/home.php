<?php
session_start();
  if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
    header("location: ../auth");
    exit();
  }
include('../../database/seller.php');
include("../layouts/appup2.php");
include("../layouts/menuconper.php");




?>
<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="../../">Inicio</a></li>
					<li class="active">Perfil</li>
				</ol>
			</div>
		</div>
	</div>
<!--end-breadcrumbs-->
<!--account-starts-->
	<div class="account">
		<div class="container">
		<div class="account-top heading">
				<h2>MI PERFIL</h2>
			</div>
		</div>
	</div>
	<!--account-end-->

<div class="container">
	<div class="row">
		  <div class="col-md-8">
        <label>Nombre: <?php echo $name; ?></label> <br>
        <label>Correo: <?php echo $email; ?></label><br>
        <label>Cuenta: <?php echo $tipo; ?></label>
      </div>
      <div class="col-md-4">
        <div>
          <a href="../sellers/create.php" class="btn btn-success btn-fab">
              <i class="material-icons">Empieza a VENDER</i>
          </a>
        </div>
        <br>
        <div>
          <a href="../products/" class="btn btn-info btn-fab">
              <i class="material-icons">Empieza a COMPRAR</i>
          </a>
        </div>
      </div>
	</div>

	<!--<div class="floating">
        <a href="../products/create.php" class="btn btn-primary btn-fab">
            <i class="material-icons">Subir</i>
        </a>
    </div>-->
</div>
<hr>
<?php if($tipo!="Cliente"){?>
<div  id="misproducts" class="container">
  <div class="row">
    <div class="col-md-8">
      <h2>Mis productos</h2>
    </div>
    <div class="col-md-4">
      <a href="../products/create.php" class="btn btn-primary btn-fab">
            <i class="material-icons">Subir Producto</i>
        </a>
    </div>
  </div>
  <hr>
  <div class="product-top">
    <div class="product-one">
            <?php
            $pagina=1;
              if(isset($_GET['pagina'])){
                  $pagina=$_GET['pagina'];
              }
            $t_paginas=4;
            $empezar=($pagina-1)*$t_paginas;
            include('../../database/productsperfil.php'); 
            foreach($conn as $row){ 
            ?>
            <div class="col-md-3 product-left p-left">
            <?php
              include("../products/productP.php");
            ?>
            </div>

            <?php } ?>
    </div>
  </div>
</div>
  <div class="container">
      <center><nav>
        <ul class="pagination">
          <?php for($i=1;$i<=$total_paginas;$i++){ 
           if($i==$pagina){ ?>    
              <li class="active"><a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?> <span class="sr-only">(current)</span></a></li>
          <?php }else{ ?>
              <li><a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php } }?>
              <!--<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>-->
        </ul>
      </nav></center>
  </div>
<?php } ?>


<!--<div class="container">
    <div class="row">
        <div class="col-md-3">
            
        </div>
          <div class="col-8">
            <div class="tab-content row" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <h2>Mi panel de control</h2> 
                <label>Nombre: {{Auth::user()->name}}</label> <br>
                <label>Correo: {{Auth::user()->email}}</label><br>
                <label>Cuenta: {{Auth::user()->tipo}}</label>
                @if(Auth::user()->tipo != 'Vendedor')
                  <p>Deseas vender tus propios productos, o solamente dar a conocer el giro de su empresa. Puede ser parte de esta tienda online, con grandes beneficios, comunicacion de cliente-proveedor o venta por medio de la tienda. </p>
                  <p>Adquiere cuenta Proveedor. <a href="{{url('/suppliers')}}">Aquí</a></p>
                @else
                  <label></label>
                @endif
              </div>

              <div class="tab-pane fade container" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <h2>Datos Generales</h2>
                <div class="col-md-5">
                  <label>Nombre personal:<br>{{Auth::user()->name}}</label>
                  <label>Razon social: </label>
                  <!--<input type="text" class="form-control" name="" value="{{Auth::user()->name}}">
                </div>
                <div class="col-md-5">
                  <label>Correo Electronico:<br>{{Auth::user()->email}}</label>
                  <!--<input type="email" class="form-control" name="" value="{{Auth::user()->email}}">
                </div>
              </div>
              
              <div class="tab-pane fade container" id="list-products" role="tabpanel" aria-labelledby="list-messages-list">
                <h2>Mis Productos</h2>
                <div class="row">
                  @foreach($products as $product)
                  <div class="col-md-6 col-xs-10">
                  @include("products.productview",["product" => $product])
                  </div>
                  @endforeach
                </div>
                {{$products->links()}}
                <div class="floating">
                  <a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
                    <i class="material-icons">add</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>-->

</body>
</html>