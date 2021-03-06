<?php
/**
 * Created by PhpStorm.
 * User: Pietro Falco
 * Date: 20/12/2017
 * Time: 15:44
 */

namespace MusexPress\Converter\Utils;

/**
 * Class Muse_Converter: converter utilities for Muse
 * @package MusexPress\Converter\Utils
 */
class Muse_Converter {

	/**
	 * Removes Scripts and tags used from Muse
	 * to redirect desktop pages to tablet and phone
	 *
	 * @param $page_parse
	 * @param $page_name
	 *
	 * @since 3.2.0
	 */
	static function convert_redirect_elements( $page_parse, $page_name ) {
		foreach ( $page_parse->find( 'link[rel="canonical"]' ) as $element ) {
			$element->href = Php_Converter::get_permalink( $page_name );
		}
		foreach ( $page_parse->find( 'link[rel="alternate"]' ) as $element ) {

			if ( strpos( $element->href, 'phone/' ) !== false ) {
				$element->href = Php_Converter::get_permalink( "phone-" . $page_name );
			} else if ( strpos( $element->href, 'tablet/' ) !== false ) {
				$element->href = Php_Converter::get_permalink( "tablet-" . $page_name );
			}
		}

		foreach ( $page_parse->find( 'head', 0 )->find( 'script' ) as $element ) {
			$element->innertext = str_replace( 'phone/' . $page_name . '.html', Php_Converter::get_permalink( "phone-" . $page_name ), $element->innertext );
			$element->innertext = str_replace( '../' . Php_Converter::get_permalink( "phone-" . $page_name ), Php_Converter::get_permalink( "phone-" . $page_name ), $element->innertext );
			$element->innertext = str_replace( 'tablet/' . $page_name . '.html', Php_Converter::get_permalink( "tablet-" . $page_name ), $element->innertext );
		}
	}

	/**
	 * Removes Seo generated by Muse
	 *
	 * @param $page_parse
	 *
	 * @since 3.2.0
	 */
	static function remove_generated_seo( $page_parse ) {

		foreach ( $page_parse->find( 'title' ) as $elem ) {
			$elem->outertext = '';
		}
		foreach ( $page_parse->find( "meta[name='description']" ) as $elem ) {
			$elem->outertext = '';
		}
		foreach ( $page_parse->find( "meta[name='keywords']" ) as $elem ) {
			$elem->outertext = '';
		}
	}

	/**
	 * Adds Correct path to Muse Init script (require you can find in Head)
	 *
	 * @param $script
	 * @param $base_url
	 *
	 * @since 3.2.0
	 */
	static function convert_init_script( $script, $base_url ) {
		$script->innertext = str_replace( 'var muse_init=function(){require.config({baseUrl:""});', 'var muse_init=function(){require.config({baseUrl:"' . $base_url . '/"});', $script->innertext );
		$script->innertext = str_replace( 'var muse_init=function(){require.config({baseUrl:"../"});', 'var muse_init=function(){require.config({baseUrl:"' . $base_url . '/"});', $script->innertext );

	}

	/**
	 * Converts Featured Image for pages
	 *
	 * @param $page_parse
	 *
	 * @since 3.2.0
	 */
	static function convert_featured_image( $page_parse ) {

		foreach ( $page_parse->find( '.MusexPress-Featured-Image' ) as $image ) {

			self::remove_class( $image, 'MusexPress-Featured-Image' );

			$image->attr['style'] = Php_Converter::background_image();

		}

	}

	/**
	 * Remove a class from an element
	 *
	 * @param $elem
	 * @param $class_to_remove
	 *
	 * @since 3.2.0
	 */
	static function remove_class( $elem, $class_to_remove ) {
		$elem->attr['class'] = str_replace( $class_to_remove, '', $elem->attr['class'] );
	}

	/**
	 * Removes jQuery script generated by muse
	 *
	 * @param $php_page
	 *
	 * @since 3.2.2 fixed on phone/tablet
	 * @return mixed
	 * @since 3.2.0
	 */
	static function remove_muse_jquery( $php_page ) {

		$crc = Conversion_Tools::get_string_between( 'document.write(\'\\x3Cscript src="scripts/jquery-1.8.3.min.js', '"', $php_page );

		$php_page = str_replace( "if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');", "", $php_page );
		$php_page = str_replace( "if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');", "", $php_page );
		$php_page = str_replace( "if (document.location.protocol != 'https:') document.write('\\x3Cscript src=\"http://musecdn1.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js\" type=\"text/javascript\">\\x3C/script>');", "", $php_page );

		$php_page = str_replace( "window.jQuery || document.write('\\x3Cscript src=\"scripts/jquery-1.8.3.min.js" . $crc . "\" type=\"text/javascript\">\\x3C/script>');", "", $php_page );
		$crc = Conversion_Tools::get_string_between( 'document.write(\'\\x3Cscript src="../scripts/jquery-1.8.3.min.js', '"', $php_page );
		return str_replace( "window.jQuery || document.write('\\x3Cscript src=\"../scripts/jquery-1.8.3.min.js" . $crc . "\" type=\"text/javascript\">\\x3C/script>');", "", $php_page );

	}

	/**
	 * Moves RequireJS script at bottom of the page
	 *
	 * @param $php_page
	 *
	 * @return mixed
	 * @since 3.2.0
	 */
	static function move_require_js( $php_page ) {
		$require_js_script = Conversion_Tools::get_string_between( '<!-- RequireJS script -->', '<!--HTML Widget code-->', $php_page );
		$php_page          = str_replace( $require_js_script, '', $php_page );

		return str_replace( '</body>', $require_js_script . '</body>', $php_page );
	}

	/**
	 * Suppresses missing file error
	 *
	 * @param $php_page
	 *
	 * @return mixed
	 * @since 3.2.0
	 */
	static function suppress_missing_file_error( $php_page ) {
		return str_replace( 'var suppressMissingFileError = false', 'var suppressMissingFileError = true', $php_page );
	}


	/**
	 * Returns the elem in other breakpoints
	 *
	 * @param $page_parse
	 * @param $elem
	 *
	 * @return mixed
	 * @since 3.2.0
	 */
	static function get_elem_in_other_breakpoints( $page_parse, $elem ) {

		if(isset($elem->attr['id']))
		$orig_id = $elem->attr['id'];
		if ( isset($orig_id) ) {
			return $page_parse->find( '[data-orig-id="' . $orig_id . '"]' );
		}

		return [];

	}

	/**
	 * Replaces a class inside an Elem
	 * @param $elem
	 * @param $class_to_replace
	 * @param $new_class
	 *
	 * @since 3.2.0
	 */
	static function replace_class( $elem, $class_to_replace, $new_class ) {
		$elem->attr['class'] = str_replace( $class_to_replace, $new_class, $elem->attr['class'] );
	}

	/**
	 * Adds an inline style to the elem
	 * @param $elem
	 * @param $style
	 *
	 * @since 3.2.0
	 */
	static function add_style( $elem, $style ){
		$elem->attr['style'] = $elem->attr['style'] . " " . $style;
	}

	/**
	 * Changes href to get permalink
	 * @param $elem
	 * @since 3.2.0
	 */
	public static function change_href_to_get_permalink( $elem ) {
		$elem->href = "<?php echo get_the_permalink(); ?>";
	}

}