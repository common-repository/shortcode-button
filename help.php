<?php
function shortcode_button_register_options_page() {
	add_management_page(__('Shortcode Button Help Page', SHORTCODE_BUTTON_TEXT_DOMAIN), __('Shortcode Button', SHORTCODE_BUTTON_TEXT_DOMAIN), 'manage_options', SHORTCODE_BUTTON_TEXT_DOMAIN.'-help', 'shortcode_button_help_page');
}
add_action('admin_menu', 'shortcode_button_register_options_page');

function shortcode_button_help_page() {
?>
<style>
.padding-bottom{
	padding-bottom: 20px;
}
</style>
<div class="wrap">
	<h2><?php _e("Shortcode Button Help Page", SHORTCODE_BUTTON_TEXT_DOMAIN); ?></h2>
	<div class="help-page">
		<?php settings_fields('shortcode_button_options'); ?>
		<h3><?php _e("Shortcode Usage", SHORTCODE_BUTTON_TEXT_DOMAIN); ?></h3>
		<p><?php _e("You may add following short code to your post.", SHORTCODE_BUTTON_TEXT_DOMAIN); ?></p>
		<div style="text-align: center;">
			<hr />
			<p>[button mode="down" href="<?php _e("Link", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>"]<?php _e("Download Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>[/button]</p>
			<span class="but-down"><a href="<?php _e("Link", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>" target="_blank"><span><?php _e("Download Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?></span></a></span>
			<hr />
			<p>[button mode="heart" href="<?php _e("Link", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>"]<?php _e("Red Heart Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>[/button]</p>
			<span class="but-heart"><a href="<?php _e("Link", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>" target="_blank"><span><?php _e("Red Heart Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?></span></a></span>
			<hr />
			<p>[button mode="link" href="<?php _e("Link", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>"]<?php _e("Link Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>[/button]</p>
			<span class="but-link"><a href="<?php _e("Link", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>" target="_blank"><span><?php _e("Link Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?></span></a></span>
			<hr />
			<p>[button mode="doc" href="<?php _e("Link", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>"]<?php _e("Document Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?>[/button]</p>
			<span class="but-document"><a href="文檔地址" target="_blank"><span><?php _e("Document Button", SHORTCODE_BUTTON_TEXT_DOMAIN); ?></span></a></span>
			<hr />
		</div>
	</div>
</div>
<?php
}
?>