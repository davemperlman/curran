<?php
	session_start(); 
	if (!isset($_SESSION['id'])) {
		header('location:login.php');
	}
	require 'autoload.php'; 
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="_css/calendar.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
<?php 
	
	date_default_timezone_set('America/New_York');
	$calendar = new Classes\Calendar();
	echo $calendar->show();
?>
<hr>
<section id="jobs">
	
</section>
<script src='_js/calendar.js'></script>
</body>
</html>