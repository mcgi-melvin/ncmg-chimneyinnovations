<?php
function chimney_enqueue(){
    wp_enqueue_style('inance-bootstrap', get_template_directory_uri() . '/lib/inance/css/bootstrap.css', [], null );
    wp_enqueue_style('inance-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", [], null );
    wp_enqueue_style('inance-font-awesome', get_template_directory_uri() . '/lib/inance/css/font-awesome.min.css', [], null );
    wp_enqueue_style('inance-style', get_template_directory_uri() . '/lib/inance/css/style.css', [], null );
    wp_enqueue_style('inance-responsive', get_template_directory_uri() . '/lib/inance/css/responsive.css', [], null );
    wp_enqueue_style('style', get_template_directory_uri() . '/lib/theme/style.css', [], null );


    wp_enqueue_script('inance-jQuery', get_template_directory_uri() . '/lib/inance/js/jquery-3.4.1.min.js', [], null, true );
    wp_enqueue_script('inance-bootstrap', get_template_directory_uri() . '/lib/inance/js/bootstrap.js', [], null, true );
    wp_enqueue_script('inance-carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", [], null, true );
    wp_enqueue_script('inance-custom', get_template_directory_uri() . '/lib/inance/js/custom.js', [], null, true );
    wp_enqueue_script('script', get_template_directory_uri() . '/lib/theme/script.js', [], null, true );
    wp_enqueue_script('inance-map', "https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap", [], null, true );
}
add_action('wp_enqueue_scripts', 'chimney_enqueue');