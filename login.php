<?php include_once 'autoload.php'; ?>
<?php 
	if (isset($_POST['submit'])) {
		$res = Classes\database::connect()->query("SELECT id FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'")->fetch();
		if ($res) {
			session_start();
			$_SESSION['id'] = $res['id'];
			header('location:index.php');
		}else{
			echo "incorrect login";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post">
		<label for="username">Username</label>
		<input type="text" name="username" id="username">

		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
		<button type="submit" name="submit">Submit</button>
	</form>

</body>
</html>