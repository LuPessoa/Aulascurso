<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<?php
		$frase = "gosto de estudar Matematica";
		$novafrase = str_replace("Matematica", "php", $frase);
		print($novafrase);
	?>
	
</div>
</body>
</html>