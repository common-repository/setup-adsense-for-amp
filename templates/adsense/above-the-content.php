<?php
	$afa_above_the_content_ad_type = get_option('afa-above-the-content-ad-type');

	if (empty($afa_above_the_content_ad_type) || esc_attr( get_option('afa-above-the-content-ad-type')) == "google-adsense") {
		$above_the_content_ad_type = "google-adsense";
	} else {
		$above_the_content_ad_type = "custom-banner";
	}
?>
<div>
	<h2><i>"Above the post content"</i> ad settings:</h2>
	<p>The ad would appear above the content of the article below the title or featured image. 
		<strong><a target="_blank" href="https://creativebrains.co.in/google-adsense-ads-above-the-post-content-in-amp/">Click here to view demo.</a></strong>
	</p>
</div>

<div>
	<div class="afa-form-label" scope"row">Ad type:</div>
	<div class="afa-form-input">
		<select id="above-the-content-ad-type" name="afa-above-the-content-ad-type">
			<option <?php if (esc_attr( get_option('afa-above-the-content-ad-type')) == "google-adsense") echo "selected"; ?> value="google-adsense">Google adsense</option>
		 	<option <?php if (esc_attr( get_option('afa-above-the-content-ad-type')) == "custom-banner") echo "selected"; ?> value="custom-banner">Custom banner</option>
		</select>
		<br/>
		<p>Select the type of ad from the dropdown.</p>
	</div>
</div>
<div class="above-the-content-google-adsense<?php if ($above_the_content_ad_type != "google-adsense") echo ' afa-hide'; ?>">
	<div class="afa-form-label" scope"row">Publisher id:</div>
	<div class="afa-form-input">
		<input type="text" style="width:300px;" value="<?php echo esc_attr( get_option('afa-above-the-content-google-adsense-publisher-id') ); ?>" name="afa-above-the-content-google-adsense-publisher-id"/>
		<br/>
		<p>Your publisher id (data-ad-client), for example, <i>ca-pub-1234567891234567</i>.</p>
	</div>
</div>
<div class="above-the-content-google-adsense<?php if ($above_the_content_ad_type != "google-adsense") echo ' afa-hide'; ?>">
	<div class="afa-form-label" scope"row">Ad unit id:</div>
	<div class="afa-form-input">
		<input type="text" style="width:300px;" value="<?php echo esc_attr( get_option('afa-above-the-content-google-adsense-unit-id') ); ?>" name="afa-above-the-content-google-adsense-unit-id"/>
		<br/>
		<p>Your ad unit’s id (data-ad-slot), for example, <i>1234567890</i>. You can also enter adsense link ad unit id.</p>
	</div>
</div>
<div class="above-the-content-google-adsense<?php if ($above_the_content_ad_type != "google-adsense") echo ' afa-hide'; ?>">
	<div class="afa-form-label" scope"row">Ad size:</div>
	<div class="afa-form-input">
		<select name="afa-above-the-content-google-adsense-size">
			<option <?php if (esc_attr( get_option('afa-above-the-content-google-adsense-size')) == "responsive") echo "selected"; ?> value="responsive">Responsive</option>
		 	<option <?php if (esc_attr( get_option('afa-above-the-content-google-adsense-size')) == "fixed-height") echo "selected"; ?> value="fixed-height">Fixed height (100px)</option>
		</select>
		<br/>
		<p>Select the ad size for AMP.</p>
	</div>
</div>


<div class="above-the-content-custom-banner<?php if ($above_the_content_ad_type != "custom-banner") echo ' afa-hide'; ?>">
	<div class="afa-form-label" scope"row">Custom banner ad image url:</div>
	<div class="afa-form-input">
		<input value="<?php echo esc_attr( get_option('afa-above-the-content-custom-banner-url') ); ?>" style="width:375px;" type="text" name="afa-above-the-content-custom-banner-url"/>
		<br/>
		<p>Custom banner ad image url to show in AMP pages. for example, https://womencricket.org/wp-content/uploads/2017/07/women-cricket-site-logo.png</p>
	</div>
</div>

<div class="above-the-content-custom-banner<?php if ($above_the_content_ad_type != "custom-banner") echo ' afa-hide'; ?>">
	<div class="afa-form-label" scope"row">Custom banner ad link:</div>
	<div class="afa-form-input">
		<input value="<?php echo esc_attr( get_option('afa-above-the-content-custom-banner-link') ); ?>" style="width:375px;" type="text" name="afa-above-the-content-custom-banner-link"/>
		<br/>
		<p>Link for custom banner ad. eg. https://womencricket.org/</p>
	</div>
</div>

<div class="afa-clear">
	<hr/>
</div>