<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widh=device-width, initial-scale=1">
	<title>Página WEB - Sessão de ID</title>
</head>
<body>
	<?php

		session_start();

	?>

	<h3>Sessão de Usuário</h3>

	SID desta sessão é: <?php echo session_id(); ?>

</body>
</html>