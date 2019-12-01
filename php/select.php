<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>insert</title>
	</head>
	<body>
		<?php 
			$link = mysqli_connect('192.168.1.2', 'testsa', 'snow0order', 'TEST');

			// 接続状況をチェック
			if (mysqli_connect_errno()) {
				die("データベースに接続できません:" . mysqli_connect_error() . "\n");
			} else {
				echo "データベースの接続に成功しました。\n";
			}


			// 接続を閉じる
			mysqli_close($link);
		?>
	</body>
</html>