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

  if(isset($_GET['key']) and $_GET['key'] != ''){
      $user = $_GET['key'];
      $usql = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id where r.id = '$user'";
      $uresult = $mysqli->query($usql);
      $userdata = mysqli_fetch_assoc($uresult);

      $likedsql = "SELECT * FROM mess_table where (id = '$myid' or id = '$user') and (lid = '$myid' or lid = '$user') order by dateda";
      $likedresult = $mysqli->query($likedsql);
      // echo "<pre>";
      // var_dump($liked);exit;
  }

  if(isset($_POST['messagebody']) and $_POST['messagebody'] != ''){
    $body  = $_POST['messagebody'];
    $usrid = $_POST['usrid'];
    $sql = "insert IGNORE into mess_table
            (id,
             lid,
             btext
             )values(
             '$myid',
             '$usrid',
             '$body'
             )";
             $res = $mysqli->query($sql);
             // var_dump($sql);exit
             header("location: messege.php?key=".$usrid);exit;

  }


}




include 'view/messege_view.php';
