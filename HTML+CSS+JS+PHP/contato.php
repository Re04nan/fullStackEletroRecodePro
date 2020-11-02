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
	<main>
		<header>
			<h2>Contato</h2>
			<hr>
		</header>

		<section id="secContatos">
			<div class="divContatos">
				<figure>
					<img class="iconeRS" src="./imagens/email.png" alt="Endereço de Mensagem" title="Ícone de envelope">
					<b>contato@fullstackeletro.com</b>
				</figure>
				<figure>
					<img class="iconeRS" src="./imagens/whatsapp.png" alt="Whatsapp" title="Ícone de Whatsapp">
					<b>(11) 9999-9999</b>
				</figure>
			</div>
			<form id="formContato">
				<h4><label for="nome">Nome:</label> </h4>
				<input type="text" name="nome">
				<h4><label for="msg">Mensagem:</label> </h4>
				<textarea name="msg"></textarea>
				<p><button value="Enviar">Enviar</button></p>
			</form>
			<br>
		</section>
	</main>
	<!-- Início do footer -->
	<?php require_once('rodape.html'); ?>
	<!-- Fim do footer -->
</body>

</html>