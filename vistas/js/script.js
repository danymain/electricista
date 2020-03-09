/*=============================================
BOTÓN MENÚ
=============================================*/

if(window.matchMedia("(max-width:768px)").matches){
	$(".botonMenu").click(function(){
		$(".menuMovil").slideToggle('fast');
		$(".menuMovil").css({"top":$("header").height()})
	})
	$(".menuMovil ul li a").click(function(e){
		$(".menuMovil").slideToggle('fast');
		e.preventDefault();
		var vinculo = $(this).attr("href");
		$("html, body").animate({
			scrollTop: $(vinculo).offset().top - 55
		}, 1000, "easeInOutBack")
	})
}else{
 $(".botonMenu").click(function(){
$(".menu").slideToggle('fast');
	 	$(".formReservas").slideUp('fast');
	 })
	$(".menu ul li a").click(function(e){
		$(".menu").slideToggle('fast');
		e.preventDefault();
		var vinculo = $(this).attr("href");
		$("html, body").animate({
			scrollTop: $(vinculo).offset().top - 60
		}, 1000, "easeInOutBack")
	})
}



// /*=============================================
// SCROLL UP
// =============================================*/
$.scrollUp({
	scrollText:"↑",
	scrollSpeed: 1500,
	easingType: "easeInOutBack"
})


// $(function () {
// 	$.scrollUp({
// 	  scrollName: 'scrollUp', // Element ID
// 	  topDistance: '300', // Distance from top before showing element (px)
// 	  topSpeed: 300, // Speed back to top (ms)
// 	  animation: 'fade', // Fade, slide, none
// 	  animationInSpeed: 200, // Animation in speed (ms)
// 	  animationOutSpeed: 200, // Animation out speed (ms)
// 	  scrollText: '<i class="fas fa-sort-up"></i> ', // Text for element
// 	  activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
// 	});
//   });
/*=============================================
SLIDE BANNER
=============================================*/
$('.fade-slider').jdSlider({
    isSliding: false,
    isAuto: true,
    isLoop: true,
    isDrag: false,
    interval: 1000,
    isCursor: false,
    speed: 3000
})
// $(".banner ").mouseover(function() {
// 	$(this).children(".slide-area").css({"height":"25%", "transition":".5s all"})

// })
// $(".banner").mouseout(function() {
// 	$(this).children(".slide-area").css({"height":"100%", "transition":".5s all"})

// })

// $(".verMas").click(function(){
// 	var vinculo = $(this).attr("vinculo");
// 	$("html, body").animate({
// 		scrollTop: $(vinculo).offset().top - 60
// 	}, 1000, "easeInOutBack")
// })
// $(".banner .fade-slider").css({"margin-top":$("header").height()})

/*=============================================
INTERACCIÓN servicios
=============================================*/
$(".servicios .grid-item").mouseover(function() {
	$(this).children("figure").css({"height":"25%", "transition":".5s all"})
	$(".tituloPlan").html($(this).children("figure").children("h1").html());
	$(".descripcionPlan").html($(this).children("figure").children("h1").attr("descripcion"));
})
$(".servicios .grid-item").mouseout(function() {
	$(this).children("figure").css({"height":"100%", "transition":".5s all"})
	$(".tituloPlan").html($(".tituloPlan").attr("tituloPlan"));
	$(".descripcionPlan").html($(".descripcionPlan").attr("descripcionPlan"));
})

/*=============================================
servicios MOVIL
=============================================*/
$('.serviciosMovil').jdSlider({
	wrap: '.slide-inner',
    slideShow: 3,
    slideToScroll: 3,
    isLoop: false
})
$(".serviciosMovil li").click(function(){
	$(".modal-title").html($(this).children("a").children("h6").html());
	$(".modal-body img").attr("src", $(this).children("a").children("img").attr("src"));
	$(".modal-body p").html($(this).children("a").attr("descripcion"));
})
$(".servicios .grid-item").click(function(){
	$(".modal-title").html($(this).children("figure").children("h1").html());
	$(".modal-body img").attr("src", $(this).children("img").attr("src"));
	$(".modal-body p").html($(this).children("figure").children("h1").attr("descripcion"));
})
