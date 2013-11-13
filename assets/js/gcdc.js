$('.active').removeClass('active');
$('.feedable').click(function(){
	$('.office-list').children().each(function(){
		$(this).removeClass('active');
	});
	$(this).addClass('active');
});
$('.mp').click(function(){
	$('.feed').children().each(function(){
		$(this).css('display', 'none');
	});
	$('.feed-mp').css('display','inline');
});
$('.dce').click(function(){
	$('.feed').children().each(function(){
		$(this).css('display', 'none');
	});
	$('.feed-dce').css('display','inline');
});
$('.min').click(function(){
	$('.feed').children().each(function(){
		$(this).css('display', 'none');
	});
	$('.feed-min').css('display','inline');
});
$('.prez').click(function(){
	$('.feed').children().each(function(){
		$(this).css('display', 'none');
	});
	$('.feed-prez').css('display','inline');
});