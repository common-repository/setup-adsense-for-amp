<?php
	$afa_below_the_content_ad_type = get_option('afa-below-the-content-ad-type');

	if (empty($afa_below_the_content_ad_type) || esc_attr( get_option('afa-below-the-content-ad-type')) == "google-adsense") {
		$below_the_content_ad_type = "google-adsense";
	} else {
		$below_the_content_ad_type = "custom-banner";
	}
?>
<div>
	<h2><i>"Below the post content"</i> ad settings:</h2>
	<p>The ad would appear at the end of the article. 
		<strong><a target="_blank" href="https://creativebrains.co.in/google-adsense-ads-below-the-post-content-in-amp/">Click here to view demo.</a></strong>
	</p>
</div>

<div>
	<div class="afa-form-label" scope"row">Ad type:</div>
	<div class="afa-form-input">
		<select id="below-the-content-ad-type" name="afa-below-the-content-ad-type">
			<option <?php if (esc_attr( get_option('afa-below-the-content-ad-type')) == "google-adsense") echo "selected"; ?> value="google-adsense">Google adsense</option>
		 	<option <?php if (esc_attr( get_option('afa-below-the-content-ad-type')) == "custom-banner") echo "selected"; ?> value="custom-banner">Custom banner</option>
		</select>
		<br/>
		<p>Select the type of ad from the dropdown.</p>
	</div>
</div>
<div class="below-the-content-google-adsense<?php if ($below_the_content_ad_type != "google-adsense") echo ' afa-hide'; ?>">	
	<div class="afa-form-label" scope"row">Publisher id:</div>
	<div class="afa-form-input">
		<input style="width:300px;" type="text" value="<?php echo esc_attr( get_option('afa-below-the-content-google-adsense-publisher-id') ); ?>" name="afa-below-the-content-google-adsense-publisher-id"/>
		<br/>
		<p>Your publisher id (data-ad-client), for example, <i>ca-pub-1234567891234567</i>.</p>
	</div>
</div>
<div class="below-the-content-google-adsense<?php if ($below_the_content_ad_type != "google-adsense") echo ' afa-hide'; ?>">	
	<div class="afa-form-label" scope"row">Ad unit id:</div>
	<div class="afa-form-input">
		<input style="width:300px;" type="text" value="<?php echo esc_attr( get_option('afa-below-the-content-google-adsense-unit-id') ); ?>" name="afa-below-the-content-google-adsense-unit-id"/>
		<br/>
		<p>Your ad unit’s id (data-ad-slot), for example, <i>1234567890</i>. You can also enter adsense link ad unit id.</p>
	</div>
</div>
<div class="below-the-content-google-adsense<?php if ($below_the_content_ad_type != "google-adsense") echo ' afa-hide'; ?>">	
	<div class="afa-form-label" scope"row">Ad size:</div>
	<div class="afa-form-input">
		<select name="afa-below-the-content-google-adsense-size">
			<option <?php if (esc_attr( get_option('afa-below-the-content-google-adsense-size')) == "responsive") echo "selected"; ?> value="responsive">Responsive</option>
		 	<option <?php if (esc_attr( get_option('afa-below-the-content-google-adsense-size')) == "fixed-height") echo "selected"; ?> value="fixed-height">Fixed height (100px)</option>
		</select>
		<br/>
		<p>Select the ad size for AMP.</p>
	</div>
</div>

<div class="below-the-content-custom-banner<?php if ($below_the_content_ad_type != "custom-banner") echo ' afa-hide'; ?>">
	<div class="afa-form-label" scope"row">Custom banner ad image url:</div>
	<div class="afa-form-input">
		<input value="<?php echo esc_attr( get_option('afa-below-the-content-custom-banner-url') ); ?>" style="width:375px;" type="text" name="afa-below-the-content-custom-banner-url"/>
		<br/>
		<p>Custom banner ad image url to show in AMP pages. for example, https://womencricket.org/wp-content/uploads/2017/07/women-cricket-site-logo.png</p>
	</div>
</div>

<div class="below-the-content-custom-banner<?php if ($below_the_content_ad_type != "custom-banner") echo ' afa-hide'; ?>">
	<div class="afa-form-label" scope"row">Custom banner ad link:</div>
	<div class="afa-form-input">
		<input value="<?php echo esc_attr( get_option('afa-below-the-content-custom-banner-link') ); ?>" style="width:375px;" type="text" name="afa-below-the-content-custom-banner-link"/>
		<br/>
		<p>Link for custom banner ad. eg. https://womencricket.org/</p>
	</div>
</div>

<div class="afa-clear">
	<hr/>
</div>