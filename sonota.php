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
						<li class="col-xs-2 footerNav"><a href="donburi.php">丼物</a></li>
						<li class="col-xs-2 footerNav active"><a href="sonota.php">その他</a></li>
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
					<img src="img/img_05_01raisu.jpg" data-toggle="modal" data-target="#myModal1">
					<p>ごはん単品</p>
					<p>￥140</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					</a><img src="img/img_05_02misoshiru.jpg" data-toggle="modal" data-target="#myModal2">
					<p>味噌汁</p>
					<p>￥50</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal3">
					<p>ごはん大盛り</p>
					<p>￥50</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal4">
					<p>麺大盛</p>
					<p>￥100</p>
				</div>
			</div>
			<!-- row 2 -->
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal5">
					<p>温玉</p>
					<p>￥50</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal6">
					<p>炊き込みご飯</p>
					<p>￥200</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal7">
					<p>チャーハン単品</p>
					<p>￥200</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal8">
					<p>かき揚げ</p>
					<p>￥60</p>
				</div>
			</div>
            <!-- row 3 -->
            <div class="col-lg-3 col-sm-6 col-xs-6">
                <div class="thumbnail">
                    <img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal9">
                    <p>きつね</p>
                    <p>￥60</p>
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
						<h4 class="modal-title" id="myModalLabel">ごはん単品 140円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_05_01raisu.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="udon">
                            <input type="hidden" name="item_number" value="udon">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">味噌汁 50円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_05_02misoshiru.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="miso shiru">
                            <input type="hidden" name="item_number" value="miso shiru">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 3 -->
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">ごはん大盛り 50円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="gohan oomori">
                            <input type="hidden" name="item_number" value="gohan oomori">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 4 -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">麺大盛 100円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="menrui oomori">
                            <input type="hidden" name="item_number" value="menrui oomori">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 5 -->
		<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">温玉 50円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="ontama">
                            <input type="hidden" name="item_number" value="ontama">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 6 -->
		<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">炊き込みご飯 200円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="takikomigohan">
                            <input type="hidden" name="item_number" value="takikomigohan">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 7 -->
		<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">チャーハン単品 200円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="chahan tanpin">
                            <input type="hidden" name="item_number" value="chahan tanpin">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 8 -->
		<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">かき揚げ 60円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="kakiage">
                            <input type="hidden" name="item_number" value="kakiage">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- 9 -->
		<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">きつね 60円</h4>
					</div>
					<div class="modal-body">
						<div class="popup_div-body">
							<div class="thumbnail">
								<img src="img/img_02_01kare-nannbannudon.jpg" style="width: 100%">
							</div>
							<p class="detail"></p>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="adrian.rio.ristian@gmail.com">
                            <input type="hidden" name="lc" value="JP">
                            <input type="hidden" name="item_name" value="kitsune">
                            <input type="hidden" name="item_number" value="kitsune">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="currency_code" value="JPY">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                            <input type="image" src="https://www.paypalobjects.com/ja_JP/JP/i/btn/btn_buynowCC_LG.gif" border="0" name="submit"
                                alt="PayPal - オンラインでより安全・簡単にお支払い">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
						</div>
                        <div class="popup_div-bottom">
                            <!-- <legend class="bottomcontent">レビューを投稿する</legend> -->
                            <form action="" method="post" name="myform">
																<legend><?php echo htmlspecialchars($member['name']); ?>さん、レビューを投稿しよう！</legend>
                                <textarea placeholder="レビュー内容" cols="50" rows="5"></textarea>
                                <input type="submit" value="投稿する" class="mybutton" />
                            </form>
                            <div class="msg">
                            <legend class="bottomcontent">みんなのレビュー</legend>
															<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES); ?></p>
															<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES); ?></p>
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
