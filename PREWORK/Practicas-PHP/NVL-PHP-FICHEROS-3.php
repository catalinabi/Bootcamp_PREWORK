<?php 
/*Quiero que creéis un pequeño programa que cree un directorio con el nombre de la fecha actual (ej: 2019-07-23 20:10), 
y que se copìe con otro nombre diferente un fichero que tengas en el mismo directorio donde está el script, pero con el sufijo «.modificado».

Es decir, que si en mismo directorio donde está el fichero php  hay un fichero llamado documento.doc, al ejecutar el script debería de crearse un directorio con la fecha actual y dentro de él, el mismo contenido del fichero documento.doc pero con el nombre document.doc.modificado
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