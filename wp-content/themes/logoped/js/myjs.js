/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){

	$('.bxslider').bxSlider({
	 mode: 'fade',
		captions: true
	});
	
	$('#partners a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#search-handler').click(function(){
		$('#search').slideToggle('slow');
	});
	
});