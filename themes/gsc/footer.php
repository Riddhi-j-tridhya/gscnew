<?php
/**
 * Footer
 *
 * @package WordPress
 * @subpackage GSC BANK
 * @since GSC BANK 1.0
 */


?>


<?php
$footer_page_id = 89770;
$footer_page = get_post($footer_page_id);
echo apply_filters('the_content', $footer_page->post_content);

?>

<script src="<?php echo get_template_directory_uri(); ?>/js/owl-carousel.min.js"></script>
<script type="text/javascript">
        (function ($) {
            'use strict';
            jQuery('#bankService').owlCarousel({
                loop: true,
                autoplay:true,
                margin: 30,
                nav: true,
                dots: false,
				autoHeight:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })

        })(jQuery); 
    </script> 

<script type="text/javascript">
        (function (jQuery) {
            'use strict';
            jQuery('#owl-demo').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
			jQuery( ".owl-next").html('<i class="fa-solid fa-arrow-right" style="color: #fafafa;"></i>');
			jQuery( ".owl-prev").html('<i class="fa-solid fa-arrow-left" style="color: #fafafa;"></i>');

        })(jQuery); 
</script>
<script>
    // Main Navigation
    ( function( jQuery ) {
        jQuery( '.nav-toggle' ).on( 'click', function ( event ) {
        event.preventDefault();
        event.stopPropagation();
        jQuery( 'body' ).toggleClass( 'menu-open' );
        });
        jQuery( '.site-header .main-menu ul li' ).each( function ( e ) {
        if ( jQuery( this ).hasClass( 'has-dropdown' ) ) {
            jQuery( this ).prepend( '<i class="arrow-down"></i>' );
        }
        });
        jQuery( '.site-header .main-menu ul li .arrow-down' ).on( 'click', function ( event ) {
        event.preventDefault();
        event.stopPropagation();
        if (jQuery( this ).parent( 'li' ).hasClass( 'active-submenu' ) ) {
            jQuery( this ).parent( 'li' ).toggleClass( 'active-submenu' );
        } else {
            jQuery(".site-header .main-menu ul li").removeClass("active-submenu");
            jQuery( this ).parent( 'li' ).addClass( 'active-submenu' );
        }
        });
    } )( jQuery );


    // Banking Toggal
    jQuery(document).ready(function(){
    var bankingB = jQuery(".banking-b");
    var bankingSection = jQuery(".banking-section");

    // Toggle the banking section on mouse hover
    bankingB.on({
        mouseenter: function(){
            bankingSection.show();
        },
        mouseleave: function(event){
            // Check if the mouse is also leaving the banking-b section
            if (!bankingB.is(event.relatedTarget) && !jQuery(event.relatedTarget).closest('.banking-b').length) {
                bankingSection.hide();
            }
        }
    });

    // Close the banking section when clicking outside of it
    jQuery(document).on('click', function(event){
        var target = jQuery(event.target);
        if (!target.closest('.banking-b').length && !target.hasClass('banking-button')) {
            bankingSection.hide();
        }
    });
});
</script>
<script>
  jQuery(document).ready(function() {
    jQuery(".hyperlink").on('click',function(event) {
      event.preventDefault();
      window.open(jQuery(this).attr("href"), "_blank");
    });
  });
</script>
<script src="https://kit.fontawesome.com/629dffd7a0.js" crossorigin="anonymous"></script>

<?php if(is_page(309)): ?>

<script src="<?php echo site_url(); ?>/wp-content/themes/gsc-bank/js/emicalc-lib.js"></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/gsc-bank/js/emicalc-main.min.js"></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
