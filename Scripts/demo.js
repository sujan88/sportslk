
	

window.addEvent('domready', function() {
	
	var myVerticalSlide = new Fx.Slide('vertical_slide');
	//-vertical
	
	myVerticalSlide.hide();
	          
	$('v_slidein').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.slideIn();
	});

	$('v_slideout').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.slideOut();
	});
	
	$('form_out').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.slideOut();
	});

	$('v_toggle').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.toggle();
	});
     
	/*$('v_hide').addEvent('click', function(e){
		e.stop();
		myVerticalSlide.hide();
		$('vertical_status').set('html', status[myVerticalSlide.open]);
	});*/
		myVerticalSlide.addEvent('complete', function() {
		$('vertical_status').set('html', status[myVerticalSlide.open]);
	});
});