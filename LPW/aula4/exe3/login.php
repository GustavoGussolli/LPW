<?php

$logado = false;

if (isset($_POST['login'])) {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == "ifpr" && $senha == "TDS") {
        $logado = true;
    }
}

//if($logado){
    //echo "Usuário logado";
//} else{
    //echo "Usuário não logado";
//}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php if(! $logado): ?>

    <form action="" method="post">

        <input type="text" placeholder="Insira o login" name="login">
        <br><br>
        <input type="password" placeholder="Insira a senha" name="senha">
        <br><br>
        <button type="submit">Login</button>

    </form>

    <?php else: ?>
        <p>bem vindo ao TDS!</p>
    <?php endif ?>

</body>

</html>