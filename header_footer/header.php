<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="./css/header_footer.css" /><!--call the header & footer css-->

<link rel="stylesheet" type="text/css" href="./css/body.css" /><!--call the bidy css-->
</head>

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
						  <?php   if(session_start()){ ?>      <a href="./signin.php" style = "text-decoration:none; color:#FFF" onmouseover="this.style.color= '#000';" onmouseout="this.style.color= '#fff'">Sign in</a><?php }else {?><span style="color:#000;">Sign in </span> <?php }?>
                      </td>
                          <td width="11" >|</td>
                          <td width="50"  style="padding:0px;" >
                                <a href="./signin.php?sign=" style = "text-decoration:none; color:#FFF" onmouseover="this.style.color= '#000';" onmouseout="this.style.color= '#fff'">Sign ot</a>>
                     </td>
                </tr>
            </table>
        </div>    
        <div class="menu_nav">            
            <table>
            <tr>
            <td  style="padding:20px;">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="vplayer/phpvedio.php">Video Tutorial</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
            <div class="clr"></div>
            </td>
            </tr>
            </table>
        </div>    
    </div>
