<?php
session_start();

if (!empty($_POST)) {
	//エラー項目の確認
	if ($_POST['name'] == '') {
		$error['name'] = 'blank';
	}
	if ($_POST['email'] == '') {
		$error['email'] = 'blank';
	}
	if (strlen($_POST['password']) < 4) {
		$error['password'] = 'length';
	}
	if ($_POST['password'] == '') {
		$error['password'] = 'blank';
	}

	if (empty($error)) {
		$_SESSION['join'] = $_POST;
		header('Location: check.php');
		exit();
	}
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
	<body>
			<div class="container-fluid">
				<div class="row">
					<div class="container">
						<!-- form start -->
						<form action="" method="post" enctype="multipart/form-data" class="form-container">
							<legend>新規登録</legend>
							<div class="form-group 6">
								<label for="exampleInputName">氏名</label>
								<input class="form-control" name="name" placeholder="氏名" type="text" size="35" maxlength="255" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES); ?>" />
								<?php if ($error['name'] == 'blank'): ?>
									<p class="error">* 氏名を入力してください</p>
								<?php endif; ?>
							</div>
							<div class="form-group 6">
								<label for="exampleInputEmail">メールアドレス</label>
								<input class="form-control" name="email" placeholder="メールアドレス" type="email" size="35" maxlength="255" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>" />
								<?php if ($error['email'] == 'blank'): ?>
									<p class="error">* メールアドレスを入力してください</p>
								<?php endif; ?>
							</div>
							<div class="form-group 6">
								<label for="exampleInputPassword">パスワード</label>
								<input class="form-control" name="password" placeholder="パスワード" type="password" size="10" maxlength="20" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES); ?>" />
								<?php if ($error['password'] == 'blank'): ?>
									<p class="error">* パスワードを入力してください</p>
								<?php endif; ?>
								<?php if ($error['password'] == 'length'): ?>
									<p class="error">* パスワードは4文字以上で入力してください</p>
								<?php endif; ?>
							</div>
							<div class="button">
								<input type="submit" value="入力内容を確認する" class="btn btn-default btn-block" >
							</div>
						<!-- form end -->
					</div>
				</div>
			</div>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"crossorigin="anonymous"></script>
	</body>
</html>
