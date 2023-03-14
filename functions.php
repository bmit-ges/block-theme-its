<?php

    /*function that adds css from the assets*/
    function stylesheet_css() {
        wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css' );
    }
    add_action( 'wp_enqueue_scripts', 'stylesheet_css' );

    /*function to add scripts*/
    function examples_script() {
        wp_enqueue_script( 'examples', get_template_directory_uri() . '/assets/js/examples.js', array( 'jquery' ), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'examples_script' );

?>