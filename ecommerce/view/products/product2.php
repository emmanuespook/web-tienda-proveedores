
	<div class="product-main simpleCart_shelfItem">
		<a href="show.php?id=<?php echo $row['id']; ?>" class="mask">
			<img class="img-responsive zoom-img" src="image/<?php echo $row['id'].$row['extension']; ?>" alt="" />
		</a>
		<div class="product-bottom">
			<h3><?php echo $row['title']; ?></h3>
			<p>Compra minima: <?php echo $row['minima']." ".$row['Tipo_unidad']; ?>
			</p>
			<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price" style="font-family: 'arial-black';">$ <?php echo number_format($row['princing']); ?>
						<?php
						if($row['princingMax'] != ''){
							echo "- $ ".number_format($row['princingMax']);
						}
						?></span></h4>
		</div>
		<!--<div class="srch">
			<span>-50%</span>
		</div>-->
	</div>