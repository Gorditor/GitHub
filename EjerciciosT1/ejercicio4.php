<?php 

$n = 51;
$nR = 51;
$difference = 0;

if ($nR > $n) {
    $difference = $nR - $n;
} else {
    $difference = ($n - $nR) * 3;
}

echo($difference);


?>