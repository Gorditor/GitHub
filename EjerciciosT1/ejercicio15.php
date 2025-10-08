<?php

for($i = 0;$i <=50;$i++) {

    if ($i % 3 == 0) {
        echo $i . "Fizz\n";
    }

    if ($i % 5 == 0) {
        echo $i . "Buzz\n";
    }

    if ($i % 3 == 0 && $i % 5 == 00) {
        echo $i . "FizzBuzz\n";
    }

}



?>