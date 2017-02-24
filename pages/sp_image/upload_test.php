
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>upload</title>
</head>

<body>
<html> 
<body>
<?php include("pages/db_connect.php");?>
<?php



if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 350Kb
  $filename = basename($_FILES['uploaded_file']["name"]);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if (($ext == "jpg") && ($_FILES["uploaded_file"]["type"] == "image/jpeg") && 
	($_FILES["uploaded_file"]["size"] < 1000000)) {
    //Determine the path to which we want to save this file
      $newname = dirname(__FILE__).'/upload/'.$filename;
      //Check if the file with the same name is already exists on the server
      if (!file_exists($newname)) {
        //Attempt to move the uploaded file to it's new place
		$insertdata = 1;
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
          // echo "It's done! The file has been saved as: ".$newname;
		  
		  
		  
		  
		$imgid=$_SESSION['idsp'];
		$e =mysql_query( "SELECT Sportsman_ID FROM  tbl_img ",$db); 
	while($re=mysql_fetch_array($e)){
	$pi=$re['Sportsman_ID'];
	if($pi==$imgid){ mysql_query("UPDATE sportsman set IMG_NAME='$filename' where Sportsman_Id ='$imgid'", $db);
		}
	}
		
		$query ="UPDATE sportsman set IMG_NAME='$filename' where Sportsman_Id ='$imgid'";
			//if($insertdata == 1)
			//{
				 $insertstamp = mysql_query($query) or die (mysql_error());
				//}
				
				// if($insertstamp){
					 
					// $msg = "Stamp Succesfully added to Store";
					 
					// }
					// else { $msg = "Stamp adding failed".$result;}

		$query2 =mysql_query( "SELECT IMG_NAME FROM  sportsman WHERE Sportsman_ID= ".$_SESSION['idsp']."",$db); 
	$row=mysql_fetch_array($query2);
	$pic=$row['IMG_NAME'];?>
     <img src="pages/sp_image/upload/<?php echo $pic;  ?>" width="160px" height="200px">
		  
		  
		  <?php
		  
		  
		
		  } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
		
      }
  } else {
     echo "Error: Only .jpg images under 1mb are accepted for upload";
  }
} else {
 echo "Error: No file uploaded";
}
?>   


</body> 
</html>
</body>
</html>