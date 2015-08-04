<?php include('header.php'); ?>

<div class="grid_8">

	<h1>Workout Of The Day</h1>

<?php //get_calendar_wod(false); ?>

<?php
	if(have_posts()) : while(have_posts()) : the_post();
?>

	<h2>
		<a href="<?php the_permalink(); ?>">
			<?php the_date('l F j, Y'); ?>
		</a>
	</h2>
	<?php the_excerpt(); ?>
	<hr />

<?php
	endwhile; endif;
?>

</div>

<?php include('aside.php'); ?>

<?php include('footer.php'); ?>