<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style  type="text/css">
.request{
	-moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    -khtml-border-radius: 20px;
	background-color:#CCC;
	color:#000; font-size:18px; margin:auto;
	width:600px;
	min-height:200px;
	padding:20px;
	font-family:Verdana, Geneva, sans-serif;
	font-size:15px;
	}
.small{
	color:#333; font-size:12px;
	}
</style>
<body>

<?php
 include ("db_connect.php");
	   
	 if(!session_id())
session_start(); 


$x=$_GET['id'];
$y=$_GET['subject'];




?> <i class="small">  <?php echo "sportsman's massage. . . <br/>";
?> </i><?php 

$request=mysql_query( "SELECT * FROM request " ."WHERE Sportsman_ID = '" .$x . "'&&Subject='" .$y . "' " ,$db);
$row5=mysql_fetch_array($request);
$result5=$row5['Request'];
$subject=$row5['Subject'];




$pieces = explode("<br/>", $result5);
    @$request=$pieces[0];
    @$name   =$pieces[1];
    @$email  =$pieces[2];
    @$sport  =$pieces[3];
	@$mobile =$pieces[4];
	@$if =$pieces[5];
	@$check  =$pieces[6];
	@$thank  =$pieces[7];
	
  

if(!$result5==null)
{ ?> <center><h3 style="color:#900; font-family:Verdana, Geneva, sans-serif; font-size:20px;">  <?php echo $subject; ?> </h3><?php 
	?> <div class="request">  <?php echo $request."<br/><br/>". $thank ;  ?>  </div></center><br/>
   <div class="small"><table><tr><td> Name of the sportsman    </td><td><?php echo "  : ".$name;?></td></tr>
   <tr><td>  Sport       </td><td><?php echo "  : ".$sport;?></td></tr>
    <tr><td>   E Mail     </td><td><?php echo "  : ".$email;?></td></tr>
    <tr><td>   Mobile      </td><td><?php echo "  : ".$mobile;?></td></tr>
    <tr><td>  To view sportsman profile Check out     </td><td><?php echo "<span style='font-size:10px;'>";?><a href="<?php echo $check; ?>"><?php echo $check; ?> </span></td></tr>
    </table>
   </div><br/>
    To response this request click <a href="response.php?spid=<?php echo $x;?>&snid=<?php echo $_SESSION['idsn'];?>&sub=<?php echo $y;?>" style="font-size:18px; ">Replay</a>    <?php  }
else {
	echo "Blanck";}?><br/> <?php




?>
</body>
</html>