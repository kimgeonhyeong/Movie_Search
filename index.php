<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="index.css">
    <title>NAVER</title>
</head>
<body>
<?php
	if(isset($_POST['login']))
	{	
			$username = $_POST['username'];
			$password = $_POST['password'];
			$con = mysqli_connect('localhost','root','apmsetup','problem') or die("연결 안됨");
			$result = mysqli_query($con, "select * from users where username='{$username}' and password='{$password}';") or die("아이디와 패스워드를 확인해주세요!!");
			if(mysqli_num_rows($result) == 0){
				echo "<script>alert('아이디와 패스워드를 확인해주세요');
									window.history.back(-1); alert('$password');</script>"
									;
			}
			else{
				if($username =='admin'){
						echo " <script>alert('관리자님 환영합니다.')</script>";
						echo "<script>location.href='adminpage.php'</script>";
					}
				else{
						echo " <script>alert('환영합니다.')</script>";
						echo "<script>location.href='user.php'</script>";	
					}

			}		
	
	}
	else
	{
?>	<div class="hidden" style="display: none;"></div>
<div class="main_log"><img src="main_log.png" alt="main_logo" style="width: 305px; height: 75px;margin-top: 37px; cursor: pointer;" onclick="location.href='https://www.naver.com'"></div>
	<form action="index.php" method="POST" class="main_borad">
		<div class="username"><input type="text" name="username" class="user_box"/></div><br/>
		<div class="password"><input type="password" name="password" class="pw_box"/></div><br/>
		<input type="submit" name="login" value="로그인" class="login"/>
	</form>
	
<?php
	}
?>
</body>
</html>