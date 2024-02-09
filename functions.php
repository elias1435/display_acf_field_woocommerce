// Important note: my ACF field name is "course_date"

// Output a product custom field in WooCommerce Order Admin Page
add_action( 'woocommerce_before_order_itemmeta', 'storage_location_of_order_items', 10, 3 );
function storage_location_of_order_items( $item_id, $item, $product ){
    // Only on backend order edit pages
    if( ! is_admin() ) return;

    // Get your ACF product value (replace the slug by yours below)
    if( $acf_value = get_field( 'course_date', $product->get_id() ) ) {
        $acf_label = __('Course Date: ');
        // Outputing the value of the "Course Date" for this product item
        echo '<div class="course-date">' . $acf_label . $acf_value . '</div>';
    }
}


