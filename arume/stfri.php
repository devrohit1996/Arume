<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:index.php');exit;
}else{

  $email  = $_SESSION['data']['email'];
  $pass   = $_SESSION['data']['pass'];
  $mysql = "SELECT * FROM usr_table where mail = '$email' and passwd ='$pass'";
  $myresult = $mysqli->query($mysql);
  $r = mysqli_fetch_assoc($myresult);
  $myid = $r['id'];

  $frsql = "SELECT * FROM friend_table where id = '$myid'";
  $fresult = $mysqli->query($frsql);
  $frid = mysqli_fetch_all($fresult);
  $count = count($frid);


  for ($i=0; $i < $count; $i++) {
    $id = $frid[$i][1];
    $sql = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id where r.id = '$id' and r.age = 2;";
    $dedresult = $mysqli->query($sql);
    $detail[$i] = mysqli_fetch_assoc($dedresult);
    // $detail[$i]['roomid'] = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz0123456789"), 0, 16);
  }

  $sql = "SELECT room_id FROM video_table WHERE r_status = 0 and (myid = '$myid' or frid = '$myid')";
  $viresurl  = $mysqli->query($sql);
  $vistatus = mysqli_fetch_assoc($viresurl);
  if($vistatus == null ){

  }else{
    $roomid = $vistatus['room_id'];
    header('Location:vi.php?roomid='.$roomid);exit;
  }

  if(isset($_POST['ulike'])){
    $friid = $_POST['ulike'];

  }





}




include 'view/stfri_view.php';
