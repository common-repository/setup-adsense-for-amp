<div class="afa-white-background">
	<form id="adsense-settings-form" method="post" action="options.php">
		<?php settings_fields( 'adsense_for_amp_group' ); ?>
		<?php do_settings_sections( 'adsense_for_amp_group' ); ?>
		<div class="form-table afa-form">
				<div>
					<h2>Content ads settings:</h2>
					<p>
						To test the changes, save the settings and view any blog post on a mobile device by adding <i>"/amp/"</i> at the end of the url,
						<br/>eg: <i>http://yourdomain.com/your-sample-article/amp/</i>
						<br/>
						<strong>Note:</strong> Don't see any changes? try to clear the site/browser cache and refresh.</strong>
					</p>
				</div>
							
				<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/adsense/above-the-content.php'); ?>

				<?php include( ADSENSE_FOR_AMP_PLUGIN_PATH . 'templates/adsense/below-the-content.php'); ?>

				<div>
					<p class="submit">
						<input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
					</p>
				</div>
		</div>	
	</form>	
</div>	
