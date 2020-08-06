
(function() {
	
	let numberImages = 6;
	let c = 0;
	let elements;
	let num;


	$(document).ready(function () {
		$('.company-logo').hide();
		updateView();
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

  // get the topposition of the elements after the subheader divs
  /*function top_off_main_row_class() {
	 
   //var pos = $('.main-row').offset();
   var pos = document.getElementsByClassName('main-row');
   
   return pos[0].offsetTop;

  }*/
  
  /*function slideInButton(obj){
	
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
 */


 
