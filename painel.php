<!Doctype html>
<head>
	<meta charset='UTF-8'>
	<meta name="keywords" content="Palavras chaves">
<!-- 	<meta name="author" content="Romulo de Oliveira Azevedo"> -->
	
</head>	
<body>

<?php
	if(!isset($_SESSION)) session_start();
	
	if(!isset($_SESSION['usuario'])){
		session_destroy();
		header('Location: index.php');
		exit;
	}
	
	echo "Olá, ".$_SESSION['usuario'];
	echo "<a href='logout.php'>Sair</a>";
?>
	
</body>
</html>
