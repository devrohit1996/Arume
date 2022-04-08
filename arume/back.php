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

$phsql = "SELECT * FROM usr_hotos where id = '$id'";
$phresult = $mysqli->query($phsql);
$phdata = mysqli_fetch_assoc($phresult);
$count = count($phdata);
// 何個写真を登録してる確認ロジック
// echo "<pre>";
// var_dump($phdata,$count);exit;

if(!isset($dedata['imgname']) or $dedata['imgname'] == '' ){
  $imgpass = 'uploads/20220208-120446.png';
}else{
  $imgpass = 'uploads'.'/'.$dedata['imgname'];
}

if(isset($_POST['method'])){
$back = $_POST['method'];
        $sql = "UPDATE usr_hotos SET
                p_back = '$back'
                where
                id = '$id'";
                $res = $mysqli->query($sql);
                header('Location:edit.php');exit;

                // var_dump($sql);exit;






}

}




include 'view/back_view.php';
