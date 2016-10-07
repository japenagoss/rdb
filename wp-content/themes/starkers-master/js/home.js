$(document).ready(function(){
	/*Slide*/
	$('.bxslider').bxSlider({mode: 'fade',pager:true,controls: false,auto: false,autoHover:true,pause: 5000});
	/*Animación en herramientas*/
	$(window).scroll(function() {
		if($(this).scrollTop()==100){
			animar($(".item_nuestra_compania"),500);
		}
		
	 	if($(this).scrollTop()==842){
			animar($(".animacion_herramientas_pasos img"),200);
		}
	});
	
	function animar(element,tiempo){
		var i = 1;
		element.first().fadeIn(tiempo);
		var intervalo = setInterval(function() {
			element.eq(i).fadeIn(tiempo);
			i++;
			if(i==9){
				 clearInterval(intervalo);
			}
		}, tiempo);
	}
});