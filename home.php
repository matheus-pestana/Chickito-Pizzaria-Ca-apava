<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Home Chikito Pizzaria</title>
</head>


<body>
    <nav class="navbar">
        <div class="logohome">
            <a href="home.html">
                <img src="assets/img/LogoChickito.png" alt="Logochickito" width="110" class="logo">
            </a>
        </div>
        <ul>
            <div class="btnnav">
                <li> <a href="#">Home</a> </li>
                <li> <a href="#">Cardápio</a> </li>
                <li> <a href="#">Promoções</a> </li>
                <li> <a href="#">Pedidos</a></li>
            </div>
        </ul>
    </nav>

    <div>
        <img src="assets/img/entregador.png" alt="entregador de pizza" class="entregador" width="200">
    </div>
    <div class="acessar">
        <h1 class="titulo">Faça seu pedido agora mesmo!!!</h1>
        <button class="btnhome">Veja o cardápio</button>
    </div>

    <div>
        <a href="#">
            <img src="assets/img/promo1.png" alt="promocao" class="promo">
        </a>

    </div>
</body>

</html>