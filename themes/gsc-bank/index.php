<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package borrow
 */

global $borrow_option;
get_header(); ?>

<div class="page-header" <?php if($borrow_option['bg_blogpage'] != ''){ ?> style="background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url(<?php echo esc_url($borrow_option['bg_blogpage']['url']); ?>) no-repeat center;"<?php } ?>>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="bg-white pinside30">
          <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <h1 class="page-title"><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
            </div>
            <?php if($borrow_option['action_link']!=''){ ?>
              <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="btn-action"> <a href="<?php echo esc_url($borrow_option['action_link']); ?>" class="btn btn-default"><?php echo esc_attr($borrow_option['action_text']); ?></a> </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <?php if($borrow_option['sub_nav']!=''){ ?>
        <div class="sub-nav" id="sub-nav">
          <ul class="nav nav-justified">
            <?php echo htmlspecialchars_decode($borrow_option['sub_nav']); ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
    <!-- content begin -->
<div class=""><!-- main container -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wrapper-content bg-white pinside40">
          <div class="row">
            <?php if($borrow_option['sidebar']=='left'){ ?>
              <div class="col-md-4 col-sm-12 col-xs-12">                              
                <?php get_sidebar();?>                
              </div>
            <?php } ?>
            <div class="<?php if($borrow_option['sidebar']=='fullwidth'){ echo'col-md-12';}else{echo 'col-md-8';} ?> col-sm-12 col-xs-12">
              <div class="row">
                  <?php 
                    while (have_posts()) : the_post();
                      	get_template_part( 'content', get_post_format() ) ;   // End the loop.
                    endwhile;
                  ?>
                  <div class="col-md-12 text-center col-xs-12">
                    <div class="st-pagination">
                      <?php echo borrow_pagination(); ?>
                    </div>
                  </div>
              </div>
            </div>

            <?php if($borrow_option['sidebar']=='right'){ ?>
              <div class="col-md-4 col-sm-12 col-xs-12">                              
                <?php get_sidebar();?>                
              </div>
            <?php } ?>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- content close -->

<?php get_footer(); ?>
