<?php

/**
 * Add Custom Menu Items to the Admin
 *
 * @link       http://fulcrumcreatives.com/
 * @since      1.0.0
 *
 * @package    WDWTWWY
 * @subpackage WDWTWWY/admin
 */

/**
 * Add Custom Menu Items to the Admin
 *
 * @package    WDWTWWY
 * @subpackage WDWTWWY/admin
 * @author     Fulcrum Creatives <info@fulcrumcreatives.com>
 */
class WDWTWWY_Add_Menu_Items {

	public function __construct() { }

	public static function register_my_custom_menu_page(){
	    if( function_exists( 'acf_add_options_page') ) {
			acf_add_options_page( array( 'page_title'  => 'Theme Settings' ) );
		}
	}
}