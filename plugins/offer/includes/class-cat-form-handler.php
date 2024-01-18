<?php

/**
 * Handle the form submissions
 *
 * @package Package
 * @subpackage Sub Package
 */
class Cat_Form_Handler {

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
        if ( ! isset( $_POST['submit_category'] ) ) {
            return;
        }

       /* if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'cat-new' ) ) {
            die( __( 'Are you cheating?', 'wedevs' ) );
        }*/

        if ( ! current_user_can( 'read' ) ) {
            wp_die( __( 'Permission Denied!', 'wedevs' ) );
        }

        $errors   = array();
        $page_url = admin_url( 'admin.php?page=category' );
        $field_id = isset( $_POST['field_id'] ) ? intval( $_POST['field_id'] ) : 0;
		
		
        $cat_name = isset( $_POST['cat_name'] ) ? sanitize_text_field( $_POST['cat_name'] ) : '';

        // some basic validation
        if ( ! $cat_name ) {
            $errors[] = __( 'Error: Category is required', 'wedevs' );
        }

       

        // bail out if error found
        if ( $errors ) {
            $first_error = reset( $errors );
            $redirect_to = add_query_arg( array( 'error' => $first_error ), $page_url );
            wp_safe_redirect( $redirect_to );
            exit;
        }

        $fields = array(
            'cat_name' => $cat_name,
        );

        // New or edit?
        if ( ! $field_id ) {

            $insert_id = rp_insert_cat( $fields );

        } else {

            $fields['id'] = $field_id;

            $insert_id = rp_insert_cat( $fields );
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

new Cat_Form_Handler();