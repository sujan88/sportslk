
		
		
			<script type="text/javascript"src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/thickbox.js"></script>
            <link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />



<?php
	include ("header_footer/header.php");  // call the header
	include("pages/db_connect.php");
	?>
    
    <div id="main">
    <div id="top">
    </div>
    
    <div id="middle">
<div style=" min-height:700px; padding-left:20px; margin-left:20px;">  <div style="height:auto; width:280px; float:left; ">		
<center><h4>Badminton </h4></center>
<hr/>
<br/>
<script>
function deletesp(e){
	var name=e;
	//var x=document.getElementById(e).value;
	window.alert(name);
	
	}
 </script>
<?php 
@$admin=$_GET['admin'];

$b=mysql_query( "SELECT * FROM sportsman,Sportsman_Sport WHERE (Sportsman.Sportsman_ID = Sportsman_Sport.Sportsman_ID) and (Sportsman_Sport.Sport_ID =1)and(Sportsman.DELETE=0)  order by First_Name " ,$db);
while($r1= mysql_fetch_array($b)){
$rfn_b=$r1['First_Name'];
$rln_b=$r1['Last_Name'];
$img_b=$r1['IMG_NAME'];
$id_b=$r1['Sportsman_ID'];

if(@$admin=="ok"){ ?>
<a href="#" onClick="deletesp('<?php echo $id_b; ?>')"><img src="images/delete.png"/></a><?php }?><a href="Profile.php?action2=sportman&view=<?php echo $id_b;?>&keepThis=true&TB_iframe=true&height=500&width=950"  title="Badminton players" class="thickbox">
<?php if(!$img_b==null){?><img src="pages/sp_image/upload/<?php echo $img_b;  ?>" width="80px" height="100px"> <?php }else{
?><img src="pages/sp_image/upload/Empty Face.jpg" width="80px" height="100px"> <?php	
	}?>
<?php echo $rfn_b."  ".$rln_b."<br/>";?></a>
<?php

}
?>





</div>
<div style="height:auto; width:280px; padding-left:10px; float:left;background:url(images/line.gif) repeat-y; min-height:700px;"><center>	<h4>
Squash</h4></center><hr/><br/>

<?php


$s2=mysql_query( "SELECT * FROM sportsman, sportsman_sport WHERE (sportsman.Sportsman_ID =sportsman_sport.sportsman_id) and(sportsman_sport.sport_id=2)and(Sportsman.DELETE=0) " ,$db);
while($rsq3= mysql_fetch_array($s2)){
$rfn_sq=$rsq3['First_Name'];
$rln_sq=$rsq3['Last_Name'];
$rspimg_sq=$rsq3['IMG_NAME'];
$id_s=$rsq3['Sportsman_ID'];

if(@$admin=="ok"){ ?>
<a href="#" onClick="deletesp('<?php echo $id_s; ?>')"><img src="images/delete.png"/></a> <?php }?> <a href="Profile.php?action2=sportman&view=<?php echo $id_s;?>&keepThis=true&TB_iframe=true&height=600&width=950"  title="Badminton players" class="thickbox">
<?php if(!$rspimg_sq==null){?><img src="pages/sp_image/upload/<?php echo $rspimg_sq;  ?>" width="80px" height="100px"> <?php }else{
?><img src="pages/sp_image/upload/Empty Face.jpg" width="80px" height="100px"> <?php	
	}?>
<?php echo $rfn_sq."  ".$rln_sq."<br/>";?></a><?php

}
?>




</div><div style="height:auto; width:280px; padding-left:10px; float:left;background:url(images/line.gif) repeat-y; height:100%;"><center><h4>	
Weightlifting</h4></center><hr/><br/>

<?php



$wname=mysql_query( "SELECT * FROM sportsman,Sportsman_Sport WHERE (Sportsman.Sportsman_ID = Sportsman_Sport.Sportsman_ID) and (Sportsman_Sport.Sport_ID =4)and(Sportsman.DELETE=0) order by First_Name " ,$db);
while($rw3= mysql_fetch_array($wname)){
$rfn_w=$rw3['First_Name'];
$rln_w=$rw3['Last_Name'];
$img_w=$rw3['IMG_NAME'];
$id_W=$rw3['Sportsman_ID'];




if(@$admin=="ok"){ ?>
<a href="#" onClick="deletesp('<?php echo $id_W; ?>')"><img src="images/delete.png"/></a><?php }?><a href="Profile.php?action2=sportman&view=<?php echo $id_W;?>&keepThis=true&TB_iframe=true&height=600&width=950"   title="Badminton players" class="thickbox">
<?php if(!$img_w==null){?><img src="pages/sp_image/upload/<?php echo $img_w;  ?>" width="80px" height="100px"> <?php }else{
?><img src="pages/sp_image/upload/Empty Face.jpg" width="80px" height="100px"> <?php	
	}?>
<?php echo $rfn_w."  ".$rln_w."<br/>";?></a>  <?php

}
?>
</div>
</div>
 
     </div>
   <div id="bottom">
</div>
        
   <?php
   include("header_footer/footer.html"); // call the footer
   ?>