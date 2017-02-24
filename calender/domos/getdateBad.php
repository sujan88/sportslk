<?php
        $mont_in;
        $start = $_GET['start'];
        $end = $_GET['end'];
        $title = $_GET['title'];
        $allDay = $_GET['allDay'];
		
		@$to_id=$_GET['idto'];
	
		
		//echo $start;

        list($startDate) = explode("00:00:00 GMT 0530 (Sri Lanka Standard Time)", $start);
        list($endDate) = explode("00:00:00 GMT 0530 (Sri Lanka Standard Time)", $end);
      
	    $startMonth = change($startDate);
        $startDat = getDat($startDate);
        $startYear = getYear($startDate);
        $endMonth = change($endDate);
        $endDat = getDat($endDate);
        $endYear = getYear($endDate);

//date edit for check table
$editSdate = $startYear.'-0'.$startMonth.'-'.$startDat;
$editEdate = $endYear.'-0'.$endMonth.'-'.$endDat;





		//get the date
        function getDat($editstringa) {
            //echo "asdasd".substr($editstringa,8,13);
            return substr($editstringa, 8, 2);
        }
		//get the year
        function getYear($editstring) {
            return substr($editstring, 11, 4);
        }


       // echo $title . "<br>";
       // echo $allDay;


        function change($new_string) {
            $editstring = substr($new_string, 4);
            $mont = substr($editstring, 0, 3);
			//echo 'mont is ...'.$mont;
            if ($mont === @Jan) {
                @$mont_in = 01;
            }
            if ($mont === @Feb) {
                @$mont_in = 02;
            }
            if ($mont === @Mar) {
                @$mont_in = 03;
            }
            if ($mont === @Apr) {
                @$mont_in = 04;
            }
            if ($mont === @May) {
                @$mont_in = 05;
            }
            if ($mont === @Jun) {
                @$mont_in = 06;
            }
            if ($mont === @Jul) {
                @$mont_in = 07;
            }
            if ($mont === @Aug) {
                @$mont_in = 08;
            }
            if ($mont === @Sep) {
                @$mont_in = 09;
            }
            if ($mont === @Oct) {
                @$mont_in = 10;
            }
            if ($mont === @Nov) {
                @$mont_in = 11;
            }
            if ($mont === @Dec) {
                @$mont_in = 12;
            }
            return $mont_in;
        }

		
/////////////<!-- Include Database connections info. -->//////////////////
		 include('config.php'); 
		
		//diclare tbl name
		  $tbl_name = "baddate";


		$result2 = mysql_query("select * from $tbl_name",$con);
		
		//$a = array();
		$z = 0;
		while($data = mysql_fetch_array($result2))
			{					
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
	$dateIsset = false;
	for($i=0;$i<count($a);$i++) {
		if( $editSdate == $a[$i]['start'] || $editSdate == $a[$i]['end'] || $editEdate == $a[$i]['start'] || $editEdate == $a[$i]['end']) {
			$dateIsset = true;
		}
	}
	
	if ( $dateIsset ) {
		die('You cannot add two events on the same date!');
		header("Location:badminton.php");
	}

     
		 $query2 = ("INSERT INTO $tbl_name (sdate,tittle,edate,TO_ID) VALUES ('{$editSdate}','{$title}','{$editEdate}','{$to_id}')");
		
		
		
       // echo $query2;
        if (!mysql_query($query2, $con)) {
            echo mysql_error();
            mysql_close($con);
        }
	
		header("Location:badminton.php");/////////////// has to change///////////////
		 //mysql_close($con);
        ?>
