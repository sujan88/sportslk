<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function selectNext(e,show){
	var splitResults = e.split(/[\s_]+/);
	var index1 = splitResults[0];
	var index2 = splitResults[1];
	var m=index1+"_"+index2;
	
 	var combobox1 = document.getElementById(m);
	
	index2++;
	var two_to_the_power = Math.pow(2,index2-1);
	if((index1/two_to_the_power)%2 != 0)
		index1=index1-two_to_the_power;
	
	m = index1+"_"+index2;
	if(document.getElementById(m).options.length>=2){
		return;
	}	
		
	var combobox2 = document.getElementById(m);	
	combobox2.options[combobox2.options.length] = new Option(combobox1.options[combobox1.selectedIndex].text,combobox1.value); 
	document.getElementById(m).options[1].setAttribute("onclick","selectNext('"+m+"','"+show+"')");
}
</script>
</head>

<body>
	<!--Algorithm-->
	<?php 
		//For the Algorithm
		static $player; static $playerPair; static $finalized;
		static $no_of_players; static $no_of_byes; static $size_of_spoon; static $size_of_draw; static $halfSize; static $quarterSize; static $x; static $y; static $counter; static $p = 3; static $q;
		static $spoon; static $index;		
		
		//read values and declare sizes of arrays		
		$no_of_players = $e; ///////////////////////////////////////////////////////////////////////sujan
		$size_of_draw = $no_of_players;
	
		
		
		//To Check whether the no_of_players are fitting to the size_of_draw/////////////////////////		
		$log = log($no_of_players) / log(2);	
		$remainder = $log - (int)$log;
		
		if($remainder != 0){
			$log = (int)$log +1;
			$size_of_draw = (int)pow(2,$log);
			$no_of_byes = $size_of_draw - $no_of_players;		
		}
				
		//Testing/////////////////////////////////////////////////////////////////////////////////////sujan 
		for($i = 0; $i<$size_of_draw; $i++){
			if($i < $no_of_players){
				$player[$i][0] =$r[$i];
				$player[$i][1] = $n[$i];   } 
			else{	
				$player[$i][0] = "bye";
					
				$player[$i][1] = "Bye";
		}}		
				
		
		if($size_of_draw < 4){
			$m= "You should at least select 4 entries to generate the tournament draw";
			?>
			<script>
			window.alert('<?php echo $m;  ?>');
			</script>
			<?php
		}else{
			if($size_of_draw < 9){
				$size_of_spoon = 1;
			}else if($size_of_draw < 33){
				$size_of_spoon = 2;
			}else{
				$size_of_spoon = 4;
			}
			
			
			
			/////////////////////////////////////////////////////////////////////
			//Declaring sizes of arrays//////////////////////////////////////////
			$halfSize = $size_of_draw/2;
			$quarterSize = $size_of_draw/4;
			$q = $size_of_draw/8;		
//			$player = new int[$size_of_draw][2];
//			$playerPair = new int[$size_of_draw][];
//			$finalized = new int[$size_of_draw][];
//			$index = new int[$quarterSize];
			
			
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////sujan
//			for($i = 0; $i < $no_of_players; $i++){   
//				System.out.print("Enter rank of player "+ (i+1) +": ");
//				player[i][0] = input.nextInt();  
//				player[i][1] = i+10;
//			}
			
			/////////////////////////////////////////////////////////////////////
			//sort by rank///////////////////////////////////////////////////////
			$temp;
			for($i = 0; $i < $no_of_players-1; $i++){
				for($j = $i+1; $j < $no_of_players; $j++){
					if($player[$i][0]>$player[$j][0]){
						$temp = $player[$i];
						$player[$i] = $player[$j];
						$player[$j] = $temp;
					} 
				}
			}
				
					
			
			/////////////////////////////////////////////////////////////////////
			//make Pairs/////////////////////////////////////////////////////////
			$spoon = copyToSpoon($size_of_draw-1);
			
			for($i=0; $i < $size_of_draw/2; $i++){
				if($i%$size_of_spoon == 0 && $i!=0){
					$spoon = copyToSpoon($size_of_draw-($i+1));				
				}
				$playerPair[2*$i] = $player[$i];
				$playerPair[2*$i+1] = $player[$spoon[0]];
				resetSpoon();			
			}	
					
			
			/////////////////////////////////////////////////////////////////////
			//Generating Indexes for placing pairs///////////////////////////////
			if($size_of_draw == 4){
				$index[0] = $size_of_draw;
			}			
			else if($size_of_draw > 4){
				if($size_of_draw == 8){
					$index[0] = $size_of_draw;
					$index[1] = $size_of_draw*2/4;
				}				
				
				else if($size_of_draw > 8){
					$index[0] = $size_of_draw;
					$index[1] = $size_of_draw*2/4;
					$index[2] = $size_of_draw*3/4;
					$index[3] = $size_of_draw*1/4;		
		
					
					
					if($size_of_draw > 16){
						$x = (int)pow(2,$p);
						$y = $x/2+1;
						$index[4] = $y*$q;
						$counter = 4;
						generateIndex($y);
	
					}
				}	
			}
			
			
			/////////////////////////////////////////////////////////////////////
			//Placing pairs in correct position//////////////////////////////////
			$index1; $index2; $index3; $index4; $tempIndex;
			
			
			$finalized[0] = $playerPair[0];
			$finalized[1] = $playerPair[1];
			
			$index1 = $index[0]-1;
			$index2 = $index1-1;
			$finalized[$index1] = $playerPair[2];
			$finalized[$index2] = $playerPair[3];
			
				
			for($i=1; $i<$quarterSize; $i++){
				$index1 = $index[$i]-1;
				$tempIndex = 4*$i;
				
				$index3 = $index1;
				$index4 = $index3-1;
				$index1 = $index1+1;
				$index2 = $index1+1;					
								
				$finalized[$index1] = $playerPair[$tempIndex];
				$finalized[$index2] = $playerPair[$tempIndex+1];	
				$finalized[$index3] = $playerPair[$tempIndex+2];
				$finalized[$index4] = $playerPair[$tempIndex+3];
			}
		}
		
		
	/////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////////////
	//Other Methods//////////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////////////////////
	//Reset spoon////////////////////////////////////////////////////////
	function resetSpoon(){
		global $size_of_spoon,$spoon;
		for($i=0; $i<$size_of_spoon-1; $i++){
			$spoon[$i] = $spoon[$i+1];
		}
	}
	
	
	
	/////////////////////////////////////////////////////////////////////////////////////////////
	//defined no of players will be taken at a time from the rear of the array and be shuffled///
	function copyToSpoon($lastIndex){
		global $size_of_spoon;
		
		$playerIndex;
		
		for($x = 0; $x < $size_of_spoon; $x++){
			$playerIndex[$x] = $lastIndex;
			$lastIndex--;
			
		}
				
		
		//Shuffle playerIndex[]
		$randomIndex;$temp;
		
		for($j = 0; $j < $size_of_spoon; $j++){
			$randomIndex = rand(0,$size_of_spoon-1);			
			$temp = $playerIndex[$j];
			$playerIndex[$j] = $playerIndex[$randomIndex];
			$playerIndex[$randomIndex] = $temp;
		}
		return $playerIndex;
	}
	
	
	
	/////////////////////////////////////////////////////////////////////
	//Generating Indexes for placing pairs///////////////////////////////
	function generateIndex($y){
		global $counter,$index,$quarterSize,$p,$x,$y,$q;
		
		for($i=1 ; $i<($y+1)/2; $i++){	
			$counter++;
			$index[$counter] = ($y-(2*$i))*$q;			
			if($y-(2*$i) == 1 && $x<$quarterSize){
				$p++;
				$x = (int)pow(2,$p);
				$y = $x/2+1;
				$q/=2;
				$counter++;
				$index[$counter] = $y*$q;				
				generateIndex($y);
				break;
			}
			if($i!= ($y+1)/2-1){
				$counter++;
				$index[$counter] = ($y+(2*$i))*$q;		
			}					
				
		}	
	} 
	?>
 
    
    
    <!--Design of Draw-->
	<table border="1">
    	<?php
			//For the Design
			static $no_of_rounds;
			
			$maximum_no_of_rounds = log($size_of_draw)/log(2)+1;
			
			for($i=0; $i<$size_of_draw; $i++){
			if($i == 0){
				$no_of_rounds[0] = $maximum_no_of_rounds;
			}
			else if($i%2!=0){
				$no_of_rounds[$i] = 1;
			}else{
				for($j=$maximum_no_of_rounds-2; $j>0; $j--){
					if($i%(int)pow(2,$j)==0){
						$no_of_rounds[$i] = $j+1;
						break;
					}						
				}
				
			}
		}
			
			for($i=0; $i<$size_of_draw; $i++){
		?>
                <tr>
                
                    <td  width="200px">
                        <?php
							echo $player[$i][1]."<br/>Rank (".$finalized[$i][0].")";
						?>
                    </td>
                    
                    
                    
                    
                    
                    <?php	
                        for($j=1; $j<$maximum_no_of_rounds; $j++){
                    	
						
							if($i%2==0){								
								 $maximum_no_of_rounds = $no_of_rounds[$i];
					?>
                    
                    
                            <td  rowspan= "<?php echo pow(2,$j); ?>" width="100px">
                           
                           		<?php 
									$x = $i."_".$j;									
								?>
                                
                                <select id='<?php echo $x?>' style="width:200px">
                                	<?php
										if($j < 2){
									?>
											<option value="<?php echo $finalized[$i][0];?>" onclick="selectNext('<?php echo $x?>',<?php echo $finalized[$i][0];?>)" /> <?php echo $player[$i][1]." - Rank (".$finalized[$i][0].") ";?> </option>
                                            <option value="<?php echo $finalized[$i+1][0];?>" onclick="selectNext('<?php echo $x?>',<?php echo $finalized[$i+1][0];?>)"/> <?php echo $player[$i][1]." - Rank (".$finalized[$i+1][0].") "?></option>            
                                    <?php
										}
									?>
								</select>	
                            </td>
                    <?php 
							
							}
                        }
                    ?>
                </tr>
                                
		<?php 
			}
		?>				
    </table>
</body>
</html>