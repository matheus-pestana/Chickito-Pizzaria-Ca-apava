<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chikito Pizzaria</title>
    <link rel="stylesheet" href="assets/css/senha.css">
    <link rel="stylesheet" href="assets/css/responsivo_senha.css">
    <script src="js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div id="content">
        <div id="content-items">
            <div class="Background-Square"></div>
            <img class="logo" src="assets/img/LogoChickito.png" alt="Avatar">

            <!-- LOGIN -->
            <div id="LOGINitr">
                <h2 class="login">Redefinir Senha</h2><br>
            </div>

            <!-- NEW PASSWORD -->
            <div id="Passworditr">
                <h3 class="Password">Nova senha</h3>
                <div class="Hr3" contenteditable></div>
            </div>

            <!-- CONFIRM PASSWORD -->
            <div id="Passworditr">
                <h3 class="Password">Senha</h3>
                <div class="Hr3" contenteditable></div>
            </div>

            <!-- ALTS -->
            <div id="alts">
                <a href="index.php" class="retornar">Retornar ao Login</a>
                <a href="cadastro.php" class="cadastro">Novo por aqui? Cadastre-se.</a>
            </div>

            <!-- BUTTON -->
            <div id="Buttonitr">
                <button class="Button-Login" type="button" onclick="ButtonLogin()">LOGIN</button>
            </div>
        </div>
    </div>
</body>

</html>