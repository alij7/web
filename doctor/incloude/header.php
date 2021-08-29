<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>اعظم حقیقی</title>
			<style>
			body
{
	background-color:#FFFFE0;
	
}
.content
{
	width:1000px;
	border:solid #DB7093 2px;
	margin-top:100px;
		margin-right:30px;
	margin-left:500px;
	height:1150px;
		margin-bottom:30px;
	text-align: center;
	background-color: white;
}
.txt
{
	width:800px;
	border:solid #DB7093 2px;
	margin-left:90px;
	height:170px;
	text-align: center;
	background-color: white;
	font-size:25px;
	
}
a 
{
        text-decoration:none;
        display:inline;
        border-radius:10px;
		color:white;
		background-color:#CDBE70;
        }
a:hover
{
color:white;
background-color:#FCA13B;
}
li
{
	line-height:20px;
    display:inline;
	font-size:25px;
	
}
ul{margin-right:40px;}
.text
{
	width:800px;
	border:solid #DB7093 2px;
	margin-left:90px;
	height:200px;
	text-align: center;
	background-color: white;
	font-size:25px;
	
}

			</style>
			</head>
			<body>
<div class="content">
<img src="img/4.jpg" width="800px" height="200px"></br>
<ul>
<li><a href="index.php" >صفحه اصلی</a></li>&nbsp;&nbsp;
<li><a href="register.php" >عضویت در سایت</a></li>&nbsp;&nbsp;
<?php
if(isset($_SESSION['state_login'])&& $_SESSION['state_login']===true)
{
?>
<li><a href="logout.php" >خروج از سایت</a></li>&nbsp;&nbsp;
<?php
}
else{
?>
<li><a href="login.php" >ورود به سایت</a></li>&nbsp;&nbsp;
<?php
}
?>
<li><a href="maghalat" >مقالات</a></li>&nbsp;&nbsp;
<li><a href="videos.php" >ویدیو ها</a></li>&nbsp;&nbsp;
<li><a href="tamas.php" >تماس با ما</a></li>&nbsp;&nbsp;
</ul>