<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:top.html');exit;
}else{
  // myinfoを中失
  $email  = $_SESSION['data']['email'];
  $pass   = $_SESSION['data']['pass'];
  $mysql = "SELECT * FROM usr_table where mail = '$email' and passwd ='$pass'";
  $myresult = $mysqli->query($mysql);
  $r = mysqli_fetch_assoc($myresult);
  $myid = $r['id'];
  $sql = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id where r.id = '$myid';";
  $dedresult = $mysqli->query($sql);
  $detail = mysqli_fetch_assoc($dedresult);
  // ログインしてるユーザの性別を取得
  // var_dump($sql);exit;

  if($detail['sex'] == 1 ){
      $sexid = 2;
  }elseif($detail['sex'] == 2 ){
     $sexid = 1;
  }
  // ログインユーザを元に表示する性別の切り分け
  $usql = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id RIGHT join prefecture as p on u.eria = p.pid where  usr_status = 0 and u.sex = '$sexid';";
  $uresult = $mysqli->query($usql);


  $cusql = "SELECT count(*) as a FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id where usr_status = 0 and u.sex = '$sexid';";
  $curesult = $mysqli->query($cusql);
  $r = mysqli_fetch_assoc($curesult);
  $count = $r['a'];
  // 年齢取得用
  $now = date("Ymd");
}




include 'view/index_view.php';
