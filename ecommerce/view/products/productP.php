
	<div class="product-main simpleCart_shelfItem">
		

		<a href="../products/show.php?id=<?php echo $row['id']; ?>" class="mask">
			<img class="img-responsive zoom-img" src="../products/image/<?php echo $row['id'].$row['extension']; ?>" alt="" />
		</a>
		<div class="product-bottom">
			<h3><?php echo $row['title']; ?></h3>
			<p>Compra minima: <?php echo $row['minima']." ".$row['Tipo_unidad']; ?>
			</p>
			<h4><i></i><span class=" item_price" style="font-family: 'arial-black';">$ <?php echo number_format($row['princing']); ?>
						<?php
						if($row['princingMax'] != ''){
							echo "- $ ".number_format($row['princingMax']);
						}
						?></span></h4>
		</div>
		<div class="actions text-right">
			<form method="POST" action="../products/edit.php" class='inline-block'>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<input type="submit" name="edit" class="btn btn-link blue-text no-padding no-margin no-transform" value="Editar">
			</form>

			<form method="POST" action="../../database/deleteproduct.php" class='inline-block'>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<input type="submit" class="btn btn-link red-text no-padding no-margin no-transform" value="Eliminar">
			</form>
		</div>
		<!--<div class="srch">
			<span>-50%</span>
		</div>-->
	</div>