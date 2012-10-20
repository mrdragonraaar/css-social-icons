<?php
/**
 * SocialIconCSS.php
 *
 * (c)2012 mrdragonraaar.com
 */
include('IconCSS.php');

if (!defined('SOCIAL_ICON_BASE_CLASS')) {
define('SOCIAL_ICON_BASE_CLASS', 'social');       // base css class
}
if (!defined('SOCIAL_ICON_SIZE_CLASS_PREFIX')) {
define('SOCIAL_ICON_SIZE_CLASS_PREFIX', 's');     // prefix for size css class
}
if (!defined('SOCIAL_ICON_LABEL_CLASS_PREFIX')) {
define('SOCIAL_ICON_LABEL_CLASS_PREFIX', '');     // prefix for label css class
}
if (!defined('SOCIAL_ICON_NAME_CLASS_PREFIX')) {
define('SOCIAL_ICON_NAME_CLASS_PREFIX', '');      // prefix for name css class
}
if (!defined('DEFAULT_SOCIAL_ICON_SIZE')) {
define('DEFAULT_SOCIAL_ICON_SIZE', 32);           // default size of icon
}
if (!defined('SOCIAL_ICON_BASE_URL')) {
define('SOCIAL_ICON_BASE_URL', 'Social-icons/');  // base url to icons
}
if (!defined('SOCIAL_ICON_FILE_EXT')) {
define('SOCIAL_ICON_FILE_EXT', 'png');            // file extension of icon
}


/**
 * Create CSS for IconDrawer Social-icons.
 *
 * @author Adrian D. Elgar
 */
class SocialIconCSS extends IconCSS
{
	static private $_valid_icon_sizes = array(16, 32, 48, 128);

	/**
         * Get base css class for social icon.
         * @return base css class.
         */
	static public function base_class()
	{
		return SOCIAL_ICON_BASE_CLASS;
	}

	/**
         * Get prefix for label css class.
         * @return css label class prefix.
         */
	static public function label_class_prefix()
	{
		return SOCIAL_ICON_LABEL_CLASS_PREFIX;
	}

	/**
         * Get prefix for name css class.
         * @return css name class prefix.
         */
	static public function name_class_prefix()
	{
		return SOCIAL_ICON_NAME_CLASS_PREFIX;
	}

	/**
         * Get prefix for size css class.
         * @return css size class prefix.
         */
	static public function size_class_prefix()
	{
		return SOCIAL_ICON_SIZE_CLASS_PREFIX;
	}

	/**
         * Get array of valid values for social icon size.
         * @return array of valid icon sizes.
         */
	static public function valid_icon_sizes()
	{
		return self::$_valid_icon_sizes;
	}

	/**
         * Get default social icon size value.
         * @return default icon size.
         */
	static public function default_icon_size()
	{
		return DEFAULT_SOCIAL_ICON_SIZE;
	}

	/**
         * Get base url for social icons.
         * @return base icon url.
         */
	static public function base_icon_url()
	{
		return SOCIAL_ICON_BASE_URL;
	}

	/**
         * Get extension for social icon file.
         * @return icon file extension.
         */
	static public function icon_file_ext()
	{
		return SOCIAL_ICON_FILE_EXT;
	}

	/**
         * Get file basename for social icon.
         * @param $label icon label.
         * @param $name icon name.
         * @return icon file basename.
         */
	public function icon_file_basename($label, $name = '')
	{
		return parent::icon_file_basename($label, $name) . '_' . 
		   $this->icon_size();
	}
}

$social_icon_css = new SocialIconCSS();

?>
