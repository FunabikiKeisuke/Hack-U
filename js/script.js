//クリックしたときの動き
$('.1').click(function() {
	$('#pop-content1').show();
});
$('.2').click(function() {
	$('#pop-content2').show();
});
//ポインタがのった時の動き
// $('thumbnail').hover(
//   $('thumbnail').show();,
//   $('thumbnail').hide();
// );
//画像のスライドショー
// $('thumbnail').ready(function(){
//   $('thumbnail').bxSlider({
//     auto: true,
//     pause: 5000,
//   });
// });

$(function() {
	$('.owl-carousel').owlCarousel({
		loop: true, //項目をループさせる
		margin: 10, //itemの間隔
		items: 2 //表示する項目数
	});
});

// レビュー
$('textarea').autoResize();
