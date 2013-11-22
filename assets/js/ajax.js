function follow(formname) {
	//initiates the form submit action. this releaves the form of it native submit
	$(formname).on("submit", function() {
		//getting fields of ht form
		var official_id = $(formname + " input[name='id1']").val();
		var citizen_id = $(formname + " input[name='id2']").val();

		//creating a json object to be submited to the url specified
		var followJSON = {
			official_id : official_id,
			citizen_id : citizen_id
		};

		//making the post request to the specified url/route
		$.post('url', followJSON, function(data, status) {
			var me = data;
			
			//checking the status of the request and then performing some action
			if(me.trim()=='success'){
				//btn should change color;
				$(btn_id).removeClass("btn-default");
				$(btn_id).addClass("btn-success");
			}
		});

		return false;
	});
}
