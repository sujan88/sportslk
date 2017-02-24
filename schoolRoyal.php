<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title></title>

		<link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
    	<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" href="css/Css.css" type="text/css"  title="no title"  />
        <link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
        
        <link rel="stylesheet" href="css/general.css" type="text/css">
		<link href="css/template.css" rel="stylesheet" type="text/css">
		<link href="css/style1.css" rel="stylesheet" type="text/css">
		<link href="css/style2.css" rel="stylesheet" type="text/css">
		<link href="css/rokmoomenu.css" rel="stylesheet" type="text/css">
    	
		<script src="javascript/mootools.js" type="text/javascript"></script>
		<script src="javascript/jd.gallery.js" type="text/javascript"></script>
</head>

<body style="font-family:Calibri">
<?php include("/header_footer/header.php") ?>




<!--main div-->










<!-- main body-->
	       <div id="main"> 
    	            <div id="top">
                    </div>
    	             <div id="middle"> 
                     	
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
<table width="860px" height="50" border="0px" style="margin-left:20px">
  <tr>   
    <td width="200px">
    
   <script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: false
				});
			}
			window.onDomReady(startGallery);
		</script>
		<div class="content">
			<div id="myGallery">
				<div class="imageElement">
					<h3>Item 1 Title</h3>
					<p>Item 1 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/rayal/royal2.jpg" class="full" />
					<img src="images/rayal/royal2mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 2 Title</h3>
					<p>Item 2 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/rayal/rayal4big.jpg" class="full" />
					<img src="images/rayal/royal4.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 3 Title</h3>
					<p>Item 3 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/rayal/rayal8big.jpg" class="full" />
					<img src="images/rayal/rayal8.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 4 Title</h3>
					<p>Item 4 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/rayal/rayal7.jpg" class="full" />
					<img src="images/rayal/rayal7mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 5 Title</h3>
					<p>Item 5 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/rayal/royal5.jpg" class="full" />
					<img src="images/rayal/royal5mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 6 Title</h3>
					<p>Item 6 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/rayal/royal3.jpg" class="full" />
					<img src="images/rayal/royal3mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 7 Title</h3>
					<p>Item 7 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/rayal/royal6big.jpg" class="full" />
					<img src="images/rayal/royal6.jpg" class="thumbnail" />
				</div>
				
			</div>
		</div></td>
    	
        
        <td style="vertical-align:top">
        	<div style="padding:20px" align="justify">
            <h1>
            	<img src="images/rayal/royal_logo.jpg"/ width="70" height="90">
            	Royal College
            </h1>
        		<h3>OVERVIEW :</h3>  
Royal College, as per the Education Ministry classification, is an IAB category National School. An IAB category school has classes from Grade 1 (or at least Grade 5) up to Grade 13. It must also have an Advanced Level Science stream. A National school is managed by the Ministry of Education, as opposed to Provincial schools that are managed by Provincial Authorities. 
</div>
        </td>
  </tr>
</table>

<table width="860" height="84" border="0px" style="margin-left:20px">


<tr>
<td width="460px" height="78" style="vertical-align:top">

	<div align="center" onclick="./schoolRequestForm.php">
	<div align="center">
<?php 
	include("pages/db_connect.php");
		$result = mysql_query("select * from school where school_Name = 'Royal College' ",$db);
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
</div>

<div>
<?php 
	include("pages/db_connect.php");
		
		$result2 = mysql_query("select sport_ID from school_sport where school_ID = 2");
		echo "Sports :";
		while($ID = mysql_fetch_array($result2))
		{
		$sportID = $ID['sport_ID'] ;
		$result3 = mysql_query("select sport from sport where sport_ID = '$sportID' ",$db);
		
		
		while($data = mysql_fetch_array($result3))
			{
				$sport = $data['sport'];
								
				?> <?php echo $sport." ";?><?php
				
			}
		}
 ?>
</div>



	<table border="0px" height="280px">
        <tr>
            
            <td width = "80px" valign="middle" align="center">                        	
                <a href="schoolRwquestForm.php?sid=2"><img border = "0" src="./images/hotlinks/5.png"  align="top"/ ></a>
                Create an Application Letter to Request for a School
            </td>
            
        </tr>
        
        <tr>
            
            <td width = "80px" valign="middle" align="center">                        	
                <img border = "0" src="./images/hotlinks/6.png"  align="top"/>
                Visit Royal websight to get more information
            </td>
            
        </tr>
    </table>
</div></td>

<td height="78">
<div style="padding:20px" align="justify">
<h3>ADMINISTRATION  :</h3>

As at 2010 with over 8300 students, 275 teachers and another 100 supportive staff, Royal College has a highly developed and an efficient administrative system. Decentralisation is vital for smooth management. The Principal, with  assistance from the Senior Deputy Principal, manages the entire school through delegation of powers to different sectional heads - A Deputy Principal for the Primary (Grade 1 - 5) section, a Deputy Principal for the Middle-school (Grade 6 - 9), an Assistant Principal for Grade 10 and 11, and another Deputy Principal for Grade 12 and 13. Assistant Principals are also appointed to handle other specific areas - namely: Finance, Academic affairs and the Tamil medium. 
    
</div>
</td>
</tr>
</table>
</div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div><!-- End of middle div-->   
        </div> <!-- End of Main div-->         
    
    
         <!-- footer-->
        <div id="bottom">
        
        </div> 
    
        
    <div id="footer" align="center" style="font-size:12px;">
    	© 2010 SportsLK, Inc. All rights reserved. 
    </div>    
</body>
</html>