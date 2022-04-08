<?php
include 'config/com.php';
session_start();
$_SESSION = array();
if (isset($_COOKIE["PHPSESSID"])) {
	 setcookie("PHPSESSID", '', time() - 1800, '/');
}
	header('Location:index.php');exit;
