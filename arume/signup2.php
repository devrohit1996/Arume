<?php
include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");


		if(isset($_SESSION['inputdata'] )){
			$data = $_SESSION['inputdata'];

			// 選択小目呼び出し
			// 学歴テーブル
			$esql = "SELECT * FROM education_table";
			$eresult = $mysqli->query($esql);
			// 職種テーブル
			$jsql = "SELECT * FROM jcategory_table";
			$jresult = $mysqli->query($jsql);
			// 身長テーブル
			$hsql = "SELECT * FROM height_table";
			$hresult = $mysqli->query($hsql);
			// 体型テーブル
			$bsql = "SELECT * FROM body_table";
			$bresult = $mysqli->query($bsql);

			// 目的テーブル
			$osql = "SELECT * FROM object_table";
			$oresult = $mysqli->query($osql);


		}else{
			header('Location:top.html');exit;
		}


if(isset($_POST['sigunpu2'])){

	$_SESSION['inputdata2'] = $_POST;

	header('Location:signup3.php');exit;

}








include 'view/signup2_view.php';
