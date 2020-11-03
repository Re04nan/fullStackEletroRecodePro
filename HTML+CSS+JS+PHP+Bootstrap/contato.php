<?php
	require ('./bd/conexao.php');
?>
<!DOCTYPE html5>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Contato - Full Stack Eletro</title>
	<link rel="icon" href="./imagens/icone.png">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>

<body>
	<!-- Início do Menu -->
	<?php require_once('menu.html'); ?>
	<!-- Fim do Menu -->
	<main class="container-fluid">
		<header class="text-primary">
			<h2>Contato</h2>
			<hr>
		</header>

		<section id="secContatos">
			<div class="divContatos container">
				<figure>
					<img class="iconeRS" src="./imagens/email.png" alt="Endereço de Mensagem" title="Ícone de envelope">
					<b>contato@fullstackeletro.com</b>
				</figure>
				<figure>
					<img class="iconeRS" src="./imagens/whatsapp.png" alt="Whatsapp" title="Ícone de Whatsapp">
					<b>(11) 9999-9999</b>
				</figure>
			</div>
			<form id="formContato" class="form-group align-items text-primary">
				<h4><label for="nome">Nome:</label> </h4>
				<input class="form-control border border-primary" type="text" name="nome" placeholder="Digite seu nome completo aqui...">
				<h4><label for="msg">Mensagem:</label> </h4>
				<textarea class="form-control border border-primary" rows="4" name="msg" placeholder="Digite sua mensagem aqui..."></textarea>
				<p><button class="btn btn-primary mt-2" value="Enviar">Enviar</button></p>
			</form>
			<br>
		</section>
	</main>
	<!-- Início do footer -->
	<?php require_once('rodape.html'); ?>
	<!-- Fim do footer -->
</body>

</html>