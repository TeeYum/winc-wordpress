$(function () {
	$("#quotes").fadeIn(1250, function() {
		$("#world").animate({"left": "200px"},1000,"linear",function() {
			$("#inConversation").animate({"left": "354px"}, 1000, "linear", function(){	
				$("#homeLinks").show(function(){
					$("#homeLinks").animate({"margin-top": "0px"},300,"linear", function(){
						$("#splashSocial").fadeIn('slow')			
					})		
				})
			})
		})
	})	
});


