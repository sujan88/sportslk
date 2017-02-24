 <?php  
 
 @$msg=$_GET['msg'];
 if($msg){
 ?> <script>
 window.alert("<?php echo $msg; ?>");
 </script>    <?php
 }?>
 
 <form action="profile.php?action2=t_organizer&ok=ok"  onSubmit="check()"  method="post">

 <div style="text-align:left; padding-top:5px;">

               

    

  
 <select name="sport" id="sport">
 <option  value="0">Select  your sport</option>
<?php  

 $s=mysql_query( "SELECT * FROM sport ",$db);
                        while($rowst = mysql_fetch_array($s)){
                        $si=$rowst['Sport_ID'];
					    $st=$rowst['Sport'];
						
			?> <option  value="<?php echo $si;?>"><?php echo $st;?></option><?php			
						}
						?>
              
</select> <i style="color:red;"> * requred</i><br/>
<span id="Error" style="color:#F00;display:none">Please select your sport.</span>

           </div>



        <div style="text-align:left; padding-top:5px;">

                <label for="msg">Message:<span class="required"> *</span></label>

        </div>

        <div style="text-align:left;">

                <textarea style="text-align:left; margin:0 0 0 10px;" id="msg" name="msg"  cols="50" rows="10"></textarea>
<br/> <span id="Error2" style="color:#F00;display:none">Please write your massage.</span>
        </div>



<div style="text-align:left; padding-top:8px;">

 



  <input type="submit"  value="Submit" /> <input type="reset" style="cursor:pointer; margin:0;" value="Reset"  /> 
</div>



</form>
<script>
function check(){
		var isValid = true;
	var sport1=document.getElementById("sport").value;
	var msg1=document.getElementById("msg").value;
	
	if(sport1 ==0) 
	{
		isValid = false;
		document.getElementById("Error").style.display = "block";
	}
	else document.getElementById("Error").style.display = "none";
	
	if(msg1 =="") 
	{
		isValid = false;
		document.getElementById("Error2").style.display = "block";
	}
	else document.getElementById("Error2").style.display = "none";
	
	return isValid;
}

</script>



<div style="padding:20px; margin-top:30px;">
<?php 

@$sp=$_POST['sport'];
@$msg=$_POST['msg'];
	if($sp)
	{ 
	?>
				  
				 <div style="height:300px;;width:100%;font:16px/26px Georgia, Garamond, Serif;overflow-y:scroll;                                                   overflow-x:hidden;  ">
					<?php //create massage for mail
					include_once  'pages/weightlifting/class.phpmailer.php';
	                 include_once  'pages/weightlifting/class.smtp.php';
					
					@  $C=mysql_query( "SELECT Sport FROM sport WHERE Sport_ID='".$_POST['sport']." ' " ,$db);
				   $C1 = mysql_fetch_array($C);
				   $C2=$C1['Sport'];
				   
				   
			
					
			
					
				   $spn=mysql_query( "SELECT Sponsor_ID FROM  sponsor_sport WHERE Sport_ID='".$sp."' " ,$db);
				   while($r= mysql_fetch_array($spn)){
				   $sponsor=$r['Sponsor_ID'];
					$sponsor_result2=mysql_query( "SELECT First_Name,Last_Name,E_Mail  FROM sponsor WHERE Sponsor_ID='" .$sponsor . "' " ,$db);
					$row_4 = mysql_fetch_array($sponsor_result2);
					$Firstname=$row_4['First_Name'];
					$Lastname=$row_4['Last_Name'];
					$mail_ad=$row_4['E_Mail'];
					  echo $mail_ad."<br/>";
				
			
					
				  
					
						$mail = new PHPMailer();	
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "localhost"; // SMTP server
			$body="A new tournamnet organizer request has been submitted : \n<br/>";
			$body.=" $msg \n<br/>
			</br>
	<p>Thank you,</p>
	<p>The Tournament organizer;</p>
	<p>www.sportslk.COM</p>";
		

			$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 587; 
			$mail->Username   = "sportslk.ultrasoft";          // Your GMAIL username
			$mail->Password   = "sportslk2011"; // Your GMAIL password
			$mail->SetFrom('www.sportslk.com', 'sportslk.com');
			$mail->AddReplyTo($_SESSION['E_Mail_to']);
			$mail->Subject    = $C2." Tournament sponsorship";
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			$mail->MsgHTML($body);
			
			//$address = $mail;
			$address = $mail_ad;//recivers mail address.
			$mail->AddAddress($address, "sportslk");
			echo $mail->AddAddress($address, "sportslk");
			if(!$mail->Send()) {
			  echo "Mailer Error: ";
			 
			} else {
			  echo 'Sucess'; 
			  
			}
				   
								   
				
					
				   }
				
			?><br/><i style="color:#009;"> <?php	echo $body;
			header("Location: profile.php?action2=t_organizer&ok=ok&msg=Sent massage");  ?> </i> <br/><?php
				
	}
		?></div>	