<?php
/**
 * Template for displaying single property details.
 */
get_header();
?>
<div class="property-single-container">
    <h2><?php the_title(); ?></h2>
    <p><strong>Address:</strong> <?php echo esc_html(get_property_address(get_the_ID())); ?></p>
    <p><strong>Address 2:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_address_2', true)); ?></p>
    <p><strong>City:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_city', true)); ?></p>
    <p><strong>State:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_state', true)); ?></p>
    <p><strong>ZIP:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_zip', true)); ?></p>
    <p><strong>Lot SQFT:</strong> <?php echo esc_html(get_property_lot_sqft(get_the_ID())); ?></p>
    <p><strong>Property Type:</strong> <?php echo esc_html(get_property_type(get_the_ID())); ?></p>
    <p><strong>Structures:</strong><br><?php echo nl2br(esc_html(get_property_structures(get_the_ID()))); ?></p>
    <p><strong>Bathrooms:</strong> <?php echo esc_html(get_property_bathrooms(get_the_ID())); ?></p>
    <p><strong>Rooms/Offices:</strong> <?php echo esc_html(get_property_rooms(get_the_ID())); ?></p>
    <p><strong>Room SQFT:</strong> <?php echo esc_html(get_property_room_sqft(get_the_ID())); ?></p>
    <p><strong>Purchase Price:</strong> <?php echo esc_html(get_property_purchase_price(get_the_ID())); ?></p>
    <p><strong>Purchase Date:</strong> <?php echo esc_html(get_property_purchase_date(get_the_ID())); ?></p>
    <p><strong>Is Rented?</strong> <?php echo is_property_rented(get_the_ID()) ? 'Yes' : 'No'; ?></p>
    <p><strong>Number of Apartments:</strong> <?php echo esc_html(get_property_num_apartments(get_the_ID())); ?></p>
</div>
<?php
get_footer();