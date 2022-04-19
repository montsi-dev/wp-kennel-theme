<?php

function jm_widgets(){
    register_sidebar([
        'name'              =>  __( 'My First Theme Sidebar', 'kennel' ),
        'id'                =>  'jm_sidebar',
        'description'       =>  __( 'Sidebar for the theme Kennel', 'kennel' ),
        'before_widget'     =>  '<div id=%1$s class=widget clearfix %2$s>',
        'after_widget'      =>  '</div>',
        'before_title'      =>  '<h4>',
        'after_title'       =>  '</h4>'
    ]);
}