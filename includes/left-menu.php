<?php

// create custom plugin settings menu
add_action('admin_menu', 'adsense_for_amp_menu');

function adsense_for_amp_menu() {
	//create new top-level menu
	add_menu_page('Adsense for AMP Settings', 'Adsense for AMP', 'administrator', ADSENSE_FOR_AMP_PLUGIN_PATH, 'adsense_for_amp_options_page' , 'dashicons-heart' );

	//call register settings function
	add_action( 'admin_init', 'register_adsense_for_amp_settings' );
}

?>