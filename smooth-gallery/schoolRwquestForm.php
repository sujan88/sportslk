



<?php  $sid = $_GET['sid'];
		
 ?>
	 
<!--<?php// echo $sid;?>-->

<div style="background:url(../SportsLK%20website2/images/form.png )  repeat-x; border:thin; border-style:inset; ">
<h3> <center>School Request Form </center> </h3>


<table><tr><td style="width:700px; ">




<table border='0' style="font-size:14px;  padding-left:35px;">
<form method="post" action="createLetter.php" onsubmit="return validateForm()">






<tr>
<td >Full Name :</td>
<td><input type="text" name='FullName' size=30 id="1" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; ">
<font color='red'>eg: Asanka Gayan Pathirana</font><br />
<span id="nameError" style="color:#F00;display:none">Please Enter the Full Name.</span>
</td>
</tr>


<tr>
<td >Name with Initials :</td>
<td><input type="text" name='inname' size=30 id="2" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; ">
 <font color='red'>eg: A.G.Pathirana</font><br />
<span id="inNameError" style="color:#F00;display:none">Please Enter the Name with Initials.</span>
</td>
</tr>



<td>Age : </td>
<td><input type="text" name="Age" size="30" id="3" style="background:white;" 
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; ">
<font color='red'>eg: 14</font><br />
<span id="ageError" style="color:#F00;display:none">Please Enter your Age.</span></td>
</tr>




<tr>
<td >
Gender : </td>
<td><input type="radio" name="Gender" id="4" value="M"/>Male <input type="radio" name="Gender" id="4" value="F"/>
  Female<span id="genderError" style="color:#F00;display:none">Please sele</span>
  </td>
  </tr>



<tr>
<td valign="top" > Address No : </td>
<td><input name="Address_No" id="5" type='text' size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " >
 <font color='red'>eg: 11</font><br />
<span id="ADNoError" style="color:#F00;display:none">Please Enter Your Address No.</span>
</td>
</tr>


<tr>
<td valign="top" >Street : </td>
<td><input name="Street"  id="6" type='text'  size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; ">
 <font color='red'>eg: borollahena</font><br />
<span id="ADstError" style="color:#F00;display:none">Please Enter the Full Name.</span>
</td>
</tr>

<tr>
<td  valign="top" >Region : </td>
<td><input name="Region" id="7" type="text" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " > 
 <font color='red'>eg: Kekanadura</font><br />
<span id="ADreError" style="color:#F00;display:none">Please Enter the Full Name.</span>
</td>
</tr>

<tr>
<td>City :</td>
<td><input type="text" id="8" name="City" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> 
 <font color='red'>eg: Matara</font><br />
<span id="ADctyError" style="color:#F00;display:none">Please Enter the Full Name.</span></td>
</tr>



<tr>
<td>Sport :</td>
<td><input type="text"  id="9" name="Sport" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> 
 <font color='red'>eg: squash</font><br />
<span id="sportError" style="color:#F00;display:none">Please Enter the sport.</span></td>
</tr>


<tr>
<td>Current School : </td>
<td><input type="text" name="CSchool" size="30" id="10" 
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; ">
 <font color='red'>eg: vvvv college</font><br />
<span id="schoolError" style="color:#F00;display:none">Please Enter Your Current School.</span></td>
</tr>

<tr>
<input type="hidden" name="cSchool" value="<?php echo $sid;?>"  />
</tr>




<!--<tr><td>
Select New School :</td>
<td><select name="Nschool" id="11" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> <option value="">select one</option><option value="Rahula College">Rahula college</option> <option value="Mahinda Vidyalaya">Mahinda Vidyalaya</option>
<option value="Royal college">Royal College</option><option value="Darmaraja Vidyalaya">Darmaraja Vidyalaya</option>
</select>
 <font color='red'>eg: Rahula college</font><br />
  <br/>
<span id="NwSchError" style="color:#F00;display:none">Please Select School You With to Apply.</span>
</td>
</tr>-->






<!--<tr>
<td >Reson to apply :</td>
<td ><input type="text" name='reson' size=30 id="Reson" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; ">
  <br/>
<span id="rsnError" style="color:#F00;display:none">Please Enter the reson to apply for a  new school</span></td>
</tr>-->





<tr>
    <td>your best performance in your sports:</td>
    <td><textarea name="best"  id="12" cols="30" rows='3' style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "></textarea>
 <font color='red'>eg: junior national</font><br />
<span id="bestError" style="color:#F00;display:none">Please Enter Your best Achievements</span>
</td>
</tr>
  
  
  






<script type="text/javascript">


function validateForm()
{
	var isValid = true;
	var uname = document.getElementById(1).value;//name
	var inName = document.getElementById(2).value;//name
	var Age=document.getElementById(3).value;//age
	var Adno = document.getElementById(5).value;//addno
	var Adst = document.getElementById(6).value;//addSt
	var AdReg = document.getElementById(7).value;//addReg
	var AdCty = document.getElementById(8).value;//addCty
	var sport=document.getElementById(9).value;//sport
	var School=document.getElementById(10).value;//school
	//var NwSchool=document.getElementById(11).value;//newschool
	//var Reson = document.getElementById(12).value;//Reson
	var BPrm = document.getElementById(12).value;//bestPrm
	var gender=document.getElementById(4).value;
	
	//for full name
	if(uname == "") 
	{
		isValid = false;
		document.getElementById("nameError").style.display = "block";
	}
	else document.getElementById("nameError").style.display = "none";
	
	
	//name with ini
	if(inName == "") 
	{
		isValid = false;
		document.getElementById("inNameError").style.display = "block";
	}
	else document.getElementById("inNameError").style.display = "none";
	
	
	//age
	if(Age=="") 
	{
	isValid=false;
	document.getElementById("ageError").style.display="block";
	}
	else document.getElementById("ageError").style.display="none";
	
	
	//gender
	if(gender=="") 
	{
	isValid=false;
	document.getElementById("genderError").style.display="block";
	}
	else document.getElementById("genderError").style.display="none";
	
	//ADNO
	if(Adno == "") 
	{
		isValid = false;
		document.getElementById("ADNoError").style.display = "block";
	}
	else document.getElementById("ADNoError").style.display = "none";
	if(pass == "")
	
	//ADSt
	if(Adst == "") 
	{
		isValid = false;
		document.getElementById("ADstError").style.display = "block";
	}
	else document.getElementById("ADstError").style.display = "none";
	if(pass == "")
	
	//ADReg
	if(AdReg == "") 
	{
		isValid = false;
		document.getElementById("ADreError").style.display = "block";
	}
	else document.getElementById("ADreError").style.display = "none";
	if(pass == "")
	
	//ADCty
	if(AdCty == "") 
	{
		isValid = false;
		document.getElementById("ADctyError").style.display = "block";
	}
	else document.getElementById("ADctyError").style.display = "none";
	
	
	//sport
	if(sport=="") 
	{
	isValid=false;
	document.getElementById("sportError").style.display="block";
	}
	else document.getElementById("sportError").style.display="none";
	
	//current school
	if(School=="") 
	{
	isValid=false;
	document.getElementById("schoolError").style.display="block";
	}
	else document.getElementById("schoolError").style.display="none";
	
	//new school
	/*if(NwSchool=="") 
	{
	isValid=false;
	document.getElementById("NwSchError").style.display="block";
	}
	else document.getElementById("NwSchError").style.display="none";
	
	//Reson
	if(Reson == "") 
	{
		isValid = false;
		document.getElementById("rsnError").style.display = "block";
	}
	else document.getElementById("rsnError").style.display = "none";
	
	
	//best performance
	if(BPrm == "") 
	{
		isValid = false;
		document.getElementById("bestError").style.display = "block";
	}
	else document.getElementById("bestError").style.display = "none";
	
	
	
	
	
	
	
	return isValid;
	
}
</script>







<tr>
<td><br /></td>

<td><p>
  <input type="reset" value="Reset" /> 
  </p>
  <p>
    <input type="submit" name="sub" value="Create Letter" />
    <br />
  </p></td>
</tr>

</form>
</table>
