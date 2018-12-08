(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready(function () {

		//hide restricted area UM message for MusexPress
        function hideMessage() {
            $('#um_content_restriction__um_noaccess_action').val('1');
            $('#um_content_restriction__um_noaccess_action option[value="0"]').remove();
        }

		$('body').on('change','#um_content_restriction__um_custom_access_settings', hideMessage);
		$('body').on('change','#um_content_restriction__um_accessible', hideMessage);

    });

})( jQuery );
