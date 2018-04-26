<!DOCTYPE html>
<html>
<head>
<title>StudioSpook</title>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="../../js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="../../css/style2.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cliente-Proveedor, Tienda Virtual" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="../../js/simpleCart.min.js"> </script>
<link href="../../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../../js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="../../js/jquery.easydropdown.js"></script>			
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

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="../../" style="font-family: 'LemonMilk';">Studio Spook
                        <!--{{ config('app.name', 'Laravel') }}<br>Ayudando a dar un paso a tu marketing-->
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                         <a href="../sellers" style="color: #FFFF1F;">
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
                            <li><a href="../auth"  style="color: #FFFF1F;">Iniciar Sesión</a></li>
                            <li><a href="../auth/registro.php"  style="color: #FFFF1F;">Registro</a></li>
                        <?php }else{ ?>
                            <li><a href="../auth/home.php" style="color: #FFFF1F;">Mi perfil</a></li>
                            <li><a href="../auth" style="color: #FFFF1F;">Cerrar Sesión</a></li>
                        <?php } ?>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="../../"><h1>Freemex Store</h1></a>
	</div>