<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 29/11/2017
 * Time: 16:40
 */

class Mxp_Um_Page_Converter {

	private $page_parse;
	private $base_theme_root_path;
	private $user_theme_root_path;
	private $page_name;
	private $matches;


	public function __construct( $page_parse, $base_theme_root_path, $user_theme_root_path, $page_name, $matches ) {

		$this->page_parse           = $page_parse;
		$this->base_theme_root_path = $base_theme_root_path;
		$this->user_theme_root_path = $user_theme_root_path;

		$this->page_name = $page_name;

		$this->matches = $matches;

	}

	public function create_template() {

		foreach ($this->page_parse->find('.MusexPress-UM-Login-Button') as $login_btn){
			$login_btn->href = '<?php echo um_get_core_page("login"); ?>';
			$id = $login_btn->attr['id'];

			if(!empty($id)){
				foreach ($this->page_parse->find('#'.$id.', [data-orig-id="'.$id.'"]') as $login_btns){
					$login_btns->attr['style'] = '; <?php echo is_user_logged_in() ? "display:none;" : ""; ?>';
				}
			}
		}

		foreach ($this->page_parse->find('.MusexPress-UM-Logout-Button') as $logout_btn){
			$logout_btn->href = '<?php echo um_get_core_page("logout"); ?>';

			$id = $logout_btn->attr['id'];

			if(!empty($id)){
				foreach ($this->page_parse->find('#'.$id.', [data-orig-id="'.$id.'"]') as $logout_btns){
					$logout_btns->attr['style'] = '; <?php echo is_user_logged_in() ? "" : "display:none;"; ?>';
				}
			}
		}

//		if( count($this->page_parse->find('.MusexPress-Ultimate-Member-Members-Page')) > 0  ){
//
//			foreach ( $this->page_parse->find( '#page' ) as $elem ) {
//
/*				$elem->outertext = '<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?>"><div class="um-form">' . $elem->outertext . '<div></div>';*/
//
//			}
//
//			foreach ( $this->page_parse->find( '[data-orig-id="page"]' ) as $elem ) {
//
/*				$elem->outertext = '<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?>"><div class="um-form">' . $elem->outertext . '<div></div>';*/
//
//			}
//		}

	}

}