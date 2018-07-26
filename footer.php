		<!---->
		<div class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="latter">
						<h6>LA MEJOR MANERA DE COMPRAR ONLINE!</h6>
						<div class="clearfix"></div>
					</div>
					<div class="latter-right">
						<p>SEGUINOS</p>
						<ul class="face-in-to">
							<li><a href="https://es-la.facebook.com/escueladenuevastecnologias"><span class="facebook-in"></span></a></li>
							<div class="clearfix"></div>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="footer-bottom-cate cate-bottom">
						<h6>DIRECCIÓN</h6>
						<ul>
							<li>Int Tomkinson - casa 5</li>
							<li>San Isidro</li>
							<li>Buenos Aires</li>
							<li>Argentina</li>
							<li class="phone">(011) 6042 3437</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--initiate accordion-->
		<script src="js/custom.js"></script>
		<script>
			$(document).ready(function(){
/*
				setTimeout(function(){
					alert("Hola soy un Modal Box!");
				}, 10000); //<-- Se ejecuta 1 vez luego de 10s 

				setInterval(function(){
					alert("Hola soy un Mensajito");
				}, 4000); //<-- Se ejecuta SIEMPRE cada 4s
*/
				//alert("Ahora puedo programar con jQuery");

				$(".login a").click(function(evento){
					evento.preventDefault(); //<-- Desprograma el comportamiento predeterminado

					let archivo = $(this).attr("href");

					//alert("Usted quiere ir a: " + archivo);

					$("#loading").css("display", "block");
					$("#page").empty();	

					$.ajax({
						url : archivo, //<-- Archivo a cargar/traer del servidor
						type : "GET", //<-- Tipo de Peticion HTTP (GET/POST)
						data : { "ajax" : 1 },
						success : function(rta){ //<-- Que hacer si sale/se carga bien...

							$("#loading").hide(); //<-- Vuelvo a ocultar el GIF

							$("#page").fadeOut("slow", function(){

								$(this).html( rta ).fadeIn("slow"); //<-- Inyecto el codigo HTML del archivo/respuesta del Servidor
								
							});

						}
					});

				});

			});
		</script>
	</body>
</html>