<?php include('header.php'); ?>

<?php
	if(have_posts()) : while(have_posts()) : the_post();
?>

<div class="grid_8">

	<h1><?php the_title(); ?></h1>

	<?php the_content(); ?>

</div>

<?php
	endwhile; endif;
?>

<?php include('aside.php'); ?>

<?php include('footer.php'); ?>