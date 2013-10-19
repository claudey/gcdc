// $("div.news-item").hover(function() {
// 	$("div.item-hover").css('display', 'block');
// }, function() {
// 	$("div.item-hover").css('display', 'none');
// });

function hover(divClass){
	$(divClass).hover(function() {
		$(divClass.id).css('display', 'block');
	});
}

function mouseOut(divClass){
	$(divClass).hover(function() {
		$("div.item-hover").css('display', 'none');
	});
}