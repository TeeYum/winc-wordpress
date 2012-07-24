$("#quotes").fadeIn(1250, function() {
	$("#winc").animate({"left": "226px"},1000,"linear",function() {
		$("#project").animate({"left": "723px"},450,"linear",function() {	
			$("#homeLinks").show()
			$("#homeLinks").animate({"margin-top": "15px"},350,"linear", function(){
				$("#splashSocial").fadeIn('slow')			
				
			})		
		})
		
	})
	
});


