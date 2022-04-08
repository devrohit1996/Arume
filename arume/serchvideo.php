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

$sql = "select * from video_table where r_status = 0";
$viresurl  = $mysqli->query($sql);
$data = mysqli_fetch_all($viresurl);
$count = count($data);


for ($df=0; $df < $count; $df++) {
  $roomid = $data[$df][0];
  $hitorime = $data[$df][1];
  $hutarime = $data[$df][2];
  $hsql     = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id  where  usr_status in (0,2) and r.id = '$hitorime';";
  $hitorime = $mysqli->query($hsql);
  $roomdata[$df]['hi'] = mysqli_fetch_assoc($hitorime);

  $husql     = "SELECT * FROM usr_table as r RIGHT join usr_detaile as u on r.id = u.id  where  usr_status in (0,2) and r.id = '$hutarime';";
  $hutarime = $mysqli->query($husql);
  $roomdata[$df]['hu'] = mysqli_fetch_assoc($hutarime);

}
// echo "<pre>";
// var_dump($data);exit;



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




include 'view/serchvideo_view.php';
