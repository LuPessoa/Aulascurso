<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8"/>
 <title> Curso de PHP</title>
</head>
<body>
<div>
	<pre>
	<?php
		$m = array(	array(6, 4),
					array(4, 9),
					array(3, 2));
		$m[0] [1] = $m[2] [0];
		print_r($m);
	?>
	</pre>	
</div>
</body>
</html>