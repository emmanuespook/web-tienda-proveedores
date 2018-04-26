<?php 
include('../../config/db.php');
	$prin="SELECT * FROM categoria ORDER BY name"; 
	$sec="SELECT * FROM subcategoria WHERE id_categoria=:id_cat ORDER BY name ASC";
	$thir="SELECT * FROM clasificacion WHERE id_subcategoria=:id_sub ORDER BY name";
$conn=$gbd->prepare($prin);
$conn->execute();

?>
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue">
						<li class="active"><a href="./">Inicio</a></li>
						<?php while($res=$conn->fetch()){ ?>
						<li class="grid"><a href="./?busqueda=<?php echo $res['name']; ?>
							"><?php echo $res['name']; ?></a>
							<div class="mepanel">
								<div class="row">
									<?php 
									$con=$gbd->prepare($sec);
									$con->bindParam(':id_cat', $res['id']);
									$con->execute();
									while($row=$con->fetch()){ 
									?>
									<div class="col1 me-one">
										<h4><?php echo $row['name']; ?></h4>
										<ul>
											<?php 
											$co=$gbd->prepare($thir);
											$co->bindParam(':id_sub', $row['id']);
											$co->execute();
											while($r=$co->fetch()){ 
											?>
											<li><a href="./?busqueda=<?php echo $r['name']; ?>"><?php echo $r['name']; ?></a></li>
											<?php } ?>
										</ul>
									</div>
									<?php } ?>
								</div>
							</div>
						</li>
						<?php }  ?>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right">
             <div class="search-bar">
                <form action="" method="GET" role="search">
                    <input type="text" name="busqueda" class="form-control" placeholder="Buscar" >
                    <input type="submit" class="lupa" value="">
                </form>
              </div>
            </div> 	
			
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->