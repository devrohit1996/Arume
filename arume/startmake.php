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

  if(isset($_POST['ulike'])){
    $fridenid = $_POST['ulike'];
    $sql = "select count(*) as a from video_table where r_status = 0 and (myid = '$fridenid' or frid = '$fridenid')";
    $viresurl  = $mysqli->query($sql);
    $vistatus = mysqli_fetch_assoc($viresurl);

    if($vistatus['a'] > 1){
      $sql = "select room_id from video_table where r_status = 0 and (myid = '$id' or frid = '$id')";
      $viresurl  = $mysqli->query($sql);
      $vistatus = mysqli_fetch_assoc($viresurl);
      if($vistatus == null ){
        echo "他の友達を選択してください。";exit;
      }else{
        $roomid = $vistatus['room_id'];
        header('Location:vi.php?roomid='.$roomid);exit;
      }

    }else{
      $getkey = $id.'&friid='.$fridenid;
    }



  }else{
    $getkey = $id;
  }




}




include 'view/startmake_view.php';
