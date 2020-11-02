<?php
	require ('./bd/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="icon" href="./imagens/icone.png">
</head>

<body>
    <!-- Início do Menu -->
    <?php require_once('menu.html'); ?>
    <!-- Fim do Menu -->
    <main id="pgInicial">
        <h2>Seja bem vindo(a)!</h2>
        <p>Aqui em nossa loja, <em>devs tem descontos</em> nos produtos para sua casa!</p>
        <div id="bemVindo">
            <p>Temos produtos de ótima qualidade e para todos os gostos,</p>
            <p>para mais informações acesse a aba contato na parte superior </p>
            <p>do menu e mande sua pergunta que responderemos assim que possível, <b>boas compras.</b></p>
        </div>
    </main>
    <br>
    <br>
    <!-- Início do footer -->
    <?php require_once('rodape.html'); ?>
    <!-- Fim do footer -->
</body>

</html>