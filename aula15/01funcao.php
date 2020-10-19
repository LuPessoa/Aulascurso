<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<?php
		function teste(&$x) {
			$x += 2;
		echo "<p>O valor de x e $x</p>";
		}
		
		$a = 3;
		teste($a);
		echo "<p>O valor de A e $a</p>";

		
	?>
	
</div>
</body>
</html>