<?php

/*******************************************************************************************/
function adsense_for_amp_add_content_filter() {
    add_filter( 'the_content', 'adsense_for_amp_above_the_content', 15);
    add_filter( 'the_content', 'adsense_for_amp_below_the_content', 30);
}
add_action( 'pre_amp_render_post', 'adsense_for_amp_add_content_filter' );
/*******************************************************************************************/


/*******************************************************************************************/
function adsense_for_amp_above_the_content($content) {

	$afa_above_the_content_ad_type_option = get_option('afa-above-the-content-ad-type');

	if (empty($afa_above_the_content_ad_type_option)) {
		return $content;
	}

	$above_the_content_ad_type = esc_attr( get_option('afa-above-the-content-ad-type')) == "google-adsense" ? "google-adsense" : "custom-banner";

	$above_the_content_google_adsense_publisher_id = esc_attr( get_option('afa-above-the-content-google-adsense-publisher-id'));
	$above_the_content_google_adsense_unit_id = esc_attr( get_option('afa-above-the-content-google-adsense-unit-id'));
	$above_the_content_google_adsense_size = esc_attr( get_option('afa-above-the-content-google-adsense-size'));

	$above_the_content_custom_banner_url = esc_attr( get_option('afa-above-the-content-custom-banner-url'));
	$above_the_content_custom_banner_link = esc_attr( get_option('afa-above-the-content-custom-banner-link'));

	if ($above_the_content_ad_type == "google-adsense" 
		&& !empty($above_the_content_google_adsense_publisher_id) 
		    && !empty($above_the_content_google_adsense_unit_id)) {

		$google_ad_code .= '<amp-ad';
		if ($above_the_content_google_adsense_size == "fixed-height") {
			$google_ad_code .= ' layout="fixed-height" height="100"';
		} else {
			$google_ad_code .= ' layout="responsive" width="300" height="250"';
		}
		$google_ad_code .= ' type="adsense" data-ad-client="' . $above_the_content_google_adsense_publisher_id . '" data-ad-slot="' . $above_the_content_google_adsense_unit_id . '"></amp-ad>';

		$content = $google_ad_code . $content;
	} else if (!empty($above_the_content_custom_banner_url) && !empty($above_the_content_custom_banner_link)) {
		$custom_banner_ad = '<a target="_blank" href="' . $above_the_content_custom_banner_link . '"><img style="max-width:100%;" src="' . $above_the_content_custom_banner_url . '"/></a><br/>';
		$content = $custom_banner_ad . $content;
	}

	return $content;
}
/*******************************************************************************************/


/*******************************************************************************************/
function adsense_for_amp_below_the_content($content) {


	$afa_below_the_content_ad_type_option = get_option('afa-below-the-content-ad-type');
	if (empty($afa_below_the_content_ad_type_option)) {
		return $content;
	}

	$below_the_content_ad_type = esc_attr( get_option('afa-below-the-content-ad-type')) == "google-adsense" ? "google-adsense" : "custom-banner";

	$below_the_content_google_adsense_publisher_id = esc_attr( get_option('afa-below-the-content-google-adsense-publisher-id'));
	$below_the_content_google_adsense_unit_id = esc_attr( get_option('afa-below-the-content-google-adsense-unit-id'));
	$below_the_content_google_adsense_size = esc_attr( get_option('afa-below-the-content-google-adsense-size'));

	$below_the_content_custom_banner_url = esc_attr( get_option('afa-below-the-content-custom-banner-url'));
	$below_the_content_custom_banner_link = esc_attr( get_option('afa-below-the-content-custom-banner-link'));

	if ($below_the_content_ad_type == "google-adsense" 
		&& !empty($below_the_content_google_adsense_publisher_id) 
		    && !empty($below_the_content_google_adsense_unit_id)) {

		$google_ad_code .= '<amp-ad';
		if ($below_the_content_google_adsense_size == "fixed-height") {
			$google_ad_code .= ' layout="fixed-height" height="100"';
		} else {
			$google_ad_code .= ' layout="responsive" width="300" height="250"';
		}
		$google_ad_code .= ' type="adsense" data-ad-client="' . $below_the_content_google_adsense_publisher_id . '" data-ad-slot="' . $below_the_content_google_adsense_unit_id . '"></amp-ad>';

		$content = $content. $google_ad_code;
	} else if (!empty($below_the_content_custom_banner_url) && !empty($below_the_content_custom_banner_link)) {
		$custom_banner_ad = '<a target="_blank" href="' . $below_the_content_custom_banner_link . '"><img style="max-width:100%;" src="' . $below_the_content_custom_banner_url . '"/></a><br/>';
		$content = $content. $custom_banner_ad;
	}

	return $content;
}
/*******************************************************************************************/

function adsense_for_amp_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
    $closing_p = '</p>';
    $paragraphs = explode( $closing_p, $content );
    foreach ($paragraphs as $index => $paragraph) {
        if ( trim( $paragraph ) ) {
            $paragraphs[$index] .= $closing_p;
        }
        if ( $paragraph_id == $index + 1 ) {
            $paragraphs[$index] .= $insertion;
        }
    }
    return implode( '', $paragraphs );
}
?>