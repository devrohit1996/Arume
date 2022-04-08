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

  if(isset($_POST['like'])){
    $like = $_POST['like'];
    $sql = "insert IGNORE into like_table
            (id,
            lid
             )values(
             '$myid',
             '$like')";
             $res = $mysqli->query($sql);

             $sql = "UPDATE ip_table SET
                     good = good - 1
                     where
                     id = '$myid'";
            $res = $mysqli->query($sql);
            $mysqli->close();
            // var_dump($sql);exit;
            // UPDATE ip_table SET good - 1 where id = 'wfk2Mg7YUyq9WDd4'
            // DELETE FROM like_table WHERE lid = 'GVptHk7M4Qvw6sDE'
            header('Location:users.php?usrid='.$like);exit;


  }



}
