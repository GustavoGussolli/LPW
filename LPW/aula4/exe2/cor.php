<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COR Fundo</title>
</head>

<body>

    <h3>Cor de Fundo</h3>
    <p>Escolha uma cor</p>

    <form action="execucao.php" method="post">

        <select name="cor">
            <option value="">--Selecione a cor---</option>
            <option value="Tomato">Tomato</option>
            <option value="Orange">Orange</option>
            <option value="DodgerBlue">DodgerBlue</option>
            <option value="MediumSeaGreen">MediumSeaGreen</option>
            <option value="Gray">Gray</option>
            <option value="SlateBlue">SlateBlue</option>
            <option value="Violet">Violet</option>
            <option value="LightGray">LightGray</option>
        </select>
        <br>
        <button type="submit">Trocar a cor</button>

    </form>

</body>

</html>