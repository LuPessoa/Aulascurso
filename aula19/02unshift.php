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
		$v = array("A", "J", "M", "X", "K");
		print_r($v);
		array_unshift($v, "O");/* shift para rmover*/
		print_r($v);
	?>
	</pre>	
</div>
</body>
</html>