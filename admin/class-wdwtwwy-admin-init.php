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
		WDWTWWY_Add_Menu_Items::register_my_custom_menu_page();	
	}

}