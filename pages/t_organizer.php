<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tournament organizer profile</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>

<style type="text/css"> 
.right {

width:55%;  float:left; padding-left:30px;
}
p { margin: 10px 0; }
</style>

</head>

<body onLoad="Reset()">
<div>

<div id="left" style="float:left; height:600px; width:35%; margin-left:20px;">
<br/>
<center><h3> Tournament Organizing History  </h3></center>
<?php 

if(!session_id())
session_start();

echo "Name of the tournament : <br/>";
$t=mysql_query( "SELECT * FROM entry_forms WHERE TO_ID = '".$_SESSION['idto']."' " ,$db);



while($row_t=mysql_fetch_array($t)){
$sport=$row_t['SPORT'];

$tournament=$row_t['TOURNAMENT'];

$sports=mysql_query( "SELECT Sport 	 FROM sport " ."WHERE Sport_ID= '" .$sport. "' " ,$db);
$row_sports=mysql_fetch_array($sports);
$sport_name=$row_sports['Sport'];
?>
<a href="pages/Requests.php?tournament=<?php echo $tournament;?>&idto=<?php echo $_SESSION['idto'];?>&keepThis=true&TB_iframe=true&height=500&width=800"  title="Responsing for sportman requests" class="thickbox"> 
<span style="color:#FFF;"><?php 

echo $tournament."--".$sport_name;   ?></span></a> <br/>
 <?php 
  
}

?>



</div>
<div class="right" >
  <div id='content'>
		<div id='osx-modal'>
			<h3>Organise your Tournament</h3>
			<p> <i>IN Sportlk ,you can organize your tournamnet.</i> <br/>
            Step 1 : Click below <br/>
            step 2 : select your sport <br/>
            step 3 : payment  & organize your tournamnet</p>
<a href="tournament.php?idto=<?php echo $_SESSION['idto']; ?>">  <img border = "0" src="./images/hotlinks/Organize.png" width = "60px" height = "60px" align="top"/> Tournamnet OrganizeClick here</a>
           </div>
           </div>

</div></div>
 
 
	  <div style="float:left; padding-left:30px; width:55%;"> 
      <h3>Sponsorship for your tournamnet</h3>
        <i> you can send massege for sponsors if you want sponsorship for your tournamnet. your massage will be sending sponsors who registered in sportslk. </i>
        
        
        <?php 
		include("pages/to_sponsorship_form.php");
		
	
		
		?>
        </div> 
		

 


</body>
</html>
