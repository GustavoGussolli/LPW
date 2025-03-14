<?php

function calcular_media($num1, $num2, $num3) {
    $media = ($num1 + $num2 + $num3) / 3;
    return $media;
}


$media1 = calcular_media(7, 8, 9);
$media2 = calcular_media(5, 10, 6);
$media3 = calcular_media(3, 4, 5);

echo "Média 1: " . $media1 . "<br>";
echo "Média 2: " . $media2 . "<br>";
echo "Média 3: " . $media3;
?>