<?php
include 'config/com.php';
session_start();
header("Content-type: text/html; charset=utf-8");


		if(isset($_SESSION['inputdata'] )){
			$data = $_SESSION['inputdata'];
      $data2 = $_SESSION['inputdata2'];
      $id    = $_SESSION['id'];


      if(isset($_FILES['userfile']['tmp_name'])){
        $updir = 'uploads';
        $tmp_file = @$_FILES['userfile']['tmp_name'];
        @list($file_name,$file_type) = explode(".",@$_FILES['userfile']['name']);
        $copy_file = date("Ymd-His") . "." . $file_type;


        if (is_uploaded_file($_FILES["userfile"]["tmp_name"])) {
					        $file1 = $_FILES["userfile"]["tmp_name"]; // 元画像ファイル
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

					        if ($image_type == IMAGETYPE_JPEG or $image_type == IMAGETYPE_GIF or $image_type == IMAGETYPE_PNG){ // JPGかどうか判定
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
					            } else {
					                echo "サイズが幅".$min_width."×高さ".$min_height."以上の画像をご用意ください";exit;
					            }
					        } else {
					            echo "JPG画像をご用意ください";exit;
					        }
									// var_dump($new_width,$new_height,$width,$height);
									// exit;

            $name     = $data['name'];
            $pass     = $data['pass'];
            $gender   = $data['sign_up_form']["gender"];
            $address  = $data['sign_up_form']["address"];
						$birthday = $data['sign_up_form']["birthday_0"];
            $birthday .= $data['sign_up_form']["birthday_1"];
            $birthday .= $data['sign_up_form']["birthday_2"];
            $birthday .= $data['sign_up_form']["birthday_3"];
            $birthday .= $data['sign_up_form']["birthday_4"];
            $birthday .= $data['sign_up_form']["birthday_5"];
            $birthday .= $data['sign_up_form']["birthday_6"];
            $birthday .= $data['sign_up_form']["birthday_7"];

            $education     = $data2["sign_up_profile_form"]['education'];
            $job           = $data2["sign_up_profile_form"]['job'];
            $height        = $data2["sign_up_profile_form"]['height'];
            $habitus       = $data2["sign_up_profile_form"]['habitus'];
            $marriage      = $data2["sign_up_profile_form"]['marriage_time'];


            $sql = "UPDATE usr_table SET
        						passwd = '$pass',
                    name   = '$name',
                    usr_status = 0
        						where
        						id = '$id'";
        						$res = $mysqli->query($sql);

										$sql = "insert IGNORE into usr_hotos
            								(id,
														 p_back
            								 )values(
            								 '$id',
														 '1.jpg')";
            								 $res = $mysqli->query($sql);

														 $sql = "insert IGNORE into ip_table
														 				(id,
																		arumepoint,
																		good
														 				 )values(
														 				 '$id',
																		 0,
																		 100)";
														 				 $res = $mysqli->query($sql);

                    $sql = "insert IGNORE into usr_detaile
            								(id,
            								 sex,
            								 birthday,
            								 eria,
            								 imgname,
                             e_id,
            								 j_id,
            								 h_id,
            								 b_id,
                             o_id
            								 )values(
            								 '$id',
            								 '$gender',
            								 '$birthday',
            								 '$address',
                             '$copy_file',
                             '$education',
            								 '$job',
            								 '$height',
                             '$habitus',
            								 '$marriage')";

            								 $res = $mysqli->query($sql);

                             $mysqli->close();
                             $_SESSION = array();
   												        //セッションクッキーの削除
   												  if (isset($_COOKIE["PHPSESSID"])) {
   												    setcookie("PHPSESSID", '', time() - 1800, '/');
   												  }
   												  //セッションを破棄する
   												  session_destroy();
                            header('Location:signin.php');exit;


        }
      }
		}else{
      header('Location:top.html');exit;
		}



include 'view/signup3_view.php';
