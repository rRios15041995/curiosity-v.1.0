$(function(){ //when document is ready this functions will be ejecuted

	/*
	|--------------------------------------------------------------------------
	| Click in button with class .bn-close
	|--------------------------------------------------------------------------
	| when user press in element that this hava class ".bn-close"
	| the banner that have this button, will be closse in this 
	| event.
	*/
	$(".bn-close").click(function(ev){
		$($(this).data("target")).hide("slow");
	});
	$("button[class*='btn-']").click(function(ev){
		$("[class*='tab-'].active").removeClass("active");
		$("[class*='tab-2']").addClass("active");
	});
	
});