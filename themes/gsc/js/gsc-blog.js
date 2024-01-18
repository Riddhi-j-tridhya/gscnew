jQuery(function($) {
	$(document).on("click", ".news-section .nav-items a", function(e) {
		e.preventDefault();
		$(".news-section .nav-items").removeClass("active");
		$(this).parent().addClass("active");
		term_id = $(this).parent().data('term-id');
		$.ajax({
			type: 'post',
			url: gsc_obj.ajax_url,
			data: {
				action: 'gsc_get_category_filtered_posts',
				term_id: term_id
			},
			success: function(res) {
				$(".popular-news-left .news-areas").html(res.popular_news);
				$(".popular-news-left .other-news-section .other-news").html(res.other_news);
				$(".popular-news-left .feature-news-section").html(res.featured_news);
			}
		});
	});

	$(document).on("click", ".other-news-section .other-news .pagination .page-numbers", function(e) {
		e.preventDefault();
		if($(this).hasClass("current")) {
	    	return;
	    }
		url = $(this).attr("href");
		var pageNumber = url.match(/page\/(\d+)/);
		var page = 1;
	    if (pageNumber && pageNumber[1]) {
	        page = pageNumber[1];
	    } else {
	        page =  url.match(/paged=(\d+)/)[1];
	    }
	    var term_id = $(".news-section .nav-items.active").data('term-id');


	    $.ajax({
	    	type: "POST",
	    	url: gsc_obj.ajax_url,
	    	data: {
	    		action: "gsc_load_posts",
	    		term_id: term_id,
	    		page: page
	    	},
	    	success: function(res) {
	    		$(".popular-news-left .other-news-section .other-news").html(res.other_news);
	    	}
	    });

	});
});

jQuery(document).ready(function() {
            // Find the element with the old class and replace it with the new element
             jQuery(".glyphicon.glyphicon-time").removeClass("glyphicon glyphicon-time").addClass("fa fa-solid fa-clock");
        })


function closeForm() {
    jQuery('.so-form').removeClass('is-visible');
}

jQuery(document).ready(function ($) {
	
		$('.search-toggle').on('click', function () {
    // Toggle the 'show' class on the .site-header element
    $('.site-header').toggleClass('show');

    // Toggle the 'active' class on the .search-toggle element
    $('.search-toggle').toggleClass('active');
});
	 if (window.location.href === "https://beta.gscbank.co.in/") {
        // Add your class to the body element
        $('body').addClass('pop-up-scroll');
		 
      }
	$(document).on("click", function(event) {
        // Check if the click event originated from the close button or the popup
        if (!$(event.target).closest('.sgpb-popup-dialog-main-div-wrapper').length && !$(event.target).is('.sgpb-popup-close-button-2')) {
            // Replace "your-body-class" with the actual class you want to remove
            $("body").removeClass("pop-up-scroll");
        }
    });

 		 $(".so-form-open").click(function () {
                $('body').toggleClass('stopScroll');
            });


	
    $('.so-form-open').on('click', function (event) {
        event.preventDefault();
        $('.so-form').addClass('is-visible');
    });

    $('.so-form').on('click', function (event) {
        if ($(event.target).is('.so-form') || $(event.target).is('#btnCloseForm')) {
            event.preventDefault();
			 $('body').removeClass('stopScroll');
            $(this).removeClass('is-visible');
			var form = $(this).find('.wpcf7-form')[0];
			if (form) {
				form.reset();
				form.validate().resetForm();
			}
			
        }
    });
});


/* home marquee stop scrolling*/

 var marquee = document.querySelector('.home-marquee');

    function stopScroll() {
        marquee.stop();
    }

    function startScroll() {
        marquee.start();
    }
/*sticky add*/
document.addEventListener("DOMContentLoaded", function() {
    // Get the header element
    var header = document.querySelector('.header-top.secound');

    // Get the initial position of the header
    var headerPosition = header.offsetTop;

    // Function to add or remove the "sticky" class based on scroll position
    function updateHeaderSticky() {
        if (window.pageYOffset > headerPosition) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    // Event listener for scroll events
    window.addEventListener('scroll', updateHeaderSticky);
});


