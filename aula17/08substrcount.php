<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<?php
		$frase = "Estou aprendendo php no curso em video de php";
		$cont = substr_count($frase, "php");
		print("php encontrado $cont vezes");
	?>
	
</div>
</body>
</html>