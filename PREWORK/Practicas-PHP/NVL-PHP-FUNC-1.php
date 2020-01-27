<?php 
cuentaLetraA("Upgrade Hub","u");

function cuentaLetraA($data,$caracter){
    foreach (count_chars($data, 1) as $i => $val) {
        if (chr($i)==$caracter){
            echo "Se ha encontrado $val instancia (s) de \"" , $caracter , "\" en la cadena. \n";        
        }
       
     }

}

?>