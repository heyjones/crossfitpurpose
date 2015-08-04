<!DOCTYPE html>
<html>

<head>

<title>
<?php
	global $page, $paged;
	wp_title('|', true, 'right');
	bloginfo('name');
	$site_description = get_bloginfo('description', 'display');
	if($site_description && (is_home() || is_front_page()))
		echo ' | ' . $site_description;
	if($paged >= 2 || $page >= 2)
		echo ' | ' . sprintf(__('Page %s', 'crossfitpurpose'), max($paged, $page));
?>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />
<meta name="viewport" content="width=980" user-scalable="yes" />

<link href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/grid.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" rel="icon" type="image/png" />

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js" type="text/javascript"></script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-12141881-32']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>

<?php
	wp_head();
?>

</head>

<body>

<div class="container_12">

	<div id="social" class="grid_12">
		<ul>
			<li><a href="https://www.facebook.com/crossfitpurpose" class="facebook" target="_blank">Facebook</a></li>
			<li><a href="https://plus.google.com/b/116420447713585080150/116420447713585080150/posts" class="google" target="_blank">Google</a></li>
			<li><a href="http://instagram.com/crossfitpurpose" class="instagram" target="_blank">Instagram</a></li>
			<li><a href="https://twitter.com/crossfitpurpose" class="twitter" target="_blank">Twitter</a></li>
			<li><a href="http://www.yelp.com/biz/crossfit-purpose-huntington-beach" class="yelp" target="_blank">Yelp!</a></li>
			<li><a href="http://www.youtube.com/crossfitpurpose" class="youtube" target="_blank">YouTube</a></li>
		</ul>
	</div>

	<div id="title" class="grid_12">
		<a href="<?php bloginfo('url'); ?>">
			<?php bloginfo('title'); ?>
		</a>
	</div>
	<?php include('title.php'); ?>

	<span class="clear">&nbsp;</span>

	<div id="menu" class="grid_12">
		<?php wp_nav_menu(array('container' => 'false', 'menu' => 'Menu')); ?>
	</div>

	<span class="clear">&nbsp;</span>
	
	<div id="container">