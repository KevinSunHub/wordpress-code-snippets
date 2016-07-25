<?php
/**
 * Add Custom Image Sizes to Media Uploader
 * @author Pippin Williamson
 * @link http://pippinsplugins.com/add-custom-image-sizes-to-media-uploader/
 * 
 * @param array $sizes
 * @return array 
 */
function pw_show_image_sizes( $sizes ) {
    $sizes['pw-thumb'] = __( 'Custom Thumb', 'pippin' );
    $sizes['pw-large'] = __( 'Custom Large', 'pippin' );
 
    return $sizes;
}
add_filter( 'image_size_names_choose', 'pw_show_image_sizes' );
