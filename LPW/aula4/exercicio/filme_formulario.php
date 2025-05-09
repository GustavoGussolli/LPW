<?php

    $nome = $_POST['nome'];
    $diretor = $_POST['diretor'];
    $ano = $_POST['ano'];
    $foto = $_POST['foto'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <form action="filme_card.php" method="post">

        <input type="text" placeholder="Insira o nome" name="nome">
        <br><br>
        <input type="text" placeholder="Insira o diretor" name="diretor">
        <br><br>
        <input type="number" placeholder="Insira o ano" name="ano">
        <br><br>
        <input type="etxt" placeholder="Insira o link da foto" name="foto">
        <br><br>
        <button type="submit">Cadastrar</button>

        <img alt="">

    </form>

</body>

</html>