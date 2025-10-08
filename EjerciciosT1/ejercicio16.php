<?php 

for ($i = 1; $i <= 8;$i++) {
    
    for($x = 1; $x <= 8;$x++) {
        if (($x + $i) % 2 == 0) {
            echo " ";
        } else {
            echo "o";
        }

    }

    echo "\n";

}



?>