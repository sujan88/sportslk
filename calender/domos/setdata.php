
<?php	

	
		//variable for json array
			$startDate;
			$endDate;
			$eventTittle;
			
	
	
	
	
//////////////<!-- Include Database connections info. -->//////////////////////
		 include('config.php'); 
		
		//diclaere tbl name
		$tbl_name = "date";


		$result2 = mysql_query("select * from $tbl_name",$con);
		
		//$a = array();
		$z = 0;
		while($data = mysql_fetch_array($result2))
			{					
					/*$startDate=$data['sdate'];
			        $endDate=$data['edate'];
			        $eventTittle=$data['tittle'];*/
					//echo "<br>".$z."<br>";
					$b = (array('title' => $data['tittle'],
					'start' => $data['sdate'],
					'end' => $data['edate']			
	));
	//echo $data['tittle'];
			$a[$z] = $b;
			
	$z++;
	/////echo $a[0];
					
		}
		//echo $a;
		
	
	$arr=($a);
	
	echo json_encode($arr);
	mysql_close($con);
	?>		

