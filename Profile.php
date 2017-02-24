
<?php
@$spview=$_GET['view'];
if(!$spview){
	include ("./header_footer/header.php"); // call the header
	 }
?>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/body.css" type="text/css" media="screen" />
<script type='text/javascript' src='js/jquery.js'></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<script type='text/javascript' src='js/osx.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>


 <style type="text/css">
 .picture{
	 width:100%;
	 height:370px;
	 background:#9C0;
	 margin-bottom:10px;
	 }
            #back {
		margin-top:10px;
		background-image: url(images/line.gif) ;
	background-repeat:repeat-y;
	background-position: 39% ;
	min-height:600px;
	 
		}
	 </style>  
<div id="main">
    <div id="top">
    </div>
    
    <div id="middle">
   	  
		  <?php
          include ("pages/db_connect.php");
   

	         $z=empty($_GET['action2']) ? 'index' : $_GET['action2'];
			 switch($z){
		
		            case "sportman":
					 if(!session_id())
					  session_start();
					  
					 
					  if($spview){
					  $_SESSION['idsp']=$spview;
					  
					  }
					
					   @$entersp=$_GET['entersp'];
					    $sp=mysql_query( "SELECT * FROM sportsman WHERE Sportsman_ID='" .$_SESSION['idsp'] . "' " ,$db);
					   $sp_result = mysql_fetch_array($sp);
					  
					   $B3=$sp_result['Mobile'];
					   $_SESSION['First_Name']=$sp_result['First_Name'];
					   $_SESSION['Last_Name']=$sp_result['Last_Name'];
					   $_SESSION['E_Mail_sp']=$sp_result['E_Mail'];

                      if($entersp=="new")
					  {
	                    mysql_query("INSERT INTO sportsman_sport SET Sportsman_ID='".$_SESSION['idsp']."', Sport_ID='".$_SESSION['Sport']."'",$db);
					   }
						
					if(!$spview){	
						?>
						<div id='container' >
							   <div id='logo' style=" width:100%"><div style=" float:right; background:#CF0; width:500px; height:60px "><center>Adverting</center></div>
									   <h1> Welcome &nbsp;<span><?php echo $_SESSION['First_Name'];?></span></h1>
										<span class='title'>The Sportlk Sportman network of User Id <?php echo $_SESSION['idsp']; ?></span>
								</div>
						</div><?php }?>
                        <!--///////////////////////////////////////////middle contain///////////////////////////////////////////////////-->
                       <div>
                          <center>
                          <div style="font: 14px/22px verdana, arial, sans-serif; color:#900"> <?php if(!$spview){?> You have Logged into Sportlk sportman member Area.. <?php }else{ ?> you are not a member. you can check sportsman's information here <?php } ?>
                          </div>
                          </center><hr/>
                          
                          <div id="back"> 
                                   <div  style="float:right; width:59%;  ">
       <!-- modal content -->
                    <div id="osx-modal-content">
                        <div id="osx-modal-title">Requestting Box</div>
                              <div class="close"><a href="#" class="simplemodal-close">x</a></div>
                                <div id="osx-modal-data">
				
                                <table border=‘0’ style="font-size:14px; color:#00F;">
                                   <i style="font-size:10px;"><?php echo "My Id : ".$_SESSION['idsp']."  ";  $a=$_SESSION['idsp'];?></i>
                
                                <form method="post" action="profile.php?action2=sportman&id=ok&idsp=<?php echo $a;?>" onsubmit="return                                 confirmSubmit()"  >
                                <font  >This massage send to sponsors</font>
                                <br/> 
                                <tr><td style="padding-left:5px; "> 
                                
                                Name of the Tournament  :</td><td >
                                
                                <span id="sprytextarea1"><label><input type="text" name="sub"  size="65" id="sub"></input></label><span class=                                 "textareaRequiredMsg">A value is required.</span></span> </td></tr>
                                <tr>
                                <tr><td style="padding-left:5px; "> 
                                
                                 your request :</td><td colspan="2">
                                
                                <span id="sprytextarea1"><label><textarea name="request" cols="50" rows=‘6’ id="request"></textarea></label><span                                 class="textareaRequiredMsg">A value is required.</span></span><span id="requestError" style="color:#F00;display:                                 none">Empty Request or Empty Subject.please fill both.</span></td></tr>
                                <tr>
                                <td ></td><td style="margin-left:5px; width:10px; padding-left:40px;">
                                <input type="submit" value="Send" /></td><td style=" width:10px;"><input type="reset" value="Clear"  /></td><span>                                 Just write reason & etc..No need to mention your information.</span></tr>
                                </form>
                              
                                    <script LANGUAGE="JavaScript">
                    
												<!--
												// Nannette Thacker http://www.shiningstar.net
												function confirmSubmit()
												{
													 var isValid2=true;
														 var  name=document.getElementById("request").value;
														 var  subject=document.getElementById("sub").value;
														 if(name ==""||subject==""){
															 isValid2=false;
															 document.getElementById("requestError").style.display="block";
															 }
															 else {document.getElementById("requestError").style.display="none";
															 var agree=confirm("Are you sure you wish to continue?");
												if (agree)
													return true ;
												else
													return false ;
															 }
													
													
												return isValid2;
												}
												// -->
                                      </script>
                                </table>
                
                
				              <p ><button class="simplemodal-close">Close</button> <span>(or press ESC or click x if you dont want to send request)                             </span></p>
			         </div>
	          </div>
   


                 <!--////////////////////////////////////////////////////////////////////////////////-->
               
           
<?php       include("pages/sportsman_profile.php")?>
          </div>

<?php if(!$spview){ ?>
            <div id="left" style="height:650px;">
            <div id='osx-modal' >
                                       <center><h2>Sponsorship Area</h2></center><hr/>
                                        <h4> If you want send request for sponsorship </h4>
                                        <center><input type='button' name='osx' value='Request ' class='osx demo'/> or <a href='#' class='osx'>click                                              here</a></center>
                                        <br/><hr/>
            	<?php @$ok=$_GET['id'];
				
				if($ok=='ok'){ ?>
				  
				 <div style="height:300px;;width:100%;font:16px/26px Georgia, Garamond, Serif;overflow-y:scroll;                                                   overflow-x:hidden;   ">
					<?php //create massage for mail
				  
				   
				   $A=mysql_query( "SELECT Sport_ID FROM sportsman_sport WHERE Sportsman_ID='" .$_SESSION['idsp']  . "' " ,$db);
				   $A1 = mysql_fetch_array($A);
				   $_SESSION['Sport']=$A1['Sport_ID'];
				   
				   $C=mysql_query( "SELECT Sport FROM sport WHERE Sport_ID='".$_SESSION['Sport']." ' " ,$db);
				   $C1 = mysql_fetch_array($C);
				   $C2=$C1['Sport'];
				   
					$idsp=$_SESSION['idsp'];
					
					
					
					
					
					
					include_once  'pages/weightlifting/class.phpmailer.php';
	                include_once  'pages/weightlifting/class.smtp.php';
	
		$mail = new PHPMailer();	
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "localhost"; // SMTP server
			
			
					$body="   $_POST[request] <br/>";
					$body.="  $_SESSION[First_Name] $_SESSION[Last_Name] \n<br/>";
					$body.="  $_SESSION[E_Mail_sp]\n<br/>";
					$body.="  $C2\n<br/>";
					$body.="  $B3\n<br/>";
					$body.="<h5>if you have any problem    </h5>Check out  <br/><i>http://localhost/SportsLK%20website2/profile.php?idsp=$idsp&entersp=member&action2=sportman . 
					</i>";
			        $body.= "
		<br/>
	<p>Thank you,</p>
	<p>sportsman;</p>
	<p>www.sportslk.COM</p>";

			$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 587; 
			$mail->Username   = "sportslk.ultrasoft";          // Your GMAIL username
			$mail->Password   = "sportslk2011"; // Your GMAIL password
			$mail->SetFrom('sportslk.ultrasoft@gmail.com', 'sportslk.com');
			$mail->AddReplyTo($_SESSION['E_Mail_sp'],"sponsorship sportslk.INTERIOR");
			$mail->Subject    = "Sponsorship for  ".$_POST['sub'];
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			$mail->MsgHTML($body);
				
					print " <center><i style='font-size:14px;> Email address of $C2  Sponsors</i></center>";
					$i=0;
				
					$sponsor_result=mysql_query( "SELECT Sponsor_ID FROM sponsor_sport WHERE Sport_ID='" . $_SESSION['Sport'] . "' " ,$db);
					while($row3 = mysql_fetch_array($sponsor_result)){
					$result3=$row3['Sponsor_ID'];
					$sponsor_result2=mysql_query( "SELECT First_Name,Last_Name FROM sponsor WHERE Sponsor_ID='" .$result3 . "' " ,$db);
					$row_4 = mysql_fetch_array($sponsor_result2);
					$Firstname=$row_4['First_Name'];
					$Lastname=$row_4['Last_Name'];
					
					echo "<span style=font-size:11px; color:#ccc>".$Firstname." ".$Lastname." -  "; 
					$mail_result=mysql_query( "SELECT E_Mail FROM sponsor WHERE Sponsor_ID='$result3' " ,$db);
					while($row4 = mysql_fetch_array($mail_result)){
					$result4=$row4['E_Mail'];
					
					?><i style="color:#FF9;"> <?php echo $result4;
					$em[$i++]=$result4;
					?></i></span><br/><?php
			
			$address = "hardsujan@gmail.com";//recivers mail address.
			$mail->AddAddress($address, "sponsorship");
			echo $mail->AddAddress($address, "sponsorship");
			if(!$mail->Send()) {
			  echo "Mailer Error: ";
			} else {
			  echo 'Sucess'; 
			}
					
				
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////			
					// request and mail set to requeat table(database)
					}}
				   mysql_query("INSERT INTO request SET Sportsman_ID='".$_SESSION['idsp']."',Subject='$_POST[sub]',                                                Request='$body', Date_Time=sysdate(), Status='0'",$db);
						?>
					
					  <br/><br/><span style="font-family :Verdana, Geneva, sans-serif; font-size:12px; color:#ff9;">
						<?php
						print $body ;
					   print "Thank you for your request.";
					  
						?></center></span>
                        
			  </div><hr/>
				 <?php   }?>
				 
			
                 </div>
                    <div>
                        <br/>
                        <center><h2>Responses to your request</h2></center><br/>
                        You have <b style="font-size:16px; color:#0F0;"><?php $count=mysql_query( "SELECT COUNT(*) FROM request_respond WHERE                   	Sportsman_ID='" .$_SESSION['idsp'] . "' " ,$db);
                        $xx = mysql_fetch_array($count);
                        
                        echo $xx['COUNT(*)'];?></b> responsoses from sponsors <br/><br/><br/>
                        <b>Responsors from sponsors </b><br/>
                        <!--///////////////////////////////////////////////////////////////////////////////-->
                        
						<table>
						<?php 
						
                       
                        $sportsmanid=mysql_query( "SELECT * FROM request_respond  " ."WHERE Sportsman_ID = '".$_SESSION['idsp']."' " ,$db);
                 
                        while($row4=mysql_fetch_array($sportsmanid)) {
                        $result4=$row4['Subject'];
                        $result5=$row4['Sponsor_ID'];
                        $result6=$row4['Response'];
						$id_rs=$row4['ID'];
                        
						$snname2=mysql_query( "SELECT First_Name,Last_Name	 FROM sponsor  " ."WHERE Sponsor_ID = '".$result5."' " ,$db);
                 
                        $rsn=mysql_fetch_array($snname2);
                        $snf=$rsn['First_Name'];
						$snl=$rsn['Last_Name'];
						
						
                        ?>
                        <tr><td>
<input type="checkbox" name="xxx[]" value="<?php print $id_rs; ?>"></td><td width="150px"><a href="pages/recieve_end.php?sub= <?php echo $result6;?>&snid=<?php echo $result5;?> &a=ok&keepThis=true&TB_iframe=true&height=500&width=800" title="Responsing for sportman requests" class="thickbox"><span style="color:#F30;"><u>    <?php echo $result4."</td><td>".$snf." ".$snl;   ?></u></span></a> </td></tr>
                         <?php }  ?>
                         </table>
                        <!--///////////////////////////////////////////////////////////////////////////////-->
                        
                        <br/><br/><b>My Requests</b><br/> 
                        <?php  $status=mysql_query( "SELECT Status,Subject FROM request WHERE Sportsman_ID='" .$_SESSION['idsp'] . "' " ,$db);
                        while($rowst = mysql_fetch_array($status)){
                        $st=$rowst['Status'];
                        $sb=$rowst['Subject'];
                        if($st=='1'){ echo $sb."<br/>";}}
						
						}else{
							
							?> 
                         <?php   include("voting/index.php"); ?>
							<?php 
							}
                        ?>
            
                   </div>
                    
                    
             </div>
       </div>
   </div>
</div>
    <?php  break;






		
//////registered sponsors 	response for requests of sportmans ///////////////////////////////////////////////////////////////////////////////////
		case "sponsor":
		 if(!session_id())
         session_start();
		 @$entersn=$_GET['entersn'];
		 
		 $sn=mysql_query( "SELECT * FROM sponsor " ."WHERE Sponsor_ID = '" . $_SESSION['idsn'] . "' " ,$db);
$row2= mysql_fetch_array($sn);
$_SESSION['f_name']=$row2['First_Name'];


if($entersn=="new"){		
@$sponsorid_result=mysql_query( "SELECT * FROM sponsor " ."WHERE Sponsor_ID = '" . $_SESSION['idsn'] . "' " ,$db);
$row2 = mysql_fetch_array($sponsorid_result);
$_SESSION['f_name']=$row2['First_Name'];


@mysql_query("INSERT INTO sponsor_sport SET Sponsor_ID='".$_SESSION['f_name']."', Sport_ID='".$_SESSION['Sport_sn']."'",$db);
}

?><div id='container'>
	<div id='logo'>
		<h1> Welcome &nbsp;<span><?php echo $_SESSION['f_name'];?></span></h1>
		<span class='title'>The Sportlk Sponsor network of User Id <?php echo $_SESSION['idsn']; ?></span>
	</div>
	
</div>


		
		<div style="height:600px; margin:auto;">  
		<?php include ("pages/sponsor.php");?>
        </div>
		<?php 
	
		break;
	


//////registered sponsors 	response for requests of sportmans ///////////////////////////////////////////////////////////////////////////////////
		case "t_organizer":
		 if(!session_id())
         session_start();
		 @$entersn=$_GET['entersn'];
		

		
@$toid_result=mysql_query( "SELECT * FROM tournament_organizer WHERE to_id = '" . $_SESSION['idto'] . "' " ,$db);
$row3 = mysql_fetch_array($toid_result);
$_SESSION['u_name3']=$row3['First_Name'];
$_SESSION['E_Mail_to']=$row3['E_Mail'];


?><div id='container'>
	<div id='logo'>
		<h1> Welcome &nbsp;<span><?php echo $_SESSION['u_name3']; ?></span></h1>
		<span class='title'>The Sportlk tournament organizer network of User Id <?php echo $_SESSION['idto']; ?></span>
        
	</div>
	
</div>


		
		<div style="height:600px; margin:auto;">
		<?php include ("pages/t_organizer.php");?>
        </div>
		<?php 
	
		break;		
		
		
		
///////////////////////request massage form  sportsman////////////////////////////////////////////////////////////////////////////
		
	
		
		
	
		 default :
		
		 @$login2=$_POST['login2'];
	   @$pass2=$_POST['pass2'];
	   
@$sign_in=mysql_query( "SELECT * FROM sign_in " ."WHERE User = '" .$_POST['login2']. "' && Password= '" .$_POST['pass2']. "'" ,$db);
$row_1 = mysql_fetch_array($sign_in);
$user=$row_1['User'];	 
$password=$row_1['Password'];
$type=$row_1['Type'];
$idsn=$row_1['Id'];

echo $user." ";
echo $password." ";
echo $type;
	   
	   if($login2==$user&& $pass2==$password&&$login2!=null&&$type=="sp" )
	      {
			  session_start();
			 $_SESSION['login']=$_POST['login2'];
			  $_SESSION['idsp']=$idsn;
			 
			
			   if(session_id())
			     {
			      header("Location: profile.php?entersp=member&action2=sportman");
				  echo $type;
		         } else {header("Location: signin.php");}
		    
		   
		   }
		   if($login2==$user&& $pass2==$password&&$login2!=null&&$type=="sn" )
	      {
			  session_start();
			  $_SESSION['u_name']=$_POST['login2'];
			  $_SESSION['idsn']=$idsn;
			   if(session_id())
			     {
			     header("Location: profile.php?action2=sponsor&entersn=member");
				  
		         } else {header("Location: signin.php");}
		    
		   }
		   
		 if($login2==$user&& $pass2==$password&&$login2!=null&&$type=="to" )
	      {
			  session_start();
			 // $_SESSION['u_name3']=$_POST['login2'];
			   $_SESSION['idto']=$idsn;
			  
			   if(session_id())
			     {
			     header("Location: profile.php?action2=t_organizer&entersn=member");
				  
		         } else {header("Location: signin.php");}
		   
		   
		   }
		  
			   
			  
			  
	
		
	   
	   
		
		break;
		
		
		
		
		
		}  

	?>  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div> 
                
</div>

   </div>
   <div id="bottom">
</div>
        
   <?php
   include("./header_footer/footer.html"); // call the footer
   ?>
 <script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
   </script>
