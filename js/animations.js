
focus_hovered = $(function(){
	$('.card-img-top').scroll(function(){
		$(this).stop().animate({
			width:"105%"
		},1000);
		}).mouseleave(function(){
			$(this).stop().animate({
				width:"100%"
			},1000);
		});	
	});

sticky_header = $(function(){
	
	$('.sticky-header').hide();
	   if( $( window ).width() > 600){
		 $(window).scroll(function(){
			if($(window).scrollTop()> 200){
			$('.sticky-header').stop().slideDown();
		
			} else {
				 $('.sticky-header').slideUp().fadeOut();
			}
		});
		 }

	});
	
moveCtaButtonOnScroll = $( function() {
   let button2 = $("#slide-animation2");
	let row_top = top_off_main_row_class();
	console.log(row_top);
	 
	 $(window).scroll(function(){
	   
	   if($(this).scrollTop() > btn2Pos +100 ){
		  let button2 = $("#slide-animation2");
		  slideInButton(button2);
		  $(this).off('scroll');
		   
	   }
  });
	 
	 $(window).scroll(function(){
	
	 });
	
   });
   
  
  slide_in_text = $(function(){
	// get the topposition of the elements after the subheader divs
	var row_top = top_off_main_row_class();
   
	
	$(window).load(function(){
	  
	   $('.left-widget-text').addClass('onload');
	   $('.right-widget-text').addClass('onload');
	   
		});
   $(window).scroll(function(){
		
	   if($(this).scrollTop() == row_top){
		  
		  $('.left-widget-text').addClass('onload');
		  $('.right-widget-text').addClass('onload');
	   }
	   else if($(this).scrollTop()>row_top){
		  $('.left-widget-text').removeClass('onload');
		  $('.right-widget-text').removeClass('onload');
	   }

	  });

	});
  // get the topposition of the elements after the subheader divs
  function top_off_main_row_class() {
	 
   //var pos = $('.main-row').offset();
   var pos = document.getElementsByClassName('main-row');
   
   return pos[0].offsetTop;

  }
  
  function slideInButton(obj){
	
   for(var i = 0; i < 2; i++){
	  obj.stop().animate({
		left:100,
		duration: 1000
	   
		})
   .animate({
		left: 0,
		duration: 500
	  });
   }
   
 }

  
