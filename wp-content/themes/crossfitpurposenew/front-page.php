<?php include('header.php'); ?>

<div class="grid_12">

	<h1 align="center">Welcome to CrossFit Purpose</h1>
<h4 align="center"> Train with a purpose at Crossfit Purpose in Huntington Beach</span></h4>
    </div>

<div class="grid_8">


<!--Get the last 10 posts in the special_cat category. -->


<?php
query_posts( array(
     'post_type' => array( 'post', 'wod', 'news', 'other_post_type' ),
	 'orderby' => 'date',
     'showposts' => 6 )
     );
?>
 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <!-- Display the Title as a link to the Post's permalink. -->

 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
 
 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 <small style="font-style:italic;"><?php the_time('F jS, Y') ?></small>
 
  <p><?php the_content(); ?>
  
 <?php echo get('description'); ?><br><br>

<!-- Gets Images. -->

 <?php echo get_image('images'); ?>
	
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
  </p>
 

</div>

<?php include('aside.php'); ?>



<span class="clear">&nbsp;</span>

<div class="grid_9">
	<h2>Military, Police, First Responders</h2>
	<h3>Take 10% Off</h3>
</div>

<div class="grid_3">
	<h3><a href="/about/">Mission Statement</a></h3>
	<p>CrossFit Purpose in Huntington Beach, CA was founded with one clear goal: to help you to achieve yours. <a href="/about/">Learn More</a></p>
</div>

<?php include('footer.php'); ?>