<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>欢迎进入人力资源管理系统</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	<?php include("common/header.php");?>
	<div class="body">
      <div style="height:150px; line-height:150px;">
	<?php
	// 开启Session
	session_start();
	// 首先判断Cookie是否有记住了用户信息
	if (isset($_COOKIE['username'])) {
		# 若记住了用户信息,则直接传给Session
		$_SESSION['username'] = $_COOKIE['username'];
		$_SESSION['islogin'] = 1;
	}
	if (isset($_SESSION['islogin'])) {
		// 若已经登录
		echo "你好! ".$_SESSION['username'].' ,欢迎来到个人中心!<br>';
      	header('refresh:3; url=show.php');
		//echo "<a href='logout.php'>注销</a>";
	} else {
		// 若没有登录
		echo "对不起，您还没有登录,请<a href='login.php'>登录</a>";
	}
 ?>
        </div>
	</div>
	<?php include("common/footer.php");?>
	</body>
</html>