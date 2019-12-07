<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>select</title>
	</head>
	<body>
		<?php 
			// ドライバ呼び出しを使用して MySQL データベースに接続します
			$dsn = 'mysql:dbname=TEST;host=192.168.1.2';
			$user = 'testsa';
			$password = 'snow0order';

			try {
				$dbh = new PDO($dsn, $user, $password);
				echo "接続成功\n";
			} catch (PDOException $e) {
				echo "接続失敗: " . $e->getMessage() . "\n";
				exit();
			}

			$sql = 'select * from user where id > :id';
			$prepare = $dbh->prepare($sql);

			$prepare->bindValue(':id', 3, PDO::PARAM_INT);

			$prepare->execute();

			$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
			var_dump($result);


		?>
	</body>
</html>