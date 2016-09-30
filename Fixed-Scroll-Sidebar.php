function initFixedScrollingSidebar(){
		$('.news-posts .col-md-3').height($('.news-posts .col-md-9').height());
		$('.fixed-sidebar').width($('.news-posts .col-md-3').width());
		$(window).scroll(function(){
			var threshold = $('.page-header').outerHeight()+parseInt($('.news-posts').css('marginTop'))-115;
			if ($(window).scrollTop() >= threshold)
			$('.fixed-sidebar').addClass('fixed');
			else
			$('.fixed-sidebar').removeClass('fixed');
			var check = (threshold+$(".news-posts .col-md-9").height()) - $(".fixed-sidebar").height();
			if ($(window).scrollTop() >= check)
			$('.fixed-sidebar').addClass('absolute');
			else
			$('.fixed-sidebar').removeClass('absolute');
			console.log(threshold);
	  });
	}
