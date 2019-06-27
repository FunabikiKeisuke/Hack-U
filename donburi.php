<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>メニュー</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
			integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
			integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<!-- header-->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
				<ul class="nav navbar-nav" id="headerNav">
						<li class="col-xs-1 footerNav"></li>
						<li class="col-xs-2 footerNav"><a href="kare.php">カレー</a></li>
						<li class="col-xs-2 footerNav"><a href="menrui.php">麺類</a></li>
						<li class="col-xs-2 footerNav"><a href="teishoku.php">定食</a></li>
						<li class="col-xs-2 footerNav active"><a href="donburi.php">丼物</a></li>
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
				<div class="thumbnail">
					<img src="img/img_04_01oyakodon.jpg" data-toggle="modal" data-target="#myModal1">
					<p>かつ丼(みそ汁付き)</p>
					<p>￥460</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<a href="#pop-content2"></a><img src="img/img_04_01oyakodon.jpg" >
					<p>親子丼(みそ汁付き)</p>
					<p>￥460</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_04_01oyakodon.jpg" >
					<p>牛丼(みそ汁付き)</p>
					<p>￥460</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_04_01oyakodon.jpg" >
					<p>タルタル唐揚丼(みそ汁付き)</p>
					<p>￥460</p>
				</div>
			</div>
			<!-- row 2 -->
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_04_01oyakodon.jpg" >
					<p>レモンポン酢唐揚丼(みそ汁付き)</p>
					<p>￥460</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_04_02shromisokaraagedon.jpg" >
					<p>白味噌仕立て唐揚丼(みそ汁付き)</p>
					<p>￥460</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_04_01oyakodon.jpg" >
					<p>ごま風味唐揚丼(みそ汁付き)</p>
					<p>￥460</p>
				</div>
			</div>


	<!-- popup -->
	<!-- 1 -->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">かつ丼(みそ汁付き) 460円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
							<form action="#" method="post" name="myform">
								<input type="submit" value="買う" class="mybutton">
							</form>
						</div>
						<div class="popup_div-bottom">
							<legend class="bottomcontent">レビューを投稿する</legend>
							<form action="" method="post" name="myform">
								<textarea placeholder="レビューを書こう！" cols="50" rows="5"></textarea>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    </body>

</html>
