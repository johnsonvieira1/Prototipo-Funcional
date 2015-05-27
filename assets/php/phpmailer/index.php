<!--Autor: @johnsonvieira / https://github.com/johnsonvieira1-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- Título -->
<title>Título do site</title>

<!-- Meta -->
<meta name="description" content="descrição do seu site">
<meta name="keywords" content="HTML,CSS">
<meta name="author" content="Johnson Vieira - @johnsonvieira">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<!-- Chamando seu arquivo css -->
<link rel="stylesheet" href="css/style.css">

<!-- Chamando seu script -->
<script href="js/"></script>

</head>
<body>
	<form method="post" action="enviar.php" class="formulario">
		<h3>Fale Conosco</h3>
		<input class="nome" name="nome" type="text" placeholder="Nome"></input></br>
		<input class="email" name="email" type="email" placeholder="Email"></input></br>
		<textarea class="mensagem" name="mensagem" type="text" placeholder="Sua mensagem"></textarea></br>
		<button type="button" class="enviar">Enviar</button>
	</form>
</body>
</html>