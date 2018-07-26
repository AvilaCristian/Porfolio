<?php
	
	$cod = "P001";
	$nombre = "iPhone";
	$precio = 599.99;
	$marca = "Apple";
	$stock = 600;

	$producto = array("P002", "iPad", 799.99, "Apple", 500); //<-- Array Secuencial

	$otroProducto = array( //<-- Array Asociativo
		"cod" => "P003",
		"nombre" => "Nexus 4",
		"precio" => 499.99,
		"marca" => "Google",
		"stock" => 400
	);

?>
<!-- PRODUCTOS DESTACADOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">PRODUCTOS DESTACADOS</h5>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="index.php?p=producto"><img class="img-responsive chain" src="images/productos/<?php echo $cod; ?>.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="index.php?p=producto"><?php echo $marca . " - " . $nombre; ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$<?php echo $precio; ?></span>
					</div>
					<a class="now-get get-cart" href="index.php?p=producto">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #2 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/<?php echo $producto[0]; ?>.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php"><?php echo $producto[3] . " - " . $producto[1]; ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$<?php echo $producto[2]; ?></span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #3 -->
		<div class="col-sm-4 col-md-4 chain-grid grid-top-chain">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/<?php echo $otroProducto["cod"]; ?>.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php"><?php echo $otroProducto["marca"] . " - " . $otroProducto["nombre"]; ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">$<?php echo $otroProducto["precio"]; ?></span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- ULTIMOS PRODUCTOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">ULTIMOS PRODUCTOS</h5>	
		<a class="view-all" href="productos.php">VER TODOS<span></span></a>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/P004.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php">Lorem ipsum dolor #1</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #2 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/P005.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php">Lorem ipsum dolor #2</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #3 -->
		<div class="col-sm-4 col-md-4 chain-grid grid-top-chain">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/P006.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php">Lorem ipsum dolor #3</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"> </div>
</div>