<?php


function load_stylesheets(){
	

	wp_register_style('bootstrap', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css', array(),
1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('custom-style', get_template_directory_uri(). '/style.css', array(),
1, 'all');
	wp_enqueue_style('custom-style');

}
add_action('wp_enqueue_scripts','load_stylesheets');



function loadjs(){
        wp_register_script('customjs', get_template_directory_uri() .'/vendor/jquery/jquery.min.js' ,array(), 1, 1,1);
        wp_enqueue_script('customjs');
        wp_register_script('bootstrapJS' , get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js' ,array(), 1, 1,1);
        wp_enqueue_script('bootstrapJS');
}
add_action('wp_enqueue_scripts','loadjs');



// Customize Header (phone number / Email) 

function header_customize($wp_customize) {
	$wp_customize->add_section('header-custom-section', array(
		'title' => 'Header'
	));
	$wp_customize->add_setting('header-number', array(
		'default' => '+1234567890'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize,
'header-number-control', array(
	'label' => 'Number',
	'section' => 'header-custom-section',
	'settings' => 'header-number'
)));
$wp_customize->add_setting('header-email', array(
	'default' => 'mail@crazydomains.com'
));
$wp_customize->add_control( new WP_Customize_Control($wp_customize,
'header-email-control', array(
'label' => 'Email',
'section' => 'header-custom-section',
'settings' => 'header-email'
)));
}
add_action('customize_register', 'header_customize');





function tutsplus_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'tutsplus' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'tutsplus' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

         
}
 
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'tutsplus_widgets_init' );

add_theme_support( 'post-thumbnails' );

