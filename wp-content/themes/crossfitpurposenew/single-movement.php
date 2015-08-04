<?php include('header.php'); ?>

<?php
	if(have_posts()) : while(have_posts()) : the_post();
?>

<div class="grid_8">

	<h1><?php the_title(); ?></h1>
	
	<p><?php echo get('movement_description'); ?></p>
	
	<?php echo youtube(get('movement_youtube'),620,348); ?>

<?php
	endwhile; endif;
?>

</div>

<?php include('aside.php'); ?>

<?php include('footer.php'); ?>