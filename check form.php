<?php
	include ("header_footer/header.php"); // call the header 
	include ("pages/db_connect.php");
?>

<div id="main">
    	<div id="top">
        </div>
    
    	<div id="middle">
            <div style="margin-left:40px;">
   
   
    <?php
	
   $y=empty($_GET['action']) ? 'index' : $_GET['action'] ;
   switch($y){
	   case "delete_rq":
	   @$x=$_POST['xxx'];
	    $e=count($x);
		
		for($i=0; $i<$e; $i++){
			echo $x[$i]."<br/>";
			 mysql_query("DELETE FROM request WHERE ID='".$x[$i]."'",$db);
			
			
			}
			header("Location: profile.php?action2=sponsor&del='".$e."'");
	   	   break;
		   
		   case "delete_rs":
	   @$x=$_POST['xxx'];
	    $e=count($x);
		
		for($i=0; $i<$e; $i++){
			echo $x[$i]."<br/>";
			 mysql_query("DELETE FROM request WHERE ID='".$x[$i]."'",$db);
			
			
			}
			header("Location: profile.php?action2=sponsor&del='".$e."'");
	   	   break;
////////////////sportman's details set in to database///////////////////////////////////////////////	   
	   case "check_sp":
/*additional data checking and striping*/

$_POST['login']=mysql_real_escape_string(strip_tags(trim($_POST['login'])));
$_POST['pass']=mysql_real_escape_string(strip_tags(trim($_POST['pass'])));
$_POST['First_Name']=mysql_real_escape_string(strip_tags(trim($_POST['First_Name'])));
$_POST['Middle_Name']=mysql_real_escape_string(strip_tags(trim($_POST['Middle_Name'])));
$_POST['Last_Name']=mysql_real_escape_string(strip_tags(trim($_POST['Last_Name'])));
$dob=$_POST['Year']."-".$_POST['Month']."-".$_POST['Day'];
$sportid=$_POST['Sport'];
$status=$_POST['Status'];
$gender=$_POST['Gender'];
$_POST['Nationality']=mysql_real_escape_string(strip_tags(trim($_POST['Nationality'])));
$_POST['Religion']=mysql_real_escape_string(strip_tags(trim($_POST['Religion'])));
$_POST['Height']=mysql_real_escape_string(strip_tags(trim($_POST['Height'])));
$_POST['Weight']=mysql_real_escape_string(strip_tags(trim($_POST['Weight'])));
$blood=$_POST['Blood_Group'];
$diet=$_POST['Diet'];
$_POST['Address_No']=mysql_real_escape_string(strip_tags(trim($_POST['Address_No'])));
$_POST['Region']=mysql_real_escape_string(strip_tags(trim($_POST['Region'])));
$_POST['Street']=mysql_real_escape_string(strip_tags(trim($_POST['Street'])));
$_POST['City']=mysql_real_escape_string(strip_tags(trim($_POST['City'])));
$_POST['Mobile']=mysql_real_escape_string(strip_tags(trim($_POST['Mobile'])));
$_POST['Tel_Home']=mysql_real_escape_string(strip_tags(trim($_POST['Tel_Home'])));
$_POST['E_Mail']=mysql_real_escape_string(strip_tags(trim($_POST['E_Mail'])));


	   
/*Use of Sessions*/
if(!session_id())
session_start();

    $_SESSION['login'] = $_POST['login'];
	$_SESSION['pass'] = $_POST['pass'];
	$_SESSION['First_Name'] = $_POST['First_Name'];
	$_SESSION['Middle_Name'] = $_POST['Middle_Name'];
	$_SESSION['Last_Name'] = $_POST['Last_Name'];
	$_SESSION['Date_Of_Birth'] = $dob;
	$_SESSION['Sport'] = $sportid;
	$_SESSION['Status'] =$status;
	$_SESSION['Gender'] = $gender;
	$_SESSION['Nationality'] = $_POST['Nationality'];
	$_SESSION['Religion'] = $_POST['Religion'];
	$_SESSION['Height'] = $_POST['Height'];
	$_SESSION['Weight'] = $_POST['Weight'];
	$_SESSION['Blood_Group'] = $blood;
	$_SESSION['Diet'] = $diet;
	$_SESSION['Address_No'] = $_POST['Address_No'];
	$_SESSION['Region'] = $_POST['Region'];
	$_SESSION['Street'] = $_POST['Street'];
	$_SESSION['City'] = $_POST['City'];
	$_SESSION['Mobile'] = $_POST['Mobile'];
	$_SESSION['Tel_Home'] = $_POST['Tel_Home'];
	$_SESSION['E_Mail'] = $_POST['E_Mail'];
	$_SESSION['Month']=$_POST['Month'];



mysql_query("INSERT INTO sportsman SET First_Name='{$_POST['First_Name']}',Middle_Name='{$_POST['Middle_Name']}',Last_Name='{$_POST['Last_Name']}',Nationality='{$_POST['Nationality']}',Religion='{$_POST['Religion']}',Date_Of_Birth='$dob',Gender='$gender' ,Status='$status',Height='{$_POST['Height']}',Weight='{$_POST['Weight']}',Blood_Group='$blood',Diet='$diet',Address_No='{$_POST['Address_No']}',Street='{$_POST['Street']}',Region='{$_POST['Region']}',City='{$_POST['City']}',Mobile='{$_POST['Mobile']}',Tel_Home='{$_POST['Tel_Home']}',E_Mail='{$_POST['E_Mail']}'",$db);

// insert data to dabase
$sportid_result=mysql_query( "SELECT * FROM sportsman " ."WHERE First_Name = '" . $_POST['First_Name'] . "' " ,$db);
$row = mysql_fetch_array($sportid_result);
$result=$row['Sportsman_ID'];
mysql_query("INSERT INTO sign_in SET Type='sp', User='{$_POST['login']}',Password='{$_POST['pass']}', Id ='$result'",$db);

    

mkdir("pages/sportsman profle/$result", 0700);

header("Location: profile.php?entersp=new&idsp=$result&action2=sportman");

mysql_close($db);

break;


////////////////sponsor details set in to database///////////////////////////////////////////////

 case "check_sn":



/*additional data checking and striping*/
$_POST['u_name']=mysql_real_escape_string(strip_tags(trim($_POST['u_name'])));
$_POST['password']=mysql_real_escape_string(strip_tags(trim($_POST['password'])));
$_POST['f_name']=mysql_real_escape_string(strip_tags(trim($_POST['f_name'])));
$_POST['m_name']=mysql_real_escape_string(strip_tags(trim($_POST['m_name'])));
$_POST['l_name']=mysql_real_escape_string(strip_tags(trim($_POST['l_name'])));
$dob2=$_POST['Year2']."-".$_POST['Month2']."-".$_POST['Day2'];
$sportid2=$_POST['Sport2'];
$gender2=$_POST['gender2'];
$_POST['nationality2']=mysql_real_escape_string(strip_tags(trim($_POST['nationality2'])));
$_POST['religion2']=mysql_real_escape_string(strip_tags(trim($_POST['religion2'])));
$_POST['address_no2']=mysql_real_escape_string(strip_tags(trim($_POST['address_no2'])));
$_POST['region2']=mysql_real_escape_string(strip_tags(trim($_POST['region2'])));
$_POST['street2']=mysql_real_escape_string(strip_tags(trim($_POST['street2'])));
$_POST['city2']=mysql_real_escape_string(strip_tags(trim($_POST['city2'])));
$_POST['mobile2']=mysql_real_escape_string(strip_tags(trim($_POST['mobile2'])));
$_POST['home_tp']=mysql_real_escape_string(strip_tags(trim($_POST['home_tp'])));
$_POST['mail']=mysql_real_escape_string(strip_tags(trim($_POST['mail'])));


/*Use of Sessions*/
if(!session_id())
session_start();

 	/*Set session*/
	$_SESSION['u_name'] = $_POST['u_name'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['f_name'] = $_POST['f_name'];
	$_SESSION['Middle_Name'] = $_POST['m_name'];
	$_SESSION['l_name'] = $_POST['l_name'];
	$_SESSION['Date_Of_Birth_sn'] = $dob2;
	$_SESSION['Sport_sn'] = $sportid2;
	$_SESSION['Gender_sn'] = $gender2;
	$_SESSION['nationality2'] = $_POST['nationality2'];
	$_SESSION['religion2'] = $_POST['religion2'];
	$_SESSION['address_no2'] = $_POST['address_no2'];
	$_SESSION['Region'] = $_POST['Region'];
	$_SESSION['street2'] = $_POST['street2'];
	$_SESSION['city2'] = $_POST['city2'];
	$_SESSION['mobile2'] = $_POST['mobile2'];
	$_SESSION['home_tp'] = $_POST['home_tp'];
	$_SESSION['mail'] = $_POST['mail'];   
	
	
//insert data to database


mysql_query("INSERT INTO sponsor SET First_Name='{$_POST['f_name']}',Middle_Name='{$_POST['m_name']}',Last_Name='{$_POST['l_name']}',Gender='$gender2', Nationality='{$_POST['nationality2']}',Religion='{$_POST['religion2']}',Date_Of_Birth='$dob2' ,Address_No='{$_POST['address_no2']}',Street='{$_POST['street2']}',Region='{$_POST['region2']}',City='{$_POST['city2']}',Mobile='{$_POST['mobile2']}',Tel_Home='{$_POST['home_tp']}',E_Mail='{$_POST['mail']}'",$db);

$sponsorid_result=mysql_query( "SELECT * FROM sponsor " ."WHERE First_Name = '" . $_SESSION['f_name'] . "' " ,$db);
$row2 = mysql_fetch_array($sponsorid_result);
$result2=$row2['Sponsor_ID'];
mysql_query("INSERT INTO sign_in SET Type='sn', User='{$_POST['u_name']}',Password='{$_POST['password']}', Id='$result2'",$db);


	
	header("Location: profile.php?action2=sponsor&entersn=new&idsn=$result2");

mysql_close($db);

break;

 case "check_to":



/*additional data checking and striping*/
$_POST['u_name']=mysql_real_escape_string(strip_tags(trim($_POST['u_name'])));
$_POST['password']=mysql_real_escape_string(strip_tags(trim($_POST['password'])));
$_POST['f_name']=mysql_real_escape_string(strip_tags(trim($_POST['f_name'])));
$_POST['m_name']=mysql_real_escape_string(strip_tags(trim($_POST['m_name'])));
$_POST['l_name']=mysql_real_escape_string(strip_tags(trim($_POST['l_name'])));
$_POST['address_no2']=mysql_real_escape_string(strip_tags(trim($_POST['address_no2'])));
$_POST['region2']=mysql_real_escape_string(strip_tags(trim($_POST['region2'])));
$_POST['street2']=mysql_real_escape_string(strip_tags(trim($_POST['street2'])));
$_POST['city2']=mysql_real_escape_string(strip_tags(trim($_POST['city2'])));
$_POST['mobile2']=mysql_real_escape_string(strip_tags(trim($_POST['mobile2'])));
$_POST['home_tp']=mysql_real_escape_string(strip_tags(trim($_POST['home_tp'])));
$_POST['mail']=mysql_real_escape_string(strip_tags(trim($_POST['mail'])));


/*Use of Sessions*/
if(!session_id())
session_start();

 	/*Set session*/
	$_SESSION['u_name3'] = $_POST['u_name'];
	$_SESSION['password3'] = $_POST['password'];
	$_SESSION['f_name3'] = $_POST['f_name'];
	$_SESSION['Middle_Name3'] = $_POST['m_name'];
	$_SESSION['l_name3'] = $_POST['l_name'];
	$_SESSION['Gender_sn3'] = $gender2;
	$_SESSION['address_no2'] = $_POST['address_no2'];
	$_SESSION['Region3'] = $_POST['Region'];
	$_SESSION['street3'] = $_POST['street2'];
	$_SESSION['city3'] = $_POST['city2'];
	$_SESSION['mobile3'] = $_POST['mobile2'];
	$_SESSION['home_tp3'] = $_POST['home_tp'];
	$_SESSION['mail3'] = $_POST['mail'];   
	
	
//insert data to database


mysql_query("INSERT INTO tournament_organizer SET First_Name='{$_POST['f_name']}',Middle_Name='{$_POST['m_name']}',Last_Name='{$_POST['l_name']}',Gender='$gender2' ,Address_No='{$_POST['address_no2']}',Street='{$_POST['street2']}',Region='{$_POST['region2']}',City='{$_POST['city2']}',Mobile='{$_POST['mobile2']}',Tel_Home='{$_POST['home_tp']}',E_Mail='{$_POST['mail']}'",$db);

$sponsorid_result=mysql_query( "SELECT * FROM tournament_organizer " ."WHERE First_Name = '" . $_SESSION['f_name3'] . "' " ,$db);
$row2 = mysql_fetch_array($sponsorid_result);
$_SESSION['idto']=$row2['to_id'];
mysql_query("INSERT INTO sign_in SET Type='to', User='{$_POST['u_name']}',Password='{$_POST['password']}', Id='".$_SESSION['idto']."'",$db);


	
	header("Location: profile.php?action2=t_organizer&entersn=new");

mysql_close($db);
 break;
   }
 ?>
         </div>
     </div>
 </div>
   
   
   
   <?php
   include("./header_footer/footer.html"); // call the footer
   ?>
 