<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chikito Pizzaria</title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <link rel="stylesheet" href="assets/css/responsivo_cadastro.css">
    <script src="../Projeto chickito/assets/js/main.js"></script>
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
                <h2 class="LOGIN">CADASTRO</h2><br>
            </div>

            <!-- E-MAIL -->
            <div id="E-mailitr">
                <h3 class="E-mail">E-mail</h3>
                <input type="email" class="Hr2" id="email">
            </div>

            <!-- PASSWORD -->
            <div id="Passworditr">
                <h3 class="Password">Senha</h3>
                <input type="password" class="Hr3" id="senha">
            </div>

            <!-- ALTS -->
            <div id="alts">
                <a href="index.php" class="esquecer">Entrar com e-mail</a>
            </div>

            <!-- BUTTON -->
            <div id="Buttonitr">
                <button class="Button-Login" type="button" onclick="ButtonCadastro()">Cadastrar-se</button>
            </div>
        </div>
    </div>
</body>

</html>