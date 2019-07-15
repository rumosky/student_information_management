<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>登录</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include("common/header.php");?>
<div class="body">
<form action="login_action.php" method="post">
		<fieldset>
			<legend>用户登录</legend>			
				<p>
					<label>用户名:</label>
					<input type="text" name="username">
				</p>
				<p>
					<label>密   码:</label>
					<input type="password" name="password">
				</p>
				<p>
					<label> </label>
					<input type="checkbox" name="remember" value="yes">7天内自动登录
				</p>
				<p>
					<label> </label>
					<input type="submit" name="login" value="登录">
				</p>			
		</fieldset>
	</form>
</div>
<?php include("common/footer.php");?>
</body>
</html>