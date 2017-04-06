$(document).ready(function(){
	
	//owl carousel
	$(".owl-item-6").owlCarousel({
		items : 6,
	});
	$(".owl-item-5").owlCarousel({
		items : 5,
	});
	$(".owl-item-4").owlCarousel({
		items : 4,
	});
	$(".owl-item-3").owlCarousel({
		items : 3,
	});
	$(".owl-item-2").owlCarousel({
		items : 2,
	});
	$(".owl-item-1").owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		pagination:false,
		autoHeight : true,
	});
	
	$(".owl-item-1-text").owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		pagination:false,
		autoHeight : true,
	});
	
	$(".slider").owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		pagination:true,
	});
	
	$(".owl-testimonial-default").owlCarousel({
		navigation : true, // Show next and prev buttons
		navigationText: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		pagination:false,
		autoHeight : true,
	});
	
	$(".owl-item-quote").owlCarousel({
		navigation : false, // Show next and prev buttons
		navigationText: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		pagination:true,
	});
	
	$(".owl-carousel .owl-next").addClass("fa fa-chevron-right");
	$(".owl-carousel .owl-prev").addClass("fa fa-chevron-left");
	
	//owl carousel half page link(next and previous)
	var prevHeight = ($(".owl-theme .owl-controls .owl-buttons div.owl-prev").height() / 2) + 2;
	var nextHeight = ($(".owl-theme .owl-controls .owl-buttons div.owl-next").height() / 2) + 2;
	//var owlControlsHeight = ($(".owl-theme .owl-controls").height());
	//var prevCenter = prevHeight + owlControlsHeight - 15;
	//var nextCenter = nextHeight + owlControlsHeight - 15;
	$(".owl-theme .owl-controls .owl-buttons div.owl-prev").css({
		'margin-top': -prevHeight+'px',	
	});
	$(".owl-theme .owl-controls .owl-buttons div.owl-next").css({
		'margin-top': -nextHeight+'px',	
	});
	
	
	var width = ($(".more").width() / 2);
	var height = ($(".more").height() / 2);
	var titleHeight = $(".work .title").height() / 2;
	$(".more").css({
		'margin-top': -height-titleHeight+'px',
		'margin-left': -width+'px',
	});
	
	var height = ($(".team-header ul.half").height() / 2);
	$(".team-header ul.half").css({
		'margin-top': -height+'px',
	});
	
	var height = ($(".team-header ul.social").height() / 2);
	$(".team-header ul.social").css({
		'margin-top': -height+'px',
	});
	
	//portfolio effect
	$('.portfolio .work').hover(
		function(){
			$(this).find('.layer').fadeIn( "fast" );
			$(this).find('.more').fadeIn( "fast" );
		}, 
		function(){
			$(this).find('.layer').fadeOut( "fast" );
			$(this).find('.more').fadeOut( "fast" );
		}
	);
	
	//team effect style1
	$('.team').hover(
		function(){
			$(this).find('.team-header ul.half').fadeIn( "fast" );
			$(this).find('.team-header .team-layer').fadeIn( "fast" );
		}, 
		function(){
			$(this).find('.team-header ul.half').fadeOut( "fast" );
			$(this).find('.team-header .team-layer').fadeOut( "fast" );
		}
	);
	
	//team effect style2
	$('.team').hover(
		function(){
			$(this).find('.team-header ul.social').fadeIn( "fast" );
			$(this).find('.team-header .team-layer').fadeIn( "fast" );
		}, 
		function(){
			$(this).find('.team-header ul.social').fadeOut( "fast" );
			$(this).find('.team-header .team-layer').fadeOut( "fast" );
		}
	);
	
	//isotope portfolio effect
	$('.portfolioContainer .item').hover(
		function(){
			$(this).find('.portfolio-layer').fadeIn( "fast" );
			$(this).find('.work-description').fadeIn( "fast" );
			$(this).find('img').addClass('transition');
		}, 
		function(){
			$(this).find('.portfolio-layer').fadeOut( "fast" );
			$(this).find('.work-description').fadeOut( "fast" );
			$(this).find('img').removeClass('transition');
		}
	);
	
	//half height work description
	var height = ($(".work-description").height() / 2);
	$(".work-description").css({
		'margin-top': -height+'px',
	});
	
	//parallax section
	$('.parallaxBg').parallax("50%", 0.4);
	$('.parallaxBg-2').parallax("50%", 0.4);
	$('.parallaxBg-3').parallax("50%", 0.4);
	$('.parallaxBg-4').parallax("50%", 0.4);
	$('.parallaxBg-5').parallax("50%", 0.4);
	$('.parallaxBg-6').parallax("50%", 0.4);
	$('.parallaxBg-7').parallax("50%", 0.4);
	
	//back to top
	$().UItoTop({ easingType: 'easeOutQuart' });
	
	//skills
	setTimeout(function(){
		$('.progress .progress-bar').each(function() {
			var me = $(this);
			var perc = me.attr("data-percentage");

			//TODO: left and right text handling

			var current_perc = 0;

			var progress = setInterval(function() {
				if (current_perc>=perc) {
					clearInterval(progress);
				} else {
					current_perc +=1;
					me.css('width', (current_perc)+'%');
				}
				var meandclass = me.find(".skills-percentage");
				meandclass.text((current_perc)+'%');

			}, 50);

		});

	},50);
	
	//countTo
	$('.timer').countTo();
	
	//Tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	//Popover
	$('[data-toggle="popover"]').popover();
	
	//placeholder
	$(':input[placeholder]').placeholder();
	
});