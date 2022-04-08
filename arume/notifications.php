<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:index.php');exit;
}else{

$sql = "SELECT * FROM noti_table where status = 0 order by dateda";
$result  = $mysqli->query($sql);


}



include 'view/notifications_view.php';
