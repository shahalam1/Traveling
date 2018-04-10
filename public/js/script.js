$(function () {
	// this event fire when the DOM was fully loaded

	var currentLi;
	$(".portfolio img").click(function () {
		var src=$(this).attr("src");
		// this line will give us the parent of the img element
		currentLi=$(this).parent(); 

		$("#main").attr("src",src);
		$(".frame").fadeIn();
		$(".page-overlay").fadeIn();
	});

	$(".page-overlay").click(function () {
		$(this).fadeOut();
		$(".frame").fadeOut();
	});


	$(".left-arrow").click(function () {
		if(currentLi.is(":first-child")){
			var previousLi=$(".portfolio li").last();
		}else{
			var previousLi=currentLi.prev();
		}

		var frameSrc=previousLi.children("img").attr("src");
		$("#main").attr("src",frameSrc);
		currentLi=previousLi;
	});
	

	$(".right-arrow").click(function () {
		if(currentLi.is(":last-child")){
			var nextLi=$(".portfolio li").first();
		}else{
			var nextLi=currentLi.next();	
		}

		var frameSrc=nextLi.children("img").attr("src");
		$("#main").attr("src",frameSrc);
		currentLi=nextLi; // update the currentLi

	});
});