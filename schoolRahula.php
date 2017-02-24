<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title></title>

		<link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
    
		<script src="javascript/mootools.js" type="text/javascript"></script>
		<script src="javascript/jd.gallery.js" type="text/javascript"></script>
</head>
<lin
<body>



<div id="main">


 

<center>
<table width="1074" height="50" border="1">
  <tr>
    <td width="326" bgcolor="#00FF00">
<div align="center" style="background:#0F0" >
<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	
	$db_name = "school";
	$tbl_name = "school";
	
	//echo $nSchool;
	$con = mysql_connect("$host","$username","$password") or die ("Cannot Connect");
	mysql_select_db("$db_name") or die ("Cannot select DB");
		
		$result = mysql_query("select * from $tbl_name where school_Name = 'Rahula College' ",$con);
		$data = mysql_fetch_array($result);
			
				$prncipleName = $data['principle_Name'];
				$scName = $data['school_Name'];
				$city = $data['location'];
				//$adStreet = $data['adStreet'];
				//$adRegon = $data['adRegon'];
				
				?><center><?php echo "School Name :".$scName."<br />";?></center><?php
				?><center><?php echo "Principle Name :".$prncipleName."<br />";?></center><?php
				?><center><?php echo "Location :".$city."<br />";?></center><?php
				
 ?>
</div></td>
    <td width="433"><h1><center> Rahula College</center></h1>
   <script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: false
				});
			}
			window.onDomReady(startGallery);
		</script>
        <center>
		<div class="content">
			<div id="myGallery">
				<div class="imageElement">
					<h3>Item 1 Title</h3>
					<p>Item 1 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/1.jpg" class="full" />
					<img src="images/brugges2006/1-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 2 Title</h3>
					<p>Item 2 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/2.jpg" class="full" />
					<img src="images/brugges2006/2-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 3 Title</h3>
					<p>Item 3 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/3.jpg" class="full" />
					<img src="images/brugges2006/3-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 4 Title</h3>
					<p>Item 4 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/4.jpg" class="full" />
					<img src="images/brugges2006/4-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 5 Title</h3>
					<p>Item 5 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/5.jpg" class="full" />
					<img src="images/brugges2006/5-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 6 Title</h3>
					<p>Item 6 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/6.jpg" class="full" />
					<img src="images/brugges2006/6-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 7 Title</h3>
					<p>Item 7 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/7.jpg" class="full" />
					<img src="images/brugges2006/7-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 8 Title</h3>
					<p>Item 8 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/8.jpg" class="full" />
					<img src="images/brugges2006/8-mini.jpg" class="thumbnail" />
				</div>
			</div>
		</div>
        </center>
        </td>
    <td width="293" bgcolor="#0FF"><div align="center" style="background:#0FF"> 
	<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	
	$db_name = "school";
	//$tbl_name = "sport";
	
	//echo $nSchool;
	$con = mysql_connect("$host","$username","$password") or die ("Cannot Connect");
	mysql_select_db("$db_name") or die ("Cannot select DB");
		
		$result2 = mysql_query("select sport_ID from school_sport where school_ID = 1");
		while($ID = mysql_fetch_array($result2))
		{
		$sportID = $ID['sport_ID'] ;
		$result3 = mysql_query("select sport from sport where sport_ID = '$sportID' ",$con);
		while($data = mysql_fetch_array($result3))
			{
				$sport = $data['sport'];
								
				?><center><?php echo $sport;?></center><?php
				?> <center><?php echo "<br />";?></center><?php
				
			}
		}
 ?>
 </div>
</td>
  </tr>
</table>

<table width="1074" height="84" border="1">
<tr>
<td height="78"> <div align="center" > <a href= "schoolRwquestForm.php?sid= 1">Create a Application Letter to tranfer school</a>   </div></td>
<td height="78"> <div align="center" onclick="http://www.Rahula.org">Visit Rahula websight to get more information</div></td>
</tr>
</table>
</center>
</div>
<!--main div-->
</body>
</html>