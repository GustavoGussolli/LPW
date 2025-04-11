<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$soma = $num1 + $num2;

echo "Soma dos numeros: " . $soma;

/*
http://localhost/LPW/aula3/exercicios/exe1.php?num1=2&num2=2
*/

echo "<br>";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$soma = $num1 + $num2;

echo "Soma dos numeros: " . $soma;

/*
http://localhost/LPW/aula3/exercicios/exe1.php
*/