<?php

require_once("Card.php");

$filme = new Card($_POST['nome'], $_POST['diretor'], $_POST['ano'], $_POST['foto']);

echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
echo $filme->getNome() . "<br>";
echo $filme->getDiretor(). "<br>";
echo $filme->getAno() . "<br>";
echo "<img style='width: 100%; height: auto;' src='" . $filme->getFoto() . "' />";
echo "</div>";
