<?php 

function linha($jogador){
    echo "<tr style='background-color: " . $jogador['cor'] . ";'>";
    echo "<td>" . $jogador['nome'] . "</td>";
    echo "<td>" . $jogador['numero'] . "</td>";
    echo "</tr>";
}

$tafarel = [
    "nome" => 'Tafarel',
    "numero" => 1,
    "cor" => 'yellow'
];

$jorginho = [
    "nome" => 'Jorginho',
    "numero" => 2,
    "cor" => 'green'
];

$aldair = [ 
    "nome" => 'Aldair',
    "numero" => 13,
    "cor" => 'yellow'
];

$marcio = [
    "nome" => 'Márcio Santos',
    "numero" => 15,
    "cor" => 'green'
];

$branco = [
    "nome" => 'Branco',
    "numero" => 6,
    "cor" => 'yellow'
];

$mauro = [
    "nome" => 'Mauro Silva',
    "numero" => 5,
    "cor" => 'green'
];

$dunga = [
    "nome" => 'Dunga',
    "numero" => 8,
    "cor" => 'yellow'
];

$mazinho = [
    "nome" => 'Mazinho',
    "numero" => 17,
    "cor" => 'green'
];

$zinho = [
    "nome" => 'Zinho',
    "numero" => 9,
    "cor" => 'yellow'
];

$romario = [
    "nome" => 'Romário',
    "numero" => 11,
    "cor" => 'green'
];

$bebeto = [
    "nome" => 'Bebeto',
    "numero" => 7,
    "cor" => 'green'
];

$jogadores = [$jorginho, $tafarel, $marcio, $aldair, $mauro, $branco, $mazinho, $dunga, $romario, $zinho, $bebeto];

echo "<table border='1'>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Numero</th>";
echo "</tr>";

foreach ($jogadores as $j){
    linha($j);
}

echo "</table>";
