<?php 
namespace NexVis\WordPress{
	
	require ( plugin_dir_path( __FILE__ ) ) . 'plugin_updater.php';

class Update_This_Plugin extends WP_NVT_Plugin_Updater {

	/**
	 * Return the latest version number of the plugin.
	 *
	 * @return string
	 */
	protected function get_latest_version()
	{
        // Do anything you need to provide the latest version number.
        // for example: perform a wp_remote_get() request to a Github repository retrieving the latest release or call out to your own server that hosts the plugin zip.
		return '1.3.0';
	}

	/**
	 * Get the plugin url.
	 *
	 * @return string The URL.
	 */
	protected function get_url()
	{
		return 'https://github.com/mudassarijaz/hello_pakistan';
	}

	/**
	 * Get the package url.
	 *
	 * @return string The package URL.
	 */
	protected function get_package_url()
	{
		return 'https://github.com/mudassarijaz/hello_pakistan/archive/refs/heads/main.zip';
	}

}
}
?>