$(document).ready(function () {
	$('.container').hide()
	$(window).load(function () {
		$('.loader').hide()
      	$('.container').show()  
      	$(document).scroll(function(){
      		// alert($(this).scrollTop())
      		$(".nav.nav-pills.nav-stacked li").on("click",function(){
			  $(".nav.nav-pills li").removeClass("active");
			  $(this).addClass("active");
			});
			$(".nav-pills li a").on("click",function(e){
			  e.preventDefault()
			});
      		if($(this).scrollTop() >= 340)
      		{
      			$('.main-content #products-icon').animate({
      				"bottom": "0",
      				"opacity": "1"
      			},500)
      		}
      	})
      });
});

// <div class="menu">
// 				aa
// 			</div>
// 			<div id='menuicon-container'>
// 				<div id='menuicon'>
// 				</div>		
// 			</div>




















	var scrollChecker = 0
	$(".main-content .sect .item").stop().hover(function(){
		// $(this).stop().animate({
		// 	left:"0",
		// 	color: "#fff"
		// },300)
		// $(this).children(".hover").stop().animate({
		// 	bottom:"0",
		// 	color: "#fff"

		// },300)
	// $(this).children(".hover").css({left: '2.3%'})
		// $(this).children(".context").hide('blind',300)
		 
	},function(){
		// $(this).children(".hover").stop().animate({
		// 	bottom:"-30em",
		// 	color: "#fff"
		// },300)
		// $(this).children(".context").show('blind',300)
		
	})

	$(document).scroll(function(){
		
		
		// if($(document).scrollTop() > 100)
		// {
		// 	scrollChecker += 1
		// 	if (scrollChecker == 1)
		// 	{
				
		// 		$(".main-content .sect:nth-child(1),.main-content .sect:nth-child(2)").stop().animate({
		// 			"opacity": "1",
		// 			"bottom": "0"
		// 		},1000)	
		// 	}			
		// }


		// $(".main-content .sect:nth-child(3),.main-content .sect:nth-child(4)").css({"opacity":"1"})
		// // if($(document).scrollTop() > 750)
		// {			
		// 	if (scrollChecker == 2)
		// 	{				
		// 		$(".main-content .sect:nth-child(3),.main-content .sect:nth-child(4)").stop().animate({
		// 			"opacity": "1",
		// 			"bottom": "0"
		// 		},1000)	
		// 	}
		// 	scrollChecker += 1
		// }
	})
