<?php
include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');


		if(isset($_POST['email']) and $_POST['email'] != ''){
      $error  = false;
      $email  = $_POST['email'];

      $csql = "SELECT count(*) as a FROM usr_table where mail = '$email'";
      $cresult = $mysqli->query($csql);
      $r = mysqli_fetch_assoc($cresult);
      $row = $r['a'];
      if($row == 0){
      // エラーチェック　start
        if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $email)){
             $error = TRUE;
         }else{
  				 $str = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz0123456789"), 0, 16);
  			 }


       if($error != TRUE){
				 //新規予約リストを作成
			 	$sql = "insert IGNORE into usr_table
			 					(id,
								 mail,
			 					 usr_status
			 					 )values(
			 					 '$str',
								 '$email',
			 					  99)";

			 					 $res = $mysqli->query($sql);
			 					 $mysqli->close();


								 $message = "ご登録フォーム";
							   $message .= "\n";
							   $message .="下記およりパスワードの設定を行ってください。";
							   $message .= "\n";
								 $message .= "https://arume.rdy.jp/signup.php?key=";
								 $message .= $str;
								 $message .= "\n";
							   $message .="=======================================";
							   $message .= "\n";
								 $message .= "\n";
								 $message .= "\n";
								 $message .= "\n";
							   $message .="_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_";
							   $message .= "\n";
							   $message .="【arume事務局】";
							   $message .= "\n";
							   $message .= "\n";
							   $message .="_/_/_/_/_/_/_/_/_/_/_/_/_/_/_/_ ";
								 $message .= "\n";
							   $message .= "\n";


								 $headers = "From:info@arume.rdy.jp" . "\r\n";
								 $headers .= "Return-Path:  info@arume.rdy.jp";
								 $headers .= "\r\n";
								 $headers .= "Content-type: text/plain; charset=UTF-8";
								 $returnMail = 'info@arume.rdy.jp';


								 //件名を設定（JISに変換したあと、base64エンコードをしてiso-2022-jpを指定する）
								 $subject = "パスワードの設定をお願いいたします。";
								 mb_language('ja');
								 mb_internal_encoding('UTF-8');

								 if (mb_send_mail($email, $subject, $message, $headers, '-f'. $returnMail)) {

											  //セッション変数を全て解除
											  $_SESSION = array();

											        //セッションクッキーの削除
											  if (isset($_COOKIE["PHPSESSID"])) {
											    setcookie("PHPSESSID", '', time() - 1800, '/');
											  }

											  //セッションを破棄する
											  session_destroy();
											  header('Location:send.php');exit;

											 } else {
											  echo "メールの送信に失敗しました。";
											}

       }


			 if($error == TRUE){
				 $_SESSION['error'] = "入力内容をご確認ください";
         header('Location: newsignup.php');exit;
			 }

		}else{
      $_SESSION = array();

            //セッションクッキーの削除
      if (isset($_COOKIE["PHPSESSID"])) {
        setcookie("PHPSESSID", '', time() - 1800, '/');
      }

      //セッションを破棄する
      session_destroy();
      header('Location:sended.php');exit;
    }



  }

include 'view/newsignup_view.php';
