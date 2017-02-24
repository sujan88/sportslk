

<link rel="stylesheet" href="../../css/body.css" type="text/css" media="screen" />
<?php @$idsp=$_GET['idsp']; 
?>
<div id="main">
    <div id="top">
    </div>
 <div id="middle">
 <div id='container' >


<div><center>Edit your profile </center>
<div><hr/> <h4>step 1 -update your details.. </h4></div>


<?php 
include("../db_connect.php");
 $A=mysql_query( "SELECT * FROM sportsman WHERE Sportsman_ID='$idsp' " ,$db);
				   
				  
			$r = mysql_fetch_array($A);
				   $namef=$r['First_Name'];
				   $namem=$r['Middle_Name'];
				   $namel=$r['Last_Name'];
				   $state=$r['Status'];
				   $height=$r['Height'];
				   $nationality=$r['Nationality'];
				   $weight=$r['Weight'];
				   $bg=$r['Blood_Group'];
				   $height=$r['Height'];
				   $d=$r['Diet'];
				   $a1=$r['Address_No'];
				   $a2=$r['Street'];
				   $a3=$r['Region'];
				   $a4=$r['City'];
				   $m=$r['Mobile'];
				   $t=$r['Tel_Home'];
				   $e=$r['E_Mail'];
				   		 
?>
<script>

var FirstName ,LastName,Email,Status,Height,Nationality,Weight,Blood_Group,Diet,Address_No,Region,City,Mobile,Tel_Home;
function validateForm()
{ 
	
	
	var FirstName = document.getElementById("FirstName").value;
	 namem=document.getElementById("Middle_Name").value;
	var LastName =document.getElementById("LastName").value;
	Height=document.getElementById("Height").value;
	Nationality=document.getElementById("Nationality").value;
	Weight=document.getElementById("Weight").value;
	Diet=document.getElementById("Diet").value;
	
    Address_No=document.getElementById("Address_No").value;
	Street=document.getElementById("Street").value;
	Region=document.getElementById("Region").value;
	City=document.getElementById("City").value;
	Mobile=document.getElementById("Mobile").value;
	Tel_Home=document.getElementById("Tel_Home").value;
	
	

	var Email=document.getElementById("Email").value;
	
	if(FirstName==""&&LastName==""&&Email==""){
	if(FirstName==""){
	
	document.getElementById("firsnError").style.display="block";
    }
	else document.getElementById("firsnError").style.display ="none";
	
	if(LastName=="") 
	{
	
	document.getElementById("lastnError").style.display="block";
	}
	else document.getElementById("lastfError").style.display="none";
	
	
	
	
	if(Email=="") 
	{
	
	document.getElementById("mailError").style.display="block";
	}
	else document.getElementById("mailError").style.display="none";
	
	}else 
	update();
	
	
}
function update(){
	window.alert('update was succesful.');
	}
function add(){
	
	<?php
	@$e=$_GET['x'];
	@$e2=$_GET['y'];
	
	
	/* 
	 mysql_query("UPDATE  sportsman SET  
	               First_Name=$namef,
				   Middle_Name= echo '<script type="text/JavaScript"> echo index; </script>' ,;
				   Last_Name=$namel,
				   Status=$state,
				   Height=$height,
				   Nationality=$nationality,
				   Weight=$weight,
				   Blood_Group=$bg,
				   Height=$height,
				   Diet=$d,
				   Address_No= $a1,
				   Street=$a2,
				   Region= $a3,
				   City=$a4,
				   Mobile=$m,
				   Tel_Home=$t,
				   E_Mail=$e
	 
	  WHERE Sportsman_ID='$idsp' ",$db); */
	
	 ?>
	window.alert('<?php echo $e; ?>');
	}
</script>
<form method="post" action="#" onsubmit="return validateForm()">
<table><tr><td>
<table>

<tr>
<td >First Name :</td>
<td><input type="text" name='First_Name' value='<?php echo $namef;?>' size=30 id="FirstName" style="background:white;"

onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><font color='red'>*</font><br/>
<span id="firsnError" style="color:#F00;display:none">Please Enter the First Name.</span>
</td>
</tr>
<tr>
<td >Middle Name :</td>
<td><input type="text" name='Middle_Name' id='Middle_Name' value="<?php echo 

$namem;?>" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "></td>
</tr>
<tr>
<td >Last Name :</td>
<td ><input type="text" name='Last_Name' value="<?php echo $namel;?>" size=30 

id="LastName" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><font color='red'>*</font><br/>
<span id="lastnError" style="color:#F00;display:none">Please Enter the Last 

Name.</span></td>
</tr>

<tr><td>
Status :</td>
<td><select name="Status" id="Status"  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> <option value="<?php echo $state;?>">select 

one</option> <option value="1">Married</option>
<option value="0">Unmarried</option></select>
</td></tr>

<tr>
<td >
Nationality : </td>
<td><input type="text" name="Nationality" id="Nationality" size=30 value="<?PHP echo 

$nationality;?>"  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/> </td></tr>
<tr>
<td>Religion :</td>
<td><input type=text name="Religion" id="Religion" value="<?PHP echo $weight;?>" size='30' 

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ></td>
</tr>
<tr>
<td>Height :</td>
<td><input type=text name="Height" id="Height" value="<?PHP echo $height;?>" size='5'  

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><font color="#0000FF">cm</font></td>
</tr>
<tr>
<td>Weight :</td>
<td><input type=text name="Weight" id="Weight" value="<?PHP echo $weight;?>" size='5' 

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ><font color="#0000FF">kg</font></td>
</tr>
<tr>
<td>Blood Gruop :</td>
<td><select  name="Blood_Group" id="Blood_Group"  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ><option value="<?PHP echo $bg;?>">select 

one</option><option value="A+">A+</option>
<option value="A-">A-</option><option value="B+">B+ </option> <option value="B-">B-

</option><option value="O+">O+</option><option value="O-">O-</option><option 

value="AB+">AB+</option><option value="AB-">AB-</option></select>
</td>
</tr>
<tr><td><input type="submit" value="UPDATE" /></td><td></td></tr>
</table>
</td>
<td width="150">   </td>
<td>
<table>

<tr>
<td>Diet :</td>
<td><select type="text" name="Diet" id="Diet" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><option value="<?PHP echo $d;?>">select 

one</option><option value="1">Vegitarian</option><option value="0">Non-Vegitarian
</option></select></td></tr> 

<tr>
<td valign="top" > Address No : </td>
<td><input name=" Address_No" id="Address_No" type='text' value="<?PHP echo $a1;?>" 

size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ></td>
</tr>
<tr>
<td valign="top" >Street : </td>
<td><input name=" Street" id="Street" type='text' value="<?PHP echo $a2;?>" size=30 

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "></td>
</tr>
<tr>
<td  valign="top" >Region : </td>
<td><input name="Region" id="Region"type="text" value="<?PHP echo $a3;?>" size=30 

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " > </td>
</tr>
<tr>
<td>City :</td>
<td><input type="text" name="City" id="City"  value="<?PHP echo $a4;?>" size=30 

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> </td>
</tr>
<tr>
<td>Mobile:</td>
<td><input type="text" name="Mobile" id="Mobile" value="<?PHP echo $m;?>" size=30 

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " > </td>
</tr>
<tr>
<td>Tel Home :</td>
<td><input type="text" name="Tel_Home" id="Tel_Home" value="<?PHP echo $t;?>" size=30 

style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " > </td>
</tr>
<tr>
<td>E Mail :" </td>
<td><input type="text" name="E_Mail" value="<?PHP echo $e;?>" size="30" id="Email" ><font color="red">*</font><br/>
<span id="mailError" style="color:#F00;display:none">Please Enter your Email.</span></td>
</tr>
<tr><td>  </td><td>  </td></tr>
<tr>
<td>
<input type="submit" value="UPDATE" />

</td><td><input type="reset" value="CLEAR ALL" /></td>
</tr>
</table>
</td>
</tr></table>



</form>











<hr/>
<h4>step 2 - Upload your images</h4>






<table>

<tr><td>

 <div style="padding:10px; width:50%">
 edit your profile..

 <form method="post" action="../../Profile.php?edit=ok">

                <textarea style="text-align:left; margin:0 0 0 10px;" id="msg" name="msg"  cols="50" rows="10"></textarea><br/>
                
                <input type="submit" value="Sumbit"/>
</form>

        </div>
        </td><td>
      
        <div style=" padding:40px;">
        <?php 
     $upload_image_limit = 5;
	 $i=0;
	  
	  while($i++ < $upload_image_limit){
		@$form_img .= '<label>Image '.$i.': </label> <input type="file" name="uplimg'.$i.'"><br />';
	}

	@$htmo .= '
		<p>'.@$feedback.'</p>
		<form method="post" action="../../Profile.php?action2=sportman&edit_t=photo&idsp='.$idsp.'" enctype="multipart/form-data">
			'.$form_img.' <br />
			<input type="submit" value="Upload Images!" style="margin-left: 50px;" />
			
		</form>
		';	

	echo $htmo;
        ?>
        
         </div>

</td></tr></table>
</div>