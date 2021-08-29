<?php
include("incloude/header.php");
if(isset($_SESSION['state_login'])&& $_SESSION['state_login']===true)
{?>
	<script>
	location.replace("index.php");
	</script>
	<?php
}
?>
</br>
</br>
<form name="login" action="action_login.php" method="POST">
<table style="width:50%;float:right;margin-right:300px;font-size:30px">
<tr>
<tr>
<td style="width:60%; font-size:30px"><input type="text" style="text-align:right" id="username" name="username"></td>
<td style="width:40%; font-size:30px">نام کاربری<span style="color:orange">*</span></td>
</tr>
<tr>
<td style="width:60%; font-size:30px"><input type="password" style="text-align:right" id="password" name="password"></td>
<td style="width:40%; font-size:30px">رمز عبور<span style="color:orange">*</span></td>

</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
<td></br></br></td>
<td> 
</br>
<input type="submit" value="ورود" style="font-size:25px;color:white;background-color:orange;">&nbsp;
<input type="reset" value="جدید" style="font-size:25px;color:white;background-color:orange;">
</td>
</tr>
</table>
</form>




