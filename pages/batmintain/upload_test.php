
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>upload</title>
</head>

<body>

<div style="color:#F00;">
<?php

 include_once  'class.smtp.php';
require("class.phpmailer.php");

if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']["name"]);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if ((($ext == "docx")||($ext == "doc")||($ext == "rtf")||($ext == "pdf") )&&
	($_FILES["uploaded_file"]["size"] < 50120000)) {
    //Determine the path to which we want to save this file
	
 $newname = dirname(__FILE__).'/upload/'.$filename;
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
		$insertdata = 1;
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
          // echo "It's done! The file has been saved as: ".$newname;
		  
		
		
		$query ="INSERT INTO entry_forms (TOURNAMENT,SPORT,TO_ID)VALUES( '$filename','$sport','$toid')";
			
				 $insertstamp = mysql_query($query) or die (mysql_error());
		
		
		
		
		$mail = new PHPMailer();	
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "smtp.gmail.com"; // SMTP server
			$body = "Hi Sujan</br><br/><p> You recentlty registered with 
		HIDMS using this email address.</br>
		<p>To activate your HIDMS account, click below link</br></br></p>
		<p>(If clicking on the link doesn't work, try copying and pasting it into your browser.)</p>
	<p></br>If you did not register for a AUIT account, please disregard this message.</br></p> 
		<p>Check out http://www.gophiuni.com/support/help if you have any questions.</br></p>
		</br>
	<p>Thank you,</p>
	<p>The Admin;</p>
	<p>www.HIDMS.COM</p>";

			$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 587; 
			$mail->Username   = "hardsujan";          // Your GMAIL username
			$mail->Password   = "weightlifting"; // Your GMAIL password
			$mail->SetFrom('hardsujan@gmail.com', 'HIDMS.com');
			$mail->AddReplyTo("hardsujan@gmail.com","ShopingCart HIDMS.INTERIOR");
			$mail->Subject    = "ShopingCart From HIDMS.INTERIOR";
			$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
			
			//loop the Attachments to be added ...
        

     $mail->AddAttachment("batmintain/upload"."/".$filename);
			
			$mail->MsgHTML($body);
			
		/*	$spid=mysql_query( "SELECT Sportsman_ID FROM sportsman_sport " ."WHERE Sport_ID= '$sport' " ,$db);
while($r = mysql_fetch_array($spid)){
$spid_result=$r['Sportsman_ID'];

$add=mysql_query( "SELECT E_Mail FROM sportsman " ."WHERE Sportsman_ID= '$spid_result' " ,$db);
$em = mysql_fetch_array($add);
$email_add=$em['E_Mail'];*/


$address = "mksfernando@gmail.com";//recivers mail address.
			$mail->AddAddress($address, "StampClub");
			echo $mail->AddAddress($address, "StampClub");
			if(!$mail->Send()) {
			  echo "Mailer Error: ";
			} else {
			  echo 'Sucess'; 
			}			
//}
			
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
	
				
		
		  
		
		  } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
		
      }
  } else {
     echo "Error: Only .jpg images under 5mb are accepted for upload";
  }
} else {
 echo "<i> No file uploaded</i>";
}
?>   
</div>
</body> 
</html>
</body>
</html>