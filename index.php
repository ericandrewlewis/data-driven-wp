<?php
/*
Plugin Name: Data Driven WP
Version: 0.1
*/

add_action( 'admin_enqueue_scripts', function( $hook_suffix ) {
	if ( ! in_array( $hook_suffix, array( 'post.php', 'post-new.php' ) ) ) {
		return;
	}
	wp_enqueue_script( 'ddwp', plugin_dir_url( __FILE__ ) . 'script.js', array( 'jquery' ) );
	wp_localize_script( 'ddwp', 'ddwp',
		array( 'uniqueHash' => md5( get_site_url() . get_current_user_id() ) )
	);
} );