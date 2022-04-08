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

if(isset($_GET['point']) and $_GET['point'] > 0){
  $changepoint = $_GET['point'];
    if($dedata['arumepoint'] < $changepoint){
      $pointerror = '交換するポイントが足りません。';
    }

}




}




include 'view/changepoint_view.php';
