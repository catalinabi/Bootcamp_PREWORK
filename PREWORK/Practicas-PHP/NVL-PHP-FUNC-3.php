<?php 
/*NVL-PHP-FUNC-3

Crear una función que diga dado una frase pasada como argumento nos diga si contiene las 5 vocales o no.
En este caso queremos que la función devuelva un valor booleano true o false, en caso de que contenga las 5 vocales o false si le falta alguna. También deberemos de llamar a esa función pasándole una cadena y en caso de que el valor devuelto sea true se imprima el mensaje «LA PALABRA CONTIENE LAS 5 VOCALES», en caso negativo, debe de mostrar el mensaje «NO CONTIENE TODAS LAS VOCALES»

 */ 
$palabra="Upgrade Hub";
$vocales = 0;

contieneVocales("Upgradei Houb");

function contieneVocales($palabra){

  foreach (count_chars($palabra, 1) as $i => $val) {
    
    if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
        {
            $vocales += $val;
            
        } 

    }
}
print "<p>Se han encontrado vocales".$vocales."</p>\n";


?>