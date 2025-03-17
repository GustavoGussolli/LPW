<?php

$carro1 = [
    "marca" => 'fiat',  
    "modelo" => 'mobi',      
    "link" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6fVh4DuRVp6f4LA4JsaG9ptF1lHnTbx4jMQ&s'
];
$carro2 = [
    "marca" => 'fiat',  
    "modelo" => 'pulse',      
    "link" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz1hVUi9btM82kmuCIghxLWSlFXWnkrb3oVw&s'
];
$carro3 = [
    "marca" => 'fiat',  
    "modelo" => 'argo',      
    "link" => 'https://t.ctcdn.com.br/aP38AwuL6R_hPoM23_1qb1Oe-7E=/1024x576/smart/i523842.jpeg'
];
$carro4 = [
    "marca" => 'Mustang',  
    "modelo" => 'aaaa',      
    "link" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpORocZ-UyfvfXOC-1mAAIq_YlWiLAoLMB1A&s'
];
$carro5 = [
    "marca" => 'volks',  
    "modelo" => 'gol',      
    "link" => 'https://cdn.autopapo.com.br/box/uploads/2024/07/03171049/bugatti-chiron-paito-motors-brasil-732x488.jpg'
];

$carros = [$carro1, $carro2, $carro3, $carro4, $carro5];

foreach ($carros as $carro) {
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
            {$carro['marca']}<br>
            {$carro['modelo']}<br>
            <img style='width: 100%; height: auto;' src='{$carro['link']}' /><br>
          </div>";
}