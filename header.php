<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('d-flex flex-column min-vh-100'); ?> >
    
    <nav class="header-nav navbar navbar-expand-lg navbar-light bg-light shadow" role="navigation">
    <div class="container navi">
        <a class="navbar-brand" href="<?php echo site_url() ?>">Rumblepaws</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'kennel' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-center',
            'container_id'      => 'navbarNavDropdown',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
    </nav>