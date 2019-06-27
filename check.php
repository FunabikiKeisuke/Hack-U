<?php
session_start();
require('dbconnect.php');

if (!isset($_SESSION['join'])) {
	header('Location: signup.php');
	exit();
}

if (!empty($_POST)) {
	//登録処理をする
	$statement = $db -> prepare('INSERT INTO members SET name=?, email=?, password=?, created=NOW()');
	echo $ret = $statement -> execute(array(
		$_SESSION['join']['name'],
		$_SESSION['join']['email'],
		SHA1($_SESSION['join']['password']),
	));
	unset($_SESSION['join']);

	header('Location: thanks.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Signup</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
			integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
			integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body id="login">
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<!-- form start -->
						<form action="" method="post" class="form-container">
							<input type="hidden" name="action" value="submit" />
							<legend>内容確認</legend>
							<div class="form-group 6">
								<label for="exampleInputName">氏名</label>
								<?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES); ?>
							</div>
							<div class="form-group 6">
								<label for="exampleInputEmail">メールアドレス</label>
								<?php echo htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES); ?>
							</div>
							<div class="form-group 6">
								<label for="exampleInputPassword">パスワード</label>
								<p>【パスワードは表示されません】</p>
							</div>
							<div class="button">
								<a href="signup.php?action=rewrite">&laquo;&nbsp;書き直す</a><br>
								<input type="submit" value="登録する" class="btn btn-default btn-block" >
							</div>
						<!-- form end -->
					</div>
				</div>
			</div>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"crossorigin="anonymous"></script>
	</body>
</html>
