// click a feedable
$('.feedable').click(function(){
// 	$(this).css('background-color', 'red');
	$('.office-list').children().each(function(){
		$('*').removeClass('active');
	});
	$(this).addClass('active');
});

// remove the active on one children of the office-list
// set the class of the clicked object to active
// enable the related feedable