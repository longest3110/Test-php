<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>document_root</title>
	</head>
	<body>
		<?php 
			$root_path = $_SERVER['DOCUMENT_ROOT'];
			echo($root_path);

			require($root_path . "/php/get_date.php");

		?>

		<a href="./get_date.php"><button type="button">日付</button></a><br>
	</body>
</html>