<?php

namespace HardG\BuddyPress120URLPolyfills;

class Loader {
	public function __construct() {
		add_action( 'bp_include', array( $this, 'load' ) );
	}

	public function load() {
		if ( version_compare( bp_get_version(), '12.0', '<' ) ) {
			require_once __DIR__ . '/functions.php';
		}
	}
}
