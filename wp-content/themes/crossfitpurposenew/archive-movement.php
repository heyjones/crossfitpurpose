<?php include('header.php'); ?>

<div class="grid_8">

	<h1>Movements</h1>

<?php
	$categories = get_categories(array('hide_empty' => 0, 'orderby' => 'name', 'taxonomy' => 'movement_type'));
	foreach($categories as $category){
?>

	<h2><?php echo $category->name; ?></h2>

<?php
		$args = array(
			'nopaging' => true,
			'order' => 'asc',
			'orderby' => 'title',
			'post_type' => 'movement',
			'tax_query' => array(
				array(
					'taxonomy' => 'movement_type',
					'field' => 'slug',
					'terms' => $category->name
				)
			)
		);
		$q = new WP_Query($args);
		while($q->have_posts()) : $q->the_post();
?>

	<h3>
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h3>
	<p><?php echo get('movement_description'); ?></p>

<?php
		endwhile;
		wp_reset_query();
		wp_reset_postdata();
	} 	
?>

</div>

<?php include('aside.php'); ?>

<?php include('footer.php'); ?>