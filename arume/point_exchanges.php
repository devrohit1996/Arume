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

$ipsql = "SELECT * FROM ip_table where id = '$id'";
$idresult = $mysqli->query($ipsql);
$dedata = mysqli_fetch_assoc($idresult);

if(isset($_POST['cpoint']) and $_POST['cpoint'] != ''){
  $changepoint = $_POST['cpoint'];
  if($dedata['arumepoint'] < $changepoint){
    header('Location:point.php');exit;
  }
  $zan = $dedata['arumepoint'] - $changepoint;
  $pur = $dedata['good'] + $changepoint;

  $sql = "UPDATE ip_table SET
          arumepoint = '$zan',
          good = '$pur'
          where
          id = '$id'";
          $res = $mysqli->query($sql);

          header('Location:completion.php');exit;

}




}




include 'view/point_exchanges_view.php';
