<?php
include("incloude/header.php");
?>
</br></br>
<script>
function check()
{
	var username=document.getElementById("username").value;
	if(username== ' ')
		alert("وارد کردن نام کاربری الزامی است");
	
	else
	{
		var f=confirm("ایا اطلاعات خود را به درستی وارد کرده اید؟");
		if (f==true)
			document.register.submit();
	}
}

</script>
</head>
<body>
<?php
if(isset($_SESSION['state_login'])&& $_SESSION['state_login']===true)
{?>
	<script>
	location.replace("index.php");
	</script>
	<?php
}
?>

<form name="register" action="action_register.php" method="POST">
<table style="width:50%;float:right;margin-right:350px;font-size:30px">
<tr>
<td style="width:60%"><input type="text" style="text-align:right" id="realname" name="realname"></td>
<td style="width:40%">نام واقعی<span style="color:orange">*</span></td>

</tr>
<tr>
<td style="width:60%"><input type="text" style="text-align:right" id="username" name="username"></td>
<td style="width:40%">نام کاربری<span style="color:orange">*</span></td>

</tr>
<tr>
<td style="width:60%"><input type="password" style="text-align:right" id="password" name="password"></td>
<td style="width:40%">رمز عبور<span style="color:orange">*</span></td>

</tr>
<tr>
<td style="width:60%"><input type="password" style="text-align:right" id="repassword" name="repassword"></td>
<td style="width:40%">تکرار رمز عبور<span style="color:orange">*</span></td>

</tr>
<tr>
<td style="width:60%"><input type="text" style="text-align:right" id="phonenumber" name="phonenumber"></td>
<td style="width:40%">شماره تلفن<span style="color:orange">*</span></td>

</tr>
<tr>
<td></br></br></td>
<td> 
<input type="button" value="ثبت نام" onclick="check()" style="font-size:25px;color:white;background-color:orange;">
<input type="reset" value="جدید" style="font-size:25px;color:white;background-color:orange;">

</td>
</tr>
</table>
</form>
</body>
</html>