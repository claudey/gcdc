$('.active').removeClass('active');
$('.feed-mp').css('display','inline')
$(".mp").addClass("active");

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

$(".social-media-buttons").hide();

$(".feed-item-list").on("mouseover",function(){
	$(this).children("div.social-media-buttons").show();
})

$(".feed-item-list").on("mouseout",function(){
	$(this).children("div.social-media-buttons").hide();
})

//msg change
var i = 0;
var msg = new Array("Holding Politicaly Elected Leaders Accountable",
					"Leaders Watch -Bridging the gap between political leaders and the ordinary Ghanaian",
					"Everyone has a story, Ghanians let's share ours on Leaders Watch",
					"Public officials and the ordinary Ghanaian have never been this close.");

setInterval(function(){			    
    $(".tagline").html(msg[i]);

	if(i==3){
		i=0;
	}else{
		i++;
	}

},6000);

