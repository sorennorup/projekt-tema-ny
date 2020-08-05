
var i = 6;
var c = 0;
$(document).ready(function(){
	
	updateView();
});

function updateView(){
	console.log('c: '+c);
	var elements = document.getElementsByClassName('company-logo');
	var num = elements.length;
	console.log('number of elements:'+ num);
	// Hide all elements
	for(let j = 0; j < num; j++) {
		elements[j].style.display = "none";
	}	
	//pick 6 of the elements
	while(c <  i) {
		console.log(c);
		console.log(i);
		if(elements[c]!= undefined){
		elements[c].style.display = "block";
		elements[c].style.opacity = "0.5";
		}
		c++;
	}
	if(i < num){
		i = i+6;
	}
	else {
		i = 6;
		c = 0;
}
	//run function again
	setTimeout(updateView,4000);
}

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


 
