var $ = jQuery;

mobileMenu = $(function(){
	$('.icon').click(function(){
	  
	  $(".header-menu").addClass('responsive');
	  
	  });

 });
  function subMenuSlideDown(menu_obj,tempo){
	menu_obj.stop().slideDown(tempo).show().removeClass('folded').addClass('unfolded');
	
  }
   
  function subMenuSlideUp(menu_obj,tempo){
	menu_obj.stop().slideUp(tempo).removeClass('unfolded').addClass('folded');
	
  }
   
  function arrowPoint(direction,obj){
	 if(direction == 'down'){
	   $(obj).find('span').removeClass('arrow-up').addClass('arrow-point-down');
	 }
	   else if(direction == 'up'){
		 $(obj).find('span').removeClass('arrow-point-down').addClass('arrow-up');
	   }
	 }

ctaButtonSlideIn = $(function(){
			let button = $("#slide-animation");
			slideInButton(button);
		});

($(function(){
	var flag = false;
	$(this).addClass('window-close');
	deactivateBackground(flag);
	flag = true;

	($(".burger").click(function(){
		  
		deactivateBackground(flag);
		$('.topnav').show();
		flag = false;
		$(this).hide();
	}));

	$(".close-btn").click(function(){
		deactivateBackground(flag);

		flag = true;
		$('.topnav').hide();
		$('.burger').show();
		});
}));

function slideInButton(obj){
	obj.hide().fadeIn('slow');
	 for(var i = 0; i < 1; i++){
		obj.animate({
			left:100,
			duration: 500
		})
		.animate({
				left: 0,
				duration: 500
			});
	 } 
}

function slideIn(obj){
	obj.stop().animate({
		right:0,
		duration:5000,
		});
		
	}
	
function slideOut(obj,screenW){
	obj.stop().animate({
		right:-screenW,
		duration:5000
	});
}

const newLocal = '10000px';
function deactivateBackground(bol){
	if(bol === true){
		$('body').addClass('background-freeze');
		}
	else if(bol === false){
		$('body').removeClass('background-freeze');
		
	}
}
