<?php

function jm_setup_theme() {
    /**
     * Register Custom Navigation Walker
     */
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    
    register_nav_menu('primary', __('Primary Menu', 'kennel'));
    register_nav_menu('footerLocationOne', 'Alatunniste 1');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Custom Image Sizes
    add_image_size('blog-large', 800, 400, false);
    add_image_size('blog-small', 300, 200, true);
    add_image_size('koiraVaaka', 640, 480, true);
    add_image_size('koiraPysty', 480, 640, true);
}
