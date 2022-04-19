<?php

// Setup
define( 'JM_DEV_MODE', true );


// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/widgets.php'));
include(get_theme_file_path('/includes/init.php'));


// Hooks
add_action('wp_enqueue_scripts', 'jm_enqueue');
add_action('after_setup_theme', 'jm_setup_theme');
add_action('widgets_init', 'jm_widgets');
add_action('init', 'jm_news_init');
add_action('init', 'jm_dogs_init');


// Shortcodes