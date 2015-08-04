<?php include('header.php'); ?>

<div class="grid_12">

	<h1><a href="/testimonial/">Testimonials</a></h1>

</div>

<div class="grid_8">

<?php
	if(have_posts()) : while(have_posts()) : the_post();
?>

	<h2><?php the_title(); ?></h2>
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

	<div id="photos">
		<?php
			$photos = get_field('photo');
			$params = 'h=200&w=200&zc=1&q=100';
			$i = 1;
			foreach($photos as $photo){
				echo get_image('photo', 1, $i, 1, NULL, $params);
				$i++;
			}
		?>
	</div>

<?php
	endwhile; endif;
?>

</div>

<?php include('aside.php'); ?>

<?php include('footer.php'); ?>