<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
function validateForm()
{
	var isValid = true;
	var FNum = document.getElementById("FNum").value;//tpnumber
	var Activate = document.getElementById("activate").value;//Activate
	
	//tp number
	if(FNum == "") 
	{
		isValid = false;
		document.getElementById("numberError").style.display = "block";
	}
	else document.getElementById("numberError").style.display = "none";
	
	
	
	//Activate
	if(Activate == "") 
	{
		isValid = false;
		document.getElementById("activeError").style.display = "block";
	}
	else document.getElementById("activeError").style.display = "none";
	
	
	

return isValid;
	
}
</script>

</head>

<body>

<?php


include ("db_connect.php");
?>

<form method="post" action="pages/active sms.php?a=ok" onsubmit="return validateForm()">
<table border='0' style="font-size:14px;  padding-left:35px;">
<tr>
<td >Telephone Number :</td>
<td><input type="text" name='tpno' size=30 id="FNum" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; ">
<font color='red'>eg: 0713558230</font><br />
<span id="numberError" style="color:#F00;display:none">Please Enter Vaid TP.</span>
</td>
</tr>

<tr>
<td width="200px">News allerts :</td>
<td><input type="radio" name="Activate" id="activate" value="1"/>  Activate <br/> <input type="radio" name="Activate" id="activate" value="0"/>
  De-activate<span id="activeError" style="color:#F00;display:none">Please select Active or Deactivate the servise</span>
  </td>
  </tr>

<tr>
<td> </td>

<td><input type="submit" name="sub" value="Register" /> &nbsp;
  <input type="reset" value="Reset" />        
 
  
   
   
  </td>
</tr>


</table>
</form>
<?php 

	if(isset($_POST['sub']))
{
	@$tpnumber = $_POST['tpno'];
	@$activate = $_POST['Activate'];
	
	//echo $tpnumber;
	//echo "<br />";
	
}


	if(isset($tpnumber)){

	
	//global $tpnumber;
	$result = mysql_query("select * from sms where tpno = '$tpnumber'" ,$db);
	$data = mysql_fetch_array($result);
	
	
	
	if($data['tpno'] == $tpnumber & $data['status']== 1 & $activate == 1)
			{
				$m="YOU HAVE ALREADY REGISTERED!!\n THANK YOU FOR REGISTERATION";
					header ("Location:../index.php?m=$m");
			}
	if($data['tpno'] == $tpnumber & $data['status'] == 0 & $activate == 1)
			{	
				mysql_query("UPDATE sms SET status = 1 where tpno = $tpnumber");
			  $m="YOUR ACCOUNT SUCCESSFULLY ACTIVATED";
			  header ("Location:../index.php?m=$m");
			}
	if($data['tpno'] == $tpnumber & $data['status'] == 0 & $activate == 0)
			{
				$m="You have already deactivate your account";
				header ("Location:../index.php?m=$m");
			}
	if($data['tpno']== $tpnumber & $data['status'] == 1 & $activate == 0)
			{
				mysql_query("UPDATE sms SET status = 0 where tpno = $tpnumber");
				$m="YOY HAVE SUCCESSFULLY DEACTIVATE YOUR ACCOUNT";
				header ("Location:../index.php?m=$m");
			}
	
	
	if($data['tpno'] != $tpnumber & $activate == 1)
			{
				//global $tpnumber;
				
				$query2 = ("insert into sms (tpno,status)values('$tpnumber','$activate')");
				
				mysql_query($query2, $db);
				//echo $tpnumber;
				$m="THANK YOU FOR REGISTRATION"."<br />NOW YOU CAN RECEIVE MESSAGE ALLERTS";
		
 
header ("Location:../index.php?m=$m");

				
			}
	if($data['tpno'] != $tpnumber & $activate == 0)
			{
				$m="YOUR ACCOUNT WILL NOT BE CREATED"."<br />PLEASE MAKE SURE YOUR SELECT THE RIGHT OPTION";
				
				header ("Location:../index.php?m=$m");
				
			}
	
	
		
	}
	
 ?>

</body>
</html>