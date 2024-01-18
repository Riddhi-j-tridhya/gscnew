<?php

if ( ! class_exists ( 'WP_List_Table' ) ) {
    require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

/**
 * List table class
 */
class Offer_List_Table extends \WP_List_Table {

    function __construct() {
        parent::__construct( array(
            'singular' => 'offer',
            'plural'   => 'offers',
            'ajax'     => false
        ) );
    }

    function get_table_classes() {
        return array( 'widefat', 'fixed', 'striped', $this->_args['plural'] );
    }

    /**
     * Message to show if no designation found
     *
     * @return void
     */
    function no_items() {
        _e( 'no offer found', 'webdevs' );
    }

    /**
     * Default column values if no callback found
     *
     * @param  object  $item
     * @param  string  $column_name
     *
     * @return string
     */
    function column_default( $item, $column_name ) {
 global $wpdb;
    $cat_name=$wpdb->get_row( $wpdb->prepare( 'SELECT cat_name FROM wpp7_offer_category WHERE id = %d', $item->cat_id ) );
		
        switch ( $column_name ) {
            case 'title':
                return $item->title;

            case 'sub_title':
                return $item->offer_info;

            case 'cat_id':
				$cat_name=$wpdb->get_row( $wpdb->prepare( 'SELECT cat_name FROM wpp7_offer_category WHERE id = %d', $item->cat_id ) );
                return $cat_name->cat_name;

            default:
                return isset( $item->$column_name ) ? $item->$column_name : '';
        }
    }

    /**
     * Get the column names
     *
     * @return array
     */
    function get_columns() {
        $columns = array(
            'cb'           => '<input type="checkbox" />',
            'title'      => __( 'Title', 'webdevs' ),
            'sub_title'      => __( 'Sub title', 'webdevs' ),
            'cat_id'      => __( 'Category', 'webdevs' ),

        );

        return $columns;
    }

    
    /**
     * Render the designation name column
     *
     * @param  object  $item
     *
     * @return string
     */
    function column_title( $item ) {

        $actions           = array();
        $actions['edit']   = sprintf( '<a href="%s" data-id="%d" title="%s">%s</a>', admin_url( 'admin.php?page=offer&action=edit&id=' . $item->id ), $item->id, __( 'Edit this item', 'webdevs' ), __( 'Edit', 'webdevs' ) );
        $actions['delete'] = sprintf( '<a href="%s" class="submitdelete" data-id="%d" title="%s">%s</a>', admin_url( 'admin.php?page=offer&action=delete&id=' . $item->id ), $item->id, __( 'Delete this item', 'webdevs' ), __( 'Delete', 'webdevs' ) );

        return sprintf( '<a href="%1$s"><strong>%2$s</strong></a> %3$s', admin_url( 'admin.php?page=offer&action=view&id=' . $item->id ), $item->title, $this->row_actions( $actions ) );
    }

    /**
     * Get sortable columns
     *
     * @return array
     */
    function get_sortable_columns() {
        $sortable_columns = array(
            'name' => array( 'name', true ),
        );

        return $sortable_columns;
    }

    /**
     * Set the bulk actions
     *
     * @return array
     */
    function get_bulk_actions() {
        $actions = array(
            'trash'  => __( 'Move to Trash', 'webdevs' ),
        );
        return $actions;
    }

    /**
     * Render the checkbox column
     *
     * @param  object  $item
     *
     * @return string
     */
    function column_cb( $item ) {
        return sprintf(
            '<input type="checkbox" name="offer_id[]" value="%d" />', $item->id
        );
    }

    /**
     * Set the views
     *
     * @return array
     */
    public function get_views_() {
        $status_links   = array();
        $base_link      = admin_url( 'admin.php?page=sample-page' );

        foreach ($this->counts as $key => $value) {
            $class = ( $key == $this->page_status ) ? 'current' : 'status-' . $key;
            $status_links[ $key ] = sprintf( '<a href="%s" class="%s">%s <span class="count">(%s)</span></a>', add_query_arg( array( 'status' => $key ), $base_link ), $class, $value['label'], $value['count'] );
        }

        return $status_links;
    }

    /**
     * Prepare the class items
     *
     * @return void
     */
    function prepare_items($search = NULL) {

        $columns               = $this->get_columns();
        $hidden                = array( );
        $sortable              = $this->get_sortable_columns();
        $this->_column_headers = array( $columns, $hidden, $sortable );

        $per_page              = 20;
        $current_page          = $this->get_pagenum();
        $offset                = ( $current_page -1 ) * $per_page;
        $this->page_status     = isset( $_GET['status'] ) ? sanitize_text_field( $_GET['status'] ) : '2';

        // only ncessary because we have sample data
        $args = array(
            'offset' => $offset,
            'number' => $per_page,
        );

        if ( isset( $_REQUEST['orderby'] ) && isset( $_REQUEST['order'] ) ) {
            $args['orderby'] = $_REQUEST['orderby'];
            $args['order']   = $_REQUEST['order'] ;
        }
        
        /* If the value is not NULL, do a search for it. */
        if( $search != NULL ){

                // Trim Search Term
                $search = trim($search);
                $args['title']   = $search ;
            //print_r($args);
            //exit();
                
               $this->items  = re_get_serach_offer( $args );

        }else{
            $this->items  = rp_get_all_offer( $args );
        }
        $this->set_pagination_args( array(
            'total_items' => rp_get_offer_count(),
            'per_page'    => $per_page
        ) );
    }
}