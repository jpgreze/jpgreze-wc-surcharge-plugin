<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    JPGreze_WC_Surcharge
 * @subpackage JPGreze_WC_Surcharge/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    JPGreze_WC_Surcharge
 * @subpackage JPGreze_WC_Surcharge/admin
 * @author     Your Name <email@example.com>
 */
class JPGreze_WC_Surcharge_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $JPGreze_WC_Surcharge    The ID of this plugin.
	 */
	private $JPGreze_WC_Surcharge;

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
	 * @param      string    $JPGreze_WC_Surcharge       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $JPGreze_WC_Surcharge, $version ) {

		$this->JPGreze_WC_Surcharge = $JPGreze_WC_Surcharge;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in JPGreze_WC_Surcharge_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The JPGreze_WC_Surcharge_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->JPGreze_WC_Surcharge, plugin_dir_url( __FILE__ ) . 'css/jpgreze-wc-surcharge-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in JPGreze_WC_Surcharge_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The JPGreze_WC_Surcharge_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->JPGreze_WC_Surcharge, plugin_dir_url( __FILE__ ) . 'js/jpgreze-wc-surcharge-admin.js', array( 'jquery' ), $this->version, false );

	}

}
