<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widh=device-width, initial-scale=1">
	<title>Página WEB - Sessão de Usuário 2</title>
</head>
<body>
	<?php

		session_start();

		$_SESSION['nome'] = "Administrador";

		//elimina todas as variaveis de sessão mas, mantém a sessão ativa.
		session_unset();

		//elimina todas as sessões
		//session_destroy();

	?>
	<h3>Sessão de Usuário</h3>
	Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

</body>
</html>