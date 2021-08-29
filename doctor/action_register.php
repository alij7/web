<?php
include("incloude/header.php");
if(isset($_POST['realname'])&&!empty($_POST['realname'])
&&isset($_POST['username'])&&!empty($_POST['username'])
&&isset($_POST['password'])&&!empty($_POST['password'])
&&isset($_POST['repassword'])&&!empty($_POST['repassword'])
&&isset($_POST['phonenumber'])&&!empty($_POST['phonenumber']))
{
$realname=$_POST['realname'];
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$phonenumber=$_POST['phonenumber'];
}
else
	exit("برخی فیلد ها مقدار دهی نشده اند!");
if($password!=$repassword)
		exit("رمز عبور و تکرار رمز عبور باهم تشابه ندارند!");

?>



<?php
$link=mysqli_connect("localhost","root","","doctorhaghighi");
if(mysqli_connect_errno())
	exit("خطا با شرح زیر رخ داده است:".mysqli_connect_error());
$query="INSERT INTO users(realname,username,phonenumber,type,password,text)
VALUES('$realname','$username','$phonenumber','0','$password','""')";

if(mysqli_query($link,$query)===true)
	echo("<p style='color:green; font-size:20px;'>ثبت نام شما با موفقیت انجام شد".$username."کاربر گرامی </p>");
else
	echo("<p style='color:red'><b>عضویت شما با موفقیت انجام نشد</b></p>");
mysqli_close($link);
?>


