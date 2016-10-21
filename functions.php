<?php

/*-------------Enable Customer Header----------*/
register_default_headers( array(
	'art' => array(
		'url'           => '%s/images/header.png',
		'thumbnail_url' => '%s/images/header.png',
		'description'   => __( 'Art', 'squares' )
	),

  $args = array(
  	'width'         => 980,
  	'height'        => 60,
  	'default-image' => get_template_directory_uri() . '/images/header.png',
  );
  add_theme_support( 'custom-header', $args );

$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

add_theme_support( 'custom-header', $defaults );


/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name'          => ('First Widget'),
        'id'            => 'first-widget',
        'description'   => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
        ));
/*-------------- First Footer Widget --------------- */
    register_sidebar( array(
        'name'          => ('First Footer Widget'),
        'id'            => 'footer-one',
        'description'   => 'Left widget in the footer',
        'before_widget' => '<div class="widget-footer widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
        ));
/*-------------- Second Footer Widget --------------- */
register_sidebar( array(
    'name'          => ('Second Footer Widget'),
    'id'            => 'footer-two',
    'description'   => 'Middle widget in the footer',
    'before_widget' => '<div class="widget-footer widget-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
    ));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );


?>
