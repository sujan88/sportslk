<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>recieve</title>
<style>
#links{
	top:20%
	font-family:Verdana, Geneva, sans-serif;
	background:#CCC;
	-moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    -khtml-border-radius: 20px;
    border-radius: 20px;
	width:500px;
	height:400px;
	
}
.small{
	
	
	color:#333; font-size:12px;
	}
</style>
</head>

<body>
 
<?php 
@$sponsorid_r=$_GET['snid'];
		@$sportsmanid_r=$_GET['spid'];
		@$subject_r=$_GET['sub'];
		@$response=$_POST['respons'];
		@$a=$_GET['a'];
		
		
		include ("db_connect.php");
		
		$S=mysql_query( "SELECT * FROM sponsor WHERE Sponsor_ID='$sponsorid_r' " ,$db);
   $S1 = mysql_fetch_array($S);
   $S2=$S1['Mobile'];
   $S3=$S1['E_Mail'];
   $S4=$S1['Tel_Home'];
   $S5=$S1['First_Name'];
   $S6=$S1['Last_Name'];
   
   
		?> <div ><center>
         <div  id="links"> <?php
		
		if($a!='ok'){
			
	mysql_query("INSERT INTO  request_respond SET Sponsor_ID='$sponsorid_r' ,Sportsman_ID='$sportsmanid_r',Subject='$subject_r',Response='$response',Rs_Date_Time=sysdate()",$db);
	
	
	
	
	
		
		
		 echo " <h2>Thank you  </h2>"; ?> <span class="small"> 
         <?php echo "your response sent to Sportman id :".$sportsmanid_r.".<br/> subject of sportman : ".$subject_r." request.<br/> your id : ".$sponsorid_r; 
		 echo "</span><br/> your response :" .$response;
		 ?><br/>   <span style="font-size:12px; color:#333;"><?php echo "Name  :".$S5." ".$S6."<br/>Tel Home  :".$S4."<br/>Mobile ".$S2 ."<br/> E Mail  :".$S3 ; ?></span> <?php 
		 
		 } else {
			 echo " <h2>Response  </h2> This response from :".$sponsorid_r.".<br/> ".$subject_r." .<br/> Good luck <br/> ";
			    ?> <br/><br/>
                <div class="small" ><?php echo "Name  :".$S5." ".$S6."<br/>Tel Home  :".$S4."<br/>Mobile ".$S2 ."<br/> E Mail  :".$S3 ; ?></div> <?php
			 
			 }
		 ?>
         
         
     </div> 
        </center>   </div>
		
	
</body>
</html>