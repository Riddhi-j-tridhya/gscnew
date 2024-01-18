<?php

/**
 * Admin Menu
 */
class Offer_Admin_Menu {

    /**
     * Kick-in the class
     */
    public function __construct() {
		
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    /**
     * Add menu items
     *
     * @return void
     */
    public function admin_menu() {

        /** Top Menu **/
        add_menu_page( __( 'Offer', 'wedevs' ), __( 'Offer', 'wedevs' ), 'manage_options', 'offer', array( $this, 'plugin_page' ), 'dashicons-groups', null );

        add_submenu_page( 'offer', __( 'Offer', 'wedevs' ), __( 'All Offers', 'wedevs' ), 'manage_options', 'offer', array( $this, 'plugin_page' ) );
		add_submenu_page( 'offer', __( 'Category', 'wedevs' ), __( 'Category', 'wedevs' ), 'manage_options', 'category', array( $this, 'plugin_cate_page' ) );
		 
    }

    /**
     * Handles the plugin page
     *
     * @return void
     */
    public function plugin_page() {
		global $wpdb;
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';
        $id     = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;

		if($action == 'delete'){
			$wpdb->query(
              'DELETE FROM wpp7_offers
               WHERE id = "'.$id.'"'
			);
			$template = dirname( __FILE__ ) . '/views/offer-list.php';
		}else{
			
			switch ($action) {
				case 'view':

					$template = dirname( __FILE__ ) . '/views/offer-single.php';
					break;

				case 'edit':
					$template = dirname( __FILE__ ) . '/views/offer-edit.php';
					break;

				case 'new':
					$template = dirname( __FILE__ ) . '/views/offer-new.php';
					break;

				default:
					$template = dirname( __FILE__ ) . '/views/offer-list.php';
					break;
			}
		}
        if ( file_exists( $template ) ) {
            include $template;
        }
    }
	public function plugin_cate_page() {
		global $wpdb;
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';
        $id     = isset( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;

		if($action == 'delete'){
			$wpdb->query(
              'DELETE FROM wpp7_offer_category
               WHERE id = "'.$id.'"'
			);
			$template = dirname( __FILE__ ) . '/views/cat-list.php';
		}else{
				switch ($action) {
					case 'view':
						$template = dirname( __FILE__ ) . '/views/cat-single.php';
						break;

					case 'edit':
						$template = dirname( __FILE__ ) . '/views/cat-edit.php';
						break;

					case 'new':
						$template = dirname( __FILE__ ) . '/views/cat-new.php';
						break;

					default:
						$template = dirname( __FILE__ ) . '/views/cat-list.php';
						break;
				}
		}
		if ( file_exists( $template ) ) {
					include $template;
				}
    }
}