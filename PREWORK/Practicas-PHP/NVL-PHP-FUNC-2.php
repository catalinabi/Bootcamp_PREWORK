<?php 
$data="Upgrade Hub";
$char="a";
cuentaLetraA($data,$char);

function cuentaLetraA($data,$char){
    foreach (count_chars($data, 1) as $i => $val) {
        if (chr($i)==$char){
            echo "Se ha encontrado $val instancia (s) de \"" , chr($i) , "\" en la cadena. \n";        
        }
       
     }

}



?>