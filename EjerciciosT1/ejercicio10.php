<?php

$array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($array);
var_dump($array);

ksort($array);
var_dump($array);

arsort($array);
var_dump($array);

krsort($array);
var_dump($array);


?>