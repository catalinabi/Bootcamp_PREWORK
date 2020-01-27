<?php 
/*Lo primero es bajarse a un directorio el libro del quijote en txt.

https://gist.githubusercontent.com/jsdario/6d6c69398cb0c73111e49f1218960f79/raw/8d4fc4548d437e2a7203a5aeeace5477f598827d/el_quijote.txt

Una vez bajado, escribir el código necesario para dada una ruta a un fichero de texto, nos diga cuántas veces aparece la palabra molino.

Recordad que lo primero es abrirlo (con el modo adecuado), recoger en una variable el descriptor del fichero, y luego recorrerlo en un bucle para ir leyendo linea a linea el contenido, está un ejemplo muy parecido en el contenido de este mismo módulo.

Si os animáis, modificarlo también para que no tenga en cuenta mayúsculas ni minúsculas, y que por lo tanto también cuenta las palabras Molino, MOLINO, etc…
 */ 





$fichero = fopen('el_quijote.txt', 'r');
// Nos guardamos la palabra en un string
$palabra = "molino";
// Creamos un contador para contar las veces que sale la palabra buscada
$cont = 0;
// Recorremos el fichero linea a linea y comprobamos si en cada linea existe la palabra, si existe, aumentamos el contador
while (($contenido = fgets($fichero)) !== false) {
    if(strstr($contenido, $palabra)){
        $cont++;
    }
}


// Imprimimos el resultado de la variable cont
echo "La palabra " .$palabra. " se ha encontrado " .$cont. " veces";

?>