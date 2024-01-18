<?php
/*
  Plugin Name: CSV Uploader
  Description: Uploads CSV from the backend and saves data in the "cust_data" table.
  Version: 1.0
  Author: Tridhya Tech
 */

// Include WordPress core files
defined('ABSPATH') || exit;

// Add menu page
function csv_uploader_menu() {
    add_menu_page('CSV Uploader', 'CSV Uploader', 'manage_options', 'csv-uploader', 'csv_uploader_page');
}

add_action('admin_menu', 'csv_uploader_menu');

// Display the upload page
function csv_uploader_page() {
    ?>
    <div class="wrap">
        <h2>CSV Uploader</h2>
        <?php
        if (isset($_GET['message']) && $_GET['message'] === 'success') {
            echo '<div class="notice notice-success"><p>CSV uploaded successfully!</p></div>';
        }
        ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="upload_csv">
            <?php wp_nonce_field('csv_uploader_nonce', 'csv_uploader_nonce'); ?>
            <input type="file" name="csv_file" accept=".csv">
            <?php submit_button('Upload CSV'); ?>
        </form>
    </div>
    <?php
}

// Process uploaded CSV
function process_uploaded_csv() {
    global $wpdb;

    if (
        isset($_POST['csv_uploader_nonce']) &&
        wp_verify_nonce($_POST['csv_uploader_nonce'], 'csv_uploader_nonce')
    ) {
        if (isset($_FILES['csv_file'])) {
            $csv_file = $_FILES['csv_file']['tmp_name'];
            if (($handle = fopen($csv_file, 'r')) !== false) {
                while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                    // Assuming CSV format matches the specified fields
                    $account_name = $data[1];
                    $address_one = $data[2];
                    $address_two = $data[3];
                    $address_three = $data[4];
                    $address_four = $data[5];

                    // Insert data into the "cust_data" table
                    $wpdb->insert(
                        'cust_data',
                        array(
                            'account_name' => $account_name,
                            'address_one' => $address_one,
                            'address_two' => $address_two,
                            'address_three' => $address_three,
                            'address_four' => $address_four,
                        )
                    );
                }
                fclose($handle);

                // Redirect back to the upload page with a success message
                $redirect_url = add_query_arg('message', 'success', admin_url('admin.php?page=csv-uploader'));
                wp_safe_redirect($redirect_url);
                exit();
            }
        }
    }
}

add_action('admin_post_upload_csv', 'process_uploaded_csv');
