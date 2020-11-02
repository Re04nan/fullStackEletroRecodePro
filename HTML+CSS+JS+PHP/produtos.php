<?php
    require ('./bd/conexao.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="icon" href="./imagens/icone.png">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <!-- Início do Menu -->
    <?php require_once('menu.html'); ?>
    <!-- Fim do Menu -->
    <main>
        <header>
            <h2>Produtos</h2>
            <hr>
        </header>
        <section>
            <aside id="categorias">
                <h3>Categorias</h3>
                <ul>
                    <li class="lista" id="listarTodos" onmouseout="limpar()" onmousemove="efeitoTela(this)"
                        onclick="filtrarTodos()">Todos os itens (12)</li>
                    <li class="lista" id="listarGeladeira" onmouseout="limpar()" onmousemove="efeitoTela(this)"
                        onclick="filtroCategoria('geladeira')">Geladeiras (3)</li>
                    <li class="lista" id="listarFogao" onmouseout="limpar()" onmousemove="efeitoTela(this)"
                        onclick="filtroCategoria('fogao')">Fogões (2)</li>
                    <li class="lista" id="listarMicroondas" onmouseout="limpar()" onmousemove="efeitoTela(this)"
                        onclick="filtroCategoria('microondas')">Microondas (3)</li>
                    <li class="lista" id="listarLavadora" onmouseout="limpar()" onmousemove="efeitoTela(this)"
                        onclick="filtroCategoria('lavadora')">Lavadoura de roupas (2)</li>
                    <li class="lista" id="listarLavaLoucas" onmouseout="limpar()" onmousemove="efeitoTela(this)"
                        onclick="filtroCategoria('lavaLoucas')">Lava-louças (2)</li>
                </ul>
            </aside>
            <div id="container">
                <?php
                    $sql = "select * from produtos";
                    $result = $conn -> query($sql);
                    
                    if($result->num_rows > 0){
                        while($rows = $result -> fetch_assoc()){
                            
                        $_SESSION['id'] = $rows["id_produto"];
                        $_SESSION['valor'] = $rows["preco_venda"];

                ?>
                <div class="secProdutos" id="<?php echo $rows["categoria"]; ?>">
                    <figure>
                        <img onclick="exibirZoom(this)" class="imgProduto" id="photo<?php echo $rows["id_produto"];?>"
                            src="./imagens/Produtos<?php echo $rows["nome_imagem"];?>" alt="<?php echo $rows["nome"];?>"
                            title="<?php echo $rows["nome"];?>">
                    </figure>
                    <figcaption>
                        <br>
                        <?php echo $rows["nome"] . " " . $rows["descricao"]; ?>
                        <hr>
                        <s>R$ <?php echo $rows["preco"]; ?>,00</s><br>
                        <b class="precoDestaque">R$ <?php echo $rows["preco_venda"]; ?>,00</b>
                    </figcaption>
                    <button class="btnComprar" onclick="copiar(this)"><a href="pedido.php">Comprar</a></button>
                </div>
                <?php
                    } 
                } else {
                        echo "Nenhum produto cadastrado ou encontrado";
                    }
                ?>
            </div>
            <br>
        </section>
    </main>
    <!-- Início do footer -->
    <?php require_once('rodape.html'); ?>
    <!-- Fim do footer -->
</body>

</html>