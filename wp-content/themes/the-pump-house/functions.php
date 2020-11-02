<?php
   function register_resource() {
    register_nav_menu('main-menu',__( 'Main menu' )
    );
   }
    add_action( 'init', 'register_resource' );

    $args = array(
        'public'    => true,
        'label'     => 'Support',
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    );
    register_post_type( 'supportsection', $args );

    // //Custom taxonomy
    $args = array(
        'label'        => 'thing',
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true,
        'show_in_nav_menus' => true
    );
    register_taxonomy( 'thing', 'supportsection', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Shows',
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    );
    register_post_type( 'show', $args );

    //Custom taxonomy
    $args = array(
        'label'        => 'Type',
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true,
        'show_in_nav_menus' => true
    );
    register_taxonomy( 'type', 'show', $args );

    //register section
    $args = array(
        'public'    => true,
        'label'     => 'Sections',
        'menu_icon' => 'dashicons-book',
    );
    register_post_type( 'section', $args );

    //Custom taxonomy
    $args = array(
        'label'        => 'Form',
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true,
        'show_in_nav_menus' => true
    );
    register_taxonomy( 'form', 'section', $args );

    function add_class_to_li( $classes, $item, $args ) {

        $classes[] = 'nav-item';
        return $classes;
    }
    add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );


    function add_class_to_anchors( $atts ) {
        $atts['class'] = 'nav-link';
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );
 
?>