<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.musegain.com
 * @since      1.0.0
 *
 * @package    Musexpress_Ultimate_Member
 * @subpackage Musexpress_Ultimate_Member/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Musexpress_Ultimate_Member
 * @subpackage Musexpress_Ultimate_Member/public
 * @author     MuseGain <info@musegain.com>
 */
class Musexpress_Ultimate_Member_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Musexpress_Ultimate_Member_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Musexpress_Ultimate_Member_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/musexpress-ultimate-member-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Musexpress_Ultimate_Member_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Musexpress_Ultimate_Member_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/musexpress-ultimate-member-public.js', array( 'jquery' ), $this->version, false );

	}

	public function muse_preview_rest() {
		register_rest_route( 'musexpress-um-rest/v1', '/muse_preview', array(
			'methods'  => 'GET',
			'callback' => array($this, 'muse_preview'),
		) );
	}

	public function muse_preview(WP_REST_Request $request){
		$result = do_shortcode($request->get_param( 'page_slug' ));
		$response = new WP_REST_Response( $result, 200 );
		return $response;
	}

	public function um_google_fonts(){
		add_shortcode('mxp_um_include_google_fonts', function($atts) {
			extract( shortcode_atts( array(
				'fonts' => 'null',
			), $atts ) );
			if ( $atts['fonts'] != 'null' ) {
				$fonts = trim( $atts['fonts'] );
				$fonts = str_replace( ' ', '+', $fonts );
				if ( strlen( $fonts ) > 0 ) {
					if ( $fonts[ strlen( $fonts ) - 1 ] == "|" ) {
						$fonts = substr( $fonts, 0, strlen( $fonts ) - 1 );
					}
					echo '<link href="https://fonts.googleapis.com/css?family=' . $fonts . '" rel="stylesheet">';
				}

			}
		});
	}
}
