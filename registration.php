<!DOCTYPE HTML>
<html>
<head>
<title>RegisterForm</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="Style.css"/>
<!-- Javascript validation for user inputs -->
<script>
function validate()
{ 
var fullname = document.register.fullname.value;
var email = document.register.email.value;
var username = document.register.username.value; 
var password = document.register.password.value;
var conpassword= document.register.conpassword.value;
if (fullname==null || fullname=="")
{ 
alert("Full Name can't be blank"); 
return false; 
}
else if (email==null || email=="")
{ 
alert("Email can't be blank"); 
return false; 
}
else if (city==null || city=="")
{ 
alert("Username can't be blank"); 
return false; 
}
else if (country==null || country=="")
{ 
alert("Username can't be blank"); 
return false; 
}
else if (dob==null || dob=="")
{ 
alert("Username can't be blank"); 
return false; 
}
else if(password.length&amp;lt;6)
{ 
alert("Password must be at least 6 characters long."); 
return false; 
} 
else if (password!=conpassword)
{ 
alert("Confirm Password should match with the Password"); 
return false; 
} 
} 
</script> 
</head>
<body>
 

 <div style="text-align:center"><h1>PHP Registration application using MySQL</h1></div>
 <br>
<form name="register" method="post" action="registration.php" onsubmit="return validate();" >

<table align="center" >
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name="city" /></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><input type="Date" name="dob"></td>
</tr>
<tr>
<td>Country</td>
<td><input type="Date" name="country"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="conpassword" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register"></input><input
type="reset" value="Reset"></input></td>
</tr>
</table>
</form>
</body>
</html>