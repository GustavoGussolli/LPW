<?php

require_once("Veiculo.php");

$veiculo = new Veiculo($_POST['modelo'], $_POST['marca'], $_POST['combustivel']);

echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $veiculo->getModelo() . "<br>";
echo "Marca: " . $veiculo->getMarca() . "<br>";
echo "Combustível: " . $veiculo->combustivel() . "<br>";
echo "<br><br>";
echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";

