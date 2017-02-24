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
	/*if(document.getElementById(m).options.length>=2){
		return;
	}	*/
		
	var combobox2 = document.getElementById(m);	
	combobox2.options[combobox2.options.length] = new Option(combobox1.options[combobox1.selectedIndex].text,combobox1.value);
	document.getElementById(m).options[1].setAttribute("onclick","selectNext('"+m+"','"+show+"')");
}
</script>
</head>

<body>

	<?php
		//For the Algorithm
		static $player, $group;
		static $no_of_players; $no_of_groups; $temp_size_of_group; $no_of_lengthy_groups; $sizes_of_groups;
		$order_of_groups;$starting_character = 65;$starting_index = 0;
		$order_of_groups[0] = 0;
		$order_of_groups[1] = 2;
		$order_of_groups[2] = 1;				
		$order_of_groups[3] = 3;
		/////////////////////////////////////////////////////////////////////
		//Read values////////////////////////////////////////////////////////
	
		$no_of_players = $e;//////////////////////////////////////////////////////////////////////////////////////sujan
		
		//Testing/////////////////////////////////////////////////////////////////////////////////////sujan 
		for($i = 0; $i<$no_of_players; $i++){
			$player[$i][0] = $r[$i];
			$player[$i][1] = $n[$i];	
		}	
		$no_of_groups = $gp;///////////////////////////////////////////////////////////////////////////////////////sujan
				
		$max_no_of_groups = (int)pow(2,(int)(log($no_of_players)/log(2))-2);
		
		while($no_of_groups > $max_no_of_groups){//////////////////////////////////////////////////////////////sujan
			?><script>alert("No of Groups is unacceptable... Enter a less number"); </script><?php
			header("Location: ../btmnt_rank.php");
		}
		
		/////////////////////////////////////////////////////////////////////
		//Defining sizes of arrays///////////////////////////////////////////
		/*group = new int[no_of_groups][][];
		sizes_of_groups = new int[no_of_groups];*/
		$temp_size_of_group = (int)($no_of_players/$no_of_groups);
		$no_of_lengthy_groups = $no_of_players%$no_of_groups;
		
		
		/////////////////////////////////////////////////////////////////////
		//Defining the sizes of groups///////////////////////////////////////
		if($no_of_lengthy_groups != 0){
			for($i=0; $i<$no_of_groups; $i++){
				if($no_of_lengthy_groups > 0){
					$sizes_of_groups[$i] = $temp_size_of_group+1;
					$no_of_lengthy_groups--;
				}
				else{
					$sizes_of_groups[$i] = $temp_size_of_group;
				}
			}
		}else{
			for($i=0; $i<$no_of_groups; $i++){
				$sizes_of_groups[$i] = $temp_size_of_group;				
			}			
		}		
		
		/////////////////////////////////////////////////////////////////////
		//Assigning the individual groups to group array/////////////////////		
		for($i=0; $i<$no_of_groups; $i++){
			$group[$i] = array();
		}
		
				
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
		//Add players to groups//////////////////////////////////////////////
		$counter = 0;	
		
		$iterations;
		if((int)($no_of_players%(2*$no_of_groups))==0)
			$iterations = (int)($no_of_players/(2*$no_of_groups));
		else{
			$iterations = (int)($no_of_players/(2*$no_of_groups)+1);
		}
		
		for($i=0; $i<$iterations; $i++){
			
			for($j=0; $j < $no_of_groups; $j++){
				$group[$j][2*$i] = $player[$counter];				
				if($counter != $no_of_players-1){
					if(2*$i != $sizes_of_groups[$j]-1){
						$group[$j][2*$i+1] = $player[++$counter];
					}
				}
				else{
					break 2;
				}
				$counter++;				
			}		

		}
		
		////////////////////////////////////////////////////////////////////////////////////
		//Interchange groups
		for($i=0; $i < $no_of_groups/4; $i++){
			$index1 = $starting_index+2;
			$index2 = $starting_index+1;			
			$temp = $group[$index1];
			$group[$index1] = $group[$index2];
			$group[$index2] = $temp;
						
			$starting_index+=4;
		}
		
		
	?>
    
    
    
    <!--Design of Draw-->
    <div style="float:left"> 
   
        <table border="1" style="margin:1px" cellspacing="4px">
        
            <?php
                $maximum_no_of_matches = 0; 
				
                for($i=$sizes_of_groups[0]-1;$i>0;$i--){
                    $maximum_no_of_matches+=$i;	
                }
            ?>
        
        
            <?php
                for($i=0; $i<$no_of_groups; $i++){
            ?>
                <tr>
                    <td align="right" width="100px" height="<?php echo $maximum_no_of_matches*24 ?>"px>
                    	<p style="font-size:18px;">
                        	<b>
                            	Group 
									<?php 
										echo chr($starting_character+$order_of_groups[(int)($i%4)]);			
										if(($i+1)%4 == 0)
											$starting_character+=4;
									?>
                            </b>
                        </p>
                    </td>
                    <td  width="400px" height="<?php echo $maximum_no_of_matches*24 ?>"px>
                    	<?php
                            for($j=0; $j<$sizes_of_groups[$i]; $j++){
                                for($k=$j+1; $k<$sizes_of_groups[$i]; $k++){
                                    echo $group[$i][$j][1]." - Rank (".$group[$i][$j][0].") vs ".$group[$i][$j][1]." - Rank (".$group[$i][$k][0].")<br/>";					
                                }
                                
                            }
                        ?>
                    </td>
                </tr>
    
            <?php	
                }
            ?>
        </table>
    </div>
    
    <div>
      	<table border="0">
            <?php
                //For the Design
                static $no_of_rounds;$size_of_draw = $no_of_groups*2;
                
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
                    <tr style="padding:0px;">         	
                        <td  width="100px" style="padding:0px;">
                        		<?php 
									$x = $i."_"."0";									
								?>
                                
                            <select id="<?php echo $x ?>" style="width:150px; height:<?php echo $maximum_no_of_matches*24*$no_of_groups/($no_of_groups*2)?>px;">
                            	<?php 
									for($m=0;$m<count($group[(int)$i/2]);$m++){
								?>                                
                                <option value="<?php echo $i."_"."0";?>" onclick="selectNext('<?php echo $x;?>','<?php echo $group[(int)$i/2][$m][0];?>')" /> <?php echo $group[(int)$i/2][$m][1]." - Rank (".$group[(int)$i/2][$m][0].")";?> </option>
                                <?php 
									}
								?>
                            </select>
                        </td>
                        
                        <?php	
                            for($j=1; $j<$maximum_no_of_rounds; $j++){
                            
                            
                                if($i%2==0){								
                                     $maximum_no_of_rounds = $no_of_rounds[$i];
                        ?>
                        
                        
                                <td rowspan= "<?php echo pow(2,$j); ?>" width="100px" >
                                	<?php 
										$x = $i."_".$j;									
									?>
                                    <select id="<?php echo $x ?>" style="width:150px; height:<?php echo $maximum_no_of_matches*24*$no_of_groups/($no_of_groups*2)?>px;">     			
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
    </div>
</body>
</html>