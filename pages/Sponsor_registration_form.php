
<div style="background:url(../SportsLK%20website2/images/form.png )  repeat-x; border:thin; border-style:inset; ">

<h3><center>Sponsor Registration Form</center></h3> 
<table><tr><td>
<table  border="0" style=" font-size:14px; padding-left:35px; width:100%; ">

<form name="form2" action="check form.php?action=check_sn" method="POST"  onSubmit="return validateForm2()">
<tr>
    <td>User Name:</td>
    <td ><input type="text" name="u_name" id="uname2"  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " size="30"/><font color='red'>*</font>
    <td><span id="nameError" style="color:#F00;display:none">Please enter user name.</span></td></td>
</tr>
<tr>
    <td>Password:</td>
    <td><input type="password" name="password" id="pass2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
    <td><span id="passError" style="color:#F00;display:none">Please enter password.</span></td></td>
</tr>
<tr>
    <td>Confirm Password:</td>
    <td><input type="password" name="confirm" id="Confirm2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
    <td><span id="confError" style="color:#F00;display:none">your confirmpassword does not match.</span></td></td>
</tr>
<tr>
    <td >First_Name:</td>
    <td > <input type="text" name="f_name" id="FirstName2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
    <td><span id="firstnError" style="color:#F00;display:none">Please enter First name.</span></td></td>
</tr>
<tr>
    <td>Middle_Name:</td>
    <td><input type="text" name="m_name" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
<tr>
<td>Lasrt_Name:</td>
    <td> <input type="text" name="l_name" id="LastName2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
    <td><span id="lastnError" style="color:#F00;display:none">Please enter Last name.</span></td></td>
</tr>
<tr>
    <td>Date of Birth :</td>
    <td> 
	<?php 
 $useDate=0;
/* create array so we can name months */ 
$monthName = array(1=> "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"); 
/* if date invalid or not supplied, use current time */ 
if($useDate == 0) { $useDate = Time(); } ?>


<?php echo "<SELECT NAME=Year2 id=year2 >\n"; $startYear = date( "Y", $useDate); for($currentYear = $startYear - 70; $currentYear <= $startYear+20;$currentYear++) { echo "<OPTION VALUE=\"$currentYear\""; if(date( "Y", $useDate)==$currentYear) { echo " SELECTED"; } echo ">$currentYear\n"; } echo "</SELECT>" ?>
<?php echo "<SELECT NAME=Month2 >\n"; for($currentMonth = 1; $currentMonth <= 12; $currentMonth++) { echo "<OPTION VALUE=\"$currentMonth\""; echo intval($currentMonth); echo "\""; if(intval(date( "m", $useDate))==$currentMonth) { echo " SELECTED"; } echo ">" . $monthName[$currentMonth] . "\n"; } echo "</SELECT>"; ?>
<?php echo "<SELECT NAME=Day2>\n"; for($currentDay=1; $currentDay <= 31; $currentDay++) { echo "<OPTION VALUE=\"$currentDay\""; if(intval(date( "d", $useDate))==$currentDay) { echo " SELECTED"; } echo ">$currentDay\n"; } echo "</SELECT>"; ?>
<td><span id="yearError" style="color:#F00;display:none">Please enter your Birth Day.</span></td>
</tr>
<tr>
   <td>What type of sports are you interested :</td>
   <td><select name="Sport2" id="sport2" style="background:#FFF; color:#000;" onblur="this.style.background = '#FF9'; "> <option value="">select one</option><option value="1">Batmintain</option> <option value="2">Squash</option>
<option value="3">Cricket</option><option value="4">Weightlifting</option>
</select> <font color='red'>*</font> 
<td><span id="sportError" style="color:#F00;display:none"> Requred.</span></td></td>
</tr>
<tr>
    <td>Gender :</td>
    <td><input type="radio" name="gender2" id="gender2" value="M"/>Male <input type="radio" name="gender" value="F" />Female
   <td> <span id="genderError" style="color:#F00;display:none">Please select your gender.</span></td></td>
</tr>
<tr>
    <td> Nationality:</td>
    <td><input type="text" name="nationality2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
<tr>
    <td>Religion:</td>
    <td><input type="text" name="religion2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
<tr>
    <td>Addresss_No:</td>
    <td><input type="text" name="address_no2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td> 
</tr>
<tr>
    <td>Street:</td>
    <td> <input type="text" name="street2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
<tr>
    <td>Region:</td>
    <td> <input type="text" name="region2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
  <tr>
    <td>City:</td>
    <td><input type="text" name="city2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
<tr>
    <td>Mobile:</td>
    <td>  <input type="text" name="mobile2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
<tr>
    <td>Office Tel:</td>
    <td><input type="text" name="home_tp" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "/></td>
</tr>
<tr>
    <td>E-mail:</td>
    <td><input type="text" name="mail" id="Email2" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
   <td><span id="mailError" style="color:#F00;display:none">Please enter your Email.</span></td></td>
</tr>
 
<tr>
    <td>upload your picture</td>
    <td> 
       <table width=100% border=0 cellpadding=0 cellspacing=0>
              <tr><td><input type='hidden' name='MAX_FILE_SIZE' value='3000000'></td></tr>
               <tr><td style="font-size:12px;">Photo Must Be 250px W by 250px H and in <br/>.JPG or .GIF format.</td></tr>
              <tr><td style="font-size:12px; color:#006">Choose your image:<br>
                 <?php
                    echo "<input name='file' type='file'></td></tr>";
                  ?></td></tr>
        </table>
    </td>
</tr>
<tr>
    <td>how much do you like to sponse:</td>
    <td><textarea name="total" cols="25" rows=‘5’ style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; "></textarea></td>
</tr>
  
<script>
    function validateForm2()
{
	var isValid = true;
	var uname2 = document.getElementById("uname2").value;
	var pass2 = document.getElementById("pass2").value;
	var Confirm2 = document.getElementById("Confirm2").value;
	var FirstName2 = document.getElementById("FirstName2").value;
	var LastName2 =document.getElementById("LastName2").value;
	var year2=document.getElementById("year2").value;
	var sport2=document.getElementById("sport2").value;
	var gender2=document.getElementById("gender2").value;
	var Email2=document.getElementById("Email2").value;
	
	if(uname2 == "") 
	{
		isValid = false;
		document.getElementById("nameError").style.display = "block";
	}
	else document.getElementById("nameError").style.display = "none";
	
	if(pass2 == "")
	{
		isValid2 = false;
		document.getElementById("passError").style.display = "block";
	}
	else document.getElementById("passError").style.display = "none";
	
	if(pass2 != Confirm2)
	{
		isValid = false;
		document.getElementById("confError").style.display = "block";
	}
	else document.getElementById("confError").style.display = "none";
	
	if(FirstName2==""){
	isValid=false;
	document.getElementById("firstnError").style.display="block";
    }
	else document.getElementById("firstnError").style.display ="none";
	
	if(LastName2=="") 
	{
	isValid=false;
	document.getElementById("lastnError").style.display="block";
	}
	else document.getElementById("lastfError").style.display="none";
	
	if(year2=="") 
	{
	isValid=false;
	document.getElementById("yearError").style.display="block";
	}
	else document.getElementById("yearError").style.display="none";
	
	if(sport2=="") 
	{
	isValid=false;
	document.getElementById("sportError").style.display="block";
	}
	else document.getElementById("sportError").style.display="none";
	
	if(gender2=="") 
	{
	isValid=false;
	document.getElementById("genderError").style.display="block";
	}
	else document.getElementById("genderError").style.display="none";
	
	if(Email2=="") 
	{
	isValid=false;
	document.getElementById("mailError").style.display="block";
	}
	else document.getElementById("mailError").style.display="none"; 
	
	return isValid;
	
}
</script>
<tr>
    <td><?php echo "<input type=submit name=Submit value='Submit' style=\"font-family: Verdana; font-size: 8pt; font-weight: bold; BACKGROUND-COLOR: #5E6456; COLOR: #ffffff;\">";?></td>
    <td><input type="reset"  name="res" value="Reset"/></td>
</tr>
  </form>
</table>
</td>

<td>

      

</td></tr></table>

</div>
