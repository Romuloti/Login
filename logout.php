<!Doctype html>
<html lang="pt-br">
<?php
	session_start();
	session_destroy();
	header("Location: index.php");
	exit;
?>
	
</html>
