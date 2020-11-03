<?php
	require ('./bd/conexao.php');
?>
<!DOCTYPE html5>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nossas lojas - Full Stack Eletro</title>
    <link rel="icon" href="./imagens/icone.png">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>

<body>
    <!-- Início do Menu -->
    <?php require_once('menu.html'); ?>
    <!-- Fim do Menu -->
    <main class="container-fluid">
        <header class="text-primary">
            <h2>Nossas lojas</h2>
            <hr>
        </header>

        <section>
            <div class="card-deck">
                <div class="card border-dark p-2">
                    <h3 class="card-title">Rio de Janeiro</h3>
                    <p class="card-text">Avenida Presidente Vargas, 5000</p>
                    <p class="card-text">10 &ordm; andar</p>
                    <p class="card-text">Centro</p>
                    <p class="card-text">(21) 3333-3333</p>
                </div>
                <div class="card border-dark p-2">
                    <h3 class="card-title">São Paulo</h3>
                    <p class="card-text">Avenida Paulista, 985</p>
                    <p class="card-text">5&ordm; andar</p>
                    <p class="card-text">Jardins</p>
                    <p class="card-text">(11) 4444-4444</p>
                </div>
                <div class="card border-dark p-2">
                    <h3 class="card-title">Santa Catarina</h3>
                    <p class="card-text">Rua Major &Aacute;vila, 370</p>
                    <p class="card-text">4&ordm; andar</p>
                    <p class="card-text">Vila Mariana</p>
                    <p class="card-text">(47) 5555-5555</p>
                </div>
            </div>
            <br>
        </section>
    </main>
    <!-- Início do footer -->
    <?php require_once('rodape.html'); ?>
    <!-- Fim do footer -->
</body>

</html>