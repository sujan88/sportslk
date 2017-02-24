

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SportsLK</title>
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" href="css/Css.css" type="text/css"  title="no title"  />
        <link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
        
        <link rel="stylesheet" href="css/general.css" type="text/css">
		<link href="css/template.css" rel="stylesheet" type="text/css">
		<link href="css/style1.css" rel="stylesheet" type="text/css">
		<link href="css/style2.css" rel="stylesheet" type="text/css">
		<link href="css/rokmoomenu.css" rel="stylesheet" type="text/css">
			<script type="text/javascript"src="js/jquery.min.js"></script>
            <script type="text/javascript"src="js/newsscroll.js"></script>
            <script type="text/javascript"src="js/index_3.js"></script>
<style type="text/css">
#middle{
	width:900px;
	min-height:0px; 
	background:url(../images/main/middle.png) repeat-y;
	padding-left:30px;
	padding-right:30px;
}
</style>

   </head>

<body>
<?php
	include ("header_footer/header.php");  // call the header
	include("pages/db_connect.php");
	 ?>
    
    <div id="main" >
    <div id="top" ">
    </div>
    
    <div id="middle" style="height:300px;">
<?php 
@$ad=$_GET['ad'];
switch($ad){
	
	case 'check':
	$u=$_POST['usern'];
	$p=$_POST['password'];
	
	if($u=="sujan"&&$p=="123"){
	header("Location: admin.php?ad=admin");}
	else{header("Location: admin.php");}
	
	
	break;
	case 'admin':
 if(!session_id())
	 session_start();
	 $_SESSION['admin']="sujan";
					  
		
				  
?>
<a href="sports_person.php?admin=ok"> sports person  </a><br/>
 
<hr/>
    <br/>
    
    
  
<form  method="post" action="send sms.php">
<table>
<tr>
<td >msg:</td>
<td><textarea name="msg"  id="prfm"cols="30" rows='3'></textarea>
</td>
</tr>


<tr>
<td><br /></td>
 
<td><input type="submit" name="sub" value="send sms" /> &nbsp;
  <input type="reset" value="Reset" /> 
 
    
   
 </td>
</tr>

</table>
</form>







<?php

if(isset($_POST['sub']))
{
	$msg = $_POST['msg'];
	//echo $msg;
}

if(isset($msg)){


	$result = mysql_query("select tpno from sms where status = '1'" ,$db);
	//echo $result2;
		while($data = mysql_fetch_array($result))
			{	
				global $msg;
				$tpnumber = $data['tpno'];
				
				$query2 = ("insert into ozekimessageout (sender,receiver,msg,msgtype,operator,status)values('Sportslk','$tpnumber','$msg','text','sportslk','send')");
				
				mysql_query($query2, $db);
			}
			
			 }
		?><hr/> <?php	 
			 
break;
default:
?><center><div>
<form method="post" action="admin.php?ad=check">
<table><tr><td width="150">
Adminster name</td><td> <input type="text" name="usern" /></td></tr>
<tr><td>
Password
</td><td><input type="password" name="password" /> </td>
</tr>
<tr><td></td><td>
<input type="submit" value="submit" /></td></tr>
</table>

</form> </div></center>
<?php 




}?>
            
</div>

   </div>
   <div id="bottom">
</div>
        
   <?php
   include("./header_footer/footer.html"); // call the footer
   ?>