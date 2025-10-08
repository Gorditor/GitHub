<?php

function esPrimo($x) {
    for ($i = 2; $i < $x;$i++) {

        if ($x % $i == 0 ) {
            return 0;
        }

        

    }

    return 1;
}

$respuesta = esPrimo(17);

if ($respuesta == 0) {
    echo "no es un número primo";
} else {
    echo "es un número primo";      
}

?>