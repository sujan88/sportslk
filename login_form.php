
	 <form method="post" action="pages/Profile.php"  onSubmit="return validateForm3()"><br/><br />
	 <div style="font-size:16px; text-align:center">Please enter your user name and password </div>
     <br/>
	 <table width="300" height="90" border="0">
	   <tr>
	     <td width="200" height="30" align="right">  Username :</td>
	     <td width="100"><input type="text" name="login2"  id="login_m" size="30"/>
         <span id="loginError" style="color:#F00;display:none">Enter user name.</span></td>
	     </tr>
	   <tr>
	     <td height="30" align="right">Password :</td>
	     <td><input type="password" name="pass2"  id="pass_m" size="30"/>
         <span id="pasError" style="color:#F00;display:none">Enter password.</span></td>
	     </tr>
	   <tr>
	     <td height="30">&nbsp;</td>
	     <td><input type="submit" value="Sign in" /></td>
             <script >
    function validateForm3()
{
	var isValid = true;
	var login3 = document.getElementById("login_m").value;
	var pass3 = document.getElementById("pass_m").value;
	
	
	if(login3 =="") 
	{
		isValid = false;
		document.getElementById("loginError").style.display = "block";
	}
	else document.getElementById("loginError").style.display = "none";
	
	if(pass3 == "") 
	{
		
		isValid = false;
		document.getElementById("pasError").style.display = "block";
	}
	
	else  document.getElementById("pasError").style.display = "none";
	
	return isValid;
}
	</script> 
	     </tr>
      
	   </table>
     
	 <p><br/>
	   
	 <div style="text-align:center" >if you are not a member of our site plase <a href="pages/signin.php" style="font-size:16px; color:#900">click here </a>to register. </div>
	 </p>
	 </form>