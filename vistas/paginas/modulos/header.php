
<!--=====================================
HEADER
======================================-->
<!-- whatsapp -->

<a href="https://api.whatsapp.com/send?phone=5217775973114&text=Hola%21%20Quisiera%20informaci%C3%B3n%20sobre%20sus%20servicios%20." class="float" target="_blank">
	<i class="fab fa-whatsapp"></i>
	</a>

<header class="container-fluid p-0 bg-white">
	<div class="container p-0">
		<div class="grid-container menuH py-2">
			<!-- logo -->
			<div class="grid-item1">
				<a href="<?php echo $ruta?>index.php">
					<img src="img/logo.png" class="img-fluid">
				</a>


			</div>

			<div class="grid-item d-none d-lg-block">
				<a class="nav-link text-white" href="<?php echo $ruta?>#banner">
					<span>Inicio</span>
				</a>
			</div>

			<div class="grid-item d-none d-lg-block">
				<a class="nav-link text-white" href="<?php echo $ruta?>#quienesSomos">
					<span>¿Quienes somos?</span>
				</a>

			</div>

			<div class="grid-item d-none d-lg-block">
				<a class="nav-link text-white" href="<?php echo $ruta?>#servicios">
					<span>Servicios</span>
				</a>

			</div>


			<div class="grid-item d-none d-lg-block">
				<a class="nav-link text-white" href="<?php echo $ruta?>#contactanos">
					<i class="fas fa-phone-volume"></i><span> &nbsp Contactanos </span>
				</a>
			</div>
			<div class="grid-item1 d-none d-lg-block">


				<ul class="my-2 py-1">

					<li>
						<a href="https://facebook.com/electricistacuernavaca/" target="_blank">
							<i class="fab fa-facebook-f text-gray-dark float-left mx-2"> &nbsp;</i>
						</a>
					</li>

					<li>
						<a href="https://twitter.com/" target="_blank">
							<i class="fab fa-twitter text-gray-dark float-left mx-2"> &nbsp;</i>
						</a>
					</li>

					<li>
						<a href="https://www.youtube.com/" target="_blank">
							<i class="fab fa-youtube text-gray-dark float-left mx-2"> &nbsp;</i>
						</a>
					</li>

					<li>
						<a href="https://www.instagram.com/" target="_blank">
							<i class="fab fa-instagram text-gray-dark float-left mx-2"> &nbsp;</i>
						</a>
					</li>

				</ul>



		</div>

			<!-- MENÚ HAMBURGUESA -->
<!--
			<div class="grid-item  d-block d-lg-none botonMenu">

				<i class="fas fa-bars"></i> -->
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

			</div>

		</div>

	</div>

</header>

<!--=====================================
MENÚ
======================================-->
<!--
<div class="menu container-fluid p-0">

	<ul class="nav nav-justified py-0">

		<li class="nav-item">
			<a  class="nav-link text-white" href="#banner">Iniciodfsd</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white" href="#quienesSomos">¿Quienes somos?</a>
		</li>

		<li class="nav-item">
			<a   class="nav-link text-white" href="#servicios">Servicios</a>
		</li>

		<li class="nav-item">
			<a   class="nav-link text-white" href="#contactenos">Contáctenos</a>
		</li>

		<li class="nav-item">

			<ul class="my-2 py-1">

				<li>
					<a href="https://www.facebook.com/electricistacuernavaca/" target="_blank">

						<i class="fab fa-facebook-f text-white float-left mx-2"> &nbsp;</i>
					</a>
				</li>

				<li>
					<a href="https://twitter.com/" target="_blank">
						<i class="fab fa-twitter text-white float-left mx-2"> &nbsp;</i>
					</a>
				</li>

				<li>
					<a href="https://www.youtube.com/" target="_blank">
						<i class="fab fa-youtube text-white float-left mx-2"> &nbsp;</i>
					</a>
				</li>

				<li>
					<a href="https://www.instagram.com/" target="_blank">
						<i class="fab fa-instagram text-white float-left mx-2"> &nbsp;</i>
					</a>
				</li>

			</ul>

		</li>

	</ul>


</div> -->

<!--=====================================
MENÚ MÓVIL
======================================-->
<!-- <div class="menuMovil">


	<ul class="nav flex-column mt-4 pl-4 mb-5">

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#banner">inicio</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#quienesSomos">¿Quienes somos?</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#servicios">Servicios que ofrecemos</a>
		</li>

		<li class="nav-item">
			<a class="nav-link text-white my-2" href="#contactenos">Contáctenos</a>
		</li>
		<br>
		<li class="nav-item">

			<ul class="my-1 py-1">

				<li>
					<a href="https://facebook.com/electricistacuernavaca/" target="_blank">

						<i class="fab fa-facebook-f text-white float-left mx-2">&nbsp; &nbsp;</i>
					</a>
				</li>

				<li>
					<a href="https://twitter.com/" target="_blank">
						<i class="fab fa-twitter text-white float-left mx-2">&nbsp; &nbsp;</i>
					</a>
				</li>

				<li>
					<a href="https://www.youtube.com/" target="_blank">
						<i class="fab fa-youtube text-white float-left mx-2">&nbsp; &nbsp;</i>
					</a>
				</li>

				<li>
					<a href="https://www.instagram.com/" target="_blank">
						<i class="fab fa-instagram text-white float-left mx-2">&nbsp; &nbsp;</i>
					</a>
				</li>

			</ul>

		</li>

	</ul>

</div> -->

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content ">
    <a href="<?php echo $ruta?>"onclick="closeNav()">Inicio</a>
    <a href="<?php echo $ruta?>#quienesSomos"onclick="closeNav()">¿Quienes somos?</a>
    <a href="<?php echo $ruta?>#servicios"onclick="closeNav()">Servicios</a>
    <a href="<?php echo $ruta?>#contactenos"onclick="closeNav()">Contacto</a>
  </div>
</div>
