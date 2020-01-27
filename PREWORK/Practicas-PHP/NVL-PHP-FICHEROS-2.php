<?php 
/*NVL-PHP-FICHEROS-2

En base al fichero de texto de El Quijote del ejercicio anterior, quiero que escribáis una función que reciba 4 argumentos, 
la ruta del fichero a leer, la ruta del fichero a escribir, la palabra a buscar, y la palabra a sustituir.

Y lo que tiene que hacer es crear un nuevo fichero, en donde se reemplace todas las apariciones de una palabra y que se sustituya por otra.

Es decir, que la llamada a la función sería algo parecido a:

<?php
reemplazar('quijote.txt', 'quijote-modificado.txt', 'Sancho', 'Morty');
Sé que puede ser algo dificil pero es que esa es la idea! luego a lo largo del bootcamp esto será pan comido.
 */ 


	$fichero = "quijote.txt";
	$ficheroNuevo = "quijote-modificado.txt";
	$palabra = "Sancho";
	$palabraSustituta = "Morty";

	reemplazar($fichero,$ficheroNuevo,$palabra,$palabraSustituta);

	function reemplazar($fichero,$ficheroNuevo,$palabra,$palabraSustituta){

		//Creamos la variable texto, donde almacenaremos el contenido del fichero a leer
		$texto = "";

		// Comprobamos que el fichero que nos indican por ruta existe
		if( file_exists($fichero) == true ){

			// Abrimos el archivo nuevo, crandolo si no existe
			$archivo = fopen($ficheroNuevo, "w+b");
			//Abrimos tambien el fichero que ya existia para recorrerlo
			$lecturafichero = fopen($fichero, 'r');

			// Recorremos el fichero guardando linea a linea en la variable texto
			while($linea = fgets($lecturafichero))
			{
				$texto .= $linea;
			}

			// Reemplazamos de la variable con todo el contenido del fichero las palabras indicadas, usamos la funcion str_ireplace para que no tenga en cuenta mayusculas y minusculas
			$texto = str_ireplace($palabra, $palabraSustituta, $texto);

			// Escribimos en el archivo el contenido de la variable texto
			fwrite($archivo, $texto);

			// Cerramos los 2 ficheros
			fclose($archivo);
			fclose($lecturafichero);
		}
		else
			echo "El archivo no existe";	
	}	
?>