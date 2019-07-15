<script type="text/JavaScript">
		function error1(){
		alert("用户名或密码不能为空,系统将在您点击确定后跳转到登录界面,请重新填写登录信息!");}
		function error2(){
		alert("用户名或密码错误,系统将在您点击确定后跳转到登录界面,请重新填写登录信息!");}
</script>

<?php		
	// 开启Session
	session_start();
	// 处理用户登录信息
	if (isset($_POST['login'])) {
		# 接收用户的登录信息
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		// 判断提交的登录信息
		if (($username == '') || ($password == '')) {
			// 若为空,视为未填写,提示错误,并3秒后返回登录界面
			echo "<script type='text/JavaScript'>error1();</script>";
			header('refresh:0; url=login.php');
			//header('location:login.php');
			exit;
		} elseif (($username != 'admin') || ($password != 'abc123456')) {
			# 用户名或密码错误,同空的处理方式				
			echo "<script type='text/JavaScript'>error2();</script>";
			header('refresh:0; url=login.php');
			exit;
		} elseif (($username = 'admin') && ($password = 'abc123456')) {
			# 用户名和密码都正确,将用户信息存到Session中
			$_SESSION['username'] = $username;
			$_SESSION['islogin'] = 1;
			// 若勾选7天内自动登录,则将其保存到Cookie并设置保留7天
			if ($_POST['remember'] == "yes") {
				setcookie('username', $username, time()+7*24*60*60);
				setcookie('code', md5($username.md5($password)), time()+7*24*60*60);
			} else {
				// 没有勾选则删除Cookie
				setcookie('username', '', time()-999);
				setcookie('code', '', time()-999);
			}
			// 处理完附加项后跳转到登录成功的首页
			header('location:index.php');
		}
	}
?>
