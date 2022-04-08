<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){

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


// 何個写真を登録してる確認ロジック
// echo "<pre>";
// var_dump($phdata,$count);exit;







}




include 'view/mail_view.php';
