<?php

/**
 * Handle the form submissions
 *
 * @package Package
 * @subpackage Sub Package
 */
class Form_Handler {

    /**
     * Hook 'em all
     */
    public function __construct() {
        add_action( 'admin_init', array( $this, 'handle_form' ) );
    }

    /**
     * Handle the offer new and edit form
     *
     * @return void
     */
    public function handle_form() {
        if ( ! isset( $_POST['submit_offer'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'offer-new' ) ) {
            die( __( 'Are you cheating?', 'wedevs' ) );
        }

        if ( ! current_user_can( 'read' ) ) {
            wp_die( __( 'Permission Denied!', 'wedevs' ) );
        }

        $errors   = array();
        $page_url = admin_url( 'admin.php?page=offer' );
        $field_id = isset( $_POST['field_id'] ) ? intval( $_POST['field_id'] ) : 0;
		
		/*file upload */
		$tmp_name = $_FILES["offer_img"]["tmp_name"];
		$real_name = $_FILES["offer_img"]["name"];
		$path_array = wp_upload_dir(); // normal format start
		if(!empty($real_name)){
			$file_name   =   pathinfo($tmp_name ,PATHINFO_FILENAME).time().".".pathinfo($real_name ,PATHINFO_EXTENSION);
		}else{
			$file_name   =  $_POST['offer_img_old'];
		}
		$imgtype     =   strtolower(pathinfo($tmp_name,PATHINFO_EXTENSION));                
		$targetpath        =   dirname( __FILE__ ) . '/images/'.$file_name;

		move_uploaded_file($tmp_name, $targetpath );
		/* end file upload */
		
        $title = isset( $_POST['title'] ) ? sanitize_text_field( $_POST['title'] ) : '';
        $sub_title = empty( $_POST['sub_title'] ) ? 'NOT REQUIRED' : sanitize_text_field( $_POST['sub_title'] );
        $offer_info = isset( $_POST['offer_info'] ) ? wp_kses_post( $_POST['offer_info'] ) : '';
        $offer_img = $file_name;
        $offer_link = isset( $_POST['offer_link'] ) ? sanitize_text_field( $_POST['offer_link'] ) : '';
        $cat_id = isset( $_POST['cat_id'] ) ? sanitize_text_field( $_POST['cat_id'] ) : '';
        $start_date = isset( $_POST['start_date'] ) ? sanitize_text_field( $_POST['start_date'] ) : '';
        $end_date = isset( $_POST['end_date'] ) ? sanitize_text_field( $_POST['end_date'] ) : '';

        // some basic validation
        if ( ! $title ) {
            $errors[] = __( 'Error: Title is required', 'wedevs' );
        }

       

        if ( ! $offer_info ) {
            $errors[] = __( 'Error: Offer info is required', 'wedevs' );
        }

        if ( ! $offer_img ) {
            $errors[] = __( 'Error: Offer image is required', 'wedevs' );
        }

        if ( ! $cat_id ) {
            $errors[] = __( 'Error: Category is required', 'wedevs' );
        }

        if ( ! $start_date ) {
            $errors[] = __( 'Error: Start date is required', 'wedevs' );
        }

        if ( ! $end_date ) {
            $errors[] = __( 'Error: end date is required', 'wedevs' );
        }

        // bail out if error found
        if ( $errors ) {
            $first_error = reset( $errors );
            $redirect_to = add_query_arg( array( 'error' => $first_error ), $page_url );
            wp_safe_redirect( $redirect_to );
            exit;
        }

        $fields = array(
            'title' => $title,
            'sub_title' => $sub_title,
            'offer_info' => $offer_info,
            'offer_img' => $offer_img,
            'offer_link' => $offer_link,
            'cat_id' => $cat_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
        );
		

        // New or edit?
        if ( ! $field_id ) {

            $insert_id = rp_insert_offer( $fields );

        } else {

            $fields['id'] = $field_id;

            $insert_id = rp_insert_offer( $fields );
        }

        if ( is_wp_error( $insert_id ) ) {
            $redirect_to = add_query_arg( array( 'message' => 'error' ), $page_url );
        } else {
            $redirect_to = add_query_arg( array( 'message' => 'success' ), $page_url );
        }

        wp_safe_redirect( $redirect_to );
        exit;
    }
}

new Form_Handler();