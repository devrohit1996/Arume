<?php
include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");





if(isset($_POST['email'])){
	$error  = false;
	$email  = $_POST['email'];
	$pass   = $_POST['pass'];

	// エラーチェック　start
	if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $email)){
			 $error = TRUE;
	 }


	// if(!preg_match("/^[a-zA-Z0-9]+$/", $pass)){
	// 		 $error = TRUE;
	//  }


	 if($error != TRUE){
		 $sql = "SELECT count(*) as a FROM usr_table where mail = '$email' and passwd ='$pass'";
		 $cresult = $mysqli->query($sql);
		 $r = mysqli_fetch_assoc($cresult);
		 $row = $r['a'];
		 if($row == 0){
			 $error = TRUE;
		 }
	 }


	 if($error == TRUE){
		 $_SESSION['error'] = "入力内容をご確認ください";
		 header('Location: signin.php');exit;
	 }else{
		 $_SESSION['data'] = $_POST;
		 header('Location:index.php');exit;
	 }

}




include 'view/signin_view.php';
