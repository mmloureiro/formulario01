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
		       		window.location='php/resultado.php'; 
			         break;
		       	case '2':
			         $('#alerta').html("Debes cubrir todos los campos en el formulario").show('slow');
			         break;
		       	case '3':
			         $('#alerta').html("El e-mail no es válido").show('slow');
			         break;
			      case '4':
			         $('#alerta').html("La contraseña debe tener min 8 y max 10 caracteres").show('slow');
			         break;
			      case '5':
			         $('#alerta').html("No coinciden las contraseñas").show('slow');
			         break;
			      case '6':
			         $('#alerta').html("No se pudieron guardar los datos").show('slow');
			         break;
		       	default:
						break;
				}
			}
		});
	});
});