<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<form method="get" action="02tabuada.php">
	<select name= "num">
		<?php 
			$n = isset($_GET("num"))? $_GET("num"): 1;
			for ($c= 1; $c <= 10; $c++){
				$r = $n * $c;
				echo "$n x $c = $r <br/>";
		?>
</div>
</body>
</html>