<?php

	if( !isset( $_GET["ajax"] ) ){
		include "header.php";
	}

	//Validar la pagina/modulo
	if( isset( $_GET["p"] ) ) {
		$pagina = $_GET["p"] . ".php";
	} else {
		$pagina = "inicio.php";
	}
?>
<div class="container">
	<!-- ACA VA EL GIF "Cargando..." -->
	<img id="loading" src="images/loading.gif" style="margin:auto;display:none;padding:50px">
	
	<section id="page">
	<?php
		if( file_exists( $pagina ) ){
			
			include $pagina;
		
		} else {
		
			echo "PAGINA NO ENCONTRADA :(";

		}
	?>
	</section>
</div>
<?php
	if( !isset( $_GET["ajax"] ) ){
		include "footer.php";
	}
?>