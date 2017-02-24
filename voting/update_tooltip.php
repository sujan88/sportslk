<?php
include("voting/dbcon.php");


$playerID = 3;// set the payer id to thhis................

 $result=mysql_query("select liked,dislike from youtube_rating where id = $playerID");


$row=mysql_fetch_array($result);

$dislike=$row['dislike'];

$like=$row['liked'];
?>
<span class="totalstats">
<?php echo $like?>  likes, <?php echo $dislike?>  dislikes
</span>

