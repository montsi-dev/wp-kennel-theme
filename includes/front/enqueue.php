<?php

function jm_enqueue() {
    $uri                =   get_theme_file_uri();
    $ver                =   JM_DEV_MODE ? time() : false;

    wp_register_style( 'jm_font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css', [], $ver );
    wp_register_style( 'jm_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver );
    wp_register_style( 'jm_kennel_main_styles', $uri . '/assets/css/main.css', [], $ver );

    wp_enqueue_style( 'jm_font-awesome' );
    wp_enqueue_style( 'jm_bootstrap' );
    wp_enqueue_style( 'jm_kennel_main_styles' );

    /* wp_register_script( 'jm_plugins', $uri . '/assets/js/plugins.js', [], false, true ); */
    wp_register_script( 'jm_bootstrap_js', $uri . '/assets/js/bootstrap.js', [], $ver, true );
    
    /* wp_enqueue_script( 'jquery' ); */
    wp_enqueue_script( 'jm_bootstrap_js');
    
    
}