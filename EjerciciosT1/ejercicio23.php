<?php

$list = [];

for ($i = 1;$i <= 100;$i++) {
    $list[] = rand(0,99);
    
}

echo implode(", ", $list);

?>