$('#popup').click(function() {
	if ($('.popup_div').hasClass('display')) {
		$('#popupExitOnly').removeClass('display');
	} else {
		$('.popup_div').addClass('display');
	}
});
$('#exit').click(function() {
	if ($('.popup_div').hasClass('display')) {
		// クリックされた要素がclickedクラスだったら
		$('.popup_div').removeClass('display');
	}
});
