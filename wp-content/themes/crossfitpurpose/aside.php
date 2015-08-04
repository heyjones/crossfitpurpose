<div class="grid_4">

	<h3><a href="/contact/">Get Started For Free!</a></h3>
	<p>Come in for a free work out and see for yourself how CrossFit Purpose can help you.</p>

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
	<h4><a href="<?php the_permalink(); ?>">Workout Of The Day</a></h4>
	<p>
<?php
		$movements = get_group('movements');
		$m = 0;
		foreach($movements as $movement){
			$m += 1;
?>
		<?php echo $movement['movements_quantity'][1]; ?> 
		<?php echo get_the_title($movement['movements_movement'][1]); ?><br />
<?php
		}
?>
	</p>
<?php
	endwhile;
	wp_reset_query();
	wp_reset_postdata();
?>

	<h4>Location</h4>
	<p>
		16131 Gothard St Suite L<br />
		Huntington Beach, CA 92647
	</p>
	<p>
		<iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?t=m&amp;q=16131+Gothard+St+Huntington+Beach,+CA+92647&amp;ie=UTF8&amp;hq=&amp;hnear=16131+Gothard+St,+Huntington+Beach,+California+92647&amp;ll=33.862500,-117.950000&amp;spn=0.016775,0.080595&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe>
	</p>

	<h4>Social</h4>

	<p>
		<a href="https://www.facebook.com/crossfitpurpose" target="_blank">Facebook</a><br />
		<a href="https://plus.google.com/b/116420447713585080150/116420447713585080150/posts" target="_blank">Google</a><br />
		<a href="http://instagram.com/crossfitpurpose" target="_blank">Instagram</a><br />
		<a href="https://twitter.com/crossfitpurpose" target="_blank">Twitter</a><br />
		<a href="http://www.yelp.com/biz/crossfit-purpose-huntington-beach" target="_blank">Yelp!</a><br />
		<a href="http://www.youtube.com/crossfitpurpose" target="_blank">YouTube</a><br />
	</p>
	
	<p>
		<a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic300x150" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource">
			<img src="http://journal.crossfit.com/templates/images/graphic-300x150.jpg" width="300px" height="150px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" />
		</a>
	</p>

</div>