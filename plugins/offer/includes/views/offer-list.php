<div class="wrap">
    <h2><?php _e( 'Offer', 'webdevs' ); ?> <a href="<?php echo admin_url( 'admin.php?page=offer&action=new' ); ?>" class="add-new-h2"><?php _e( 'Add New', 'webdevs' ); ?></a></h2>

    <form method="post">
        <input type="hidden" name="page" value="ttest_list_table">

        <?php
        $list_table = new Offer_List_Table();
        if( isset($_POST['s']) ){
         $list_table->prepare_items($_POST['s']);
         } else {
         $list_table->prepare_items();
         }
        //$list_table->prepare_items();
        $list_table->search_box( 'search', 'search_id' );
        $list_table->display();
        ?>
    </form>
</div>