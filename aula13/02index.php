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
		for($t= 1; $t <= 10 ; $t++){
			echo "<option> $t </option>";
		}
		?>
	</select>
	
	<input type="submit" value="tabudada"/>
	</form>
</div>
</body>
</html>