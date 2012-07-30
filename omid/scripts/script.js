// Zepto/jQuery fadeLoop plugin for fade slide show effects
(function($){
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				delay : 2000,
				startIndex : -1,
				fadeFirstImage : true
			},options);

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0},
				ease = !!window.Zepto ? 'ease-in-out' : 'swing';

			pics.css(fadeOut);
			options.fadeFirstImage || pics.eq(0).css(fadeIn);

			(nextPic=function(){
				pics.eq(indx).animate(fadeOut,options.duration,ease);
				indx=indx<plen-1?indx+1:0;
				pics.eq(indx).animate(fadeIn,options.duration,ease,function(){
					setTimeout(nextPic,options.delay);
				});
			})();
		}
	});
})($)


$(function(){
	$('.backimg > div.slideshow').fadeLoop();

	var bg_f = $("div.first_bg");
	var bg_nav = $("div.bg_nav");
	var a1 = $("a.one");
	var a6 = $("a.six");

	$('.img5').mouseover(function(){
		$('.img1').animate({'margin-top':'-60px'},400);
	});
	$('.img2').mouseover(function(){
		$('.img1').animate({'margin-top':'40px'},400);
	});

});

function environment(){
	
	document.getElementById('title-about').style.width='0px';	
	document.getElementById('environment').style.color='#fff';	
	document.getElementById('content-service').style.opacity='0';
	document.getElementById('service').style.color='#8e8e8e';		
	document.getElementById('content-envir').style.opacity='1';	
	document.getElementById('member').style.color='#8e8e8e';	
	document.getElementById('content-member').style.opacity='0';	
}

function service(){
	
	document.getElementById('title-about').style.width='0px';	
	document.getElementById('service').style.color='#fff';	
	document.getElementById('content-service').style.opacity='1';	
	document.getElementById('content-envir').style.opacity='0';
	document.getElementById('environment').style.color='#8e8e8e';		
	document.getElementById('member').style.color='#8e8e8e';	
	document.getElementById('content-member').style.opacity='0';	
}

function member(){
	
	document.getElementById('title-about').style.width='0px';	
	document.getElementById('member').style.color='#fff';	
	document.getElementById('content-member').style.opacity='1';	
	document.getElementById('content-envir').style.opacity='0';
	document.getElementById('environment').style.color='#8e8e8e';		
	document.getElementById('content-service').style.opacity='0';
	document.getElementById('service').style.color='#8e8e8e';
	
}

function mainabout(){
	
	document.getElementById('content-envir').style.opacity='0';	
	document.getElementById('environment').style.color='#8e8e8e';	
	document.getElementById('content-service').style.opacity='0';
	document.getElementById('service').style.color='#8e8e8e';
	document.getElementById('member').style.color='#8e8e8e';	
	document.getElementById('content-member').style.opacity='0';			
	document.getElementById('title-about').style.width='830px';
}

/*************************** START PROJECT *************************/
function nextpage(){
	
	document.getElementById('align-prj').style.width='0px';
	
}

function mainprj(){
	document.getElementById('align-prj').style.width='870px';
}
/*************************** END PROJECT *************************/