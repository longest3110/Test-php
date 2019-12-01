<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>select</title>
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
			
			// userテーブルの全てのデータを取得する
			$query = "SELECT * FROM user;";

			// クエリを実行
			if ($result = mysqli_query($link, $query)) {
				echo "SELECT に成功しました。\n";
				foreach ($result as $row) {
					echo "<br>";
					echo $row["id"];
					echo ", ";
					echo $row["username"];
					echo ", ";
					echo $row["email"];
					echo ", ";
					echo $row["password"];
					echo ", ";
					echo $row["create_time"];
				}
			}

			// 接続を閉じる
			mysqli_close($link);
		?>
	</body>
</html>