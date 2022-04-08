<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:top.html');exit;
}else{

  $email  = $_SESSION['data']['email'];
  $pass   = $_SESSION['data']['pass'];
  $mysql = "SELECT * FROM usr_table where mail = '$email' and passwd ='$pass'";
  $myresult = $mysqli->query($mysql);
  $r = mysqli_fetch_assoc($myresult);
  $myid = $r['id'];
  if($r['age'] == 0 ){
    header('Location:agecheck.php');exit;

  }elseif($r['age'] == 99 ){
    header('Location:ageche.html');exit;
  }

  $likesql = "SELECT lid FROM like_table where id = '$myid'";
  $likeresult = $mysqli->query($likesql);
  $like = mysqli_fetch_all($likeresult);
  $count = count($like);


  for ($i=0; $i < $count; $i++) {
    $userid = $like[$i][0];
    $likedsql = "SELECT id FROM like_table where id = '$userid' and lid = '$myid'";
    $likedresult = $mysqli->query($likedsql);
    $liked[] = mysqli_fetch_assoc($likedresult);
  }
  $flowers = array_filter($liked);
  $fcount = count($flowers);
  for ($a=0; $a < $fcount; $a++) {
    $userid = $flowers[$a]['id'];
    $usql = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id where r.id = '$userid'";
    $uresult = $mysqli->query($usql);
    $user[] = mysqli_fetch_assoc($uresult);
  }


}




include 'view/messegelist_view.php';
