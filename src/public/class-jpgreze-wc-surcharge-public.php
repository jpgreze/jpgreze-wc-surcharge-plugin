<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/jpgreze/jpgreze-wc-surcharge-plugin
 * @since      1.0.0
 *
 * @package    JPGreze_WC_Surcharge
 * @subpackage JPGreze_WC_Surcharge/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    JPGreze_WC_Surcharge
 * @subpackage JPGreze_WC_Surcharge/public
 * @author     Your Name <email@example.com>
 */
class JPGreze_WC_Surcharge_Public {

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
	 * @param      string    $JPGreze_WC_Surcharge       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $JPGreze_WC_Surcharge, $version ) {

		$this->JPGreze_WC_Surcharge = $JPGreze_WC_Surcharge;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->JPGreze_WC_Surcharge, plugin_dir_url( __FILE__ ) . 'css/jpgreze-wc-surcharge-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_script( $this->JPGreze_WC_Surcharge, plugin_dir_url( __FILE__ ) . 'js/jpgreze-wc-surcharge-public.js', array( 'jquery' ), $this->version, false );

	}

	public function checkout_surcharge() {
		//if ( is_admin() && ! defined( 'DOING_AJAX' ) )
		//	return;
		//
		//$percentage = 0.01;
		//$surcharge = ( WC()->cart->cart_contents_total + WC()->cart->shipping_total ) * $percentage;	
		$surcharge = 0.50;
		if( WC()->cart->subtotal < 10) {
			WC()->cart->add_fee( 'Surcharge', $surcharge, $taxable = false, '' );
		}
	}
}
