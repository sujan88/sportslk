			 <div style="color:#FFF; background:#333; padding:20px;">


 <?php
 include("../db_connect.php");
 
 @$sport=$_GET['sport3'];

 if(!session_id())
session_start(); 
   
		$toid=$_SESSION['idto'];
		
		@$name=mysql_query( "SELECT First_Name FROM tournament_organizer " ."WHERE to_id = '$toid' " ,$db);
$rname = mysql_fetch_array($name);
$name_to=$rname['First_Name'];
		echo "<h2>Welcome ".$name_to."....</h2> <i>your index number is ".$toid."</i><br/> you can upload tournamnet entry forms and letters . <br/> 1. click brows and find your document or entry form of tournamnet <br/> 2. click upload buttton to upload it to sportslk.  <br/> 3. you can see history of uploaded files left side of  your profile page.<br/> ";

 include ("upload_test.php");
 ?><br/><br/>
 <form enctype="multipart/form-data" action="batmintain_entries.php?sport3=<?php echo $sport;?>" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    Enter Tournament Name  : <input name="tname" type="text" size="50"/><br/><br/>
      <i> you can upload pdf,doc,image,etc....</i><br/>
    Choose a file to upload: <input name="uploaded_file" type="file" />

    
    <input type="submit" value="Upload" />
  </form> </div> 
