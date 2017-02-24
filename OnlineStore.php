<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SportsLK</title>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" href="css/Css.css" type="text/css"  title="no title"  />
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<link href="css/template_1.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">
<link href="css/rokmoomenu.css" rel="stylesheet" type="text/css">
			

</head>

<body style="font-family:Calibri" onload="MM_preloadImages('../SportsLK website2/images/btn3.png')">

		<?php
		  include("header_footer/header.php");
		  ?>
         
               <!-- main body-->
	       <div id="main">
    	            <div id="top">
                    </div>
 
<div id="middle" >
                   
                      <?php 
	@ $sport=$_POST['shop'];
	
	switch($sport) {
		
		
		
		case "football":
		
		 ?><div class="search">
                      
                   
                   <tr>
                   <td><h3 align="right" style="color:#400000"> Select a category for search--->>>></td> 
                   <td align="right">
                   
                   <form method="post" action="OnlineStore.php">
                   
                   <select name="shop">
                   
                                       <option value="">cricket</option>
                                     <option value="badminton">badminton</option>
                                       <option value>rugby</option>
                                         <option value="football">football</option>
                                           <option>golf</option>
                                             <option value="weightlifting">weightlifting</option>
                     </select>
                             <input type="submit" value="Search"> </form>
                     </td></tr>
</div>

<?php
		include("news & online/onlinestore/football.php");
		break;
		
		case "weightlifting":
		
		 ?><div class="search">
                      
                   
                   <tr>
                   <td><h3 align="right" style="color:#400000"> Select a category for search--->>>></td> 
                   <td align="right">
                   
                   <form method="post" action="OnlineStore.php">
                   
                   <select name="shop">
                   
                                       <option value="">cricket</option>
                                     <option value="badminton">badminton</option>
                                       <option value>rugby</option>
                                         <option value="football">football</option>
                                           <option>golf</option>
                                             <option value="weightlifting">weightlifting</option>
                     </select>
                             <input type="submit" value="Search"> </form>
                     </td></tr>
</div>

<?php
		include("news & online/onlinestore/weightlifting.php");
		break;
		
		case "badminton":
		 ?><div class="search">
                      
                   
                   <tr>
                   <td><h3 align="right" style="color:#400000"> Select a category for search--->>>></td> 
                   <td align="right">
                   
                   <form method="post" action="OnlineStore.php">
                   
                   <select name="shop">
                   
                                      <option value="">cricket</option>
                                     <option value="badminton">badminton</option>
                                       <option value>rugby</option>
                                         <option value="football">football</option>
                                           <option>golf</option>
                                             <option value="weightlifting">weightlifting</option>
                     </select>
                             <input type="submit" value="Search"> </form>
                     </td></tr>
</div>

<?php
		include("news & online/onlinestore/badminton.php");
		break;
		
		case "squash":
		
		 ?><div class="search">
                      
                   
                   <tr>
                   <td><h3 align="right" style="color:#400000"> Select a category for search--->>>></td> 
                   <td align="right">
                   
                   <form method="post" action="OnlineStore.php">
                   
                   <select name="shop">
                   
                                       <option value="">cricket</option>
                                     <option value="badminton">badminton</option>
                                       <option value>rugby</option>
                                         <option value="football">football</option>
                                           <option>golf</option>
                                             <option value="weightlifting">weightlifting</option>
                     </select>
                             <input type="submit" value="Search"> </form>
                     </td></tr>
</div>

<?php
		include("");
		break;
                     
           default :
		   ?><div class="search">
                      
                   
                   <tr>
                   <td><h3 align="right" style="color:#400000"> Select a category for search--->>>></td> 
                   <td align="right">
                   
                   <form method="post" action="OnlineStore.php">
                   
                   <select name="shop">
                   
                                      <option value="">cricket</option>
                                     <option value="badminton">badminton</option>
                                       <option value>rugby</option>
                                         <option value="football">football</option>
                                           <option>golf</option>
                                             <option value="weightlifting">weightlifting</option>
                     </select>
                             <input type="submit" value="Search"> </form>
                     </td></tr>
</div>

<?php include("news & online/onlinestore/cricket.php");
	}
           ?> 
                     
                      
                     <!--asdfggggggggggggggggggggh-->
                     
</div>
                     <!-- end of main body-->
                     
                      
        <!-- footer-->
        <div id="bottom">
        </div> 
    
        
    <div id="footer" align="center" style="font-size:12px;">
    	© 2010 SportsLK, Inc. All rights reserved. 
    </div>    
                     
</body>
</html>