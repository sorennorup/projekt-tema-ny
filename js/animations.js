(function($, window, document, undefined) {
	
     $(document).ready(function(){
	 	var elSelector = ".wrapp";
	  var elClassScroll = 'header-wrapper--scrolling',
	  elClassScrollUp = 'header-wrapper--scrolling-up',
	  elClassScrollDown = 'header-wrapper--scrolling-down',
	  elClassScrollPastHeader = 'header-wrapper--scrolling-past-header',
	  elHeaderHeight = 114,
	  $element = $(elSelector);
	  
	  
	
	if (!$element.length) {
		alert('test')
	  return true;
	}
     
	var elHeight = 0,
	  elTop = 0,
	  $document = $(document),
	  dHeight = 0,
	  $window = $(window),
	  wHeight = 0,
	  wScrollCurrent = 0,
	  wScrollBefore = 0,
	  wScrollDiff = 0,
	  pageTop = 0;
   
	function headerHasAdminbar() {
	  if ( $('body').hasClass('admin-bar') ) {
		var adminbarHeight = $('#wpadminbar').height();
		elTop = adminbarHeight;
		pageTop = adminbarHeight;
	  }
	}
  
	$( document ).ready(function() {
	  headerHasAdminbar();
	});
  
	$(window).on( 'resize', headerHasAdminbar);
	
	
	$window.on('scroll', function() {	
		
	elHeight = $element.outerHeight();
	  dHeight = $document.height();
	  wHeight = $window.height();
	  wScrollCurrent = $window.scrollTop();
	  wScrollDiff = wScrollBefore - wScrollCurrent; // scroll difference. Negative if scrolled down, positive if scrolled up
	  elTop = parseInt($element.css('top')) + wScrollDiff; // current position plus scroll change
  
	  $element.toggleClass(elClassScroll, wScrollCurrent > 0); // toggles scrolling classname
	  $element.toggleClass(elClassScrollUp, wScrollCurrent > 0 && wScrollDiff > 0); // toggles scrolling up classname
	  $element.toggleClass(elClassScrollDown, wScrollDiff < 0); // toggles scrolling down classname
	  $element.toggleClass(elClassScrollPastHeader, wScrollCurrent > elHeaderHeight); // toggles scrolling past header classname
  
	  if (wScrollCurrent <= 0) {
		$element.css('top', pageTop); // scrolled to the very top; element sticks to the top
	  } else if (wScrollDiff > 0) {
		$element.css('top', elTop > pageTop ? pageTop : elTop); // scrolled up; element slides in
	  } else if (wScrollDiff < 0) {
		$element.css('top', Math.abs(elTop) > elHeight ? -elHeight : elTop); // scrolled down; element slides out
	  }
  
	  wScrollBefore = wScrollCurrent;
	});
})
  
  })(jQuery, window, document);
 


 




;(function() {
	
	let numberImages = 6;
	let c = 0;
	let elements;
	let num;
	
	$(document).ready(function () {
		$('.company-logo').hide();
		updateView();
		var video = document.querySelector('video');
		var promise = video.play();
		if (promise !== undefined) {
			promise.then(_ => {
				// Autoplay started!
			}).catch(error => {
				// Show something in the UI that the video is muted
				video.muted = true;
				video.play();
			});
		}
	});
	
	function updateView(){
		console.log('c: '+c);
		console.log('i:'+numberImages);
		elements = document.getElementsByClassName('company-logo');
		num = elements.length;
		console.log('number of elements:'+ num);
		// Hide all elements
		for(let j = 0; j < num; j++) {
			elements[j].style.display = "none";
		}	
		//pick 6 of the elements
		while(c < numberImages  ){
			if(elements[c]!= undefined){
			elements[c].style.display = "block";
			elements[c].style.opacity = "0.5";
			}
			c++;
		}
		if(numberImages < elements.length){
			numberImages += 6;
		}

		else {
			numberImages = 6;
			c = 0;
	}
	//run function again
	setTimeout(updateView,4000);
}
})();


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

/*sticky_header = $(function(){
	
	   if( $( window ).width() > 600){
		 $(window).scroll(function(){
			if($(window).scrollTop()> 200){
			$('.sticky-header').stop().slideDown();
		
			} else {
				 $('.sticky-header').slideUp();
			}
		});
		 }

	});

  // get the topposition of the elements after the subheader divs
   function top_off_main_row_class() {
	 
   //var pos = $('.main-row').offset();
   var pos = document.getElementsByClassName('main-row');
   
   return pos[0].offsetTop;

  }
  */
  
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

 