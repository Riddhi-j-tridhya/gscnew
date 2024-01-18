<?php
/*
Plugin Name: Offers
Description: A simple user list for CRUD
Version: 1.0
Author: Transmogryfiers
Author URI: http://phpcoder.tech
*/


add_action('init',function (){
    include dirname(__FILE__).'/includes/class-offer-admin-menu.php';
    include dirname(__FILE__).'/includes/class-offer-list-table.php';
    include dirname(__FILE__).'/includes/class-cat-list-table.php';
    include dirname(__FILE__).'/includes/class-form-handler.php';
    include dirname(__FILE__).'/includes/class-cat-form-handler.php';
    include dirname(__FILE__).'/includes/offer-functions.php';
    
    new Offer_Admin_Menu();
});

?>