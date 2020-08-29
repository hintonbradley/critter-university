<?php 

    function addCustomStyling () {
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    }

    // when Wordpress gets to loading the page, wp_enqueue_scripts tells WP to run the function addCustomStyling
    add_action('wp_enqueue_scripts','addCustomStyling');