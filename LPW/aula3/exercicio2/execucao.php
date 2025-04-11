<?php

require_once("modelo/Pessoa.php");

if(!isset($_GET['tipo'])){
    echo "Informe o parâmetro 'tipo'!";
}

$tipo = $_GET['tipo'];

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$idade = $_GET['idade'];

if($tipo == 'C'){

    $pessoa = new Pessoa();
    $pessoa->setNome($nome);
    $pessoa->setSobrenome($sobrenome);
    $pessoa->setIdade($idade);

    echo "Nome completo: " . $pessoa->getNome() . " " . $pessoa->getSobrenome() . "<br>";
    echo "Idade: " . $pessoa->getIdade();

} 

if($tipo == 'A'){

    $pessoa = [
        "nome" => $nome,
        "sobrenome" => $sobrenome,
        "idade" => $idade
    ];

    echo "Nome completo: " . $pessoa["nome"] . " " . $pessoa["sobrenome"] . "<br>";
    echo "Idade: " . $pessoa["idade"];
}
