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
		$v = array(	"nome" => "Ana",
					"idade" => 23,
					"peso" => 65.5);
		foreach($v as $k => $c){
			echo "o campo $k possui o conteudo $c <br/>";
		}
	?>
	</pre>	
</div>
</body>
</html>