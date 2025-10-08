<?php

$text = "w3resource";

$count = 0;

$char = "r";

for ($i = 0; $i <= strlen($text);$i++) {

    if(substr($text,$i,1) == $char ){
        $count++;
    }

}

echo $count . "\n"


?>