<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('location:login.php');
}
require_once 'autoload.php';

foreach ($_FILES['files']['tmp_name'] as $name) {
	move_uploaded_file($name, '/photos');
}