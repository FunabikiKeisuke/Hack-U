/* //クリックしたときの動き
$('').click(function(){
  $('').show();
});
//ポインタがのった時の動き
$('').hover(
  $('').show();,
  $('').hide();
);
//画像のスライドショー
$('').ready(function(){
  $('').bxSlider({
    auto: true,
    pause: 5000,
  });
});
*/

$(function(){
    $('.owl-carousel').owlCarousel({
            loop:true,　//項目をループさせる
            margin:10,  //itemの間隔
            items: 2,   //表示する項目数
        })
});
