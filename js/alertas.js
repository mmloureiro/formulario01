$(function(){
	// cerramos la alerta al cargar la página
	$('#alerta').hide();

	// proagramamos el boton de envio del formulario por ajax
	$(".btn").click(function(){
		$.ajax({
		   method: "POST",
		   url: "php/recibe.php",
		   data: $("#formu").serialize(),
		   success: function(data){
				console.log(data);
		     	switch (data) {
		       	case '1':
			         $('#alerta').removeClass('alert-danger').addClass('alert-success');
			         $('#alerta').html("Datos correctos").show('slow');
			         break;
		       	case '2':
			         $('#alerta').html("Faltan campos en el formulario").show('slow');
			         break;
		       	case '3':
			         $('#alerta').html("e-mail no válido").show('slow');
			         break;
		       	default:
						break;
				}
			}
		});
	});
});