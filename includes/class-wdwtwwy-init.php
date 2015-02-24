<?php
/**
 * 
 *
 * @package     WDWTWWY
 * @subpackage  WDWTWWY/includes
 * @copyright   Copyright (c) 2014, Jason Witt
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 * @author      Jason Witt <contact@jawittdesigns.com>
 */

class WDWTWWY_Init {

	/**
	 * Initialize the class
	 */
	public function __construct() {
		$this->register_post_types();
	}

	public function register_post_types() {
		$wdwtwwy_register_post_type = new WDWTWWY_Register_Post_Type('care');
	}


}