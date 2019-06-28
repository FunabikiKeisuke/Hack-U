<?php
session_start();
require('dbconnect.php');

if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
	// ログインしている
	$_SESSION['time'] = time();

	$members = $db->prepare('SELECT * FROM members WHERE id=?');
	$members->execute(array($_SESSION['id']));
	$member = $members->fetch();
} else {
	// ログインしていない
	header('Location: login.php'); exit();
}

// 投稿を記録する
if (!empty($_POST)) {
	if ($_POST['message'] != '') {
		$message = $db->prepare('INSERT INTO posts SET member_id=?, message=?, reply_post_id=?, created=NOW()');
		$message->execute(array(
			$member['id'],
			$_POST['message'],
			$_POST['reply_post_id']
		));

		header('Location: kare.php'); exit();
	}
}

// 投稿を取得する
$page = $_REQUEST['page'];
if ($page == '') {
	$page = 1;
}
$page = max($page, 1);

// 最終ページを取得する
$counts = $db->query('SELECT COUNT(*) AS cnt FROM posts');
$cnt = $counts->fetch();
$maxPage = ceil($cnt['cnt'] / 5);
$page = min($page, $maxPage);

$start = ($page - 1) * 5;
$start = max(0, $start);

$posts = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id ORDER BY p.created DESC LIMIT ?, 5');
$posts->bindParam(1, $start, PDO::PARAM_INT);
$posts->execute();

// 返信の場合
if (isset($_REQUEST['res'])) {
	$response = $db->prepare('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id AND p.id=? ORDER BY p.created DESC');
	$response->execute(array($_REQUEST['res']));

	$table = $response->fetch();
	$message = '@' . $table['name'] . ' ' . $table['message'];
}

// htmlspecialcharsのショートカット
function h($value) {
	return htmlspecialchars($value, ENT_QUOTES);
}

// 本文内のURLにリンクを設定します
function makeLink($value) {
	return mb_ereg_replace("(https?)(://[[:alnum:]\+\$\;\?\.%,!#~*/:@&=_-]+)", '<a href="\1\2">\1\2</a>' , $value);
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
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal1">
					<p>カレーライス</p>
					<p>￥300</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg"data-toggle="modal" data-target="#myModal2">
					<p>カレー大盛</p>
					<p>￥350</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg"data-toggle="modal" data-target="#myModal3">
					<p>カツカレー</p>
					<p>￥440</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg"data-toggle="modal" data-target="#myModal4">
					<p>カツカレー大盛</p>
					<p>￥490</p>
				</div>
			</div>
			<!-- row 2 -->
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg" data-toggle="modal" data-target="#myModal5">
					<p>ハヤシライス</p>
					<p>￥300</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg"data-toggle="modal" data-target="#myModal6">
					<p>ハヤシ大盛り</p>
					<p>￥350</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg"data-toggle="modal" data-target="#myModal7">
					<p>カツハヤシ</p>
					<p>￥440</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6">
				<div class="thumbnail">
					<img src="img/img_01_01kare-raisu.jpg"data-toggle="modal" data-target="#myModal8">
					<p>カツハヤシ大盛り</p>
					<p>￥490</p>
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
                        <h4 class="modal-title" id="myModalLabel">カレーライス 300円</h4>
                    </div>
                    <div class="modal-body">
                        <div class="popup_div-body">
                            <div class="thumbnail">
                                <img src="img/img_01_01kare-raisu.jpg" style="width: 100%">
                            </div>
                            <p class="detail"></p>
                        <form class="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
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
                            <form action="" method="post">
															<dl>
																<dt><?php echo h($member['name']); ?>さん、レビューを投稿しよう！</dt>
																<dd>
																	<textarea name="message" cols="50" rows="5"><?php echo h($message); ?></textarea>
																	<input type="hidden" name="reply_post_id" value="<?php echo h($_REQUEST['res']); ?>" />
																</dd>
															</dl>
															<div>
																<p class="submit-review">
																	<input type="submit" value="投稿する" />
																</p>
															</div>
														</form>
														<p class="our-review">みんなのレビュー</p>
														<?php
														foreach ($posts as $post):
															?>
															<div class="msg">
																<p class="review-name"><?php echo h($post['name']); ?></p>
																<p><?php echo makeLink(h($post['message'])); ?></p>
																<p class="day"><span><?php echo h($post['created']); ?></span>
																	<?php
																	if ($_SESSION['id'] == $post['member_id']):
																		?>
																		[<a href="delete.php?id=<?php echo h($post['id']); ?>"
																			style="color:#F33;">レビュー削除</a>]
																			<?php
																		endif;
																		?>
																	</p>
																</div>
																<?php
															endforeach;
															?>
														</div>
													</div>
												</div>
											</div>
        </div>
		<!-- 2 -->
		<!-- <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">カレー大盛り 350円</h4>
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
                            <input type="hidden" name="item_name" value="kare oomori">
                            <input type="hidden" name="item_number" value="kare oomori">
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
		</div> -->
		<!-- 3 -->
		<!-- <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">カツカレー 440円</h4>
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
                            <input type="hidden" name="item_name" value="katsu kare">
                            <input type="hidden" name="item_number" value="katsu kare">
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
                            <legend class="bottomcontent">レビューを投稿する</legend>
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
		</div> -->
		<!-- 4 -->
		<!-- <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">カツカレー大盛り 490円</h4>
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
                            <input type="hidden" name="item_name" value="katsu kare oomori">
                            <input type="hidden" name="item_number" value="katsu kare oomori">
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
                            <legend class="bottomcontent">レビューを投稿する</legend>
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
		</div> -->
		<!-- 5 -->
		<!-- <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">ハヤシライス 300円</h4>
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
                            <input type="hidden" name="item_name" value="hayashi raisu">
                            <input type="hidden" name="item_number" value="hayashi raisu">
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
                            <legend class="bottomcontent">レビューを投稿する</legend>
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
		</div> -->
		<!-- 6 -->
		<!-- <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">ハヤシ大盛り 350円</h4>
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
                            <input type="hidden" name="item_name" value="hayashi oomori">
                            <input type="hidden" name="item_number" value="hayashi oomori">
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
                            <legend class="bottomcontent">レビューを投稿する</legend>
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
		</div> -->
		<!-- 7 -->
		<!-- <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">カツハヤシ 440円</h4>
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
                            <input type="hidden" name="item_name" value="katsu hayashi">
                            <input type="hidden" name="item_number" value="katsu hayashi">
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
                            <legend class="bottomcontent">レビューを投稿する</legend>
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
		</div> -->
		<!-- 8 -->
		<!-- <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">カツハヤシ大盛り 490円</h4>
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
                            <input type="hidden" name="item_name" value="katsuhayashi oomori">
                            <input type="hidden" name="item_number" value="katsuhayashi oomori">
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
                            <legend class="bottomcontent">レビューを投稿する</legend>
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
		</div> -->
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
