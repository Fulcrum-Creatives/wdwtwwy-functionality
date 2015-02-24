<?php
/**
 * WDWTWWY Functionality plugin
 * 
 * @link              http://fulcrumcreatives.com/
 * @since             0.0.1
 * @package           Wdwtwwy
 *
 * @wordpress-plugin
 * Plugin Name:       WDWTWWY Functionality
 * Plugin URI:        https://github.com/Fulcrum-Creatives/wdwtwwy/tree/developement
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress dashboard.
 * Version:           0.0.1
 * Author:            Fulcrum Creatives
 * Author URI:        http://fulcrumcreatives.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wdwtwwy
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/Fulcrum-Creatives/wdwtwwy-functionality
 * GitHub Branch:     development
 */

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}
if( !class_exists( 'WDWTWWY' ) ) {
	class WDWTWWY {
		
		/**
		 * Instance of the class
		 *
		 * @since 1.0.0
		 * @var Instance of WDWTWWY class
		 */
		private static $instance;

		/**
		 * Instance of the plugin
		 *
		 * @since 1.0.0
		 * @static
		 * @staticvar array $instance
		 * @return Instance
		 */
		public static function instance() {
			if ( !isset( self::$instance ) && ! ( self::$instance instanceof WDWTWWY ) ) {
				self::$instance = new WDWTWWY;
				self::$instance->define_constants();
				add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );
				self::$instance->includes();
				self::$instance->admin_init = new WDWTWWY_Admin_Init();
				self::$instance->init = new WDWTWWY_Init();
				//self::$instance->init = new WDWTWWY_Init();
			}
		return self::$instance;
		}

		/**
		 * Define the plugin constants
		 *
		 * @since  1.0.0
		 * @access private
		 * @return voide
		 */
		private function define_constants() {
			// Plugin Version
			if ( ! defined( 'WDWTWWY_VERSION' ) ) {
				define( 'WDWTWWY_VERSION', '0.0.4' );
			}
			// Prefix
			if ( ! defined( 'WDWTWWY_PREFIX' ) ) {
				define( 'WDWTWWY_PREFIX', 'plugin-name_' );
			}
			// Textdomain
			if ( ! defined( 'WDWTWWY_TEXTDOMAIN' ) ) {
				define( 'WDWTWWY_TEXTDOMAIN', 'plugin-name' );
			}
			// Plugin Options
			if ( ! defined( 'WDWTWWY_OPTIONS' ) ) {
				define( 'WDWTWWY_OPTIONS', 'plugin-name-options' );
			}
			// Plugin Directory
			if ( ! defined( 'WDWTWWY_PLUGIN_DIR' ) ) {
				define( 'WDWTWWY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}
			// Plugin URL
			if ( ! defined( 'WDWTWWY_PLUGIN_URL' ) ) {
				define( 'WDWTWWY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}
			// Plugin Root File
			if ( ! defined( 'WDWTWWY_PLUGIN_FILE' ) ) {
				define( 'WDWTWWY_PLUGIN_FILE', __FILE__ );
			}
		}

		/**
		 * Load the required files
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function includes() {
			$includes_path = plugin_dir_path( __FILE__ ) . 'includes/';
			require_once WDWTWWY_PLUGIN_DIR . 'admin/class-wdwtwwy-add-menu-items.php';
			require_once WDWTWWY_PLUGIN_DIR . 'admin/class-wdwtwwy-admin-init.php';
			require_once WDWTWWY_PLUGIN_DIR . 'includes/class-wdwtwwy-register-post-type.php';
			require_once WDWTWWY_PLUGIN_DIR . 'includes/class-wdwtwwy-init.php';
			//require_once WDWTWWY_PLUGIN_DIR . 'includes/class-plugin-name-init.php';
		}

		/**
		 * Load the plugin text domain for translation.
		 *
		 * @since  1.0.0
		 * @access public
		 */
		public function load_textdomain() {
			$wdwtwwy_lang_dir = dirname( plugin_basename( WDWTWWY_PLUGIN_FILE ) ) . '/languages/';
			$wdwtwwy_lang_dir = apply_filters( 'wdwtwwy_lang_dir', $wdwtwwy_lang_dir );

			$locale = apply_filters( 'plugin_locale',  get_locale(), WDWTWWY_TEXTDOMAIN );
			$mofile = sprintf( '%1$s-%2$s.mo', WDWTWWY_TEXTDOMAIN, $locale );

			$mofile_local  = $wdwtwwy_lang_dir . $mofile;
			$mofile_global = WP_LANG_DIR . '/edd/' . $mofile;

			if ( file_exists( $mofile_local ) ) {
				load_textdomain( WDWTWWY_TEXTDOMAIN, $mofile_local );
			} else {
				load_plugin_textdomain( WDWTWWY_TEXTDOMAIN, false, $wdwtwwy_lang_dir );
			}
		}

		/**
		 * Throw error on object clone
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', WDWTWWY_TEXTDOMAIN ), '1.6' );
		}

		/**
		 * Disable unserializing of the class
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', WDWTWWY_TEXTDOMAIN ), '1.6' );
		}

	}
}
/**
 * Return the instance 
 *
 * @since 1.0.0
 * @return object The Safety Links instance
 */
function WDWTWWY_Run() {
	return WDWTWWY::instance();
}
WDWTWWY_Run();