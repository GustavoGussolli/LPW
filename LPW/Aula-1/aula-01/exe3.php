<?php 

$retangulos = [
    ['base' => 5, 'altura' => 10],
    ['base' => 2, 'altura' => 4],
    ['base' => 10, 'altura' => 7]
];


foreach ($retangulos as $i => $retangulo) {
    $area = $retangulo['base'] * $retangulo['altura'];
    echo "Área do Retângulo " . ($i + 1) . ": " . $area . "<br>";
}