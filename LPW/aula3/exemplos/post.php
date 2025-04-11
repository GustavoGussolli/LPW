<?php 

echo "Página Aberta!";

$nome = $_POST['nome'];
echo "<br>";
echo "Bem vindo " . $nome;

$sobrenome = $_POST['sobrenome'];
echo " " . $sobrenome;

/*
http://localhost/LPW/aula3/post.php?nome=Gustavo&sobrenome=Gussolli
*/