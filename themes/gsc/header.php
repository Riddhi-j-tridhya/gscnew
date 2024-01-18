<?php
/**
 * Header
 *
 * @package WordPress
 * @subpackage GSC BANK
 * @since GSC BANK 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php visualcomposerstarter_hook_after_head(); ?>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head() ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/header.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl-carousel.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl-carousel-default.min.css" />
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
        <link rel="preload" href="<?php echo site_url(); ?>/wp-content/uploads/Rectangle-82-1.png" as="image">



    <?php if(is_page(309)): ?>
    <link href="<?php echo site_url(); ?>/wp-content/themes/gsc-bank/css/widget.css" rel="stylesheet">
         <?php endif; ?>



         
    </head>

    
    <body <?php body_class(); ?>>

  


        <?php
        if (function_exists('wp_body_open')) {
            wp_body_open();
        }
        ?>
        <?php if (visualcomposerstarter_is_the_header_displayed()) : ?>
            <?php visualcomposerstarter_hook_before_header(); ?>
            <header id="header" style="display:none;">
                <nav class="navbar<?php echo ( in_array('fixed-header', get_body_class()) ) ? ' fixed' : ''; ?>">
                    <div class="<?php echo esc_attr(visualcomposerstarter_get_header_container_class()); ?>">
                        <div class="navbar-wrapper clearfix">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <?php
                                    if (has_custom_logo()) :
                                        the_custom_logo();
                                    else :
                                        ?>
                                        <h1>
                                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                                <?php bloginfo('name'); ?>
                                            </a>
                                        </h1>
                                    <?php endif; ?>

                                </div>
                                <?php do_action('visualcomposerstarter_after_navbar_brand'); ?>
                                <?php if (has_nav_menu('primary')) : ?>
                                    <button type="button" class="navbar-toggle">
                                        <span class="sr-only"><?php esc_html_e('Toggle navigation', 'gsc-bank') ?></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                <?php endif; ?>
                            </div>
                            <?php if (function_exists('WC') && get_theme_mod('woocommerce_header_cart_icon', true) && wc_get_cart_url()) : ?>
                                <div class="vct-cart-wrapper">
                                    <a href="<?php echo esc_url(wc_get_cart_url()); ?>">
                                        <svg width="32px" height="31px" viewBox="0 0 32 31" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 46 (44423) - http://www.bohemiancoding.com/sketch -->
                                        <title>supermarket</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Shopping-Cart-Icon" fill-rule="nonzero" fill="#2B4B80">
                                        <g id="supermarket">
                                        <path d="M23.6211985,22.5318553 C21.2916544,22.5318553 19.3964926,24.4208106 19.3964926,26.7425787 C19.3964926,29.0643468 21.2917206,30.9533021 23.6211985,30.9533021 C25.9506765,30.9533021 27.8459044,29.0643468 27.8459044,26.7425787 C27.8459044,24.4208106 25.9506765,22.5318553 23.6211985,22.5318553 Z M23.6211985,28.4268681 C22.6892353,28.4268681 21.9313162,27.6714574 21.9313162,26.7425787 C21.9313162,25.8137 22.6892353,25.0582894 23.6211985,25.0582894 C24.5531618,25.0582894 25.3110809,25.8137 25.3110809,26.7425787 C25.3110809,27.6714574 24.5531618,28.4268681 23.6211985,28.4268681 Z" id="Shape"></path>
                                        <path d="M31.7304632,6.25771277 C31.4905074,5.95160426 31.1225,5.77305745 30.7325882,5.77305745 L7.82338235,5.77305745 L6.68269853,1.01620638 C6.54624265,0.447785106 6.03628676,0.0465 5.44989706,0.0465 L1.26741176,0.0465 C0.567397059,0.0464340426 0,0.611953191 0,1.30965106 C0,2.00734894 0.567397059,2.57286809 1.26741176,2.57286809 L4.44950735,2.57286809 L8.56859559,19.7510234 C8.70505147,20.3199064 9.21500735,20.7207298 9.80139706,20.7207298 L27.6485662,20.7207298 C28.2311838,20.7207298 28.7389559,20.3249191 28.8787868,19.7615106 L31.962875,7.33981064 C32.0561838,6.9626 31.9704191,6.56382128 31.7304632,6.25771277 Z M26.6569779,18.1943617 L10.8017868,18.1943617 L8.42916176,8.29949149 L29.1131838,8.29949149 L26.6569779,18.1943617 Z" id="Shape"></path>
                                        <path d="M12.8148088,22.5318553 C10.4852647,22.5318553 8.59010294,24.4208106 8.59010294,26.7425787 C8.59010294,29.0643468 10.4853309,30.9533021 12.8148088,30.9533021 C15.1442868,30.9533021 17.0395147,29.0643468 17.0395147,26.7425787 C17.0395147,24.4208106 15.1442868,22.5318553 12.8148088,22.5318553 Z M12.8148088,28.4268681 C11.8828456,28.4268681 11.1249265,27.6714574 11.1249265,26.7425787 C11.1249265,25.8137 11.8828456,25.0582894 12.8148088,25.0582894 C13.7467721,25.0582894 14.5046912,25.8137 14.5046912,26.7425787 C14.5046912,27.6714574 13.7467721,28.4268681 12.8148088,28.4268681 Z" id="Shape"></path>
                                        </g>
                                        </g>
                                        </g>
                                        </svg>
                                        <span class="vct-cart-items-count">
                                            <?php echo esc_html(WC()->cart->get_cart_contents_count()); ?>
                                        </span>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (has_nav_menu('primary')) : ?>
                                <div id="main-menu">
                                    <div class="button-close"><span class="vct-icon-close"></span></div>
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'menu_class' => 'nav navbar-nav',
                                        'container' => '',
                                    ));
                                    ?>
                                    <?php if (is_active_sidebar('menu')) : ?>
                                        <div class="header-widgetised-area">
                                            <?php dynamic_sidebar('menu'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php do_action('visualcomposerstarter_after_header_widget_area'); ?>
                                </div><!--#main-menu-->
                            <?php endif; ?>
                        </div><!--.navbar-wrapper-->
                    </div><!--.container-->
                </nav>
                <?php do_action('visualcomposerstarter_after_header_menu'); ?>
                <?php if (is_singular() && apply_filters('visualcomposerstarter_single_image', true)) : ?>
                    <div class="header-image">
                        <?php visualcomposerstarter_header_featured_content(); ?>
                    </div>
                <?php endif; ?>
            </header>









            <div class="header-top">
                <div class="top">
                    <div class="container">
                        <div class="logo"><a href="<?php echo site_url(); ?>" rel="home"><img src="<?php echo site_url(); ?>/wp-content/uploads/GSCB-LATEST-LOGO-1.png" class="attachment-full size-full" alt="" loading="lazy" /></a> </div>
                        <div class="topnav">
                            <!-- <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Chairman's Message</a></li>
                                    <li><a href="#">Contact Us</a></li>
                            </ul> -->
                            <div class="menu-header-menu-container">
                            <?php wp_nav_menu( array(
                                    'menu_class'        => "menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                                    'theme_location' => 'header-top-left-menu',
                                ) );
                                ?>
                                <!-- <ul id="menu-header-menu" class="menu">
                                    <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="<?php echo site_url(); ?>/about-us/" class="nav-link">About Us</a></li>
                                    <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="<?php echo site_url(); ?>/chairmans-message/" class="nav-link">Chairman’s Message</a></li>
                                    <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="<?php echo site_url(); ?>/contact/" class="nav-link">Contact Us</a></li>
                                </ul> -->
                            </div>                  
                        </div>
                        <div class="header-right">
                        <?php wp_nav_menu( array(
                                    'menu_class'        => "links", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                                    'theme_location' => 'header-top-right-menu',
                                ) );
                                ?>
                            <!-- <ul class="links">
                                <li><a href="<?php echo site_url(); ?>/branch-locator/">Branch Locator</a></li>
                                <li><a href="<?php echo site_url(); ?>/socialmedia/">Social media QR <img src="<?php echo site_url(); ?>/wp-content/uploads/qr-small.png" width="16" height="17" alt=""></a></li>
                            </ul> -->
                           

<!-- <div class="btn-group">
    <a href="#"  style="display:flex"><?php echo do_shortcode("[gtranslate]");?> <img src="<?php echo site_url(); ?>/wp-content/themes/custom/assets/images/download-arrow.png" alt=""></a> 
    
</div>
 -->

                        </div>
                    </div>
                </div>
               
            </div>

             <div class="top-header-mobile">
                <div class="container">
                    <div class="container-mobile">
                        
                    
                        <div class="mobile-logo">
                            <a href="<?php echo site_url(); ?>" rel="home"><img src="<?php echo site_url(); ?>/wp-content/uploads/GSCB-LATEST-LOGO-1.png" class="attachment-full size-full" alt="" loading="lazy" /></a>
                        </div>
                        <div class="top-header-info">
<!--                             <div class="mobile-translate">
                                <a href="#"  style="display:flex"><?php echo do_shortcode("[gtranslate]");?> <img src="<?php echo site_url(); ?>/wp-content/themes/custom/assets/images/download-arrow.png" alt=""></a> 
                            </div> -->
                            <div class="Chairmans-Message">
                                <a href="<?php echo site_url(); ?>/branch-locator/">Branch Locator </a>
                            </div>
                        </div>
                        
                     </div>
                </div>
            </div>

            <div class="header-top secound">
                 <div class="bottom">
                    <div class="container">
                        <div class="logo"><a href="<?php echo site_url(); ?>" rel="home"><img src="<?php echo site_url(); ?>/wp-content/uploads/GSCB-LATEST-LOGO-1.png" class="attachment-full size-full" alt="" loading="lazy" /></a> </div>
						<?php $welcome_text= get_field("welcome_text",'option'); ?>
                       <div class="web-main desktop">
    <h1 class="vc_custom_heading"><?php echo $welcome_text; ?></h1>
</div>

                        <div class="right"> 
                            <div class="whatsapp-b">
                                <?php $whatsapp_banking_link_text =get_field("whatsapp_banking_link_text",'option');
                                 $whatsapp_banking_text_link =get_field("whatsapp_banking_text_link",'option'); 
                                
                                $internet_banking_text =get_field("internet_banking_text",'option');
                                $retail_banking_link =get_field("retail_banking_link",'option');
                                $corporate_banking_link=get_field("corporate_banking_link",'option');
                                ?> 
                                <a target="_blank" href="<?php echo $whatsapp_banking_text_link["url"]; ?>"><?php echo $whatsapp_banking_link_text; ?></a>
                            </div>
                            <div class="banking-b">
                                <a href="#" class="banking-button"><?php echo $internet_banking_text; ?></a>
                                <ul class="banking-section" style="display: none;">
                                    <li><a href="<?php echo $retail_banking_link['url']; ?>" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/custom/assets/images/r-banking-icon.png" alt=""><?php echo $retail_banking_link['title']; ?></a></li>
                                    <li><a href="<?php echo $corporate_banking_link['url']; ?>" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/custom/assets/images/c-banking-icon.png" alt=""> <?php echo $corporate_banking_link['title']; ?></a></li>
                                </ul>
                            </div>
                        </div>
						
						<input type="checkbox" id="show-search">
<input type="checkbox" id="show-menu">
						<label for="show-search" class="search-icon">
       <i class="fas fa-search"></i>
</label>
 <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-box">
      <input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="Type Something to Search..." required>
      <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
 </form>
						
                    </div>
                </div>
                <header class="site-header">
                <div class="container">
                    
                    <div class="wrap">
                        
                        
                        <div class="nav-toggle"><i></i></div>
                        
                        <div class="main-menu">
                            <ul id="main-menu" class="d-flex">
                                <?php
                                // Get the menu items from the WordPress menu
                                $menu_items = wp_get_nav_menu_items('header-menu');

                                foreach ($menu_items as $menu_item) {
                                    // Get the submenu items from the ACF Repeater field
                                    $submenu_items = get_field('sub_menu', $menu_item->ID);

                                    // Check if the current menu item has submenu items
                                    $has_submenu = !empty($submenu_items) && is_array($submenu_items);
                                    $has_dropdown_class = $has_submenu ? 'has-dropdown' : '';

                                    echo '<li class="' . $has_dropdown_class . '">';
                                    
                                    $menu_icon = get_field('menu_icon', $menu_item->ID);
                                    $menu_image = get_field('menu_image', $menu_item->ID);
                                    echo '<a href="' . $menu_item->url . '"><img src="' . $menu_icon. '" >' . $menu_item->title . '</a>';

                                    if ($has_submenu) {
                                        echo '<div class="dropdown-menu dropdown-menu-large">';
                                        echo '<div class="two-col-layout">';
                                        echo '<div class="col8">';

                                        foreach ($submenu_items as $submenu_item) {
                                            echo '<div>';
                                            echo '<h4><a href="' . $submenu_item['sub_menu_title']['url'] . '">' . $submenu_item['sub_menu_title']['title'] . '</a></h4>';
                                            echo '<p>' . $submenu_item['description'] . '</p>';
                                            echo '</div>';
                                        }

                                        echo '</div>';
                                        echo '<div class="col4">';
                                        
                                        echo '<img src="' .  $menu_image . '" alt="">';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    }

                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                      <div class="mobile-right-menu">
                          
						 



                         <div class="WhatsAppicon-mobile">
                            <a href="<?php echo $whatsapp_banking_text_link["url"]; ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/whatsapp-b.png"></a>
                        </div>
                        <div class="internet-icon-mobile">
                            <a href="#" class="banking-button"><img src="<?php echo site_url(); ?>/wp-content/uploads/internet-b.png
"></a>
                                <ul class="banking-section" style="display: none;">
                                    <li><a href="https://www.dccbinb.com/OnlineGSCB/login" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/custom/assets/images/r-banking-icon.png" alt=""> Retail Banking</a></li>
                                    <li><a href="https://www.dccbinb.com/OnlineGSCB/corpLogin" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/themes/custom/assets/images/c-banking-icon.png" alt=""> Corporate Banking</a></li>
                                </ul>
                        </div> 
                        <div><a href="<?php echo site_url(); ?>/cyber-awareness/" class="btn">Cyber Awareness</a></div>
						<div class="search-button">
                                   <a href="#" class="search-toggle" data-selector=".site-header" ></a>
                              </div>
                              <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="search-box">
                                   <input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" class="text search-input" placeholder="Type here to search...">
                                   <input type="hidden" name="submit" value="submit" />
                                          <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i></button>
                              </form>
						  
    </div>
                    </div>
                    
                </div>
               

            </header>
            </div>
           
            
<!--              <div class="site-search">
                <div class="container">
					 <div class="mobile-search">
    <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
        <input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" class="form-control" placeholder="Search" required/>
        <input type="hidden" name="submit" value="submit" />
        <button type="submit" alt="" style="position:absolute; background-color: transparent; top: 13px; right: 15px; border: 0; cursor: pointer; width: 16px; height: 16px; padding: 0; margin: 0; background-image: url('<?php echo site_url(); ?>/wp-content/uploads/zoom-1.png');"></button>
    </form>
</div>
                   <div class="mobile-search">
                             <form action="<?php echo get_site_url();?>">
                                <input type="text" name="s" id="s" value="Search" class="form-control" onblur="if (this.value == '')
                                                                        this.value = 'Search'" onfocus="if (this.value == 'Search')
                                                                                    this.value = ''" required/>
                                <input type="hidden" value="submit" />
                                <button type="submit"  alt="" style="position:absolute;     background-color: transparent;  top: 13px; right: 15px; border: 0; cursor: pointer;width: 16px;height: 16px; padding: 0; margin: 0;  background-image: url('<?php echo site_url(); ?>/wp-content/uploads/zoom-1.png');"     >
                            </form>
                        </div> 
                </div>
            </div> -->


















            <?php visualcomposerstarter_hook_after_header(); ?>
            <?php
        
        
         endif;
?>

<div class="fd-popup">
    <div id="fd-slidetabindexout">
<!--         <img src="<?php echo site_url(); ?>/wp-content/uploads/fd-rates.png" alt="sidetabindex"> -->
<?php $fd_rates_title=get_field("fd_rates_title",'option');?>
		<div class="rotate right">
      <p class="an-text"><?php echo $fd_rates_title; ?></p>
</div>
        <div id="slidetabindexout_inner">
            <div class="slideindextab-out-div">
                <div class="lender-listing">
                    <div class="lender-rate-box">
                        <div class="lender-ads-rate" style="border-bottom: 1px solid #d0caca;">
                            <small>Fixed Deposit</small>
                            <?php $individual_rates = get_field("individual_rates","option");?>
                            <h3 class="lender-rate-value"><?php echo  $individual_rates ;?></h3>
                            <small>Individual (365 Days)</small>
                        </div>
                        <div class="lender-compare-rate" style="border-bottom: 1px solid #d0caca;">
                            <?php $senior_citizen_rates = get_field("senior_citizen_rates","option");?>
                            <h3 class="lender-rate-value"><?php echo  $senior_citizen_rates ;?></h3>
                            <small>Senior Citizen (365 Days)</small>
                        </div>
                    </div>
                    <!-- <a href="" style="margin-left: 94px;" class="btn-link text-center"> More Rates</a> -->
                    <div class="lender-actions popmake-4219 pum-trigger" style="cursor: pointer;">
                        <a href="<?php echo site_url(); ?>/fix-deposit" class="btn btn-primary btn-block">More Rates</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                 
<!-- Apply now pop-up -->
<div id="applynow_slideout">
<!--     <img src="<?php echo site_url(); ?>/wp-content/uploads/gsc-apply-button.png" alt="sidetabindex"> -->
    <div class="rotate">
        <?php $apply_now_label=get_field("apply_now_label",'option'); ?>
        <p class="an-text"><?php echo $apply_now_label; ?></p>
</div>
    <div id="applynow_slideout_inner">
        <div class="slide-out-div">
            <div class="widget-footer-applynow">
                <?php if( have_rows('apply_now_field','option') ): ?>
    <ul class="listnone">
    <?php while( have_rows('apply_now_field','option') ): the_row(); 
        $apply_now_field_text = get_sub_field('apply_now_field_text','option');
        ?>
       <li><a class="so-form-open popmake-4219 pum-trigger" href="#" style="cursor: pointer;"><?php echo $apply_now_field_text; ?></a></li>
            
       
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- pop-up form -->
<div class="so-form">
    <div class="form-container" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/form-bg.jpg');">
        <button id="btnCloseForm" class="close-button">X</button>
        <div class="form-inner">
            <?php echo do_shortcode('[contact-form-7 id="280bcf0" title="Apply Loan"]'); ?>
        </div>
    </div>
</div>
