  <script type="text/javascript" src="js/jquery.min.js"></script>
             <link rel="stylesheet" href="css/Css.css" type="text/css"  title="no title"  />
             <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="js/thickbox.js"></script>
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />

 
<?php 

	@$edit_t=$_GET['edit_t'];
	
	switch(@$edit_t){
		////////////////////////////////////////////////////////case photo/////////////////////////////////////////////////////////////
		case 'photo':
		$idsp=$_GET['idsp'];

$upload_image_limit = 5; // How many images you want to upload at once?
$upload_dir			= "pages/sportsman profle/$idsp/"; // default script location, use relative or absolute path









################################# UPLOAD IMAGES
	
		foreach($_FILES as $k => $v){ 

			$img_type = "";

			### $htmo .= "$k => $v<hr />"; 	### print_r($_FILES);

			if( !$_FILES[$k]['error'] && preg_match("#^image/#i", $_FILES[$k]['type']) && $_FILES[$k]['size'] < 1000000){

				$img_type = ($_FILES[$k]['type'] == "image/jpeg") ? ".jpg" : $img_type ;
				$img_type = ($_FILES[$k]['type'] == "image/gif") ? ".gif" : $img_type ;
				$img_type = ($_FILES[$k]['type'] == "image/png") ? ".png" : $img_type ;

				$img_rname = $_FILES[$k]['name'];
				$img_path = $upload_dir.$img_rname;

				copy( $_FILES[$k]['tmp_name'], $img_path ); 
				$feedback .= "Image and thumbnail created $img_rname<br />";
				header("Location: pages/sportsman profle/edit_Profile.php");
			}
		}



	break;
	
	default:
	////////////////////////////////////////////////////////////////////default/////////////////////////////////////////////////////////
	?>





    <style type="text/css">
	.tab_container {
border-bottom-right-radius: 20px;	
-moz-border-radius-bottomright: 20px;
 -webkit-border-radius-bottomright: 20px;
    -khtml-border-radius-bottomright: 20px;
}
	.tab_content {
		margin-top:10px;
		height:550px;
		
			}
			
			.info{
				font-size:16px;
				 font:Calibri; 
				color:#06F
				}
	</style>         
             
             
     <div style="width:100%; ">  
     
     
           
    <script>   $(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});</script>
<ul class="tabs" >
    <li><a href="#tab1">About Me</a></li>
    <li><a href="#tab2">Tournamnets</a></li>
    <li><a href="#tab3">My Gallery</a></li>
    <li><a href="#tab4">Contact me</a></li>
    
</ul>
<style type="text/css">
<!--
#pic { display: none; width:100%; }
#btn{  margin-top:10px; float:left; width:100%;}
-->
</style>
<script language="JavaScript" type="text/javascript">
<!--
function toggleDiv(element){
      if(document.getElementById(element).style.display = 'none')
      {
        document.getElementById(element).style.display = 'block';
		 document.getElementById('btn').style.display = 'none';
      }
      else if(document.getElementById(element).style.display = 'block')
      {
        document.getElementById(element).style.display = 'none';
      }
}
//-->
</script>
<div class="tab_container" >
    <div id="tab1" class="tab_content" >
 <?php if(!$spview){?> <div id="btn"><a href="#"  onClick="toggleDiv('pic');"><img src="images/upload.png"  > </a></div><div id="pic" style="color:#FFF; background:#333;">
 <form enctype="multipart/form-data" action="profile.php?action2=sportman&p=ok&idsp=<?php echo $_SESSION['idsp']; ?>" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    Choose a file to upload: <input name="uploaded_file" type="file" />
    <input type="submit" value="Upload" onClick="toggleDiv('pic');"/>
  </form> </div> <?php }?>
<div style="width:160px; height:200px; background:#999; float:left">


   <div><?php 
   @$p=$_GET['p']; 
   if($p=="ok"){ include("pages/sp_image/upload_test.php"); }
   else  {
	   
	  	$query2 =mysql_query( "SELECT IMG_NAME FROM  sportsman WHERE Sportsman_ID= ".$_SESSION['idsp']."",$db); 
	$row=mysql_fetch_array($query2);
	$pic=$row['IMG_NAME'];
  if(!$pic==null){ ?>  <img src="pages/sp_image/upload/<?php echo $pic;  ?>" width="160px" height="200px"> 
	<?php }else { ?><img src="pages/sp_image/upload/Empty Face.jpg" width="160px" height="200px"> <?php }  }
?></div>
</div><div style=" float:left; width:330px; height:200px; ">

<?php 
$query3 =mysql_query( "SELECT * FROM  sportsman WHERE Sportsman_ID= ".$_SESSION['idsp']."",$db); 
	$row3=mysql_fetch_array($query3);
	$B_Day=$row3['Date_Of_Birth'];	
	$Name=$row3['First_Name'];
	$Name2=$row3['Middle_Name'];
	$Name3=$row3['Last_Name'];
	$G=$row3['Gender'];
	$t=$row3['Tel_Home'];
	$m=$row3['Mobile'];
	$e=$row3['E_Mail'];
	$a1=$row3['Address_No'];
	$a2=$row3['Street'];
	$a3=$row3['Region'];
	$a4=$row3['City'];
	$r=$row3['Rank'];
	
	
	
	
	?> <div style="margin:30px"> <table   style="font-size:18px" ><tr> <td width="100px" class="info"><?php echo "Name  ";?> </td><td><?php  echo $Name." ".$Name2." ".$Name3;  ?></td></tr><tr><td class="info"><?php  echo " Date of Birth  ";?></td><td><?php echo $B_Day; ?></td></tr>
    <tr><td class="info"><?php  echo " Gender  ";?></td><td><?php if($G=='M') echo "Male"; else{ echo"Female"; }?></td></tr></table></div>
	                                     

</div>

        	
            <div style="font: 12px/19px verdana, arial, sans-serif; float:left "><h3>About me 
            
                </h3>	<?PHP if(!$spview){ ?> <a href="pages/sportsman profle/edit_profile.php?idsp=<?php echo $_SESSION['idsp'];?>&keepThis=false&TB_iframe=false&height=600&width=1000"  title="Edit profile" class="thickbox"><span style="color:#009 "> Edit your profile</span></a><br/><br/><?php }?>
             
             
        
                
                Cricket is the leading sport, though there are lots of sports in Sri Lanka. But there are communities in Sri Lanka who are interested in other sports as well. Since they are not given the proper motivation, those sports are not popular and they are restricted to a limited crowd. And there are young talented school sportsmen who are eligible for the national teams but hesitating due to their poor economical conditions. Those kinds of young people should be encouraged, so that it helps to uplift the sportsmanship in Sri Lanka. So, we the ultrasoft team is going to give an IT solution for the prevailing problem in the field of sports in Sri Lanka. We are going to build up an online service that all kinds of sports lovers can join together and have a discussion about sports. </div>
     

        <!--Content-->
    </div>
    <div id="tab2" class="tab_content" >

       
       <!--Content-->
    </div>
    <div id="tab3" class="tab_content">

Weightlifting<br/>
<img src="../images/gallery/1.gif"/><img src="../images/gallery/2.gif"/><img src="../images/gallery/3.gif"/><br/>
Boxing

        <!--Content-->
    </div>
     <div id="tab4" class="tab_content" style="width:100%; padding-left:2px;">
     <br/>
	<hr/>
    <div style="color:#06F; font-family:Verdana, Geneva, sans-serif; padding:30px;">
   <table> <tr>
   <td style="color:#000; width:150px; height:30px;">Tel Home :</td> <td><?php echo "   ".$t; ?> </td>
   </tr>
    <tr>
   <td style="color:#000;width:150px; height:30px;">Mobile  :</td><td> <?php echo "   ".$m; ?> </td>
   </tr>
    <tr>
   <td style="color:#000;width:150px; height:30px;">E Mail   :</td><td> <?php echo "   ".$e; ?> </td>
   </tr>
	<tr>
	<td style="color:#000;width:150px; height:30px;">Address : </td> <td ><?php echo $a1." , ".$a2." , ".$a3." , ".$a4; ?></td>
    </tr>
    
  
	</table>
    
    <br/>
    <br/>
    <form method="post" action="">
     <div style="text-align:left; padding-top:5px;">

                <label for="em">your E mail Address :</label>

        </div>
        
        <div style="text-align:left;">

                <input type="text"  id="em" name="em" size="60" />
<br/> 
        </div>

       <div style="text-align:left; padding-top:5px;">

                <label for="msg">comment :</label>

        </div>

        <div style="text-align:left;">

                <textarea style="text-align:left; margin:0 0 0 10px;" id="msg" name="msg"  cols="50" rows="10"></textarea>
<br/> 
        </div>



<div style="text-align:left; padding-top:8px;">

 



  <input type="submit"  value="Submit" /> <input type="reset" style="cursor:pointer; margin:0;" value="Reset"  /> 
</div>



</form>
	</div>
       
       <!--Content-->
    </div>
  
   
</div></div>
    <?php       
        break;      }

	?>  