<link href="css/css.css" rel="stylesheet" type="text/css">
<?php
include("incloude/header.php");

if(isset($_POST['username'])&&!empty($_POST['username'])
&&isset($_POST['password'])&&!empty($_POST['password']))

{
$username=$_POST['username'];
$password=$_POST['password'];
}
else
	exit("برخی فیلد ها مقدار دهی نشده اند!");

?>



<?php
$link=mysqli_connect('localhost','root','','doctorhaghighi');
mysqli_query($link,"SET CHARACTER SET UTF8");
if(mysqli_connect_errno())
exit("خطا با شرح زیر رخ داده است:".mysqli_connect_error());	
$query="SELECT * FROM users WHERE username='$username'AND password='$password'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
if($row)
{
	$_SESSION['state_login']=true;
	$_SESSION['realname']=$row['realname'];
	$_SESSION['username']=$row['username'];
if($row['type']==0)
{
	$_SESSION{'user_type'}="public";
}
else if ($row['type']==1)
{
	$_SESSION{'user_type'}="admin";
	?>
	<script>
	location.replace("admin.php");
	</script>
	
	<?php
}
	echo("<p style='color:green'><b>به سایت خوش آمدید{$row['realname']} کاربرگرامی</b></p>");
}
else
{
	echo("<p style='color:red'><b>نام کاربری و کلمه عبور یافت نشد</b></p>");
	echo("برای ثبت نام<a href='register.php'>اینجا</a>کلیک کنید");
}
?>


