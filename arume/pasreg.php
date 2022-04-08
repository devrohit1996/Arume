<?php
include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");





		if(isset($_GET['key'])){
      $key  = $_GET['key'];
			$sql = "SELECT * FROM usr_table where regid = '$key'";
			$cresult = $mysqli->query($sql);
			$r = mysqli_fetch_assoc($cresult);

			if($r['id'] != ''){
				$_SESSION['id'] = $r['id'];
			}else{
				header('Location:top.html');exit;
			}

		}

		if(isset($_POST['pass'])){
			$pass = $_POST['pass'];
			$id = $_SESSION['id'];
		//新規予約リストを作成
		$sql = "UPDATE usr_table SET
						passwd = '$pass'
						where
						id = '$id'";
						 $res = $mysqli->query($sql);
						 $mysqli->close();
						 header('Location: index.html');

		}









include 'view/pasreg_view.php';
