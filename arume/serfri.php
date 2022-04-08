<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:index.php');exit;
}else{


  if(isset($_POST['uid']) and $_POST['uid'] != null){

    $id = $_POST['uid'];
    $sql = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id where r.id = '$id';";
    $dedresult = $mysqli->query($sql);
    $detail = mysqli_fetch_assoc($dedresult);
  }

  if(isset($_GET['add'])){

    $email  = $_SESSION['data']['email'];
    $pass   = $_SESSION['data']['pass'];
    $mysql = "SELECT * FROM usr_table where mail = '$email' and passwd ='$pass'";
    $myresult = $mysqli->query($mysql);
    $r = mysqli_fetch_assoc($myresult);
    $myid = $r['id'];


    $addid = $_GET['add'];
    $sql = "insert IGNORE into friend_table
            (id,
             f_id,
             f_status
             )values(
             '$myid',
             '$addid',
             0)";
             $res = $mysqli->query($sql);
             $mysqli->close();
     header('Location:fri.php');exit;
  }


}




include 'view/serfri_view.php';
