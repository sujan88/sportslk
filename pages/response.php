<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Response</title>
</head>

<body>
<?php 
 @$spid=$_GET['spid'];
  @$snid=$_GET['snid'];
  @$sub=$_GET['sub'];
echo $spid."sportman id <br/>";
echo "Subject  :".$sub."<br/>";
echo "sponsor  :".$snid;


    include ("db_connect.php");
	 mysql_query("UPDATE request SET Status = '1' WHERE Sportsman_ID = $spid",$db);
	
	 ?>
	 <div style=" background:#999;">


<CENTER>


<TABLE BORDER=0>
<FORM  METHOD='POST' ACTION='recieve_end.php?snid=<?php echo $snid;?>&spid=<?php echo $spid;?>&sub=<?php echo $sub;?>'>
<TABLE>
<TR>
<TD align="center"> <FONT><STRONG>Replay your Answer:</STRONG></FONT></TD>
</TR>
<TR>
<TD align="center"><TEXTAREA NAME="respons" ROWS=20 COLS=60 ></TEXTAREA></TD>
</TR>
</TABLE>
<BR><BR>
<TABLE BORDER=0 WIDTH=300>
<TR>
<TD align="center"><INPUT TYPE="submit" VALUE="Submit" onClick="javascript:window.close();"></TD>
<TD align="center"><INPUT TYPE="reset" VALUE="Reset" onClick="Reset()"></TD>
<TD align="center"><INPUT TYPE="button" VALUE="About" onClick="About()"></TD>
<TD align="center"><INPUT NAME="update" TYPE="BUTTON" VALUE="Close" OnClick="leaptoIntro()"></TD>
</TR></TABLE>
</FORM>
</TABLE>
</TD></TD>
</CENTER>
</div>

</body>
</html>