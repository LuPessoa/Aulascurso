<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<?php
		$t = "aqui temos um texto gigante criado pelo php e vai mostrar o funcionamneto da função wordwrap";
		$r = wordwrap($t, 5, "<br/>\n", true);
		echo $r;
	?>
	
</div>
</body>
</html>