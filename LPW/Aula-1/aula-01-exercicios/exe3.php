<?php

$cidades = [
    ["nome" => "Foz do Iguaçu", "habitantes" => "250.000", "area" => "500km²", "altitude" => "145m", "estado" => "Paraná-PR"],
    ["nome" => "Cascavel", "habitantes" => "300.000", "area" => "420km²", "altitude" => "320m", "estado" => "Paraná-PR"],
    ["nome" => "Chapecó", "habitantes" => "240.000", "area" => "120km²", "altitude" => "620m", "estado" => "Santa Catarina-SC"],
    ["nome" => "Blumenau", "habitantes" => "330.000", "area" => "200km²", "altitude" => "85m", "estado" => "Santa Catarina-SC"],
    ["nome" => "Curitiba", "habitantes" => "1.500.000", "area" => "300km²", "altitude" => "850m", "estado" => "Paraná-PR"]
];


function criarLinha($cidade) {
    echo "<tr>";
    echo "<td>{$cidade['nome']}</td>";
    echo "<td>{$cidade['habitantes']}</td>";
    echo "<td>{$cidade['area']}</td>";
    echo "<td>{$cidade['altitude']}</td>";
    echo "<td>{$cidade['estado']}</td>";
    echo "</tr>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Cidades</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Tabela de Cidades</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Habitantes</th>
            <th>Área</th>
            <th>Altitude</th>
            <th>Estado</th>
        </tr>
        <?php
        foreach ($cidades as $cidade) {
            criarLinha($cidade);
        }
        ?>
    </table>
</body>
</html>
