<?php 

if(isset($_GET['num1']) or isset($_GET['num2'])){

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];


$soma = $num1 + $num2;
echo "Soma: " . $soma . "<br>";

$subtracao = $num1 - $num2;
echo "Subtração: " . $subtracao . "<br>";

$multiplicacao = $num1 * $num2;
echo "Multiplicação: " . $multiplicacao . "<br>";

$divisao = $num1 / $num2;
echo "Divisão: " . $divisao . "<br>";

$resto = $num1 % $num2;
echo "Divisão: " . $resto . "<br>";

/*

*/ 
} else{
    echo "Informe os Parametros!";
}