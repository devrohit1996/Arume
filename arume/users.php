<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:top.html');exit;
}else{
  // myinfoを中失

  if(isset($_GET['usrid'])){
    $usrid = $_GET['usrid'];

  // 自分のIDを取得
  $email  = $_SESSION['data']['email'];
  $pass   = $_SESSION['data']['pass'];
  $mysql = "SELECT * FROM usr_table where mail = '$email' and passwd ='$pass'";
  $myresult = $mysqli->query($mysql);
  $r = mysqli_fetch_assoc($myresult);
  $myid = $r['id'];

  // 表示したいプロフィールを取得する
  $sql = "SELECT * FROM usr_table as r
  RIGHT join usr_detaile as u on r.id = u.id
  RIGHT join usr_hotos as up on r.id = up.id
  RIGHT join education_table as e on e.e_id = u.e_id
  RIGHT join jcategory_table as j on j.j_id = u.j_id
  RIGHT join height_table as h on h.h_id = u.h_id
  RIGHT join body_table as b on b.b_id = u.b_id
  RIGHT join object_table as o on o.o_id = u.o_id
  where r.id = '$usrid';";
  $dedresult = $mysqli->query($sql);
  $detail = mysqli_fetch_assoc($dedresult);

  // 写真情報を取得



  // 生年月日から年齢を取得
  $now = date("Ymd");
  $age = floor(($now - $detail['birthday'])/10000);
  // エリア取得
  $eid = $detail['eria'];
  $esql = "SELECT pname FROM prefecture WHERE pid = $eid";
  $eresult = $mysqli->query($esql);
  $prefecture = mysqli_fetch_assoc($eresult);
  // ログインしてるユーザの性別を取得
  // いいねしてるかを取得
  $lsql = "SELECT count(*) as a FROM like_table WHERE id = '$myid' and lid = '$usrid'";
  $lresult = $mysqli->query($lsql);
  $r = mysqli_fetch_assoc($lresult);
  $row = $r['a'];
  if($row != 0){
    $liked = TRUE;
  }

}



}


include 'view/users_view.php';
