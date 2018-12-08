<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.musegain.com
 * @since      1.0.0
 *
 * @package    Musexpress_Ultimate_Member
 * @subpackage Musexpress_Ultimate_Member/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Musexpress_Ultimate_Member
 * @subpackage Musexpress_Ultimate_Member/includes
 * @author     MuseGain <info@musegain.com>
 */
class Musexpress_Ultimate_Member_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		// disable default UM activation settings
		update_option('um_is_installed', 1);

		// create logout page if not exists
		$options = get_option( 'um_options' );
		$options = empty( $options ) ? array() : $options;
		$slug = 'logout';
		$page_exists = self::find_post_id( 'page', '_um_core', $slug );

		if ( ! $page_exists ) {

			$user_page = array(
				'post_title'		=> 'Logout',
				'post_content'		=> '',
				'post_name'			=> $slug,
				'post_type' 	  	=> 'post',
				'post_status'		=> 'publish',
				'post_author'   	=> get_current_user_id(),
				'comment_status'    => 'closed'
			);

			$post_id = wp_insert_post( $user_page );
			wp_update_post( array( 'ID' => $post_id, 'post_type' => 'page' ) );

			update_post_meta( $post_id, '_um_core', $slug );

			$key = apply_filters( 'um_core_page_id_filter', 'core_' . $slug );
			$options[$key] = $post_id;

			update_option( 'um_options', $options );
		}

	}

	public static function find_post_id($post_type, $key, $value){
		$posts = get_posts( array( 'post_type' => $post_type, 'meta_key' => $key, 'meta_value' => $value ) );
		if ( isset($posts[0]) && !empty($posts) )
			return $posts[0]->ID;
		return false;
	}

}
