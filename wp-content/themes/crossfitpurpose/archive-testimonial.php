<?php include('header.php'); ?>

<div class="grid_12">

	<h1>Testimonials</h1>

</div>

<div class="grid_8">

<?php
	$i = 0;
	$permalink = '';
	if(have_posts()) : while(have_posts()) : the_post();
		$i++;
		$permalink = get_permalink();
?>

	<h2>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
<?php
		if(has_post_thumbnail()){
			$img = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');
?>
	<div style="background: url('<?php echo $img[0]; ?>') no-repeat center center; background-size: 100%; height: 310px; width: 620px;">
	</div>
<?php
		}
?>
	<?php the_excerpt(); ?>
	<hr />

<?php
	endwhile; endif;
//	if($i == 1){
//		echo '<script>window.location="' . $permalink . '"</script>';
//	}
?>

</div>

<?php include('aside.php'); ?>

<?php include('footer.php'); ?>