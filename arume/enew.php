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


$idsql = "SELECT * FROM usr_detaile where id = '$id'";
$idresult = $mysqli->query($idsql);
$dedata = mysqli_fetch_assoc($idresult);
$birthday = $dedata['birthday'];
$year = substr($birthday , 0, 4);
$month = substr($birthday , 4, 2);
$day = substr($birthday , 6, 2);


if(!isset($dedata['imgname']) or $dedata['imgname'] == '' ){
  $imgpass = 'uploads/20220208-120446.png';
}else{
  $imgpass = 'uploads'.'/'.$dedata['imgname'];
}


if(isset($_POST['upid'])){
  $id = $_POST['upid'];
  if(isset($_FILES['identification']['tmp_name'])){
    $updir = 'kojiohoto';
    $tmp_file = $_FILES['identification']['tmp_name'];
    @list($file_name,$file_type) = explode(".",@$_FILES['identification']['name']);
    $copy_file = date("Ymd-His") . "." . $file_type;
    if (is_uploaded_file($_FILES["identification"]["tmp_name"])) {
      if ( move_uploaded_file($tmp_file , $updir.'/'.$id.$copy_file )) {
      $sql = "UPDATE usr_table SET
              age = 99
              where
              id = '$id'";
              $res = $mysqli->query($sql);
              header('Location:ageche.html');
    }
    }
}
}



}

include 'view/enew_view.php';
