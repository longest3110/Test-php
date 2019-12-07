<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>ReloadTest</title>
	</head>
	<body>
		<div class="output">
			<?php
				if(isset($_POST['ReloadButton'])) {
					echo('Hello!');
				}
			 ?>
		</div>

		<form method="post" action="./reload_test.php">
			<input type="submit" name="ReloadButton" value="Reload">
		</form>
	</body>
</html>