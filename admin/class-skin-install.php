<?php

use HFE\Inc\Helpers\HFE_PluginInstaller;

/**
 * Skin for on-the-fly addon installations.
 *
 * @since x.x.x
 */
class HFE_Skin_Install extends HFE_PluginInstaller {

	/**
	 * Instead of outputting HTML for errors, json_encode the errors and send them
	 * back to the Ajax script for processing.
	 *
	 * @since x.x.x
	 *
	 * @param array $errors Array of errors with the install process.
	 */
	public function error( $errors ) {

		if ( ! empty( $errors ) ) {
			wp_send_json_error( $errors );
		}
	}
}
