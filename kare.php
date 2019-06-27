<?php
session_start();
require('dbconnect.php');

if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
	//ログインしている
	$_SESSION['time'] = time();

	$mambers = $db -> prepare('SELECT * FORM mambers WHERE id = ?');
	$mambers -> execute(array($_SESSION['id']));
	$members = $mambers -> fetch();
} else {
	//ログインしていない
	header('Location: login.php');
	exit();
}

//投稿を記録する
if (!empty($_POST)) {
	if ($_POST['message'] != '') {
		$message = $db -> prepare('INSERT INTO posts SET member_id = ?, message = ?, created = NOW()');
		$message -> execute(array(
			$member['id'],
			$_POST['message']
		));

		header('Location: kare.php');
		exit();

	}
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>メニュー</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<!-- header-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
				<ul class="nav navbar-nav" id="headerNav">
						<li class="col-xs-1 footerNav"></li>
						<li class="col-xs-2 footerNav active"><a href="kare.php">カレー</a></li>
						<li class="col-xs-2 footerNav"><a href="menrui.php">麺類</a></li>
						<li class="col-xs-2 footerNav"><a href="teishoku.php">定食</a></li>
						<li class="col-xs-2 footerNav"><a href="donburi.php">丼物</a></li>
						<li class="col-xs-2 footerNav"><a href="sonota.php">その他</a></li>
						<li class="col-xs-1 footerNav"></li>
				</ul>
		</div>
	</nav>

	<!-- header -->
	<div class="container">
		<div class="jumbotron">
			<h1><i class="fas fa-utensils"></i> 第一学生ホール</h1>
		</div>
		<!-- main -->
		<!-- row 1 -->
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg" >
					<p>カレライス</p>
					<p>￥300</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg">
					<p>カレー大盛</p>
					<p>￥350</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg" >
					<p>カツカレー</p>
					<p>￥440</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg" >
					<p>カツカレー大盛</p>
					<p>￥490</p>
				</div>
			</div>
			<!-- row 2 -->
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg" >
					<p>ハヤシライス</p>
					<p>￥300</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg" >
					<p>ハヤシ大盛り</p>
					<p>￥350</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg" >
					<p>カツハヤシ</p>
					<p>￥440</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail" id="popup">
					<img src="img/img_01_01kare-raisu.jpg" >
					<p>カツハヤシ大盛り</p>
					<p>￥490</p>
				</div>
			</div>



	<!-- popup -->
	<!-- 1 -->

	<div class="popup_div" id="pop-content1" aria-hidden="true">
		<div class="popup_div-dialog">
			<div class="popup_div-top">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" style="width: 100%">
					<a href="#" class="mybutton-close" aria-hidden="true" id="exit">X</a> <!-- exit button -->
				</div>
				<div class="popup_div-body">
					<p class="detail">カレージャンボサイズ460円</p>
					<form action="#" method="post" name="myform">
						<input type="submit" value="買う" class="mybutton">
					</form>
				</div>
				<div class="popup_div-bottom">
					<legend class="bottomcontent">レビューを投稿する</legend>
					<form action="" method="post" name="myform">
						<textarea name="message" placeholder="レビューを書こう！" cols="50" rows="5"></textarea>
						<input type="submit" value="投稿する" class="mybutton">
					</form>
					<div class="msg">
						<p>おいしかった<span class="name"> (EP18000) </span></p>
						<p class="day">2019/06/26 17:44</p>
					</div>
				</div>
			</div>
		</div>
	</div>














	<!-- footer -->
        <nav class="navbar navbar-inverse navbar-fixed-bottom footer nav">
            <div class="container">
                <ul class="nav navbar-nav footer">
                    <li class="col-xs-3 footerNav"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="col-xs-3 footerNav active"><a href="kare.php"><i class="fas fa-book-open"></i></a></li>
                    <li class="col-xs-3 footerNav"><a href="shoppingCart.php"><i class="fas fa-shopping-cart"></i></a></li>
                    <li class="col-xs-3 footerNav"><a href="option.php"><i class="fas fa-cog"></i></a></li>
                </ul>
            </div>
        </nav>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
		<script src="js/popup.js"></script>
	</body>
</html>
