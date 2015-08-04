<div style="padding-top:20px;" class="grid_4">

<a href="http://www.crossfitpurpose.com/free-intro-class/"><img src="http://www.crossfitpurpose.com/wp-content/uploads/2014/07/free-assesment.png" /></a><br /><br />


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
		<iframe width="300" height="350" style="border: outset; background-color:#999" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;q=CrossFit+Purpose&amp;fb=1&amp;gl=us&amp;hq=crossfit+purpose&amp;cid=8184822974736177084&amp;t=m&amp;ll=33.730693,-118.00076&amp;spn=0.006246,0.006437&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small style="font-size:12px;"><a href="https://maps.google.com/maps?ie=UTF8&amp;q=CrossFit+Purpose&amp;fb=1&amp;gl=us&amp;hq=crossfit+purpose&amp;cid=8184822974736177084&amp;t=m&amp;ll=33.730693,-118.00076&amp;spn=0.006246,0.006437&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#080;text-align:left">View Larger Map</a></small>
	</p>

	

	<div class="socialmedia">
    <h4>Follow Us: 

		<a href="https://www.facebook.com/crossfitpurpose" target="_blank"><img src="http://www.crossfitpurpose.com/wp-content/uploads/2014/01/facebook.png" alt="Facebook" title="Facebook"/></a>
		<a href="https://plus.google.com/b/116420447713585080150/116420447713585080150/posts" target="_blank"><img src="http://www.crossfitpurpose.com/wp-content/uploads/2014/01/google-plus.png" alt="Google Plus" title="Google Plus" /></a>
		<a href="http://instagram.com/crossfitpurpose" target="_blank"><img src="http://www.crossfitpurpose.com/wp-content/uploads/2014/01/instagram.png" alt="Instagram" title="Instagram" /></a>
		<a href="https://twitter.com/crossfitpurpose" target="_blank"><img src="http://www.crossfitpurpose.com/wp-content/uploads/2014/01/twitter.png" alt="Twitter" title="Twitter" /></a>
		<a href="http://www.yelp.com/biz/crossfit-purpose-huntington-beach" target="_blank"><img src="http://www.crossfitpurpose.com/wp-content/uploads/2014/01/yelp.png" alt="Yelp!" title="Yelp!" /></a>
		<a href="http://www.youtube.com/crossfitpurpose" target="_blank"><img src="http://www.crossfitpurpose.com/wp-content/uploads/2014/01/youtube.png" alt="You Tube" title="You Tube"/></a></h4>
	</div>
	
	<p>
		<a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic300x150" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource">
			<img src="http://journal.crossfit.com/templates/images/graphic-300x150.jpg" width="300px" height="150px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" />
		</a>
	</p>

</div>