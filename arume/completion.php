<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:index.php');exit;
}else{


  $email = $_SESSION['data']['email'];
  $pass  = $_SESSION['data']['pass'];
  $sql = "SELECT * FROM usr_table where mail = '$email' and passwd ='$pass'";
  $cresult  = $mysqli->query($sql);
  $userdata = mysqli_fetch_assoc($cresult);
  $id = $userdata['id'];


}




include 'view/completion_view.php';
