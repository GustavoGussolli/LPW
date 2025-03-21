<?php 

function desenhaLinha(array $dadosMedalhas){
    echo "<tr>";
    echo "<td>{$dadosMedalhas["ordem"]}</td>";
    echo "<td><img class='flag' src='{$dadosMedalhas["imagem"]}'></td>";
    echo "<td>{$dadosMedalhas["país"]}</td>";
    echo "<td>{$dadosMedalhas["ouro"]}</td>";
    echo "<td>{$dadosMedalhas["prata"]}</td>";
    echo "<td>{$dadosMedalhas["bronze"]}</td>";
    echo "<td>{$dadosMedalhas["total"]}</td>";
    echo "</tr>";
}

$linhas = [
    [
        "ordem" => 0, "imagem" => 'https://gstatic.olympics.com/s1/t_s_pog_flag/f_auto/static/flag/4x3/br',
        "país" => "Brasil", "ouro" => 100, "prata" => 100, "bronze" => 100, "total" => 300
    ],
    [
        "ordem" => 1, "imagem" => 'https://gstatic.olympics.com/s1/t_s_pog_flag/f_auto/static/flag/4x3/us',
        "país" => "Estados Unidos", "ouro" => 46, "prata" => 37, "bronze" => 38, "total" => 121
    ],
    [
        "ordem" => 2, "imagem" => 'https://gstatic.olympics.com/s1/t_s_pog_flag/f_auto/static/flag/4x3/cn',
        "país" => "China", "ouro" => 40, "prata" => 27, "bronze" => 24, "total" => 91
    ],
    [
        "ordem" => 3, "imagem" => 'https://gstatic.olympics.com/s1/t_s_pog_flag/f_auto/static/flag/4x3/gb',
        "país" => "Grã-Bretanha", "ouro" => 14, "prata" => 22, "bronze" => 29, "total" => 65
    ],
    [
        "ordem" => 4, "imagem" => 'https://gstatic.olympics.com/s1/t_s_pog_flag/f_auto/static/flag/4x3/fr',
        "país" => "França", "ouro" => 16, "prata" => 26, "bronze" => 22, "total" => 64
    ],
    [
        "ordem" => 5, "imagem" => 'https://gstatic.olympics.com/s1/t_s_pog_flag/f_auto/static/flag/4x3/au',
        "país" => "Austrália", "ouro" => 18, "prata" => 29, "bronze" => 16, "total" => 53
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .flag {
            width: 50px;
        }
        .medal {
            width: 25px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Ordem</th>
                <th>Imagem</th>
                <th>País</th>
                <th><img class='medal' src='https://upload.wikimedia.org/wikipedia/commons/1/15/Gold_medal.svg'></th>
                <th><img class='medal' src='https://upload.wikimedia.org/wikipedia/commons/0/03/Silver_medal.svg'></th>
                <th><img class='medal' src='https://upload.wikimedia.org/wikipedia/commons/5/52/Bronze_medal.svg'></th>
                <th><img class='medal' src='https://upload.wikimedia.org/wikipedia/commons/5/5e/GoldSilverBronze_medals.svg'></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($linhas as $pais) { desenhaLinha($pais); } ?>
        </tbody>
    </table>
</body>
</html>
