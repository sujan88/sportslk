<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.print.css' media='print' />
<script type='text/javascript' src='../jquery/jquery-1.5.2.min.js'></script>
<script type='text/javascript' src='../jquery/jquery-ui-1.8.11.custom.min.js'></script>
<script type='text/javascript' src='../fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript'>

<?php $aa=$_GET['idto']; 
 

?>
	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#check').fullCalendar({
			
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			//pop up display for enter values
			selectable: true,
			selectHelper: false,//default true.i set it to false
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
							
						},
						true // make the event "stick"
						
					);
					window.location = "getdateBad.php?idto=<?php echo $aa; ?>&title="+title+"&start="+start+"&end="+end+"&allDay="+allDay;
				}
				
				calendar.fullCalendar('unselect');
			},
			editable: false,
			
		events:"setdateBad.php",
		//loading function for josn-events.php
		loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
					}
		});
		

	});

</script>

<style type='text/css'>

	body {
		background:url(../../images/bt2.png);
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		width: 900px;
		padding:30px;
		
		
		}

</style>
</head>
<body>
<div style="height:60px;">
<h4 >Badminton tournament calander </h4>
<span>double click on date and write your tournamnet</span></div>
<div id="form"> 
<form id="check" action="../../tournament.php">

<input type="submit" value="BACK" />
</form>
</div>
<div id='calendar'></div>
</body>
</html>
