<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Soluciones ELectricas</title>

    <base href="vistas/">


	<link rel="icon" href="img/icono.jpg">
	<!-- whatsapp -->
	<link rel="stylesheet" href="css/whatsapp.css">
    <link rel="stylesheet" href="css/plugins/whatsapp.css">
    <link rel="stylesheet" href="css/sliderTrabajos.css">
	<!--=====================================
	VÍNCULOS CSS
	======================================-->


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Fuente Open Sans y Ubuntu -->
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="css/plugins/bootstrap-datepicker.standalone.min.css">

	<!-- jdSlider -->
	<link rel="stylesheet" href="css/plugins/jquery.jdSlider.css">

	<!-- Pano -->
	<link rel="stylesheet" href="css/plugins/jquery.pano.css">

	 <!-- fullCalendar -->
	<link rel="stylesheet" href="css/plugins/fullcalendar.min.css">

	<!-- Hoja de estilo personalizada -->
	<link rel="stylesheet" href="css/style.css">

	<!--=====================================
	VÍNCULOS JAVASCRIPT
	======================================-->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- bootstrap datepicker -->
	<!-- https://bootstrap-datepicker.readthedocs.io/en/latest/ -->
	<script src="js/plugins/bootstrap-datepicker.min.js"></script>

	<!-- https://easings.net/es# -->
	<script src="js/plugins/jquery.easing.js"></script>

	<!-- https://markgoodyear.com/labs/scrollup/ -->
	<script src="js/plugins/scrollUP.js"></script>
	<script type="text/javascript" src="js/plugins/eskju.jquery.scrollflow.min.js"></script>
	<!-- jdSlider -->
	<!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html
	-->
		<script src="js/plugins/jquery.jdSlider-latest.js"></script>

	<!-- Pano -->
	<!-- https://www.jqueryscript.net/other/360-Degree-Panoramic-Image-Viewer-with-jQuery-Pano.html -->
	<script src="js/plugins/jquery.pano.js"></script>

	<!-- fullCalendar -->
	<!-- https://momentjs.com/ -->
	<script src="js/plugins/moment.js"></script>
	<!-- https://fullcalendar.io/docs/background-events-demo -->
	<script src="js/plugins/fullcalendar.min.js"></script>



</head>
<body>
    <?php
            include"paginas/modulos/header.php";

        //  -----------------------------paginas-----------

if(isset($_GET["pagina"])){

        if($_GET["pagina"]=="plomeria"){
            include "paginas/plomeria.php";

        }
        if($_GET["pagina"]=="enfriamiento"){
            include "paginas/enfriamiento.php";

        }
        if($_GET["pagina"]=="electricidad"){
            include "paginas/electricidad.php";

        }


}else{

    include "paginas/inicio.php";
}
include "paginas/modulos/correo.php";

            include"paginas/modulos/footer.php";
            include "paginas/modulos/modales.php";
    ?>

<script src="js/sliderTrabajo.js"></script>
    <script src="js/script.js"></script>
</body>
</html>