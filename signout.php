<?php 

	session_unset();
	  //session_unset('admin');
session_destroy();
header("Location: sports_person.php");

?>