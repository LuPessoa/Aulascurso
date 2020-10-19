<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<form method= "get" action = "02parte1.php">
	<?php 
		$c=1;
		while ($c <= 5) {
	 echo "valor $c: <input type ='number' name= 'v$c' max='100' min='0' value='0'/><br/>";
	 $c++;
		}
	?>
	<input type="submit" value="Enviar" class="botão"/>
	</form>
</div>
</body>
</html>