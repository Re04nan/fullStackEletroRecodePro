<?php
    require ('./bd/conexao.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="icon" href="./imagens/icone.png">
    <script src="js/funcoes.js"></script>
</head>

<body>
    <!-- Início do Menu -->
    <?php require_once('menu.html'); ?>
    <!-- Fim do Menu -->
    <main class="container-fluid">
        <aside>
            <form action="pedido.php" method="POST">
                <div id="container_pedidos">
                    <h1 class="text-primary">Realizar Compra</h1>
                    <label for="nome">Nome Completo:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome Completo" required>
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" required>
                    <label for="fone">Telefone:</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" required>
                    <button type="submit" class="btnComprar">Enviar</button>
                    <?php
                    $id = $_SESSION['id'];
                    //var_dump($id);
                    $sql = "select * from produtos where id_produto='$id'";
                    $result = $conn -> query($sql);
                    if($result->num_rows > 0){
                    while($rows = $result -> fetch_assoc()){

                ?>
                    <div class="painelClone">
                        <div class="secProdutos" id="<?php echo $rows["categoria"]; ?>">
                            <figure>
                                <img onclick="exibirZoom(this)" class="imgProduto"
                                    id="photo<?php echo $rows["id_produto"];?>"
                                    src="./imagens/Produtos<?php echo $rows["nome_imagem"];?>"
                                    alt="<?php echo $rows["nome"];?>" title="<?php echo $rows["nome"];?>">
                            </figure>
                            <figcaption>
                                <br>
                                <?php echo $rows["nome"] . " " . $rows["descricao"]; ?>
                                <hr>
                                <s>R$ <?php echo $rows["preco"]; ?>,00</s><br>
                                <b class="precoDestaque">R$ <?php echo $rows["preco_venda"]; ?>,00</b>
                                <br>
                                <label for="quantidade">Quantidade:</label>
                                <input type="number" name="quantidade" id="quantidade" value="1" min="1" max="10">
                            </figcaption>
                        </div>
                    </div>
                    <?php
                      }
                    } else {
                        echo "Nenhum produto cadastrado ou encontrado";
                    }

                    if (isset($_POST["nome"]) && isset($_POST["endereco"]) && isset($_POST["telefone"])){
                        $id = $_SESSION['id'];
                        $nome = $_POST['nome'];
                        $endereco = $_POST['endereco'];
                        $telefone = $_POST['telefone'];
                        $quantidade = $_POST['quantidade'];
                        $valor = $quantidade * $_SESSION['valor'];
                           
                        $sql = "insert into pedidos (id, nome_cliente, endereco, telefone, quantidade, valor_total)
                        values ('$id', '$nome', '$endereco', '$telefone', '$quantidade', '$valor')";
                        $result = $conn -> query($sql);
                            if($result){
                                echo "<br><p>(✅) Pedido realizado com sucesso!</p>";
                            } else {
                                echo "<br><p>(❗) Erro ao realizar o pedido inserir!</p>";
                            }
                    }
                ?>
                </div>
            </form>
        </aside>
    </main>
    <!-- Início do footer -->
    <?php require_once('rodape.html'); ?>
    <!-- Fim do footer -->

</body>

</html>