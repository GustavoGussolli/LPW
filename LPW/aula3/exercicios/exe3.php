<?php

if (isset($_GET['cor'])) {

    $cor = $_GET['cor'];
    echo "<body style='background-color: " . $cor . "'></body>";
} else{
    echo "Informe o parametro 'cor'!";
}

/*
http://localhost/LPW/aula3/exercicios/exe3.php?cor=blue
*/

$cor = $_POST['cor'];

echo "<body style='background-color: " . $cor . "'></body>";

/*
http://localhost/LPW/aula3/exercicios/exe3.php
*/