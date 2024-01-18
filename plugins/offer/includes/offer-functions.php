<?php

/**
 * Get all offer
 *
 * @param $args array
 *
 * @return array
 */
error_reporting(0);
function rp_get_all_offer( $args = array() ) {
    global $wpdb;

    $defaults = array(
        'number'     => 20,
        'offset'     => 0,
        'orderby'    => 'id',
        'order'      => 'DESC',
    );

    $args      = wp_parse_args( $args, $defaults );
    $cache_key = 'offer-all';
    $items     = wp_cache_get( $cache_key, 'webdevs' );

    if ( false === $items ) {
        $items = $wpdb->get_results( 'SELECT * FROM wpp7_offers ORDER BY ' . $args['orderby'] .' ' . $args['order'] .' LIMIT ' . $args['offset'] . ', ' . $args['number'] );

        wp_cache_set( $cache_key, $items, 'webdevs' );
    }

    return $items;
}

function re_get_serach_offer($args = array()){
    global $wpdb;

    $defaults = array(
        'number'     => 20,
        'offset'     => 0,
        'orderby'    => 'id',
        'order'      => 'DESC',
        'title'      => ''
    );

    $args      = wp_parse_args( $args, $defaults );
    $cache_key = 'offer-all';
    $items     = wp_cache_get( $cache_key, 'webdevs' );

    if ( false === $items ) {
        $items = $wpdb->get_results( 'SELECT * FROM wpp7_offers where title LIKE "%'.$args['title'].'%" ORDER BY ' . $args['orderby'] .' ' . $args['order'] .' LIMIT ' . $args['offset'] . ', ' . $args['number'] );

        wp_cache_set( $cache_key, $items, 'webdevs' );
    }

    return $items;
}

function rp_get_all_category( $args = array() ) {
    global $wpdb;

    $defaults = array(
        'number'     => 20,
        'offset'     => 0,
        'orderby'    => 'id',
        'order'      => 'ASC',
    );

    $args      = wp_parse_args( $args, $defaults );
    $cache_key = 'category-all';
    $items     = wp_cache_get( $cache_key, 'wedevs' );

    if ( false === $items ) {
        $items = $wpdb->get_results( 'SELECT * FROM wpp7_offer_category ORDER BY ' . $args['orderby'] .' ' . $args['order'] .' LIMIT ' . $args['offset'] . ', ' . $args['number'] );

        wp_cache_set( $cache_key, $items, 'wedevs' );
    }

    return $items;
}
/**
 * Fetch all offer from database
 *
 * @return array
 */
function rp_get_offer_count() {
    global $wpdb;

    return (int) $wpdb->get_var( 'SELECT COUNT(*) FROM wpp7_offers' );
}
function rp_get_category_count() {
    global $wpdb;

    return (int) $wpdb->get_var( 'SELECT COUNT(*) FROM wpp7_offer_category' );
}

/**
 * Fetch a single offer from database
 *
 * @param int   $id
 *
 * @return array
 */
function rp_get_offer( $id = 0 ) {
    global $wpdb;

    return $wpdb->get_row( $wpdb->prepare( 'SELECT * FROM wpp7_offers WHERE id = %d', $id ) );
}

function rp_get_category( $id = 0 ) {
    global $wpdb;

    return $wpdb->get_row( $wpdb->prepare( 'SELECT * FROM wpp7_offer_category WHERE id = %d', $id ) );
}
/**
 * Insert a new offer
 *
 * @param array $args
 */
function rp_insert_offer( $args = array() ) {
    global $wpdb;

	
    $defaults = array(
        'id'         => null,
        'title' => '',
        'sub_title' => '',
        'offer_info' => '',
        'offer_img' => '',
        'offer_link' => '',
        'cat_id' => '',
        'start_date' => '',
        'end_date' => '',

    );

    $args       = wp_parse_args( $args, $defaults );
    $table_name = 'wpp7_offers';

    // some basic validation
    if ( empty( $args['title'] ) ) {
        return new WP_Error( 'no-title', __( 'No Title provided.', 'wedevs' ) );
    }
    if ( empty( $args['sub_title'] ) ) {
        return new WP_Error( 'no-sub_title', __( 'No Sub title provided.', 'wedevs' ) );
    }
    if ( empty( $args['offer_info'] ) ) {
        return new WP_Error( 'no-offer_info', __( 'No Offer info provided.', 'wedevs' ) );
    }
    if ( empty( $args['offer_img'] ) ) {
        return new WP_Error( 'no-offer_img', __( 'No Offer image provided.', 'wedevs' ) );
    }
    if ( empty( $args['cat_id'] ) ) {
        return new WP_Error( 'no-cat_id', __( 'No Category provided.', 'wedevs' ) );
    }
    if ( empty( $args['start_date'] ) ) {
        return new WP_Error( 'no-start_date', __( 'No Start date provided.', 'wedevs' ) );
    }
    if ( empty( $args['end_date'] ) ) {
        return new WP_Error( 'no-end_date', __( 'No end date provided.', 'wedevs' ) );
    }

    // remove row id to determine if new or update
    $row_id = (int) $args['id'];
    unset( $args['id'] );

    if ( ! $row_id ) {

        

        // insert a new
        if ( $wpdb->insert( $table_name, $args ) ) {
            return $wpdb->insert_id;
        }

    } else {

        // do update method here
        if ( $wpdb->update( $table_name, $args, array( 'id' => $row_id ) ) ) {
            return $row_id;
        }
    }

    return false;
}

function rp_insert_cat( $args = array() ) {
    global $wpdb;

	
    $defaults = array(
        'id'         => null,
        'cat_name' => '',

    );

    $args       = wp_parse_args( $args, $defaults );
    $table_name = 'wpp7_offer_category';

    // some basic validation
    if ( empty( $args['cat_name'] ) ) {
        return new WP_Error( 'no-category', __( 'No category provided.', 'wedevs' ) );
    }
   
    // remove row id to determine if new or update
    $row_id = (int) $args['id'];
    unset( $args['id'] );

    if ( ! $row_id ) {

        

        // insert a new
        if ( $wpdb->insert( $table_name, $args ) ) {
            return $wpdb->insert_id;
        }

    } else {

        // do update method here
        if ( $wpdb->update( $table_name, $args, array( 'id' => $row_id ) ) ) {
            return $row_id;
        }
    }

    return false;
}


// enqueue and localise scripts
 wp_enqueue_script( 'my-ajax-handle', plugin_dir_url( __FILE__ ) . 'script.js', array( 'jquery' ) );
 wp_localize_script( 'my-ajax-handle', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
 // THE AJAX ADD ACTIONS
 add_action( 'wp_ajax_the_ajax_hook', 'the_action_function' );
 add_action( 'wp_ajax_nopriv_the_ajax_hook', 'the_action_function' ); // need this to serve non logged in users
 // THE FUNCTION
 function the_action_function(){
 /* this area is very simple but being serverside it affords the possibility of retreiving data from the server and passing it back to the javascript function */
	  global $wpdb;
 			if(isset($_POST['search_category'])){
				
				$cat_id = implode(',',$_POST['search_category']);
				$result = $wpdb->get_results("select * from wpp7_offers where cat_id IN ($cat_id)", OBJECT);
			}else{
				$result = $wpdb->get_results("select * from wpp7_offers", OBJECT);
			}
 //echo "Hello World, "; //. $cat_id;// this is passed back to the javascript function
 //($result);
 
	 foreach($result as $data){
		 $start_date = $data->start_date;
		 $end_date = $data->end_date;
       // print_r($data);

         if(function_exists('date_default_timezone_set')) {
                date_default_timezone_set("Asia/Kolkata");
         }
         $now = date("Y-m-d");
             
		 if(($now >= $start_date) && ($now <= $end_date)){
			$cat_data=$wpdb->get_row( $wpdb->prepare( 'SELECT * FROM wpp7_offer_category WHERE id = %d', $data->cat_id ) );
           //print_r($cat_data);
           
                
           
        ?>
         
		<div class="offer-info-box2 wpb_column vc_column_container vc_col-sm-4 loader" style="padding: 5px;">
		<div class="vc_column-inner ">
				<div class="wpb_wrapper ">
			<div class="wpb_text_column wpb_content_element  offer-details-category">
				<div class="wpb_wrapper">
					<p class="red"><strong><?php echo $cat_data->cat_name;?></strong></p>
				</div>
			</div>

		<div class="wpb_text_column wpb_content_element  offer-details-imagebox popmake-offer-1">
			<div class="wpb_wrapper">
					
					
					<img src="<?php echo plugins_url( 'images/'.$data->offer_img, __FILE__ ); ?>" alt="img" >
				

			</div>
		</div>

		<div class="wpb_text_column wpb_content_element  vc_custom_1576064496666 offer-details-heading popmake-offer-1">
			<div class="wpb_wrapper">
				<p><?php echo $data->title ;?></p>

			</div>
		</div>

		<div class="wpb_text_column wpb_content_element  vc_custom_1576067836183 offer-details-detailsbox">
			<div class="wpb_wrapper">
				<p><strong>Offer: </strong><?php echo substr($data->offer_info, 0, 90);?></p>
			</div>
		</div>

		<div class="link-button wpb_text_column wpb_content_element offer-details-codebox blue">
			<div class="wpb_wrapper">
				<p><strong style="color:#fff;"><span style="font-size:12px;letter-spacing:2px;">Use Code :</span> <?php echo $data->sub_title;?></strong></p>
				
				<span class="terms <?php echo $data->offer_link;?>">Terms &amp; Conditions Apply*</span>
			</div>
		</div>

		<!--<div class="wpb_text_column wpb_content_element  vc_custom_1576136087759 offer-details-tcbox popmake-1825 pum-trigger" style="cursor: pointer;">
			<div class="wpb_wrapper">
				<p><strong>Terms &amp; Conditions Apply*</strong></p>

			</div>
		</div>-->
	</div>

		</div>
		</div>
	<?php
             }
             
             
		 
	 }
	
	
	 
	  wp_die();  
 //die();// wordpress may print out a spurious zero without this - can be particularly bad if using json
 }
 // ADD EG A FORM TO THE PAGE
function register_my_css () {
    wp_register_style('my-style', plugins_url('styles.css', __FILE__));
}
 function ajax_frontend(){
	 wp_enqueue_style('my-style');
	   extract(shortcode_atts(array(
        'type' => 'style1'
    ), $params));
	  ob_start();
	 global $wpdb;
	
    ?>
	<div class="col-lg-3 col-12">
		<div class="container">
		<div class="row borderclass">
			<form method="post" id="theForm">
				<ol>
					<li class="nostyle">
						<strong class="heading-search">Search by Category</strong>
					</li>
					<li class="nostyle">
					</li>
					<!--<li class="nostyle">
						<input type="checkbox" name="all_cat" value='all' onchange="document.getElementById('searchCat').submit()">
						<label class="search-label">All</label>
					</li>-->
					<?php
						$category_result=$wpdb->get_results('select * from wpp7_offer_category', OBJECT);
						foreach($category_result as $row_cat){
						$category_count=$wpdb->get_row("SELECT COUNT(*) as offer_count FROM `wpp7_offers` WHERE CURDATE() between start_date and end_date and cat_id=".$row_cat->id, ARRAY_A );
					?>
                    <?php if($category_count['offer_count']!=0)
							{ ?>
					<li class="nostyle">

						<input name="action" type="hidden" value="the_ajax_hook" />&nbsp; <!-- this puts the action the_ajax_hook into the serialized form -->
						<input type="checkbox" name="search_category[]"  value="<?php echo $row_cat->id;?>" <?php if(in_array($row_cat->id,$_POST['search_category'])){ echo "checked";} ?> onClick="submit_me();">
						
                            <label class="search-label"><?php echo $row_cat->cat_name;?> (<?php echo $category_count['offer_count']; ?>)</label>
                            
					</li>
                    <?php 
                            }
                            ?>
					<?php } ?>
				</ol>
			</form>
		
		</div>
		</div>
	</div>
	<div class="col-lg-9 col-12" >
	<section class="wpb_row vc_row-fluid">	
	<div class="container">
	<div class="row">
		
		<div id="response_area">
		
		</div>
		
	</div>
		<!--<div class="row">
			<center>
				<div class="link-button loadclass wpb_text_column wpb_content_element offer-details-codebox blue">
			<div class="wpb_wrapper">
				<p><strong><a href="javascript:void(0)" id='loadMore' target="_blank" style="color:#fff;">Load More</a></strong></p>

			</div>
		</div>
				
			</center>
		</div>-->
	</div>
	
</section>
</div>
<?php 
 
 //return $the_form;
	 return ob_get_clean();
 }
add_action('wp_enqueue_scripts', 'register_my_css');
 add_shortcode("offers", "ajax_frontend");