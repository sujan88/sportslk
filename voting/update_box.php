<?php
include("voting/dbcon.php");
$playerID = 3;
$result=mysql_query("select liked,dislike from youtube_rating where id = $playerID");

$row=mysql_fetch_array($result);
//$gettotal = mysql_num_rows($result);

$gettotal = $row['dislike'] + $row['liked'];

$dislike=$row['dislike'];

$like=$row['liked'];

$likes=($like*20)/$gettotal;

$dislikes=($dislike*20)/$gettotal;?>

<button type="button" class="totalstatsbutton" onclick=";return false;" >
<img src="pixel-vfl73.gif" alt=""> 
<div class="greenBar" style="width:<?php echo $likes?>px">&nbsp;</div>
<div class="redbar" style="width:<?php echo $dislikes?>px">&nbsp;</div>
</button>

