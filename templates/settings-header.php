<div class="wrap">

	<h1>
		<span class="dashicons dashicons-admin-settings" style="font-size: 35px;color: #4665A7;padding-right: 20px;"></span>
		Adsense for AMP Settings
	</h1>

</div>

<?php if( isset($_GET['settings-updated']) && isset($_GET['page']) && $_GET['page'] == "setup-adsense-for-amp") { ?>
<div class="notice notice-success is-dismissible"> 
	<p><strong><?php _e('Settings saved.') ?></strong></p>
	<button type="button" class="notice-dismiss">
		<span class="screen-reader-text">Dismiss this notice.</span>
	</button>
</div>
<?php } ?>

<?php 
	if (function_exists('amp_init')) {

	} else { ?>

	<div class="notice notice-error is-dismissible"> 
		<p><strong><?php _e('This plugin depends on <a target="_blank" href="https://wordpress.org/plugins/amp/">AMP plugin by Automattic</a>. Please install it to get started with <i>Adsense for AMP</i>.') ?></strong></p>
		<button type="button" class="notice-dismiss">
			<span class="screen-reader-text">Dismiss this notice.</span>
		</button>
	</div>

	<?php }
?>