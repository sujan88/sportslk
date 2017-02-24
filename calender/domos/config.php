
<?php
// Connection's Parameters
$host="localhost";
$username="sujan";
$password="password";
$db_name="sportslk";

// Connection
$con = mysql_connect($host,$username,$password) or die ("Cannot Connect");
		mysql_select_db($db_name) or die ("Cannot select DB");


?>
