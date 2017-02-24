
<div style="background:url(../SportsLK%20website2/images/form.png )  repeat-x; border:thin; border-style:inset; ">

<h3><center>Tournament Organizer Registration Form</center></h3> 
<table> <tr> <td>
<table  border="0" style=" font-size:14px; padding-left:35px; width:100%; ">

<form name="form3" action="check form.php?action=check_to" method="POST"  onSubmit="return validateForm3()">
<tr>
    <td>User Name:</td>
    <td ><input type="text" name="u_name" id="uname3"  style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " size="30"/><font color='red'>*</font>
    <td><span id="nameError" style="color:#F00;display:none">Please enter user name.</span></td></td>
</tr>
<tr>
    <td>Password:</td>
    <td><input type="password" name="password" id="pass3" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
    <td><span id="passError" style="color:#F00;display:none">Please enter password.</span></td></td>
</tr>
<tr>
    <td>Confirm Password:</td>
    <td><input type="password" name="confirm" id="Confirm3" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
    <td><span id="confError" style="color:#F00;display:none">your confirmpassword does not match.</span></td></td>
</tr>
<tr>
    <td >First_Name:</td>
    <td > <input type="text" name="f_name" id="FirstName3" size="30" style="background:white;"
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
    <td> <input type="text" name="l_name" id="LastName3" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
    <td><span id="lastnError" style="color:#F00;display:none">Please enter Last name.</span></td></td>
</tr>


<tr>
    <td>Gender :</td>
    <td><input type="radio" name="gender2" id="gender3" value="M"/>Male <input type="radio" name="gender" value="F" />Female
   <td> <span id="genderError" style="color:#F00;display:none">Please select your gender.</span></td></td>
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
    <td><input type="text" name="mail" id="Email3" size="30" style="background:white;"
onfocus="this.style.background = '#FF9';this.style.color = '#000'; "
onblur="this.style.color = '#666'; " /><font color='red'>*</font>
   <td><span id="mailError" style="color:#F00;display:none">Please enter your Email.</span></td></td>
</tr>
 

        </table>
    </td>
</tr>

<script>
    function validateForm3()
{
	var isValid = true;
	var uname3 = document.getElementById("uname3").value;
	var pass3 = document.getElementById("pass3").value;
	var Confirm3 = document.getElementById("Confirm3").value;
	var FirstName3 = document.getElementById("FirstName3").value;
	var LastName3 =document.getElementById("LastName3").value;
	var gender3=document.getElementById("gender3").value;
	var Email3=document.getElementById("Email3").value;
	
	if(uname3 == "") 
	{
		isValid = false;
		document.getElementById("nameError").style.display = "block";
	}
	else document.getElementById("nameError").style.display = "none";
	
	if(pass3 == "")
	{
		isValid2 = false;
		document.getElementById("passError").style.display = "block";
	}
	else document.getElementById("passError").style.display = "none";
	
	if(pass3 != Confirm3)
	{
		isValid = false;
		document.getElementById("confError").style.display = "block";
	}
	else document.getElementById("confError").style.display = "none";
	
	if(FirstName3==""){
	isValid=false;
	document.getElementById("firstnError").style.display="block";
    }
	else document.getElementById("firstnError").style.display ="none";
	
	if(LastName3=="") 
	{
	isValid=false;
	document.getElementById("lastnError").style.display="block";
	}
	else document.getElementById("lastfError").style.display="none";
	

	
	if(gender3=="") 
	{
	isValid=false;
	document.getElementById("genderError").style.display="block";
	}
	else document.getElementById("genderError").style.display="none";
	
	if(Email3=="") 
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
