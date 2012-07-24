$(function () {
	$("#quotes").fadeIn(1250, function() {
		$("#winc").animate({"left": "226px"},1000,"linear",function() {
			$("#homeLinks").show()
			$("#homeLinks").animate({"margin-top": "60px"},300,"linear", function(){
				$("#splashSocial").fadeIn('slow')			
				
			})		
		})
	})	
});


