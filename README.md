# formulario01
Formulario básico para guardar datos en BD

En el servidor:
- Comprueba que no haya campos vacíos
- Que el e-mail sea válido
- Que la contraseña tenga una longitud mínima de 8 caracteres y máxima de 10
- Que la contraseña y la repetición de la contraseña coinciden
- Conexión con la BD por PDO
- Hasheo de contraseña
- Uso de sesiones para usar datos de usuario e e-mail.

En el front-end
- Formulario realizado con Bootstrap 4
- Envío del formulario con Ajax
- Manejo de mensajes de error con jQuery
- Se muestran errores en un alert, según el tipo de error correspondiente
- Si no existe error, se abre una nueva ventana con un alert-success y el nombre e e-mail del usuario.
