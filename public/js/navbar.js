$('.nav-item').click(function(){
	console.log("HOLAAAAAAAAAAAAAAA");
    $(".nav").find(".active").removeClass("active");
   	$(this).addClass("active");
});