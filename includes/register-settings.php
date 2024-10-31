<?php

function register_adsense_for_amp_settings() {

	//register our settings

	register_setting( 'adsense_for_amp_group', 'afa-above-the-content-ad-type' );
	register_setting( 'adsense_for_amp_group', 'afa-above-the-content-google-adsense-publisher-id' );
	register_setting( 'adsense_for_amp_group', 'afa-above-the-content-google-adsense-unit-id' );
	register_setting( 'adsense_for_amp_group', 'afa-above-the-content-google-adsense-size' );

	register_setting( 'adsense_for_amp_group', 'afa-above-the-content-custom-banner-url' );
	register_setting( 'adsense_for_amp_group', 'afa-above-the-content-custom-banner-link' );


	register_setting( 'adsense_for_amp_group', 'afa-below-the-content-ad-type' );
	register_setting( 'adsense_for_amp_group', 'afa-below-the-content-google-adsense-publisher-id' );
	register_setting( 'adsense_for_amp_group', 'afa-below-the-content-google-adsense-unit-id' );
	register_setting( 'adsense_for_amp_group', 'afa-below-the-content-google-adsense-size' );

	register_setting( 'adsense_for_amp_group', 'afa-below-the-content-custom-banner-url' );
	register_setting( 'adsense_for_amp_group', 'afa-below-the-content-custom-banner-link' );

}
?>