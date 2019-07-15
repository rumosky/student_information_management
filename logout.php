<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>欢迎进入人力资源管理系统</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<?php include("common/header.php");?>
	<div class="body">
	<?php 
	// 注销后的操作
	session_start();
	// 清除Session
	$username = $_SESSION['username'];  //用于后面的提示信息
	$_SESSION = array();
	session_destroy();
 
	// 清除Cookie
	setcookie('username', '', time()-99);
	setcookie('code', '', time()-99);
 
	// 提示信息
	echo "欢迎下次光临, ".$username.'<br>';
	echo "<a href='login.php'>重新登录</a>";
 
 ?>
	</div>
	<?php include("common/footer.php");?>
	<body>
	</body>
</html>