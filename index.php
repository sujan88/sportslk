<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SportsLK</title>
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" href="css/Css.css" type="text/css"  title="no title"  />
       
        
        <link rel="stylesheet" href="css/general.css" type="text/css">
		<link href="css/template.css" rel="stylesheet" type="text/css">
		<link href="css/style1.css" rel="stylesheet" type="text/css">
		<link href="css/style2.css" rel="stylesheet" type="text/css">
		<link href="css/rokmoomenu.css" rel="stylesheet" type="text/css">
			<script type="text/javascript"src="js/jquery.min.js"></script>
            <script type="text/javascript"src="js/newsscroll.js"></script>
            <script type="text/javascript"src="js/index_3.js"></script>


   </head>

<body style="font-family:Calibri" onload="MM_preloadImages('images/btn3.png')">

<?php include("/header_footer/header.php");
 
 @$m=$_GET['m'];

if(isset($m)){?>
	<script> window.alert('<?php  echo $m;  ?> ');</script>
	<?php }

 ?>



   
   
   
    <!-- main body-->
	       <div id="main"> 
    	            <div id="top">
                    </div>
    	             <div id="middle"> 	
                    
                                <!-- slide show--> 
			                    <div id="slideshow">
                                            <div class="main_view">
                                                            <div class="window">
                                                                      <div class="image_reel">
                                                                      
     <!--////////////////////////////////////index_3 java script/////////////////////////////////////////////////////////////-->
                            <a href="#"><img src="images/slideshow/1.png" alt="about us"  style="border-style: none"/></a>
                            <a href="#"><img src="images/slideshow/2.png" alt="olympic game" title="olympic game" style="border-style: none"/></a>
                            <a href="#"><img src="images/slideshow/3.png" alt="" style="border-style: none"/></a>
                            <a href="#"><img src="images/slideshow/4.png" alt="" style="border-style: none"/></a>
                            
                                                                        </div>
                                              </div>
                                                             <div class="paging">
                                                                <a href="x" rel="1">1</a>
                                                                <a href="x" rel="2">2</a>
                                                                <a href="x" rel="3">3</a>
                                                                <a href="x" rel="4">4</a>
                                              </div>
                                                                   
                                  </div>  
                                </div>  <!-- end of slide show--> 
                                 
                                 <!-- Left 3 Button-->              
                               <div id="news">
                               		<iframe width="300" height="240" src="./news/newsnewstic.html" SCROLLING="no" FRAMEBORDER="0" border=0 allowTransparency="true"> </iframe>
                               </div>
                               <!-- End left button-->
                               
                               <!-- hot links-->               
                              <div id="hotlinks">
            	                <table border = "0" width = "840" height = "80" cellpadding = "0" style = "font-family:Calibri;">
                	              <tr>
                		             <td width = "80px" valign="top">
                        	          <img border = "0" src="./images/hotlinks/Live.png" width = "60px" height = "60px" align="top"/>
                                    </td>
                        
                                        <td width="200px" valign="top">
                                            <span style="font-size:18px;">Live Streaming</span><br />
                                            <a href = "jsintro/2000-08.html" style = "text-decoration:none;">
                                                Start with SportsLK live streaming >
                                            </a>
                                        </td>
                        
                                        <td width = "80px" valign="top">                        	
                                            <img border = "0" src="./images/hotlinks/Organize.png" width = "60px" height = "60px" align="top"/>
                                        </td>
                       
                                        <td width="200px" valign="top">
                                            <span style="font-size:18px;">Tournament Organizer</span><br />
                                            <a href = "signin.php?to=yes" onclick="member()" style = "text-decoration:none;">
                                                Want to organize your tournamets >
                                                 
                                            </a>
                                        
                                        </td>
                        
                                        <td width = "80px" valign="top">                        	
                                            <img border = "0" src="./images/hotlinks/Shop.png" width = "60px" height = "60px" align="top"/>
                                        </td>
                        
                                        <td width="200px" valign="top">
                                            <span style="font-size:18px;">Online Store</span><br />
                                            <a href = "OnlineStore.php"  style = "text-decoration:none;">
                                                Buy your sports equipments from our trusted vendors >
                                            </a>
                                    </td>  
                                                         
           	                      </tr>
                                </table> 
                       </div>  <!-- End of hot links-->  
            
                       <div id="line">
            	                      <hr style="color:#CCC">
                               </div>
                               
                               <!-- tab window-->
                               <div id="aboutus">
    							<?php 	include("pages/info.html");?>
           					   </div>
                               <!-- End of tab window-->
                                               
                               <div id="links"  align="center"> 
         
                                      <div class="link1" style="vertical-align:middle">
                                     
                                      <table border="0px">
                                        	<tr>
                                            	
                                                <td valign="top" align="center"> 
  <!--  //////////////////////////////////////////////////////////////  mobile register/////////////////////////////////////////////////-->                                                                       
                                        <a href="#" class='osx' >  <img border = "0" src="./images/hotlinks/1.png"  align="top"/></a>
                                       
                 <link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
                 <script type="text/javascript"src="js/jquery.min.js"></script>                       
                                       
                                     <script type='text/javascript' src='js/osx.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<!-- modal content -->
		<div id="osx-modal-content">
			<div id="osx-modal-title">mobile update Registration form</div>
			<div class="close"><a href="#" class="simplemodal-close">x</a></div>
			<div id="osx-modal-data">
				
            <?php include("pages/active sms.php");  ?>
               
				<p><button class="simplemodal-close">Close</button> <span>(or press ESC or click x if you dont want to registration)</span></p>
	                            
                      </div></div>                 
                                      
  <!--  ////////////////////////////////////////////////////////////// end  mobile register/////////////////////////////////////////////////-->
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                            	
                                                <td  valign="top" align="center">                     	
                                                  <a href="sports_person.php"  ><img border = "0" src="./images/hotlinks/2.png"  align="top"/></a>
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                            	
                                                <td  valign="top" align="center">                        	
                                                 
                                   <a href="school.html">   <img border = "0" src="./images/hotlinks/3.png"  align="top"/></a>
                                                
                                                </td>
                                                
                                            </tr>
                                             
                                            <tr>
                                            	
                                                <td  valign="top" align="center">                        	
                                                 
                                    <a href="pages/googlemaps.php">  <img border = "0" src="./images/hotlinks/4.png"  align="top"/></a>
                                                
                                                </td>
                                                
                                            </tr>
                                        </table>										
                                                    
                                        
                                  	</div> 
           						     
                                      		
                           
                    </div><!-- End of middle div-->   
            
                   <br/><br/>           
                   
                   
                           
        </div> <!-- End of Main div-->         
    
    
         <!-- footer-->
        <div id="bottom">
        
        </div> 
    
        
    <div id="footer" align="center" style="font-size:12px;">
    	© 2010 SportsLK, Inc. All rights reserved. 
    </div>    
</body>
</html>