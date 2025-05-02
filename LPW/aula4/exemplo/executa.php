<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($nome == "" || $idade == "") {

    echo "Informe todos os parametros!";
    echo "<br>";
    echo "<a href='form.php'>Voltar</a>";

} else {

    echo "Bem vindo " .  $nome . " - " . $idade . " anos!";

    echo "<br>";
    echo "<a href='form.php'>Voltar</a>";

}
