<?php 

echo "Página Aberta!";

$nome = $_GET['nome'];
echo "<br>";
echo "Bem vindo " . $nome;

$sobrenome = $_GET['sobrenome'];
echo " " . $sobrenome;

/*
http://localhost/LPW/aula3/get.php?nome=Gustavo&sobrenome=Gussolli
*/