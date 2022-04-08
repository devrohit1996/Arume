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

// 都道府県
$psql = "SELECT * FROM prefecture";
$presult = $mysqli->query($psql);

if(isset($_POST['height'])){
  var_dump($_POST);exit;
}

if(!isset($dedata['imgname']) or $dedata['imgname'] == '' ){
  $imgpass = 'uploads/20220208-120446.png';
}else{
  $imgpass = 'uploads'.'/'.$dedata['imgname'];
}

if(isset($_POST['suphoto'])){
  $suphoto = $_POST['suphoto'];

  $tablename = 'p_';
  $tablename .= $suphoto;



  if(isset($_FILES['photoname']['tmp_name'])){
    $updir = 'subuploads';
    $tmp_file = @$_FILES['photoname']['tmp_name'];
    @list($file_name,$file_type) = explode(".",@$_FILES['photoname']['name']);
    $copy_file = date("Ymd-His") . "." . $file_type;
    if (is_uploaded_file($_FILES["photoname"]["tmp_name"])) {

      $file1 = $_FILES["photoname"]["tmp_name"]; // 元画像ファイル
      $file2 = "$updir"."/"."$copy_file"; // 画像保存先のパス

      $image_type = exif_imagetype($file1);

      switch($image_type){
      case IMAGETYPE_JPEG:
      $in = ImageCreateFromJPEG($file1);
      break;
      case IMAGETYPE_GIF:
      $in = ImageCreateFromGIF($file1);
      break;
      case IMAGETYPE_PNG:
      $in = ImageCreateFromPNG($file1);
      break;
      }
      // $in = ImageCreateFromJPEG($file1); // 元画像ファイル読み込み

      $width = ImageSx($in); // 画像の幅を取得
      $height = ImageSy($in); // 画像の高さを取得
      $min_width = 512; // 幅の最低サイズ
      $min_height = 512; // 高さの最低サイズ
      $image_type = exif_imagetype($file1); // 画像タイプ判定用

      if ($image_type == IMAGETYPE_JPEG or $image_type == IMAGETYPE_GIF or $image_type == IMAGETYPE_PNG){ 
          if($width >= $min_width|$height >= $min_height){
              // if($width == $height) {
                  $new_width = $min_width;
                  $new_height = $min_height;
              // } else if($width > $height) {//横長の場合
              //     $new_width = $min_width;
              //     $new_height = $height*($min_width/$width);
              // } else if($width < $height) {//縦長の場合
              //     $new_width = $width*($min_height/$height);
              //     $new_height = $min_height;
              // }

              //　画像生成
              $out = ImageCreateTrueColor($new_width , $new_height);
              ImageCopyResampled($out, $in,0,0,0,0, $new_width, $new_height, $width, $height);
              ImageJPEG($out, $file2);
        $sql = "UPDATE usr_hotos SET
                $tablename = '$copy_file'
                where
                id = '$id'";
                $res = $mysqli->query($sql);
                header('Location:edit.php');exit;
}
}
}
                // var_dump($sql);exit;

}





}





}




include 'view/edit_view.php';
