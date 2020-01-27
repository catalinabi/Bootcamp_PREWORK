<?php 
/*Subir el código necesario para simular un formulario de registro, que contenga 3 campos. Email, contraseña y otro con la confirmación de la contraseña.

Es necesario que haya 1 fichero html que contenga el HTML con el formulario, y un script en PHP donde se recojan los datos y se compruebe que los 2 campos de contraseñas son iguales y que tienen al menos una longitud de 8 caracteres.

Si no se cumplen las 2 condiciones mostrar por pantalla “Error en el formulario” (podéis imprimir el mensaje con la palabra reservada echo), si todo fue bien mostrar «Datos procesados correctamente»
 */ 






$email = $_GET['email'];
$contraseña = $_GET['contraseña'];
$contraseña2 = $_GET['contraseña2'];

if(empty($email) || empty($contraseña) || empty($contraseña2)){
    echo "Debe rellenar todos los campos";
}else if($contraseña != $contraseña2 || strlen($contraseña)<8){
    echo "error en el formulario";

?>