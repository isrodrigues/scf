<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Saindo do SCF</title>
</head>
<body>
	<?php 
		session_destroy();
		header('Location: ./');
	?>
</body>
</html>