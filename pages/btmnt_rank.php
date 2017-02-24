 <?php 
	include ("db_connect.php");
		   
	?>
      <SCRIPT language="javascript">
        function addRow(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(1);
            cell2.innerHTML =( rowCount-2) + 1;
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
			element2.name="xxx[]";
			element2.size="50";
            cell3.appendChild(element2);
 
        }
 
        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
            }
            }catch(e) {
                alert(e);
            }
        }
 function confirm_list(){
	 
													 var isValid2=true;
														 var  name=document.getElementById("xxx[]").value;
														
														 if(name ==""){
															 isValid2=false;
															 document.getElementById("requestError").style.display="block";
															 }
															 else {document.getElementById("requestError").style.display="none";
															 var agree=confirm("Are you sure you wish to continue? ");
												if (agree)
													return true ;
												else
													return false ;
															 }
													
													
												return isValid2;
	 }
    </SCRIPT>
    <?php 
	@$k= $_GET['a'];
	@$type=$_POST['type'];
	@$x=$_POST['xxx'];
	@$chk=$_POST['chk'];
	@$gp=$_POST['group'];
	$e=count($x);
	if($type=="l"){
		$k="league";
		}
			
	
	switch($k){
		
		case "league":
		?><div style="background:url(../images/bt2.png);"><?php
			echo "No of players : ".$e."<br/>";
			
	if(!isset($chk)){		
	for($c=0; $c<$e; $c++){
				$t = $x[$c];
$array= explode('/', $t);;
$n[$c]=$array[0];
$r[$c]=$array[1];


				
				  }}else{
			for($c=0; $c<$e; $c++){
				$n[$c]=$x[$c];
                $r[$c]=$chk[$c];
				
			}
				echo $gp;	  
					  
					  }
			
include ("batmintain/b.php");
		
		break;
		
		
			case "draw":
			?><div style="background:url(../images/bt2.png);"><?php
			echo "No of players : ".$e."<br/>";
			
	if(!isset($chk)){		
	for($c=0; $c<$e; $c++){
				$t = $x[$c];
$array= explode('/', $t);;
$n[$c]=$array[0];
$r[$c]=$array[1];


				
				  }}else{
			for($c=0; $c<$e; $c++){
				$n[$c]=$x[$c];
                $r[$c]=$chk[$c];
				
			}
					  
					  
					  }
			
include ("batmintain/a.php");
		?> </div><?php
			break;
			
			
			
			
			
			 default:
			 
			@ $max_r=$_POST['b'];
			
			?>

	
	

   
  
    
     <div style="background:url(../images/bt2.png) no-repeat; float:left; width:500px; height:100%; padding:20px;">
      <div style="float:left; "><span>Please add name of <?php echo $max_r;?>  players<br/> As Ranking order </span></div>
   <div style="float:left; margin-left:30px;"> <form method="post" action="btmnt_rank.php"  >
    <input type="text" name="b" size="10"/> <input  type="submit" value="submit" onsubmit="toggle('id');" />
    </form></div>
    
    <?php if(isset($max_r)){?>
   <center> <div  style=" margin-top:50px; background:url(../images/s.png); width:400px; height:auto; padding:10px;"   >
    
   <form method="post" action="btmnt_rank.php?a=draw" onsubmit="return confirm_list();">
     <table  align="center" id="dataTable" >
      <tr><td></td><td >*</td><td><input type="submit" value="Next"  ><INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />
 
    <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')"  /></td></tr>
     <tr style=" color:#FFF; font-family:Verdana, Geneva, sans-serif;"><th></th><th>Rank</th><th>Name of the Player</th></tr>
   <?php 
	for($row=1;$row<=$max_r;$row++){
		?>
       <tr><td><INPUT type="checkbox" name="chk[]" value="<?php echo $row; ?>"/></td><td style="color:#FFF"> <?php echo $row; ?></td><td> <input type="text" name="xxx[]" id="xxx[]" size="50" /></td></tr>
       
        <?php
		}
	
	?>
     <span id="requestError" style="color:#F00;display: none">Empty Form.Please add players.</span>
   
    </table></form> </div></center><?php }?>

     </div>
    
 <div style="height:100%; background:#000; width:2px; float:left; margin:0px 10px 0px 10px;"></div>   
    <div style="background:url(../images/bt2.png) right no-repeat; float:left; width:400px; height:100%"><h3 style=" text-align:center; font-family:Verdana, Geneva, sans-serif">Add players as ranking</h3>
   <div style="background:url(../images/s.png); width:300px; margin:auto; color:#FFF; margin-top:40px;">
    <form  method="post" action="btmnt_rank.php?a=draw" > 
	
	select tournament type : <br/>
	   <input type="radio" name="type"  value="k"/>Knockout<input type="radio" name="type" value="l"/>League &nbsp; 
       
       <select name="group" > <option value="2">2</option><option value="4">4</option> <option value="16">16</option>
<option value="32">32</option><option value="64">64</option> <option value="128">128</option>
</select><br/><br/>
       <?php
	   $i=0;	
	$a=mysql_query("SELECT Rank,First_Name,Last_Name FROM sportsman,sportsman_sport where (sportsman_sport.Sportsman_ID=sportsman.Sportsman_ID)and(sportsman_sport.Sport_ID=1) order by First_Name ",$db);
	while($ax=mysql_fetch_array($a)){
		$rank=$ax['Rank'];
	$namef=$ax['First_Name'];
	$namel=$ax['Last_Name'];
	
	$i++;

		?><input type="checkbox" name="xxx[]" value="<?php print $namef." ".$namel."/".$rank; ?>"><label name="ff"> <?php print $rank." - ".$namef." ".$namel; ?> </label>
		<br/>
		<?php 
	
	
	
	}

	?>
    <input type="submit" value="Next" >
    </form></div>
   
  <?php  }?>