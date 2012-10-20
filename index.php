<?php
/**
 * index.php
 *
 * Display IconDrawer social media icons.
 *
 * (c)2012 mrdragonraaar.com
 */
include('functions.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>IconDrawer Social-icons (<?php echo $social_icon_css->icon_size(); ?>px)</title>
<link rel="stylesheet" href="css-social-icons.php<?php if ($social_icon_css->is_valid_icon_size()) { echo '?size=' . $social_icon_css->icon_size(); } ?>" type="text/css" />

<style type="text/css">
body
{
	font-family: verdana, helvetica, arial, sans-serif;
	font-size: 11px;
	margin: 20px 20px 20px 20px;
	padding: 0;
}

h1
{
	font-size: 13px;
	margin: 0;
	margin-bottom: 10px;
	padding: 0;
}

div.icon_sizes
{
	margin: 0;
	padding: 0;
}

a
{
	color: #444;
}

a:hover
{
	color: #000;
}

ul
{
	margin: 0;
	margin-top: 20px;
	padding: 0;
	list-style-type: none;
}

li
{
	height: <?php echo $social_icon_css->icon_size(); ?>px;
	line-height: <?php echo $social_icon_css->icon_size(); ?>px;
	vertical-align: bottom;
	padding-left: <?php echo $social_icon_css->icon_size() + 3; ?>px;
}
</style>
</head>

<body>
<h1>IconDrawer Social-icons (<?php echo $social_icon_css->icon_size(); ?>px)</h1>

<!-- Icon Size Navbar -->
<div class="icon_sizes">
<?php social_icon_html_size_navbar(); ?>
</div>
<!-- END Icon Size Navbar -->

<ul>
<?php
social_icon_html('aim');
social_icon_html('amazon');
social_icon_html('android');
social_icon_html('apple');
social_icon_html('bebo');
social_icon_html('bing');
social_icon_html('blogger');
social_icon_html('delicious');
social_icon_html('digg');
social_icon_html('facebook');
social_icon_html('flickr');
social_icon_html('friendfeed');
social_icon_html('google');
social_icon_html('googleplus');
social_icon_html('linkedin');
social_icon_html('netvibes');
social_icon_html('newsvine');
social_icon_html('reddit');
social_icon_html('rss');
social_icon_html('sharethis');
social_icon_html('skype');
social_icon_html('stumbleupon');
social_icon_html('technorati');
social_icon_html('twitter');
social_icon_html('utorrent');
social_icon_html('vimeo');
social_icon_html('vkontakte');
social_icon_html('wikipedia');
social_icon_html('windows');
social_icon_html('yahoo');
social_icon_html('goodreads');
social_icon_html('gutenberg');
social_icon_html('smashwords');
social_icon_html('freebookspot');
?>
</ul>
</body>
</html>

