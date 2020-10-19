<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<?php
		function soma() {
			$p = func_get_args();
			$t = func_num_args();
			$s = 0;
			for($i=0; $i<$t; Si++){
				$s +=$p[$i];
		}
		return $s;
	}
		
		$r = soma(3, 5, 2, 8, 9);
		echo "A soma dos valores e $r";
	?>
	
</div>
</body>
</html>