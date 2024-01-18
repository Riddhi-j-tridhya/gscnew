<div class="wrap">
    <h1><?php _e( 'Add Category', 'wedevs' ); ?></h1>

    <form action="" method="post" enctype="multipart/form-data">

        <table class="form-table">
            <tbody>
                <tr class="row-title">
                    <th scope="row">
                        <label for="cat_name"><?php _e( 'Category Name', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="cat_name" id="cat_name" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="" required="required" />
                    </td>
                </tr>
             </tbody>
        </table>

        <input type="hidden" name="field_id" value="0">

        <?php wp_nonce_field( 'cat-new' ); ?>
        <?php submit_button( __( 'Add Category', 'wedevs' ), 'primary', 'submit_category' ); ?>

    </form>
</div>