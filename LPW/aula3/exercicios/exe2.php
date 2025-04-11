<?php 

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$media = ($num1 + $num2 + $num3)/3;
echo "Média: " . $media;
echo "<br>";

/*
http://localhost/LPW/aula3/exercicios/exe2.php?num1=10&num2=10&num3=10
*/ 

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$media = ($num1 + $num2 + $num3)/3;
echo "Média: " . $media;
echo "<br>";

/*
http://localhost/LPW/aula3/exercicios/exe2.php
*/