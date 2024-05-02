<?php

include('components/headband.php');
include('components/gallery.php');
include('components/footer.php');
include('components/copyright.php');

/* CUSTOM COPYRIGHT */
add_filter( 'generate_copyright','my_custom_copyright' );
function my_custom_copyright() {
    echo get_copyright();
}

wp_enqueue_style( 'gallery', get_stylesheet_directory_uri() . './styles/gallery.css', array('generate-style'));
wp_enqueue_style( 'footer_widgets', get_stylesheet_directory_uri() . './styles/footer_widgets.css', array('generate-style'));

/* Divide footer widget content size by 2*/
add_filter( 'generate_footer_widgets','custom_generate_footer_widgets' );
function custom_generate_footer_widgets( $widgets ) {
    return 1;
}

/* ACCEPT SVG IMAGES */

function enable_SVG( $mimes ) {
    if ( current_user_can( 'manage_options' ) ) {
        $mimes['svg']  = 'image/svg+xml';
    }

    return $mimes;
}
add_filter( 'upload_mimes', 'enable_SVG' );

function enable_SVG_upload( $types, $file, $filename, $mimes ){
    if( substr( $filename, -4 ) == '.svg' ){
        $types['ext'] = 'svg';
        $types['type'] = 'image/svg+xml';
    }

    return $types;
}

add_filter( 'wp_check_filetype_and_ext', 'enable_SVG_upload', 10, 4 );


function enable_SVG_upload_idc( $response ) {

    if ( $response['mime'] === 'image/svg+xml' ) {
        $response['image'] = [
            'src' => $response['url'],
        ];
    }
    return $response;
}
add_filter( 'wp_prepare_attachment_for_js', 'enable_SVG_upload_idc' );