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

  $idsql = "SELECT imgname FROM usr_detaile where id = '$id'";
  $idresult = $mysqli->query($idsql);
  $dedata = mysqli_fetch_assoc($idresult);

  $ipsql = "SELECT * FROM ip_table where id = '$id'";
  $ipresult = $mysqli->query($ipsql);
  $ipdata = mysqli_fetch_assoc($ipresult);

  if(!isset($dedata['imgname']) or $dedata['imgname'] == '' ){
    $imgpass = 'uploads/20220208-120446.png';
  }else{
    $imgpass = 'uploads'.'/'.$dedata['imgname'];
  }







}




include 'view/mypage_view.php';
