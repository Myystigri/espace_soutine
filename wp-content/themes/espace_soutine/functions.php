<?php    
function enqueue_bootstrap() {
  // Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );




function register_my_menu() {
		register_nav_menus(
			array(
      				'nav-menu' => __( 'Nav Menu' ),
      				'footer-menu' => __( 'Footer Menu' ),
    			)
			);
	}
	add_action( 'init', 'register_my_menu' );



/*
register_nav_menus( array(
        'nav' => 'Navigation',
     	   'container_class' => 'nav navbar-nav'
    ) );
*/