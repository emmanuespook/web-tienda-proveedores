<?php
session_start();
$pagina=1;
if(isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];
}
$t_paginas=40;
$empezar=($pagina-1)*$t_paginas;
?>
<!DOCTYPE html>
<html>
<head>
<title>FreemexStore</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cliente-Proveedor, Tienda Virtual" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body>
		<!--top-header-->
<div id="app">
    <div>
        <nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                    </button>

                    <!-- Branding Image 
                    <a class="navbar-brand" href="{{ url('/') }}">FREEMEX
                        <!--{{ config('app.name', 'Laravel') }}<br>Ayudando a dar un paso a tu marketing
                    </a>-->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                         <a href="view/sellers">
                            Vender
                         </a>
                        </li>
                        <!--<li>
                         <a href="{{url('/carrito')}}">
                            Mi carrito
                            <span class="circle-shopping-cart">
                                {{$productsCount}}
                            </span>
                         </a>
                        </li>
                         Authentication Links -->
                        
                           <?php if(!isset($_SESSION['SESS_MEMBER_ID'])){ ?>
                            <li><a href="view/auth">Iniciar Sesión</a></li>
                        <?php }else{ ?>
                            <li><a href="view/auth/home.php">Mi perfil</a></li>
                            <li><a href="view/auth">Cerrar Sesión</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
	<!--top-header-->
		<!--start-logo-->
	<div class="logo">
		<a href="./"><h1>Freemex Store</h1></a>
	</div>
<?php 
include('view/layouts/menu.php');
?>
	<!--bottom-header
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue">
						<li class="active"><a href="view/products">Inicio</a></li>
                        <li class="grid"><a href="view/products?busqueda=Electronica">Electronica</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Audio y Video</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Reproductores">Reproductores de Música</a></li>
                                            <li><a href="view/products?busqueda=Audifonos">Audifonos</a></li>
                                            <li><a href="view/products?busqueda=Bocinas">Bocinas Multimedia</a></li>
                                            <li><a href="view/products?busqueda=Audio">Audio</a></li>
                                        </ul>       
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Computacion</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Teclados">Teclados</a></li>
                                            <li><a href="view/products?busqueda=Memorias">Memorias</a></li>
                                            <li><a href="view/products?busqueda=Impresoras">Impresoras</a></li>
                                            <li><a href="view/products?busqueda=Software">Software</a></li>
                                        </ul>       
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Telefonos Celulares</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Telefonia celular">Telefonía Celular</a></li>
                                            <li><a href="view/products?busqueda=Accesorios para celular">Accesorios para Celular</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Tabletas</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Tabletas fabrica">Tabletas directas de Fabrica</a></li>
                                            <li><a href="view/products?busqueda=Tabletas sim">Tabletas con Sim</a></li>
                                            <li><a href="view/products?busqueda=Accesorios tabletas">Accesorios para Tabletas</a></li>
                                        </ul>   
                                    </div>                                  
                                    <div class="col1 me-one">
                                        <h4>Videojuegos</h4>
                                        <ul></ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Telefono Fijo</h4>  
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="view/products?busqueda=Hogar">Hogar</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Muebles</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Oficina">Oficina</a></li>
                                            <li><a href="view/products?busqueda=Cocina">Cocinas</a></li>
                                            <li><a href="view/products?busqueda=Salas">Salas</a></li>
                                            <li><a href="view/products?busqueda=Baño">Baño</a></li>
                                            <li><a href="view/products?busqueda=Colchones">Colchones</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Ferreteria</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Herramientas">Herramientas</a></li>
                                            <li><a href="view/products?busqueda=Plomeria">Plomeria</a></li>
                                        </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Linea Blanca y Cocina</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Electrodomesticos">Electrodomesticos</a></li>
                                            <li><a href="view/products?busqueda=Línea Blanca">Línea Blanca</a></li>
                                        </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Seguridad</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Cerrajeria">Cerrajería</a></li>
                                            <li><a href="view/products?busqueda=Seguridad Industrial">Seguridad Industrial</a></li>
                                        </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Electrica</h4>
                                        <ul>
                                            <li><a href="Iluminacion">Iluminación</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Construccion</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Material">Material</a></li>
                                        </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Carpintería</h4>
                                        <ul>                            </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Jardinería y Agricultura</h4>
                                        <ul>                            </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Limpieza</h4>
                                        <ul>                            </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Mascotas</h4>
                                        <ul>                            </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Blancos</h4>
                                        <ul>                            </ul>   
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="view/products?busqueda=Uso personal">Uso Personal</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Deportes</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Gym">GYM</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Mujeres</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=Ropa">Ropa</a></li>
                                            <li><a href="view/products?busqueda=Zapatos">Zapatos</a></li>
                                            <li><a href="view/products?busqueda=Bolsas y accesorios">Bolsas y Accesorios</a></li>
                                        </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Hombre</h4>
                                        <ul>                            </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Niños y Bebes</h4>
                                        <ul>                            </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Juguetes</h4>
                                        <ul>                            </ul>   
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Super</h4>
                                        <ul>                            </ul>   
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="view/products?busqueda=Refacciones">Refacciones</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Refacciones para Celular</h4>
                                        <ul>
                                            <li><a href="view/products?busqueda=display">Display</a></li>
                                            <li><a href="view/products?busqueda=Logicas">Logicas</a></li>
                                            <li><a href="view/products?busqueda=Microfonos">Microfono</a></li>
                                            <li><a href="view/products?busqueda=Carcasas">Carcasas</a></li>
                                            <li><a href="view/products?busqueda=Touch">Touch</a></li>
                                            <li><a href="view/products?busqueda=Centro carga">Centro de Carga</a></li>
                                            <li><a href="view/products?busqueda=Baterias celular">Baterias para Celular</a></li>
                                        </ul>   
                                    </div>
                                </div>
                            </div>
                        </li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
				<form action="view/products/" method="GET" role="search">
					<input type="text" name="busqueda" class="form-control" placeholder="Buscar" >
                    <input type="submit" class="lupa" value="">
				</form>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
bottom-header-->
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<img src="image/ropa_mujer.jpg" alt=""/>
				</li>
				<li>
					<img src="image/ropa_hombre.jpg" alt=""/>
				</li>
				<li>
					<img src="image/decoracion.jpg" alt=""/>
				</li>
				<li>
					<img src="image/zapatos.jpg" alt=""/>
				</li>
				<li>
					<img src="image/abastos.jpg" alt=""/>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--product-starts-->
	<div class="product"> 
		<div class="container">
			<div class="product-top">
				
			<?php
			$n_product=1;
			include('database/products.php');
			foreach($conn as $row){
			?>
			    <?php if($n_product==1){ ?>
			    <div class="product-one">
			    <?php } ?>

    				<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="view/products/show.php?id=<?php echo $row['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="view/products/image/<?php echo $row['id'].$row['extension']; ?>" alt="" /></a>
							<div class="product-bottom">
								<h3><?php echo $row['title']; ?></h3>
								<p>Compra minima: <?php echo $row['minima']." ".$row['Tipo_unidad']; ?></p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ <?php echo number_format($row['princing']); ?>
									<?php
									if($row['princingMax'] != ''){
										echo "- $ ".number_format($row['princingMax']);
									}
									?></span></h4>
							</div>
						</div>
					</div>
				<?php 
				$cierre=$n_product;
				$n_product=$n_product+1;
				if ($cierre==4) {
					$n_product=1; ?>
				</div>	
				<?php } ?>
				
    		<?php } ?>
								
			</div>
		</div>
	</div>
	<!--product-end-->

</body>