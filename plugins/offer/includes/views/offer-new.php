<div class="wrap">
    <h1><?php _e( 'Add offer', 'wedevs' ); ?></h1>

    <form action="" method="post" enctype="multipart/form-data">

        <table class="form-table">
            <tbody>
                <tr class="row-title">
                    <th scope="row">
                        <label for="title"><?php _e( 'Title', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="title" id="title" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="" required="required" />
                    </td>
                </tr>
                <tr class="row-sub-title">
                    <th scope="row">
                        <label for="sub_title"><?php _e( 'Code', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="sub_title" id="sub_title" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value=""  />
                    </td>
                </tr>
                <tr class="row-offer-info">
                    <th scope="row">
                        <label for="offer_info"><?php _e( 'Offer info', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <textarea name="offer_info" id="offer_info"placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" rows="5" cols="30" required="required"></textarea>
                    </td>
                </tr>
                <tr class="row-offer-img">
                    <th scope="row">
                        <label for="offer_img"><?php _e( 'Offer image', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="file" name="offer_img" id="offer_img" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="" required="required" />
                    </td>
                </tr>
				 <tr class="row-sub-title">
                    <th scope="row">
                        <label for="offer_link"><?php _e( 'Popup Class', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="offer_link" id="offer_link" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="" />
                    </td>
                </tr>
               <!-- <tr class="row-cat-id">
                    <th scope="row">
                        <label for="cat_id"><?php _e( 'Category', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="cat_id" id="cat_id" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="" required="required" />
                    </td>
                </tr>-->
				 <tr class="row-cat-id">
                    <th scope="row">
                        <label for="cat_id"><?php _e( 'Category', 'wedevs' ); ?></label>
                    </th>
                    <td>
						<select name="cat_id" id="cat_id" class="regular-dropdown" required="required">
							<option>Select Category</option>
						<?php 
							 global $wpdb;
							$result = $wpdb->get_results('select * from wpp7_offer_category', OBJECT); 
							
							foreach($result as $data){
								
						?>
							<option value="<?php echo $data->id; ?>"><?php echo $data->cat_name; ?></option>
						<?php  } ?>
						</select>
                       
                    </td>
                </tr>
                <tr class="row-start-date">
                    <th scope="row">
                        <label for="start_date"><?php _e( 'Start date', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="date" name="start_date" id="start_date" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="" required="required" />
                    </td>
                </tr>
                <tr class="row-end-date">
                    <th scope="row">
                        <label for="end_date"><?php _e( 'end date', 'wedevs' ); ?></label>
                    </th>
                    <td>
                        <input type="date" name="end_date" id="end_date" class="regular-text" placeholder="<?php echo esc_attr( '', 'wedevs' ); ?>" value="" required="required" />
                    </td>
                </tr>
             </tbody>
        </table>

        <input type="hidden" name="field_id" value="0">

        <?php wp_nonce_field( 'offer-new' ); ?>
        <?php submit_button( __( 'Add offer', 'wedevs' ), 'primary', 'submit_offer' ); ?>

    </form>
</div>