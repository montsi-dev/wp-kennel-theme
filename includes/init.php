<?php

function jm_dogs_init(){
    $labels = array(
        'name'              =>      'Koirat',
        'singular_name'     =>      'Koira',
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-pets',
        'supports'           => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        /* 'taxonomies'         => [ 'category', 'post_tag' ], */
        'show_in_rest'       => true
    );
 
register_post_type( 'koirat', $args );
}

function jm_news_init(){
    $args   =   array(
        'labels'        =>  array(
            'name'          =>      'Uutiset',
            'singular_name' =>      'Uutinen',
        ),
        'hierarchical'  =>  false,
        'public'        =>  true,
        'has_archive'   =>  true,
        'menu_icon'     =>  'dashicons-format-aside',
        'supports'      =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
        /* 'taxonomies'    =>  array('category', 'post_tag'), */
        'show_in_rest'  =>  true 
    );
register_post_type('uutiset', $args);
}