<?php

namespace HardG\BuddyPress120URLPolyfills;

class Loader {
	private function __construct() {}

	public static function init() {
		static $instance = null;

		if ( null === $instance ) {
			$instance = new static();
			$instance->setup();
		}
	}

	private function setup() {
		add_action( 'bp_include', [ $this, 'load' ] );
	}

	public function load() {
		if ( ! version_compare( bp_get_version(), '12.0', '<' ) ) {
			return;
		}

		$active_components = bp_core_get_active_components();

		foreach ( $active_components as $component ) {
			require_once __DIR__ . "/components/{$component}.php";
		}
	}
}
