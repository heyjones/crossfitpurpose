<?php
	if(has_post_thumbnail()){
		$img = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');	
?>
<style type="text/css">
	#title{
		background-image: url('<?php echo $img[0]; ?>');
	}
</style>
<?php
	}
?>