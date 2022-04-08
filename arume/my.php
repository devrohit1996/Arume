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



$idsql = "SELECT * FROM usr_table as r
RIGHT join usr_detaile as u on r.id = u.id
RIGHT join usr_hotos as up on r.id = up.id
RIGHT join prefecture as p on p.pid = u.eria
RIGHT join education_table as e on e.e_id = u.e_id
RIGHT join jcategory_table as j on j.j_id = u.j_id
RIGHT join height_table as h on h.h_id = u.h_id
RIGHT join body_table as b on b.b_id = u.b_id
RIGHT join object_table as o on o.o_id = u.o_id
where r.id = '$id';";
$idresult = $mysqli->query($idsql);
$dedata = mysqli_fetch_assoc($idresult);

$now = date("Ymd");
$age = floor(($now - $dedata['birthday'])/10000);

$frsql = "SELECT * FROM friend_table where id = '$id'";
$fresult = $mysqli->query($frsql);


if(!isset($dedata['imgname']) or $dedata['imgname'] == '' ){
  $imgpass = 'uploads/20220208-120446.png';
}else{
  $imgpass = 'uploads'.'/'.$dedata['imgname'];
}



}




include 'view/my_view.php';
