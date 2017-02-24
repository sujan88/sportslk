
<?php
	include ("./header_footer/header.php"); // call the header 
?>

<div id="main">
    <div id="top">
    </div>
    
    <div id="middle">
   	<div>  
	
		<?php 
		@ $form=$_POST['form'];

	 	switch($form){
		 
		 case "sp":
		  include ("pages/sportman_registerform.php");
		 
		  break;
		  
		 case "sn":
		 include ("pages/Sponsor_registration_form.php");
		
		 break;
		 
		  case "to":
		 include ("pages/tournament_organizer_registration_form.php");
		
		 break;
		 
		
		  
		 default :
@$to=$_GET['to'];		 
@$sign=$_GET['sign'];
if($sign=="out"){
session_start();	 
session_destroy();

?> <i style="color:red;"><?php echo "You are logged out.";
}   ?></i>
        <?php 
		
		
		 if($to=="yes"){
			
			
			if(session_id('Roshan')){
	echo "<h3 style='color:blue; padding:20px;'>you must have to register as a tournament organizer in sportslk. please follow below steps.</h3>";
			}else   header("Location: tournament.php");
	}
 ?> 
      <table style="margin:auto;"> <tr>
      <td > 
      <div style=" margin:auto; width:350px;height:450px;text-align:center; background-image:url(./images/round_background.png)">
      
      <br /> <div style="font-size:36px; "> <center>Register</center> </div>
      <div> <div style="margin-left:40px; margin-top:30px; padding-top:30px; padding-left:10px; padding-right:30px;"> 
      <form method="POST" action="signin.php"> 
      <div style ="font-size:36px; ">Registration form  </div>  <br/>
      <div style ="font-size:16px; ">I would like to sign up as a</div><br/>
     <div style="text-align:left"> <input type="radio" name="form"  value="sp" />Sportsman<br />
      <input type="radio" name="form" value="sn" />Sponsor <br/>
      <input type="radio" name="form" value="to" />tournament organizer <br/> </div><br/>
<br/> <input type="submit" value=" Sign up" style ="width :100; height :60"/> </form></div>
       </div>
      </div> </td>
     <!--<td style="width:1px; margin:auto;"><hr style="width:1px; height:250px;"/> </td>--> 
      
      <td ><div style="margin:auto; width:350px; height:450px;background-image:url(./images/round_background.png)"> <br /><div style="font-size:36px; "><center>Sign in</center></div>
      <div>
	  <div style="  padding-top:30px; padding-left:30px; padding-right:10px;">



<?php include("pages/login_form.php");?>
	  </div>
 </div>
 
      </div>
      </td></tr></table>

      <?php } // check 
	  ?>   
	
        </div>
                
</div>
<div id="bottom" >
</div>
        
   </div>
   
   <?php
   include("./header_footer/footer.html"); // call the footer
   ?>
 