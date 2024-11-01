<?php
/*
Plugin Name:  Update Active Plugins Only
Description:  Only perform update checks on active plugins
Version:      1.1
Author:       John Blackbourn
*/

add_filter( 'http_request_args', 'update_active_plugins_only', 10, 2 );

function update_active_plugins_only( $r, $url ) {

	if ( 0 === strpos( $url, 'http://api.wordpress.org/plugins/update-check/' ) ) {
		$plugins = unserialize( $r['body']['plugins'] );
		$active = array_flip( $plugins->active );
		if ( is_multisite() )
			$active = array_merge( $active, get_site_option( 'active_sitewide_plugins', array() ) );
		$plugins->plugins = array_intersect_key( $plugins->plugins, $active );
		$r['body']['plugins'] = serialize( $plugins );
	}

	return $r;

}

?>