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
	<main>
		<header>
			<h2>Nossas lojas</h2>
			<hr>
		</header>

		<section id="secLojas">
			<div class="nossLojas">
				<h3>Rio de Janeiro</h3>
				<p>Avenida Presidente Vargas, 5000</p>
				<p>10 &ordm; andar</p>
				<p>Centro</p>
				<p>(21) 3333-3333</p>
			</div>
			<div class="nossLojas">
				<h3>São Paulo</h3>
				<p>Avenida Paulista, 985</p>
				<p>5&ordm; andar</p>
				<p>Jardins</p>
				<p>(11) 4444-4444</p>
			</div>
			<div class="nossLojas">
				<h3>Santa Catarina</h3>
				<p>Rua Major &Aacute;vila, 370</p>
				<p>4&ordm; andar</p>
				<p>Vila Mariana</p>
				<p>(47) 5555-5555</p>
			</div>
			<br>
		</section>
	</main>
	<!-- Início do footer -->
	<?php require_once('rodape.html'); ?>
	<!-- Fim do footer -->
</body>

</html>