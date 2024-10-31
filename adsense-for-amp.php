<?php

/*
Plugin Name: Adsense for AMP
Plugin URI: https://creativebrains.co.in
Description: Setup Google Adsense on AMP pages
Version: 3.0.2
Author: Creative Brains
*/


// Exit if someone tries to access plugin file directly.
defined( 'ABSPATH' ) or die ( 'No script kiddies please!' );

define("ADSENSE_FOR_AMP_PLUGIN_PATH", plugin_dir_path( __FILE__ ));

define("ADSENSE_FOR_AMP_PLUGIN_URL", plugins_url('',__FILE__));

include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'includes/left-menu.php');

include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'includes/register-settings.php');

function afa_admin_custom_style_scripts() {
    wp_register_style('afa_admin_custom_style_scripts', plugins_url('css/afa-style.css?7287',__FILE__ ));
    wp_enqueue_style('afa_admin_custom_style_scripts');
    wp_register_script('afa_admin_custom_style_scripts', plugins_url('js/afa-script.js',__FILE__ ));
    wp_enqueue_script('afa_admin_custom_style_scripts');
}

add_action( 'admin_init','afa_admin_custom_style_scripts', 15);


function plugin_add_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=setup-adsense-for-amp">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_" . $plugin, 'plugin_add_settings_link' );


function adsense_for_amp_options_page() { 
	?>
	<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/settings-header.php'); ?>
	<div>
		<div class="afa-main-options">
			<?php

				$adsense_settings_page_active = isset($_GET['adsense-settings']) ? true : false;
				$go_pro_settings_page_active = isset($_GET['go-pro-settings']) ? true : false;

				if ($adsense_settings_page_active == false 
					&& $go_pro_settings_page_active == false) {
					$adsense_settings_page_active = true;
				}

			?>

			<div class="afa-options-menu">
				<table class="wp-list-table widefat">
					<thead>
						<tr>
							<th class="adsense-for-amp-menu<?php echo $adsense_settings_page_active ? ' afa-menu-active' : ''; ?>" id="adsense-settings-link">Content Ads</th>
						</tr>
						<tr>	
							<th class="adsense-for-amp-menu<?php echo $go_pro_settings_page_active ? ' afa-menu-active' : ''; ?>" id="go-pro-settings-link">Go Pro</th>
						</tr>
					</thead>
				</table>
			</div>
			
			<div class="afa-options-content">
			
				<div class="adsense-for-amp-table <?php echo $adsense_settings_page_active ? 'afa-show' : 'afa-hide'; ?>" id="adsense-settings">
					<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/settings-adsense.php'); ?>
				</div>

				<div class="adsense-for-amp-table <?php echo $go_pro_settings_page_active ? 'afa-show' : 'afa-hide'; ?>" id="go-pro-settings">
					<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/settings-go-pro.php'); ?>
				</div>
			</div>
		</div>

		<div class="afa-right-sidebar">
			<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/pro-features.php'); ?>
        	<br>
			<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/view-demo.php'); ?>
			<br/>
			<a href="https://creativebrains.co.in/whats-new/" target="_blank"><img src="https://creativebrains.co.in/whats-new/whats-new.png?342423"/></a>
        	<br/>
        	<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/how-to.php'); ?>
        	<br/>
        	<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/get-in-touch.php'); ?>
        </div>	
	</div>

	<?php
}

/*******************************************************************************************/
function adsense_for_amp_load_amp_script( $data ) {

    if (!isset($data['amp_component_scripts']) ) {
   		$data['amp_component_scripts'] = array();
  	}

  	$data['amp_component_scripts']['amp-ad'] = 'https://cdn.ampproject.org/v0/amp-ad-0.1.js';
  	
    return $data;
}

add_filter( 'amp_post_template_data', 'adsense_for_amp_load_amp_script');
/*******************************************************************************************/


/*******************************************************************************************/
add_action( 'amp_post_template_css', 'adsense_for_amp_additional_css_styles', 15);

function adsense_for_amp_additional_css_styles($amp_template) {
	?>
	.afa-recent-post-img, .afa-related-post-img {
		min-width:330px;
	}
	.afa-recent-post-title, .afa-related-post-title {
		margin-bottom: 28px;
	}
	.afa-content-width {
		max-width: 841px;width: 100%;margin: auto;
	}
	.afa-center {
		text-align:center;
	}
	.afa-li {
		clear:both;list-style:none;
	}
	<?php
}
/*******************************************************************************************/

include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'includes/adsense.php');

?>