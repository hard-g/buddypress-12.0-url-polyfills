<?php

/**
 * Polyfills for URL-related functions introduced in BP 12.0 for the Members component.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bp_get_root_url' ) ) {
	/**
	 * Gets the root URL of the site.
	 *
	 * @return string
	 */
	function bp_get_root_url() {
		return bp_get_root_domain();
	}
}
