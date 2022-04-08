<?php
include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");
$_SESSION['passerror'] = false;

		if(isset($_GET['key'])){
      $key  = $_GET['key'];
			$psql = "SELECT * FROM prefecture";
			$presult = $mysqli->query($psql);
			$sql = "SELECT * FROM usr_table where id = '$key'";
			$cresult = $mysqli->query($sql);
			$r = mysqli_fetch_assoc($cresult);

			if($r['id'] != ''){
				$_SESSION['id'] = $r['id'];
        $mail = $r['mail'];
			}else{
				header('Location:top.html');exit;
			}

		}

		if(isset($_POST['sendnew'])){

        $name = $_POST['name'];
  			$pass  = $_POST['pass'];
        $spass = $_POST['spass'];
        if($pass != $spass){
          $_SESSION['passerror'] = true;
        }
        if($_SESSION['passerror'] != true) {
          $_SESSION['inputdata'] = $_POST;
            header('Location: signup2.php');
          } else {
            header('Location:top.html');exit;
          }

		}









include 'view/signup_view.php';
