
<!--=====================================
CONTÁCTENOS
======================================-->
<!--=====================================
CONTÁCTENOS
======================================-->
<div class="contactenos container-fluid bg-white py-4" id="contactenos">
	<div class="container text-center">
		<h1 class="py-sm-4">CONTÁCTENOS</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control " name="nombre" id="nombre" placeholder="Nombre:*" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
			<input type="text" class="form-control " name="correo" id="correo" placeholder="Correo:*" value="<?php if(!$enviado && isset($correo)) echo $correo?>">
			<select  type="text"  class="form-control " name="tipo" id="tipo" value="<?php if(!$enviado && isset($tipo)) echo $tipo?>" >
				<option>Tipo de trabajo*</option>
				<option>Enfriamiento</option>
				<option>Plomeria</option>
				<option>Electricidad</option>
			</select>



			<textarea name="mensaje" class="form-control " id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>
			<?php if (!empty($errores)): ?>
				<div class="alert error" role="alert">

				</div>
			<?php elseif($enviado) : ?>
				<div class="alert success" role="alert">
					<?php echo '<script type="text/javascript">
									alert("¡ENVIO EXITOSO! En breve te enviaremos una respuesta a tu correo electronico");

									</script>';  ?>
									<!-- window.location.href="http://localhost/reservas-hotel/index.php"; -->
				</div>
			<?php endif; ?>
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>
	</div>
</div>

<!--=====================================
MAPA
======================================-->
<div class="mapa container-fluid bg-white p-0">

	<iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=LOMAS%20DE%20CORTES%20CUERNAVACA%20MORELOS%7D+(Mi%20nombre%20de%20egocios)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Calcular Ruta</a></iframe>

	<div class=" p-4 info">

		<h3 class="mt-4"><strong>Visítanos</strong></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

		<p>
		Apple inc.<br>
		Infinte Loop.<br>
		Cupertino, CA 95014<br>
		408-996-1010
		</p>

		<p class="pb-4">Email: info@apple.com<br>
		Tel: 1-800-676-2775</p>

	</div>

</div>

<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid p-0">

	<div class="grid-container">

		<div class="grid-item d-none d-lg-block pt-2">
<img src="img/logo.png" alt="">

		</div>

		<div class="grid-item d-none d-lg-block pt-2">

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat.</p>

		</div>

		<div  class="grid-item pt-2">

			<ul class="pt-2 redesFooter" >

				<li>
					<a href="https://facebook.com/electricistacuernavaca/" target="_blank"><i class="fab fa-facebook-f lead text-white float-left mx-3"> &nbsp;</i></a>
				</li>

				<li>
					<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter lead text-white float-left mx-3"> &nbsp;</i></a>
				</li>

				<li>
					<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube lead text-white float-left mx-3"> &nbsp;</i></a>
				</li>


				<li>
					<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram lead text-white float-left mx-3"> &nbsp;</i></a>
				</li>

			</ul>

		</div>

	</div>
	<div class="hecho" ">
		<a href="index.html">
			<span >"Desarrollo &nbsp;&#60;&#47;&#62; DACoder"</span>
		</a>
	</div>

</footer>

<!--=====================================
REDES SOCIALES MÓVIL
======================================-->

<ul class="redesMovil p-2 nav nav-justified">

	<li class="nav-item">
		<a href="https://facebook.com/electricistacuernavaca/" target="_blank"><i class="fab fa-facebook-f lead text-white"> &nbsp;</i></a>
	</li>

	<li class="nav-item">
		<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter lead text-white"> &nbsp;</i></a>
	</li>

	<li class="nav-item">
		<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube lead text-white"> &nbsp;</i></a>
	</li>

	<li class="nav-item">
		<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram lead text-white"> &nbsp;</i></a>
	</li>

</ul>
