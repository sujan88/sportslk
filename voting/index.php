<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Player Rating</title>
<link rel="stylesheet" href="voting/css.css">

<script type="text/javascript" src="voting/jquery.min.js"></script>
<script type="text/javascript" src="voting/jquery.livequery.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
	$('.like_button').mouseenter(function(e) {
		$('.tooltip').show();
		$('.ilikethis').fadeIn(200);
	}).mouseleave(function(e) {
		$('.ilikethis').fadeOut(200);
		$('.tooltip').hide();
	});
	$('.dislike_button').mouseenter(function(e) {
		$('.tooltip2').show();
		$('.idislikethis').fadeIn(200);
	}).mouseleave(function(e) {
	   $('.tooltip2').hide();
		$('.idislikethis').fadeOut(200);
	});
	
	$('.totalstatsbutton').livequery("mouseenter", function(e){
		$('.greenBar').css("background-color","#AADA37");
		 $('.redbar').css("background-color","#CF362F");
		$('.tooltip3').show();
		$('.totalstats').fadeIn(200);
	}).livequery("mouseleave", function(e){
		$('.tooltip3').hide();
		$('.greenBar').css("background-color","#DDDDDD");
		$('.redbar').css("background-color","#DDDDDD");
		$('.totalstats').fadeOut(200);
	});
});

$(document).ready(function(){	
	//$('#voting_result').fadeOut();
	$('button').click(function(){
		var a = $(this).attr("id");
		
		$.post("voting.php?value="+a, {
		}, function(response){
			//$('#voting_result').fadeIn();
			$('#voting_result').html($(response).fadeIn('slow'));
			
			
			// now update box bar			//default this is not comment
			/*$.post("update_box.php", {
			}, function(update){
				$('#update_count').html(unescape(update));				
			});*/
			
			////////////
			// now update tooltip count	at the moment it click the button		
			$.post("update_tooltip.php", {
			}, function(updates){
				$('.tooltip3').html(unescape(updates));			
			});
			////////////
		});
	});	
});	

function hideMesg(){

	$('.rating_message').fadeOut();
	$.post("rating.php?show=1", {
	}, function(response){
		$('#inner').html(unescape(response));
		$('#inner').fadeIn('slow');
	});
}	
</script>

</head>
 <img src="voting/images.jpg" alt="" style="float:left" /><span style="float:left; margin-top:35px; margin-left:5px">Do You Like to this Player</span>


<div align="left" >

	<div align="left" style="height:0px;">
		<div class="tooltip">
			<span class="ilikethis">
			I like him
			</span>
		</div>
		<div class="tooltip2">
			<span class="idislikethis">
			I dislike him
			</span>
		</div>
		<div class="tooltip3">
			<?php include ('voting/update_tooltip.php')?>
		</div>
	</div>
	
	
	
	<button type="button" class="like_button" id="like" >
	<img src="pixel-vfl73.gif" alt=""> 
	<span>Like</span></button>

	&nbsp;
	
	<button  type="button" class="dislike_button"  id="dislike" >
	<img src="pixel-vfl73.gif" alt=""> 
	</button>

	&nbsp;
	<div id="update_count" style="float:left;">
		<?php  include ('voting/update_box.php')?>
	</div>
	<br clear="all" />
	<div id="voting_result">
		
	</div>
</div>

<body>
</body>
</html>
