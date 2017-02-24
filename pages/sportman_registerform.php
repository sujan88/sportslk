<div style="background:url(../SportsLK%20website2/images/form.png )  repeat-x; border:thin; border-style:inset; ">
<h3> <center>Sportsman  Registration Form </center> </h3>
<table><tr><td style="width:700px; "><?php 
 $useDate=0;
/* create array so we can name months */ 
$monthName = array(1=> "January", "February", "March", 
"April", "May", "June", "July", "August", 
"September", "October", "November", "December"); 

/* if date invalid or not supplied, use current time */ 
if($useDate == 0) 
{ 
$useDate = Time(); 
} ?>

<table border=‘0’ style="font-size:14px;  padding-left:35px;">
<form method="post" action="check form.php?action=check_sp" onsubmit="return validateForm()">


<tr><td>
User Name:</td><td>
<input type="text" name="login" id="uname" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/><font color='red'>*</font><br />
<span id="nameError" style="color:#F00;display:none">Please enter user name.</span></td>
</tr>
<tr><td>
Password:</td><td>
<input type="password" name="pass" id="pass" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/><font color='red'>*</font><br />
<span id="passError" style="color:#F00;display:none">Please enter password.</span></td>
</tr>
<tr><td>
Confirm :</td><td>
<input type="password" name="confirm"  id="Confirm" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/><font color='red'>*</font><br/>
<span id="confError" style="color:#F00;display:none">Your confirm password does not match.</span>
</td></tr>

<tr>
<td >First Name :</td>
<td><input type="text" name='First_Name' size=30 id="FirstName" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><font color='red'>*</font><br/>
<span id="firsnError" style="color:#F00;display:none">Please Enter the First Name.</span>
</td>
</tr>
<tr>
<td >Middle Name :</td>
<td><input type="text" name='Middle_Name' size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "></td>
</tr>
<tr>
<td >Last Name :</td>
<td ><input type="text" name='Last_Name' size=30 id="LastName" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><font color='red'>*</font><br/>
<span id="lastnError" style="color:#F00;display:none">Please Enter the Last Name.</span></td>
</tr>
<tr >
<td >Date of Birth:</td>
<td >
<?php 
 $useDate=0;
/* create array so we can name months */ 
$monthName = array(1=> "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"); 
/* if date invalid or not supplied, use current time */ 
if($useDate == 0) { $useDate = Time(); } 

 echo "<SELECT NAME=Year id=year>\n"; $startYear = date( "Y", $useDate);echo("<OPTION VALUE=\" \"></OPTION>"); for($currentYear = $startYear - 70; $currentYear <= $startYear-5;$currentYear++) { echo "<OPTION VALUE=\"$currentYear\""; if(date( "Y", $useDate)==$currentYear) { echo " SELECTED"; } echo ">$currentYear\n"; } echo "</SELECT>";

echo "<SELECT NAME=Month >\n"; for($currentMonth = 1; $currentMonth <= 12; $currentMonth++) { echo "<OPTION VALUE=\"$currentMonth\""; echo intval($currentMonth); echo "\""; if(intval(date( "m", $useDate))==$currentMonth) { echo " SELECTED"; } echo ">" . $monthName[$currentMonth] . "\n"; } echo "</SELECT>"; 

echo "<SELECT NAME=Day>\n";for($currentDay=1; $currentDay <= 31; $currentDay++) { echo "<OPTION VALUE=\"$currentDay\""; if(intval(date( "d", $useDate))==$currentDay) { echo " SELECTED"; } echo ">$currentDay\n"; } echo "</SELECT>"; ?><br/>
<span id="yearError" style="color:#F00;display:none">Please Enter yor Birth Day.</span></td>
</tr>
<tr><td>
Select your sport :</td>
<td><select name="Sport" id="sport" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> <option value="">select one</option><option value="1">Batmintain</option> <option value="2">Squash</option>
<option value="3">Cricket</option><option value="4">Weightlifting</option>
</select><font color='red'>*</font><br/>
<span id="sportError" style="color:#F00;display:none">Please select your sport.</span>
</td>
</td></tr>
<tr><td>
Status :</td>
<td><select name="Status" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> <option value="">select one</option> <option value="1">Married</option>
<option value="0">Unmarried</option></select>
</td></tr>
<tr>
<td >
Gender : </td>
<td><input type="radio" name="Gender" id="gender" value="M"/>Male <input type="radio" name="Gender" value="F"/>Female <font color='red'>*</font>
<span id="genderError" style="color:#F00;display:none">Please select your gender.</span></td></tr>
<tr>
<td >
Nationality : </td>
<td><input type="text" name="Nationality" size=30  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/> </td></tr>
<tr>
<td>Religion :</td>
<td><input type=text name="Religion"’ size=30’ style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ></td>
</tr>
<tr>
<td>Height :</td>
<td><input type=text name="Height"’ size=‘5’  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><font color="#0000FF">cm</font></td>
</tr>
<tr>
<td>Weight :</td>
<td><input type=text name="Weight"’ size=‘5’ style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ><font color="#0000FF">kg</font></td>
</tr>
<tr>
<td>Blood Gruop :</td>
<td><select  name="Blood_Group"  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ><option value="">select one</option><option value="A+">A+</option>
<option value="A-">A-</option><option value="B+">B+ </option> <option value="B-">B-</option><option value="O+">O+</option><option value="O-">O-</option><option value="AB+">AB+</option><option value="AB-">AB-</option></select>
</td>
</tr>
<tr>
<td>Diet :</td>
<td><select type="text" name="Diet" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "><option value="">select one</option><option value="1">Vegitarian</option><option value="0">Non-Vegitarian
</option></select></td></tr> 

<tr>
<td valign="top" > Address No : </td>
<td><input name=" Address_No" type='text' size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " ></td>
</tr>
<tr>
<td valign="top" >Street : </td>
<td><input name=" Street" type='text'  size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "></td>
</tr>
<tr>
<td  valign="top" >Region : </td>
<td><input name="Region" type="text" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " > </td>
</tr>
<tr>
<td>City :</td>
<td><input type="text" name="City" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "> </td>
</tr>
<tr>
<td>Mobile:</td>
<td><input type="text" name="Mobile" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " > </td>
</tr>
<tr>
<td>Tel Home :</td>
<td><input type="text" name="Tel_Home" size=30 style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " > </td>
</tr>
<tr>
<td>E Mail : </td>
<td><input type="text" name="E_Mail" size="30" id="Email" ><font color="red">*</font><br/>
<span id="mailError" style="color:#F00;display:none">Please Enter your Email.</span></td>
</tr>
<script>


function validateForm()
{
	var isValid = true;
	var uname = document.getElementById("uname").value;
	var pass = document.getElementById("pass").value;
	var Confirm = document.getElementById("Confirm").value;
	var FirstName = document.getElementById("FirstName").value;
	var LastName =document.getElementById("LastName").value;
	var year=document.getElementById("year").value;
	var sport=document.getElementById("sport").value;
	var gender=document.getElementById("gender").value;
	var Email=document.getElementById("Email").value;
	
	if(uname == "") 
	{
		isValid = false;
		document.getElementById("nameError").style.display = "block";
	}
	else document.getElementById("nameError").style.display = "none";
	
	if(pass == "")
	{
		isValid = false;
		document.getElementById("passError").style.display = "block";
	}
	else document.getElementById("passError").style.display = "none";
	
	if(pass != Confirm)
	{
		isValid = false;
		document.getElementById("confError").style.display = "block";
	}
	else document.getElementById("confError").style.display = "none";
	
	if(FirstName==""){
	isValid=false;
	document.getElementById("firsnError").style.display="block";
    }
	else document.getElementById("firsnError").style.display ="none";
	
	/*if(LastName=="") 
	{
	isValid=false;
	document.getElementById("lastnError").style.display="block";
	}
	else document.getElementById("lastfError").style.display="none";*/
	
	if(year=="") 
	{
	isValid=false;
	document.getElementById("yearError").style.display="block";
	}
	else document.getElementById("yearError").style.display="none";
	
	if(sport=="") 
	{
	isValid=false;
	document.getElementById("sportError").style.display="block";
	}
	else document.getElementById("sportError").style.display="none";
	
	if(gender=="") 
	{
	isValid=false;
	document.getElementById("genderError").style.display="block";
	}
	else document.getElementById("genderError").style.display="none";
	
	if(Email=="") 
	{
	isValid=false;
	document.getElementById("mailError").style.display="block";
	}
	else document.getElementById("mailError").style.display="none";
	
	return isValid;
	
}
</script>
<tr>
    <td>upload your image:</td>
    <td> 
    <table width=100% border=0 cellpadding=0 cellspacing=0>

<tr><td><input type='hidden' name='MAX_FILE_SIZE' value='3000000'></td></tr>
<tr><td style="font-size:12px;">Photo Must Be 250px W by 250px H and in .JPG or .GIF format.</td></tr>

<tr><td style="font-size:12px; color:#006">Choose your image :<br>
<?php

echo "<input name='file_sportman' type='file'></td></tr>";

?></td></tr>
</table>
    
    </td>
    </tr>
<tr>
    <td>your best performance in your sports:</td>
    <td><textarea name="best" cols="30" rows=‘3’ style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "></textarea></td>
  </tr>
<tr>
<td  colspan='2'>
<table border='0'>





<tr><td>
<input type="submit" value="Sign up" /><br /></td><td>
<input type="reset" value="clear" /><br /></td></tr>
</form>
</table></table>
</td>
<td ><div style="height:100%"> 

    
                  


</div></td></tr></table>
</div>