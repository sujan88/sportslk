<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<?php 
@$del=$_GET['del'];
 if($del){ 
 if($del==0){
	?> <script>
window.alert("please select massage(s) that you want delete");
</script>
	<?php  }else{
 ?>
<script>
window.alert("<?php echo $del;?>  massages  Deleted.");
</script>

<?php }}?>



<center><h3> Requests from sportmans </h3></center>
<?php 
if(!session_id())
session_start();

$spnsport=mysql_query( "SELECT Sport_ID FROM sponsor_sport " ."WHERE Sponsor_ID = '" . $_SESSION['idsn'] . "' " ,$db);
$row_snsport=mysql_fetch_array($spnsport);
$snsport=$row_snsport['Sport_ID'];

?><form method="post" action="check form.php?action=delete_rq">
<table >
<?php
$sportsmanid=mysql_query( "SELECT Sportsman_ID 	 FROM sportsman_sport " ."WHERE Sport_ID = '" .$snsport. "' " ,$db);
while($row4=mysql_fetch_array($sportsmanid)) {
$result4=$row4['Sportsman_ID'];

$spname2=mysql_query( "SELECT First_Name, Last_Name 	 FROM sportsman " ."WHERE Sportsman_ID = '" .$result4. "' " ,$db);
$rsp=mysql_fetch_array($spname2);
$spf=$rsp['First_Name'];
$spl=$rsp['Last_Name'];

$r_subject=mysql_query( "SELECT Subject,ID  FROM request " ."WHERE Sportsman_ID = '" .$result4 . "' " ,$db);
while($row4_2=mysql_fetch_array($r_subject)){

$result4_2=$row4_2['Subject'];
$result_id=$row4_2['ID'];


?><tr><td>
<input type="checkbox" name="xxx[]" value="<?php print $result_id; ?>"></td><td>
 <a href="pages/Requests.php?id=<?php echo $result4;?>&subject=<?php echo $result4_2;?>&keepThis=true&TB_iframe=true&height=500&width=800"  title="Responsing for sportman requests" class="thickbox"> 
<span style="color:#FFF;">
<?php 

echo $result4_2."</td><td>".$spf." ".$spl;   ?></span></a></td></tr> 
 <?php 
  
}}

?>
<input type="submit" value="Delete" />
</table>
</form>







</div>
<div class="right" >
  <div id='content'>
		<div id='osx-modal'>
			<h3>Now you Select your sportman</h3>
			<p>IN Sportlk ,you can select your own sportman and  ou can give sponsorships for them. This is very user freindly net work area.Thank you for coiming our Web site...</p>
           </div>
           </div>

</div></div>
 
 
	  <div style="float:left; padding-left:30px; width:55%;"> 
      <h3>About Sportslk more</h3>
        <p>These days, people are busier, their requirements are complex and their time has become an important factor. If people can do their day today work using a computer without travelling from place to place, they can save their time and they can align their tasks efficiently. We the ultrasoft team is going to facilitate that concept on the field of sports. Though there are lots of websites on sports very few of them are related to Sri Lankan Sports. But most of them are not properly designed for the requirements of the field of sports. In Sri Lanka there is no proper online service to gather different sports communities together and discuss about prevailing problems in field of sport, arrange sports events and to maintain individual sportsperson's profiles and their performances. Since most website developers do not concern about the types of the users that visit their websites, those efforts have not been successful. In the field of sports there can be school players, national players, sponsors, general viewers etc. To get the attraction of all of them we have to identify all the characters of sports and their roles. If we can give an IT solution for each of their requirements, we can get the attention of them towards our website SportsLK.</p>
        </div> 
		

 


</body>
</html>
