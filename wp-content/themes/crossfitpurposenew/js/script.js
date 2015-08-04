$(document).ready(function(){
	//Excerpt
	var parent_height = $('.excerpt').height();
	var image_height = $('.excerpt img').height();
	var top_margin = (parent_height - image_height) / 2;
	$('.excerpt img').css('margin-top', top_margin);
	//
	$('.movement_help').click(function(){
		$(this).closest('div').find('.movement_shit').slideToggle('fast', 'swing');
	});
});