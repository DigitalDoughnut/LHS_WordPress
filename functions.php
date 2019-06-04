<?php

	function CSSLoader(){
		wp_enqueue_style('BootstrapCSS', get_theme_file_uri('/stylesheets/bootstrap.min.css'), NULL , '1.0', false);
		wp_enqueue_style('FeatherLightCSS', get_theme_file_uri('/stylesheets/featherlight.css'), NULL , '1.0', false);
		wp_enqueue_style('MainCSS', get_theme_file_uri('/style.css'), NULL , '1.0', false);
	}
	add_action('wp_enqueue_scripts', 'CSSLoader');
	
	
	
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/* Filters for adding Bootstrap 4 classes to navigation menu */


add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

function add_classes_on_li($classes, $item, $args)
{
  if ( 'extra-menu' === $args->theme_location ) {
    $classes[] = 'mx-1 mx-sm-2 mx-md-3 ';

    return $classes;
  }
  else {
    $classes[] = '';
    return $classes;
}
}

/*
add_filter('wp_nav_menu', 'add_classes_on_a');
function add_classes_on_a($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link" ', $ulclass);
}
*/

 
?>