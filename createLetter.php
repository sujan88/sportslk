
<?php

if(isset($_POST['sub']))
{
	$fullname = $_POST['FullName']; 
	$name = $_POST['inname'];
	$age = $_POST['Age'];
	$gender = $_POST['Gender'];
	$adNo = $_POST['Address_No'];
	$adSt = $_POST['Street'];
	$adRe = $_POST['Region'];
	$adCty = $_POST['City'];
	$sport = $_POST['Sport'];
	$cSchool = $_POST['CSchool'];
	$nSchool = $_POST['cSchool'];
	//$reson = $_POST['reson'];
	$best = $_POST['best'];
	//echo $nSchool;
}
	



//$nSchool =  "Rahula College";


	//echo $nSchool;
	include ("pages/db_connect.php");
		
		$result2 = mysql_query("select * from school where school_ID = '$nSchool' ",$db);
		$data = mysql_fetch_array($result2);
			
				$prncipleName = $data['principle_Name'];
				$scName = $data['school_Name'];
				
				$adStreet = $data['adStreet'];
				$adRegon = $data['adRegon'];
				$city = $data['location'];
				
    ?>
	
    


<div style="background:#999;width:800px;margin:auto">


<p>
  <?php echo $name."," ?><br>
  <?php echo "No ".$adNo."," ?><br>
  <?php echo $adSt."," ?><br>
  <?php echo $adRe."," ?><br>
  <?php echo $adCty."." ?><br>
  <?php 
  $date = date('d/m/Y ', time());
  echo $date;
  ?><br />
  
  <br>
  
  <?php echo $prncipleName.","; ?><br />
  <?php echo $scName.","; ?><br />
  <?php echo $adStreet.","."<br />"?>
  <?php echo $adRegon.","."<br />" ?> 
  <?php echo $city ?><br>
  </p>
  
  
<p align="justify">Dear madam/sir,</p><br>
 
 <p align="center" ><b> <u> Requesting for a transfer to <?php echo $scName ?> </u></b></p><br>
 <p align="justify"> I am <?php echo $fullname." "."from ".$cSchool."." ?> I'm <?php echo $age ?> years old and I'm well talented in <?php echo $sport ?>  and I have already won <?php echo $best ?> .</p>
 <p align="justify"> However the sports facilities of our school are not adequate to reach my expected potential. Therefore I would be grateful if you could consider accepting me to <?php echo $scName ?>. Since it is renowned for it's available facilities. A detailed list of achievements and performance reports are attached to this letter.</p><br>
 <p align="justify"> Thankyou!<br>
  Your faithfully,<br>
  ………………….<br>
  <?php  echo $name ?><br>
</p>
</div>
