<?php
/**
 * 
 *
 * @package     Package_Name
 * @subpackage  Package_Name/includes
 * @copyright   Copyright (c) 2014, Jason Witt
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 * @author      Jason Witt <contact@jawittdesigns.com>
 */

class WDWTWWY_Admin_Init {

	/**
	 * Initialize the class
	 */
	public function __construct() {
		$this->add_menu_items();
		$this->add_styles();
	}

	public function add_menu_items() {
		WDWTWWY_Add_Menu_Items::register_my_custom_menu_page();	
	}

	public function add_styles() {
		wp_enqueue_style( WDWTWWY_TEXTDOMAIN, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), $this->version, 'all' );
	}
}