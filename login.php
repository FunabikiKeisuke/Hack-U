<?php
require('dbconnect.php');

session_start();

if ($_COOKIE['email'] != '') {
	$_POST['email'] = $_COOKIE['email'];
	$_POST['password'] = $_COOKIE['password'];
	$_POST['save'] = 'on';
}

if (!empty($_POST)) {
	//ログイン処理
	if ($_POST['email'] != '' && $_POST['password'] != '') {
		$login = $db -> prepare('SELECT * FROM members WHERE email=? AND password=?');
		$login -> execute(array(
			$_POST['email'],
			SHA1($_POST['password'])
		));
		$member = $login -> fetch();

		if ($member) {
			//ログイン成功
			$_SESSION['id'] = $member['id'];
			$_SESSION['time'] = time();

			//ログイン情報を記録する
			if ($_POST['save'] == 'on') {
				setcookie('email', $_POST['email'], time() + 60 * 60 * 24 * 14);
				setcookie('password', $_POST['password'], time() + 60 * 60 * 24 * 14);
			}

			header('Location: index.php');
			exit();
		} else {
			$error['login'] = 'failed';
		}
	} else {
		$error['login'] = 'blank';
	}
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
			integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
			integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body id="login">
		<div class="container-fluid">
			<div class="row">
				<div class=" container">
					<!-- form start -->
					<form action="" method="post" class="form-container">
						<legend>ログイン</legend>
						<div class="form-group">
							<label for="exampleInputEmail">メールアドレス</label>
							<input type="text" name="email" size="35" maxlength="255" class="form-control"  placeholder="メールアドレス" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>" />
							<?php if ($error['login'] == 'blank'): ?>
								<p class="error">* メールアドレスとパスワードを入力してください。</p>
							<?php endif; ?>
							<?php if ($error['login'] == 'failed'): ?>
								<p class="error">* ログインに失敗しました。正しく入力してください。</p>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword">パスワード</label>
							<input type="password" name="password" size="35" maxlength="255" class="form-control" placeholder="パスワード" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES); ?>" />
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">ログイン情報の記録</label>
							<input type="checkbox" class="form-control" id="save" name="save" value="on"><label for="save">次回から自動的にログインする</label>
						</div>
						<button type="submit" class="btn btn-default btn-block" href="index.html">ログイン</button>
						<!-- new user n forgot pass -->
						<div class="row new">
							<div class="col-md-6">
								<br>
								<a href="signup.php">新規登録はこちら</a>
							</div>
						</div>
					</form>
					<!-- form end -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
		</div>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"crossorigin="anonymous"></script>
	</body>
</html>
