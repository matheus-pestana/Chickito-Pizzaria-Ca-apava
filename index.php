<?php
session_start();

$usuario = 'admin@gmail';
$senha = '123';

if ($_SERVER["REQUEST_METHOD"] == "post") {
    $username = $_POST["username"];
    $password = $_POST["senha"];

    if ($usuario == $username && $senha == $passaword) {
        $_SESSION´['login'] = true;
        header("Location: dashboard.php");
    } else {
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chikito Pizzaria</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsivo_login.css">
    <!-- <script src="./Projeto chickito/assets/js/main.js"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div id="content">
        <div id="content-items">
            <img class="logo" src="assets/img/LogoChickito.png" alt="Avatar">

            <!-- LOGIN -->
            <!-- teste -->
            <div id="LOGINitr">
                <h2 class="login">LOGIN</h2><br>
            </div>

            <!-- E-MAIL -->
            <form method="post">
                <div id="E-mailitr">
                    <h3 class="E-mail">E-mail</h3>
                    <input type="email" class="Hr2" id="email" name="login">
                </div>

                <!-- PASSWORD -->
                <div id="Passworditr">
                    <h3 class="Password">Senha</h3>
                    <input type="password" class="Hr3" id="senha" name="senha">
                </div>

                <!-- ALTS -->
                <div id="alts">
                    <a href="senha.php" class="esquecer">Esqueceu sua senha?</a>
                    <a href="cadastro.php" class="cadastro">Novo por aqui? Cadastre-se.</a>
                </div>

                <!-- BUTTON -->
                <div id="Buttonitr">
                    <input type="submit" class="Button-Login" name="acao">
                </div>
            </form>
        </div>
    </div>
</body>

</html>