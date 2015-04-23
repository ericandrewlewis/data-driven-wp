<?php
/*
Plugin Name: Data Driven WP
Version: 0.1
*/

add_action( 'admin_enqueue_scripts', function( $hook_suffix ) {
	wp_register_script( 'modernizr', plugin_dir_url( __FILE__ ) . 'modernizr.min.js' );
	wp_enqueue_script( 'ddwp', plugin_dir_url( __FILE__ ) . 'script.js', array( 'modernizr', 'jquery' ) );
	wp_localize_script( 'ddwp', 'ddwp',
		array( 'uniqueHash' => md5( get_site_url() . get_current_user_id() ) )
	);
} );