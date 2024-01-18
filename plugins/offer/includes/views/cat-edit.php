<div class="wrap">
    <h1><?php _e( 'Edit category', 'wedevs' ); ?></h1>

    <?php $item = rp_get_category( $id ); ?>

    <form action="" method="post">

        <table class="form-table">
            <tbody>
                <tr class="row-title">
                    <th scope="row">
                        <label for="cat_name"><?php _e( 'Category', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="cat_name" id="cat_name" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="<?php echo esc_attr( $item->cat_name ); ?>" required="required" />
                    </td>
                </tr>
             </tbody>
        </table>

        <input type="hidden" name="field_id" value="<?php echo $item->id; ?>">

        <?php wp_nonce_field( 'cat-edit' ); ?>
        <?php submit_button( __( 'Update', 'wedevs' ), 'primary', 'submit_category' ); ?>

    </form>
</div>