<?php
    // Loading custom CSS
    function jadoo_enqueue_styles()
    {
        wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/jadoo.css');
    }
    add_action('wp_enqueue_scripts', 'jadoo_enqueue_styles');

?>