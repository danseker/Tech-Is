<?php
// session_start();
if (!defined("ISLOGGED")) {
	header("location: index.php");
}

if (isset($_POST['login'])) {
	//kiểm email đã được nhập hay chưa
	if (!empty($_POST['email'])) {
		$email = $_POST['email'];
	} else {
		$error['email'] = "Bạn chưa nhập email";
	}
	//Kiểm tra password đã được nhập hay chưa
	if (!empty($_POST['pass'])) {
		$pass = $_POST['pass'];
	} else {
		$error['pass'] = "Bạn chưa nhập mật khẩu";
	}
	//Khi không có lỗi xảy ra
	if (!isset($error['email']) &&  !isset($error['pass'])) {
		//trường hợp thỏa mãn tài khoản đăng nhập
		$sql = "SELECT * FROM user WHERE user_mail = '$email' && user_pass= '$pass'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);
		if ($count > 0) {
			$user_login = mysqli_fetch_assoc($result);
			$_SESSION['user_login'] = $user_login;
			header("location: admin.php");
		} else {
			$error['invalid'] = '<div class="alert alert-danger">Tài khoản không hợp lệ!</div>';
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tech Is - Administrator</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

</head>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Tech Is - Administrator</div>
				<div class="panel-body">
					<?php if (isset($error['invalid'])) echo $error['invalid']; ?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Email address or phone number" name="email" type="email" autofocus>
								<span style="color: red"><?php if (isset($error['email'])) echo $error['email']; ?></span>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="pass" type="password" value="">
								<span style="color: red"><?php if (isset($error['pass'])) echo $error['pass']; ?></span>
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Nhớ tài khoản
								</label>
							</div>
							<button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>
</html>