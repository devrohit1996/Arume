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

  $frsql = "SELECT * FROM fa_table where id = '$myid'";
  $fresult = $mysqli->query($frsql);
  $frid = mysqli_fetch_all($fresult);

  $count = count($frid);


  for ($i=0; $i < $count; $i++) {
    $id = $frid[$i][1];
    $sql = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id where r.id = '$id';";
    $dedresult = $mysqli->query($sql);
    $detail[$i] = mysqli_fetch_assoc($dedresult);
  }





}




include 'view/favorites_view.php';
