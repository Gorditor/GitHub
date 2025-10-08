<?php

$array = ["1","2","3","4","5"];

$insertar = "$";

array_splice($array, 3, 0, $insertar);

foreach ($array as $x){
    echo "$x ";
}

?>