<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<?php
		$frase = " eu vou estudar php";
		$count = str_word_count($frase, 0);
		echo $count;
	?>
	
</div>
</body>
</html>