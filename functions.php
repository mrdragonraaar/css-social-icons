<?php
/**
 * functions.php
 *
 * (c)2012 mrdragonraaar.com
 */
define('SOCIAL_ICON_BASE_URL', '/global/icons/Social-icons/');
define('DEFAULT_SOCIAL_ICON_SIZE', 32);

include('lib/SocialIconCSS/SocialIconCSS.php');

/**
 * Display social media icon css.
 * @param $label social media label.
 * @param $name social media name.
 */
function social_icon_css($label, $name = '')
{
	global $social_icon_css;

	$social_icon_css->css($label, $name);
}

/**
 * Display social media icon list html.
 * @param $label social media label.
 * @param $name social media name.
 */
function social_icon_html($label, $name = '')
{
	global $social_icon_css;

	$social_icon_css->html($label, $name);
}

/**
 * Display html navigation bar for valid social media 
 * icon sizes.
 */
function social_icon_html_size_navbar()
{
	global $social_icon_css;

	$social_icon_css->html_size_navbar();
}

?>
