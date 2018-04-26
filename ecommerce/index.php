<!DOCTYPE html>
<html>
<head>
<title>Studio spook</title>
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

<script type="text/javascript">
    $('#demo5').scrollbox({
  direction: 'h',
  distance: 140
});
$('#demo5-backward').click(function () {
  $('#demo5').trigger('backward');
});
$('#demo5-forward').click(function () {
  $('#demo5').trigger('forward');
});
</script>


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
                         <a href="view/sellers" style="color: #FFFF1F;">
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
                            <li><a href="view/auth" style="color: #FFFF1F;">Iniciar Sesión</a></li>
                            <li><a href="view/auth/registro.php"  style="color: #FFFF1F;">Registro</a></li>
                        <?php }else{ ?>
                            <li><a href="view/auth/home.php" style="color: #FFFF1F;">Mi perfil</a></li>
                            <li><a href="view/auth" style="color: #FFFF1F;">Cerrar Sesión</a></li>
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
		<a href="./"><h1>Studio Spook</h1></a>
	</div>
<?php 
include('view/layouts/menu.php');
?>
<div>
    <a href="view/products/?busqueda=Uso Personal"><img style="max-width: 100%;" src="image/uso_personal.jpg"></a>
</div>
    <div class="product"> 
        <div class="container">
            <div class="product-top">
                <div class="product-one">
            <?php
            include('database/products1.php');
            foreach($conn as $row){
            ?>    
                    <div class="col-md-3 col-sm-3 col-xs-3 product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="view/products/show.php?id=<?php echo $row['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="view/products/image/<?php echo $row['id'].$row['extension']; ?>" alt="" /></a>
                            <div class="product-bottom">
                                <h3><?php echo $row['title']; ?></h3>
                                <p>Compra minima: <?php echo $row['minima']." ".$row['Tipo_unidad']; ?></p>
                                <h4> <span class=" item_price">$<?php echo number_format($row['princing']); ?>
                                    <?php
                                    if($row['princingMax'] != ''){
                                        echo "- $".number_format($row['princingMax']);
                                    }
                                    ?></span></h4>
                            </div>
                        </div>
                    </div>
            <?php } ?>
                </div>               
            </div>
        </div>
    </div>


<div class="container-fluid">
    <div class="col-md-8 col-sm-8 col-xs-12">
                <a href="view/products/?busqueda=Electronica"><img style="max-width: 100%;" src="image/electronica.jpg"></a>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-6">
                <a href="view/products/?busqueda=Vehiculos"><img class="port" src="image/vehiculos.jpg"></a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-6">
                <a href="view/products/?busqueda=Hogar"><img class="port" src="image/hogar.jpg"></a>
            </div>             
        </div>
    </div> 
</div>

<div class=" container product"> 
            <div class="product-top">
                <div class="product-one">
            <?php
            foreach($con as $ro){
            ?>    
                    <div class="col-md-3 col-sm-3 col-xs-3 product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="view/products/show.php?id=<?php echo $ro['id']; ?>" class="mask"><img class="img-responsive zoom-img" src="view/products/image/<?php echo $ro['id'].$ro['extension']; ?>" alt="" /></a>
                            <div class="product-bottom">
                                <h3><?php echo $ro['title']; ?></h3>
                                <p>Compra minima: <?php echo $ro['minima']." ".$ro['Tipo_unidad']; ?></p>
                                <h4><span class=" item_price" style="font-family: 'arial-black';">$<?php echo number_format($ro['princing']); ?>
                                    <?php
                                    if($ro['princingMax'] != ''){
                                        echo "- $".number_format($ro['princingMax']);
                                    }
                                    ?></span></h4>
                            </div>
                        </div>
                    </div>
            <?php } ?>
                </div>               
            </div>
</div>

<div class="container-fluid">
    <a href="view/products/?busqueda=Super"><img style="max-width: 100%" src="image/abarrotes.jpg"></a>
</div>
<br>
</body>
</html>