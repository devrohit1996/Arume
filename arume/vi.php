<?php

include 'config/com.php';
session_start();

header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:top.html');exit;
}else{

  if(isset($_GET['key']) and isset($_GET['friid'])){
    $id   = $_GET['key'];
    $friid = $_GET['friid'];
    $roomid = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz0123456789"), 0, 16);
    $sql = "insert IGNORE into video_table
            (room_id,
            myid,
            frid,
            r_status
             )values(
             '$roomid',
             '$id',
             '$friid',
             0)";
             $res = $mysqli->query($sql);
             header('Location:vi.php?roomid='.$roomid);exit;
    }

   if(isset($_GET['roomid'])){
     $roomid = $_GET['roomid'];
   }




}


include 'view/vi_view.php';
