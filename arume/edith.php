<?php

include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");

if(!isset($_SESSION['data'])){
 header('Location:index.php');exit;
}else{

if(isset($_POST['id'])){
$id = $_POST['id'];
  if(isset($_FILES['photoname']['tmp_name'])){
    $updir = 'uploads';
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
        $sql = "UPDATE usr_detaile SET
                imgname = '$copy_file'
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
