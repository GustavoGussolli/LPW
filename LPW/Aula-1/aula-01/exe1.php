<?php


$var = 20;
$impar = 0;
$par = 0;

for($var = 20; $var <= 70; $var++) {

    if ($var % 2 === 0){
        $par = $par + $var;
    } else {
        $impar = $impar + $var;
    }
}

echo "Impares:" . $impar ."<br>";
echo "Pares:" . $par ."<br>";
