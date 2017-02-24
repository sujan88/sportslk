  <script type="text/javascript" src="js/jquery.min.js"></script>
             <link rel="stylesheet" href="css/Css.css" type="text/css"  title="no title"  />   
<script type="text/javascript" src="js/thickbox.js"></script>
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
             
<?php
	include ("header_footer/header.php"); // call the header 
		
	
?>
<style type="text/css">
.trnmnt{
	-moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -khtml-border-radius: 10px;
    border-radius: 10px;
	
	
	}
	.step{
		float:left; 
		padding-left:4px; 
		 background:url(images/step1.png);
		  width:150px;
		  height:60px;
		}
</style>
<div id="main">
    <div id="top">
    </div>
    
    <div id="middle">
    
 <center> <div>  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="766" height="238" id="menu" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="musicheader-Raghibsuleman.swf" />
<param name="quality" value="high" />
<param name="allowFullScreen" value="true" />
<embed src="asset/flash/tournament/musicheader-Raghibsuleman.swf" quality="high" width="766" height="238" name="menu" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
    
    </div></center><br/>
    
    <div class="trnmnt" style="margin-top:20px; width:760px; background:#333; height:450px; margin:auto "><center><h2 style="color:#FFF">Design your Tournaments</h2></center>
    <?php @$idto=$_GET['idto']; ?>
    <br/>
    <div  style="padding:15px;">
    <div  style="background:url(images/bt.png); height:60px;"> <div class="step"  >
    <a href="calender/domos/badminton.php?idto=<?php echo $idto; ?>"  ><p style="color:#FFF; font-size:20px;">Step 1<br/><span style="font-size:15px;">tournamnet calender </span></p></a></div>
    <div class="step"><a href="pages/batmintain/batmintain_entries.php?sport3=1&keepThis=false&TB_iframe=false&height=550&width=1000"  title="Batmintain Rank" class="thickbox"><p style="color:#FFF; font-size:20px;">Step 2<br/><span style="font-size:15px;"> Upload  Entires</span></p></a> </div>
    <div  class="step"><a href="pages/btmnt_rank.php?sport3=1&keepThis=false&TB_iframe=false&height=550&width=1000"  title="Batmintain Rank" class="thickbox"><p style="color:#FFF; font-size:20px;">Step 3<br/><span style="font-size:15px;">tournamnet Draw</span></p></a> </div>
    <div style="background:url(images/step1b.png) repeat; height:61px; text-align:center; " ><span style="color:#FFF; font-size:20px;   ">Batmintain</span> </div>
   </div></div><br/><hr/><br/>
     <div style="padding:10px;">
    <div style="background:url(images/wl.png); height:60px; "> <div class="step">
    <a href="calender/domos/selectabletemp.php"><p style="color:#FFF; font-size:20px;">Step 1<br/><span style="font-size:15px;">tournamnet calender </span></p></a></div>
    <div class="step"><a href="pages/weightlifting/weightlifting entry.php?sport3=4&keepThis=false&TB_iframe=false&height=550&width=1000"  title="Batmintain Rank" class="thickbox"><p style="color:#FFF; font-size:20px;">Step 2<br/><span style="font-size:15px;"> Upload  Entires</span></p></a> </div>
    <div  class="step"><a href="pages/weightlifting/weightlifting entry.php?sport3=4&keepThis=false&TB_iframe=false&height=550&width=1000"  title="Batmintain Rank" class="thickbox"><p style="color:#FFF; font-size:20px;">Step 3<br/><span style="font-size:15px;">tournamnet Draw</span></p></a> </div>
    <div style="background:url(images/step1b.png) repeat; height:61px; text-align:center; " ><span style="color:#FFF; font-size:20px;   ">Weightlifting</span> </div>
    
  
   </div></div><br/><hr/><br/>
 <div style="padding:10px;">
    <div style="background:url(images/bt.png); height:60px; ">  <div class="step">
    <a href="calender/domos/squash.php"><p style="color:#FFF; font-size:20px;">Step 1<br/><span style="font-size:15px;">tournamnet calender </span></p></a></div>
    <div class="step"><a href="pages/sqush/squash_entry.php?sport3=2&keepThis=false&TB_iframe=false&height=550&width=1000"  title="Batmintain Rank" class="thickbox"><p style="color:#FFF; font-size:20px;">Step 2<br/><span style="font-size:15px;"> Upload  Entires</span></p></a> </div>
    <div  class="step"><a href="pages/weightlifting/weightlifting entry.php?sport3=4&keepThis=false&TB_iframe=false&height=550&width=1000"  title="Batmintain Rank" class="thickbox"><p style="color:#FFF; font-size:20px;">Step 3<br/><span style="font-size:15px;">tournamnet Draw</span></p></a> </div>
    <div style="background:url(images/step1b.png) repeat; height:61px; text-align:center; " ><span style="color:#FFF; font-size:20px;   ">Squash</span> </div>
   </div></div><hr/>
      
   <?php 
  @ $x= $_POST['3'];
  echo $x;
   print_r($x);
   ?>
    </div>
    
 
    
    
    </div>
    </div>
    
     </div>
   <div id="bottom">
</div>
        
   <?php
   include("header_footer/footer.html"); // call the footer
   ?>