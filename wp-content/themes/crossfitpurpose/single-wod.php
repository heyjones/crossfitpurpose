<?php include('header.php'); ?>

<?php
	if(have_posts()) : while(have_posts()) : the_post();
?>

<div class="grid_8">

	<h1>WOD for <?php the_date('l F j, Y'); ?></h1>
<?php
		if(has_post_thumbnail()){
			$img = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');
?>
	<div id="excerpt" style="background-image: url('<?php echo $img[0]; ?>');">
		<?php the_excerpt(); ?>
	</div>
<?php
		}
?>
	<?php echo get('description'); ?>
	
<?php
	$movements = get_group('movements');
	$m = 0;
	foreach($movements as $movement){
		$m += 1;
?>
	<div class="movement">
		<span class="movement_quantity"><?php echo $movement['movements_quantity'][1]; ?></span>
<?php
		if($movement['movements_movement'][1] != ''){
			// They selected an existing Movement...
		
?>
		<span class="movement_title"><?php echo get_the_title($movement['movements_movement'][1]); ?></span>
		<a class="movement_help">?</a>
		<span class="movement_description"><?php echo $movement['movements_description'][1]; ?></span>
		<span class="clear">&nbsp;</span>
		<div id="movement_<?php echo $movement['movements_movement'][1] ?>" class="movement_shit">
			<span class="movement_desc"><?php echo get_post_meta($movement['movements_movement'][1], 'movement_description', true); ?></span>
			<?php echo youtube(get_post_meta($movement['movements_movement'][1], 'movement_youtube', true),600,338); ?>
		</div>
<?php
		}else{
			// They made one up!
		
?>
		<span class="movement_title"><?php echo $movement['movements_name'][1]; ?></span>
		<span class="movement_description"><?php echo $movement['movements_description'][1]; ?></span>
<?php			
		}
?>
	</div>

<?php
	}
	endwhile; endif;
?>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=395976767145052";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-width="450" data-show-faces="false" data-colorscheme="dark" style="margin:20px 0px;"></div>

</div>

<?php include('aside.php'); ?>

<?php include('footer.php'); ?>