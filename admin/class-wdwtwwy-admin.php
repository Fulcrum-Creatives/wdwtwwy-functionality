<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://fulcrumcreatives.com/
 * @since      1.0.0
 *
 * @package    Wdwtwwy
 * @subpackage Wdwtwwy/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Wdwtwwy
 * @subpackage Wdwtwwy/admin
 * @author     Fulcrum Creatives <info@fulcrumcreatives.com>
 */
class Wdwtwwy_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wdwtwwy    The ID of this plugin.
	 */
	private $wdwtwwy;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wdwtwwy       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wdwtwwy, $version ) {

		$this->wdwtwwy = $wdwtwwy;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wdwtwwy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wdwtwwy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wdwtwwy, plugin_dir_url( __FILE__ ) . 'css/wdwtwwy-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wdwtwwy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wdwtwwy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->wdwtwwy, plugin_dir_url( __FILE__ ) . 'js/wdwtwwy-admin.js', array( 'jquery' ), $this->version, false );

	}

}
