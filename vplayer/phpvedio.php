<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SportsLK</title>
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" href="css/Css.css" type="text/css"  title="no title"  />
        <link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
        
        <link rel="stylesheet" href="css/general.css" type="text/css">
		<link href="css/template.css" rel="stylesheet" type="text/css">
		<link href="css/style1.css" rel="stylesheet" type="text/css">
		<link href="css/style2.css" rel="stylesheet" type="text/css">
		<link href="css/rokmoomenu.css" rel="stylesheet" type="text/css">
			<script type="text/javascript"src="js/jquery.min.js"></script>
            <script type="text/javascript"src="js/newsscroll.js"></script>
            <script type="text/javascript"src="js/index_3.js"></script>
<title>Untitled Document</title>

	<style type="text/css">
		#middle{
			width:900px;
			min-height:750px; 
			background:url(../images/main/middle.png) repeat-y;
			padding-left:30px;
			padding-right:30px;
		}
	</style>

</head>

<body style="font-family:Calibri">











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="./css/header_footer.css" /><!--call the header & footer css-->

<link rel="stylesheet" type="text/css" href="./css/body.css" /><!--call the bidy css-->
</head>
<center>
<body style="font-family:Calibri">

<div id="header">
    	<div id="header_content">
        	<table border = "0px" width = "960" height = "90" cellpadding = "0" style = "font-family:Calibri;color:#FFF">
            	<tr>
                	<td width="300px" valign="bottom">
                    	<span style="font-size:42px">SportsLK</span><br /><br />
                        <span style="font-size:16px">The ultimate website for Sri Lankan Sports</span>
                    </td>
                    
                    <td width="470px" style="padding-left:30px;">
                    	<form name="search" action="" method="post">
                        	Search <input type="text" name="search" style="width:200px"  />
                            <img border = "0" src="./images/header/search.png" width = "20px" height = "20px" align="top"/>
                        </form>
                    </td>
                    
                    <td width="50" style="padding:0px;" >                           
						  <?php   if(!session_id()){ ?>      <a href="./signin.php" style = "text-decoration:none; color:#FFF" onmouseover="this.style.color= '#000';" onmouseout="this.style.color= '#fff'">Sign in</a><?php }else {?><span style="color:#000;">Sign in </span> <?php }?>
                  </td>
                          <td width="11" >|</td>
                          <td width="50"  style="padding:0px;" >
                                <a href="http//:www.linklk.com" style = "text-decoration:none; color:#FFF" onmouseover="this.style.color= '#000';" onmouseout="this.style.color= '#fff'">linklk</a>
                     </td>
                </tr>
            </table>
        </div>    
        <div class="menu_nav">            
            <table>
            
            </table>
      </div>    
</div>
       <?php  @$vid = $_GET['vid']; ?>          
               <!-- main body-->
	      
    	            <div id="top">
                    </div>
  
<div id="middle" >
                  <br />
                 <h2 align="center" style="color:#09C"> Vedio Tutorials</h2>
                 <br />
                 <div align="center">
  <table border="1" width="750"  style="font-size:14px" bordercolor="#CCCCCC" >
    <tr>
      <td width="750" height="400"><div align="center">
      
      <object id="MediaPlayer1" width="306" height="200"
classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"
standby="Loading Microsoft® Windows® Media Player components..."
type="application/x-oleobject" align="middle">
      <param name="FileName" value="YourFilesName.mpeg">
      <param name="ShowStatusBar" value="True">
      <param name="DefaultFrame" value="mainFrame">
      <param name="autostart" value="false">
      <embed type="application/x-mplayer2"
pluginspage = "http://www.microsoft.com/Windows/MediaPlayer/" src="<?php echo $vid;?>"


autostart="rtue"
align="middle"
width="750"
height="400"
defaultframe="rightFrame"
showstatusbar="true"> </embed>
    </object>
      
  
</div></td>
  </tr></table>
  </div>
  <br />
  <br />
  <br />
  
   <div id="line">
    <hr style="color:#000" width="895px">
  </div>
  
 
  <br />
  <table width="95%" style="font-size:14px" bordercolor="#CCCCCC">
    <tr height="110" align="center"  style="color:#900">
      <td><b><i>Weightlifting</i></b></td>
      <td ><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/13.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=http://www.youtube.com/watch?v=Wfu9T76lRQA&feature=related"><img src="pixx/14.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/15.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/23.jpg" width="140px" height="90" /></a></td>
    </tr>
    <tr height="40px" align="center">
  <td width="20%">&nbsp;</td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">Zhang Guozheng 220kgx2</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">The king of Amarican Weightlifting</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">8 year old Chinese lifter Clean and Jarks 75 kilos</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">Bulgarian Weightlifters in Sicily</a></td></tr></table>
  <br />
  
   <div id="line">
    <hr style="color:#000" width="895px">
  </div>
  
  <table width="95%" style="font-size:14px" bordercolor="#CCCCCC">
    <tr height="110" align="center"  style="color:#900">
      <td><b><i>Badminton</i></b></td>
      <td ><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/16.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/17.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/19.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/24.jpg" width="140px" height="90" /></a></td>
    </tr>
    <tr height="40px" align="center">
  <td width="20%">&nbsp;</td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">nice superman jump in badminton rally</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">badminton Taufik Hidayat tribute 'Forever NO.1</a>'</td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">Badminton Tricks</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">Beijing Olympics Emms/Robertson vs</a></td></tr></table>
  
  <br />
  
   <div id="line">
    <hr style="color:#000" width="895px">
  </div>
  
  <table  width="95%" style="font-size:14px" bordercolor="#CCCCCC">
    <tr height="110" align="center"  style="color:#900">
      <td><b><i>Squesh</i></b></td>
      <td ><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/20.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/21.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/22.jpg" width="140px" height="90" /></a></td>
      <td><a href="phpvedio.php?vid=vedio/videoplayback.MP4"><img src="pixx/25.jpg" width="140px" height="90" /></a></td>
    </tr>
    <tr height="40px" align="center">
  <td width="20%">&nbsp;</td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">Conheca as regras do Squash</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">Exhibition Becerril vs Baltazar</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">la caida de esqueche jejeje</a></td>
  <td width="20%"><a href="phpvedio.php?vid=vedio/videoplayback.MP4">John Branston Squash Butterfly Drill</a></td></tr></table>
</div>
                     <!-- end of main body-->
                     
                      
        <!-- footer-->
        <div id="bottom">
        </div> 
    
        
    <div id="footer" align="center" style="font-size:12px;">
    	© 2010 SportsLK, Inc. All rights reserved. 
    </div>    
                     
</body></center>
</html>
                        
                        
                        
                        
                        
                        
                        
          