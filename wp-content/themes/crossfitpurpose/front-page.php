<?php include('header.php'); ?>

<div class="grid_12" style="margin-top: 20px;">

	<a href="http://www.crossfitpurpose.com/bodyweight-bootcamp/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/bootcamp.png"></a>

</div>

<div class="grid_12">

	<h1>New Location</h1>
	<iframe width="940" height="235" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?t=m&amp;q=16131+Gothard+St+Huntington+Beach,+CA+92647&amp;ie=UTF8&amp;hq=&amp;hnear=16131+Gothard+St,+Huntington+Beach,+California+92647&amp;ll=33.862500,-118.001404&amp;spn=0.016775,0.080595&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe>
	<p>CrossFit Purpose has moved to our new ddress at 16131 Gothard St Suite L Huntington Beach, CA 92647.</p>

</div>

<div class="grid_3">

	<h3><a href="/about/">About Us</a></h3>
	<p>CrossFit Purpose was founded with one clear goal: to help you to achieve yours.</p>

</div>

<div class="grid_3">

	<h3><a href="/what-is-crossfit">What Is CrossFit?</a></h3>
	<p>Learn more about the CrossFit program and how it can change your life.</p>

</div>

<div class="grid_3">

<?php
	$args = array(
		'order' => 'desc',
		'orderby' => 'date',
		'post_type' => 'wod',
		'posts_per_page' => 1
	);
	$w = new WP_Query($args);
	while($w->have_posts()) : $w->the_post();
?>
	<h3><a href="<?php the_permalink(); ?>">Workout Of The Day</a></h3>
	<p>
<?php
		$movements = get_group('movements');
		$m = 0;
		foreach($movements as $movement){
			$m += 1;
?>
		<?php echo $movement['movements_quantity'][1]; ?> 
<?php
			if($movement['movements_movement'][1] != ''){
?>
		<?php echo get_the_title($movement['movements_movement'][1]); ?><br />
<?php
			}else{
?>
		<?php echo $movement['movements_name'][1]; ?><br />
<?php
			}
		}
?>
	</p>
<?php
	endwhile;
	wp_reset_query();
	wp_reset_postdata();
?>

</div>

<div class="grid_3">

	<h3><a href="/contact/">Get Started!</a></h3>
	<p>Come in for a free work out and see for yourself how CrossFit Purpose can help you.</p>

</div>

<span class="clear">&nbsp;</span>

<div class="grid_9">
	<h2>Military, Police, First Responders</h2>
	<h3>Take 10% Off</h3>
</div>

<div class="grid_3">
	<a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic300x150" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource">
		<img src="http://journal.crossfit.com/templates/images/graphic-300x150.jpg" width="220px" height="110px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" />
	</a>
</div>

<?php include('footer.php'); ?>