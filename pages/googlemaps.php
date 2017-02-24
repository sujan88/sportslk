<html>
<head>
<title>Distance finder</title>
<meta type="description" content="Find the distance between two places on the map and the shortest route."/>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

              
<script type="text/javascript">

	var location1;
	var location2;
	
	var address1;
	var address2;
	var address11;
	var address22;
	var a=",srilanka";

	var latlng;
	var geocoder;
	var map;
	
	var distance;
	
	// finds the coordinates for the two locations and calls the showMap() function
	function initialize()
	{
		geocoder = new google.maps.Geocoder(); // creating a new geocode object
		
		// getting the two address values
		address11 = document.getElementById("address1").value;
		address22 = document.getElementById("address2").value;
		
		address1=address11+a;
		address2=address22+a;
		
		// finding out the coordinates
		if (geocoder) 
		{
			geocoder.geocode( { 'address': address1}, function(results, status) 
			{
				if (status == google.maps.GeocoderStatus.OK) 
				{
					//location of first address (latitude + longitude)
					location1 = results[0].geometry.location;
				} else 
				{
					alert("Geocode was not successful for the following reason: " + status);
				}
			});
			geocoder.geocode( { 'address': address2}, function(results, status) 
			{
				if (status == google.maps.GeocoderStatus.OK) 
				{
					//location of second address (latitude + longitude)
					location2 = results[0].geometry.location;
					// calling the showMap() function to create and show the map 
					showMap();
				} else 
				{
					alert("Geocode was not successful for the following reason: " + status);
				}
			});
		}
	}
		
	// creates and shows the map
	function showMap()
	{
		// center of the map (compute the mean value between the two locations)
		latlng = new google.maps.LatLng((location1.lat()+location2.lat())/2,(location1.lng()+location2.lng())/2);
		
		// set map options
			// set zoom level
			// set center
			// map type
		var mapOptions = 
		{
			zoom: 1,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.HYBRID
		};
		
		// create a new map object
			// set the div id where it will be shown
			// set the map options
		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		
		// show route between the points
		directionsService = new google.maps.DirectionsService();
		directionsDisplay = new google.maps.DirectionsRenderer(
		{
			suppressMarkers: true,
			suppressInfoWindows: true
		});
		directionsDisplay.setMap(map);
		var request = {
			origin:location1, 
			destination:location2,
			travelMode: google.maps.DirectionsTravelMode.DRIVING
		};
		directionsService.route(request, function(response, status) 
		{
			if (status == google.maps.DirectionsStatus.OK) 
			{
				directionsDisplay.setDirections(response);
				distance = "<br/><br/><i style=font-size:11>The distance between <br/>the two points on the chosen route is: </i>"+response.routes[0].legs[0].distance.text;
				distance += "<br/><br/><i style=font-size:11>The aproximative driving time is: <br/> please add extra 1 hour  :</i>"+response.routes[0].legs[0].duration.text;
				document.getElementById("distance_road").innerHTML = distance;
			}
		});
		
		// show a line between the two points
		var line = new google.maps.Polyline({
			map: map, 
			path: [location1, location2],
			strokeWeight: 7,
			strokeOpacity: 0.8,
			strokeColor: "#FFAA00"
		});
		
		// create the markers for the two locations		
		var marker1 = new google.maps.Marker({
			map: map, 
			position: location1,
			title: "First location"
		});
		var marker2 = new google.maps.Marker({
			map: map, 
			position: location2,
			title: "Second location"
		});
		
		// create the text to be shown in the infowindows
		var text1 = '<div id="content">'+
				'<h1 id="firstHeading">First location</h1>'+
				'<div id="bodyContent">'+
				'<p>Coordinates: '+location1+'</p>'+
				'<p>Address: '+address1+'</p>'+
				'</div>'+
				'</div>';
				
		var text2 = '<div id="content">'+
			'<h1 id="firstHeading">Second location</h1>'+
			'<div id="bodyContent">'+
			'<p>Coordinates: '+location2+'</p>'+
			'<p>Address: '+address2+'</p>'+
			'</div>'+
			'</div>';
		
		// create info boxes for the two markers
		var infowindow1 = new google.maps.InfoWindow({
			content: text1
		});
		var infowindow2 = new google.maps.InfoWindow({
			content: text2
		});

		// add action events so the info windows will be shown when the marker is clicked
		google.maps.event.addListener(marker1, 'click', function() {
			infowindow1.open(map,marker1);
		});
		google.maps.event.addListener(marker2, 'click', function() {
			infowindow2.open(map,marker1);
		});
		
		// compute distance between the two points
		var R = 6371; 
		var dLat = toRad(location2.lat()-location1.lat());
		var dLon = toRad(location2.lng()-location1.lng()); 
		
		var dLat1 = toRad(location1.lat());
		var dLat2 = toRad(location2.lat());
		
		var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
				Math.cos(dLat1) * Math.cos(dLat1) * 
				Math.sin(dLon/2) * Math.sin(dLon/2); 
		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
		var d = R * c;
		
		document.getElementById("distance_direct").innerHTML = "<br/><br/><br/><i style=font-size:11>The distance between the two points<br/> (in a straight line) is:</i> "+d;
	}
	
	function toRad(deg) 
	{
		return deg * Math.PI/180;
	}
</script>
<style>
p{
	font-size:12px;	
	}
i{
	font-size:12px;
	color:#A0A0A4;	
	}
.back{
	background:#AADFFF;
	
	}
	.side{
		background:#FFF;
		-moz-border-radius:10px;-webkit-border-radius:10px;-o-border-radius:10px;-ms-border-radius:10px;-khtml-border-radius:10px;border-radius:10px;color:#62ac44;font-family:Trebuchet MS,arial,sans-serif;font-weight:bold;font-style:normal;text-decoration:none;white-space:nowrap ;
		
		}

</style>
</head>

<body class="back">
<center><h3>Find the distance between two locations</h3></center>
 
	<div class="side" style="width:27%; height:90% ; float:left;">
             

     <div style="color:#000; padding-left:10px;"><p>To search ground in sri lanka <a href="../map.php?keepThis=true&TB_iframe=true&height=500&width=800"  title="grounds" class="thickbox"/>Click here</a></p></div>
     
		<table align="center" valign="center"  style=" font-size:14px; color:#090">
			<tr>
				<td  align="center"></td>
			</tr>
			<tr>
				<td >&nbsp;</td>
			</tr>
			<tr>
				<td>Your address:</td></tr>
			   <tr> <td><input type="text" name="address1" id="address1" size="50"/></td></tr>
               <tr> <td><i >eg : 100,mada bowala,kandy</i></td></tr>
				<tr>
				<td>Place address:</td></tr>
				<tr><td><input type="text" name="address2" id="address2" size="50"/></td>
			</tr>
			<tr>
				<td colspan="7">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="7" align="center"><input type="button" value="Show" onClick="initialize();"/></td>
			</tr>
            
		</table> 
	<div style="margin-left:3%; ">
	<div  id="distance_direct"></div>
   
	<div  id="distance_road"></div></div>
   
    </div>
	
	<div  id="map_canvas" style="width:70%; height:90%; float:left; margin-left:1%; "> <div style="background:#000; padding:10px 30px 10px 30px; font-family:Verdana, Geneva, sans-serif; color:#FFF; height:100%;"><center>Sports lk Map </center><br/>
    <p> This is the google map searching section. you can find the distance between 2 places and ou can get the road path. here highliting blue path  between 2 palces.</p>
    <br/>
    <span style="color:#009F00;"> please type address or name of the town in these boxes.  </span>
     </div></div>
</body>
</html>