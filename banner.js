$(window).load(function(){
	$('div.preloader').delay(5000).fadeOut(800);
});


$(function(){	
	(slideshow=function (){
		
			
		
						$('.img4').fadeOut(5000,null,function(){
							$('.img3').fadeOut(5000,null,function(){
								$('.img2').fadeOut(5000,null,function(){
									$('.img1').fadeIn(5000,null,function(){
										$('.img2').fadeIn(5000,null,function(){
											$('.img3').fadeIn(5000,null,function(){
												$('.img4').fadeIn(5000,null,function(){
		
		
																	slideshow();
		
															})
														})
		
		
						})
									})
				})
			})
		})
	})();
});


