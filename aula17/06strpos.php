<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<?php
		$frase = "Estou aprendendo php";
		$pos = strpos($frase, "php");
		echo " $frase <br/> A string foi encontrada na posição $pos";
	?>
	
</div>
</body>
</html>