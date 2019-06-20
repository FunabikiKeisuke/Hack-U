//クリックしたときの動き
$('.1').click(function() {
	$('#pop-content1').show();
});
$('.2').click(function() {
	$('#pop-content2').show();
});

//画像のスライドショー
$(function(){


});

$(function() {
	$('.owl-carousel').owlCarousel({
		loop: true, //項目をループさせる
		margin: 10, //itemの間隔
		items: 1 //表示する項目数
	});
});

// レビュー
$('textarea').autoResize();
