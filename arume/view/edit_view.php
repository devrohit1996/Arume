
<!DOCTYPE html>
<html>
<head>
<title>
arume
</title>
<meta charset='utf-8'>
<meta content='IE=edge' http-equiv='X-UA-Compatible'>

<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<meta content='telephone=no' name='format-detection'>
<meta content='Wi3K2YWsNTgC6BueDv445QrdimpIcvxOUSFreX36we8' name='google-site-verification'>
<link href='/apple-touch-icon-57x57.png' rel='apple-touch-icon' sizes='57x57'>
<link href='/apple-touch-icon-60x60.png' rel='apple-touch-icon' sizes='60x60'>
<link href='/apple-touch-icon-72x72.png' rel='apple-touch-icon' sizes='72x72'>
<link href='/apple-touch-icon-76x76.png' rel='apple-touch-icon' sizes='76x76'>
<link href='/apple-touch-icon-114x114.png' rel='apple-touch-icon' sizes='114x114'>
<link href='/apple-touch-icon-120x120.png' rel='apple-touch-icon' sizes='120x120'>
<link href='/apple-touch-icon-144x144.png' rel='apple-touch-icon' sizes='144x144'>
<link href='/apple-touch-icon-152x152.png' rel='apple-touch-icon' sizes='152x152'>
<link href='/apple-touch-icon-180x180.png' rel='apple-touch-icon' sizes='180x180'>
<link href='/favicon-32x32.png' rel='icon' sizes='32x32' type='image/png'>
<link href='/android-chrome-192x192.png' rel='icon' sizes='192x192' type='image/png'>
<link href='/favicon-96x96.png' rel='icon' sizes='96x96' type='image/png'>
<link href='/favicon-16x16.png' rel='icon' sizes='16x16' type='image/png'>
<link href='/manifest.json' rel='manifest'>
<meta content='#fe6970' name='msapplication-TileColor'>
<meta content='/mstile-144x144.png' name='msapplication-TileImage'>
<meta content='#ffffff' name='theme-color'>


<link rel="stylesheet" media="all" href="css/app.css"/>
<script src="//cdn.with.is/assets/plugin-b7c3fa8276587fc7df31df19bee395792152b2ec288b4fb6de13321ca6ed09ed.js"></script>
<script src="//cdn.with.is/assets/application-1dd117a2e86cf6f1daccaa46ea578697e49d79129e070d935bf3e05054ac427b.js"></script>
<script src="//cdn.with.is/assets/load_image-6c202ac0600e4dfceec7ca354f44ce88e229c88bf61dd02ca3a57e076d2f32b3.js"></script>
</head>

<body class=''>
<div class='sp-container with-header'>

<?php include("parts/headmenu.php"); ?>


<div class='header_banner'></div>

<div class='mypage_edit-top'>
<div class='mypage_edit-cover' style='background-image: url(sozai/<?php echo $phdata["p_back"]?>)'></div>
<a class="mypage_edit-edit-cover" href="back.php"><span>
変更する
</span>
</a>

<div class='mypage_edit-main_photo open-dialog' data-dialog-id='main-photo-notification'>
<img class="mypage_edit_thumb" src="<?php echo "uploads/".$dedata['imgname']; ?>" />
<div class='main-photo-notification'>
</div>
</div>

<div class='select-main-photos'>
<form class="new_main_photo_form" id="new_main_photo_form" enctype="multipart/form-data" action="edith.php" accept-charset="UTF-8" method="post">
  <input type="hidden" name="id" value="<?php echo $id ?>" />
  <input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" type="file" name="photoname" id="main_photo_form_photo" />
<label class="clickable-label" for="main_photo_form_photo"><img src="//cdn.with.is/assets/shared/icons/camera_white-bd3aa62339fad5bb51851a64eb3442a6c6c77444d40a0586112aad49d4f11fb4.svg" />
</label>
</form>
</div>

<div class='mypage_edit-tweet box-padding'>
<div class='mypage_edit-tweet-balloon'>
<a class="size2 text-primary " href="edittw.php"><div class='mypage_edit-tweet-content'>
<?php echo $dedata['tweet']; ?>
</div>
<img class="mypage_edit-tweet-balloon_icon" src="//cdn.with.is/assets/shared/icons/edit-980503dcb9813b4e2d2da6c9e0a088704f12cca061e962cd5d1dd312f72aee65.svg" />
</a></div>
</div>
</div>



<div class='plain profile-edit'>
<div class='size2 text-primary' id='profile-sub-photos'>
サブ写真
<div class='profile-sub-photo_count'>0/9</div>
</div>
<div class='profile-introduction_empty-link'>
</div>
<div class='profile-sub-photo-list'>
<?php if(isset($phdata['p_1']) and $phdata['p_1'] != ''){ ?>
  <a class="sub-photo_item-m open-dialog" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_1']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-1" href="#">
<img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
全身
</div>
</a>
<?php } ?>


<?php if(isset($phdata['p_2']) and $phdata['p_2'] != ''){ ?>
  <a class="sub-photo_item-m is-reviewing open-dialog" data-dialog-id="select-sub-photos-1" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_2']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-2" href="#">
  <img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_02-fffe277bb2dd5e5cea483db1b5e6b4608d90904e0642a6f68e90517e8976770f.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
笑顔
</div>
</a>
<?php } ?>

<?php if(isset($phdata['p_3']) and $phdata['p_3'] != ''){ ?>
  <a class="sub-photo_item-m open-dialog" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_3']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-3" href="#"><img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_03-758a140f83a56027dfc29e9ae678e93ff0d57a7c83b2ef63b387e35b266e996f.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
料理
</div>
</a>
<?php } ?>

<?php if(isset($phdata['p_4']) and $phdata['p_4'] != ''){ ?>
  <a class="sub-photo_item-m is-reviewing open-dialog" data-dialog-id="select-sub-photos-1" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_4']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-4" href="#"><img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_04-8bfb261e45bcb6bbeba9c0b97f2694dab5fecd09f24fb7764f2d53c8151be631.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
趣味
</div>
</a>
<?php } ?>

<?php if(isset($phdata['p_5']) and $phdata['p_5'] != ''){ ?>
  <a class="sub-photo_item-m is-reviewing open-dialog" data-dialog-id="select-sub-photos-1" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_5']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-5" href="#"><img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_05-7c02944c4585e20521032a25664c0c7733d8dec7d23e3dbdc5d60bf59b0487f3.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
旅行先
</div>
</a>
<?php } ?>

<?php if(isset($phdata['p_6']) and $phdata['p_6'] != ''){ ?>
  <a class="sub-photo_item-m is-reviewing open-dialog" data-dialog-id="select-sub-photos-1" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_6']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-6" href="#"><img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_06-c73179c10894f89531f29f1a7730de64e0977f3da4c9ea2532c3a3d3fd292cfe.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
</div>
</a>
<?php } ?>


<?php if(isset($phdata['p_7']) and $phdata['p_7'] != ''){ ?>
  <a class="sub-photo_item-m is-reviewing open-dialog" data-dialog-id="select-sub-photos-1" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_7']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-7" href="#"><img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_07-2f3cb2900a302651e4208137e2bb8fb0fdde3867275e9e77537cd4cb34825d9b.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
</div>
</a>
<?php } ?>

<?php if(isset($phdata['p_8']) and $phdata['p_8'] != ''){ ?>
  <a class="sub-photo_item-m is-reviewing open-dialog" data-dialog-id="select-sub-photos-1" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_8']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-8" href="#"><img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_08-25b0aa1f5e422c936b78b3b0cf5b23276dd5c21840f2a4a6d49288580a54efd0.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
</div>
</a>
<?php } ?>


<?php if(isset($phdata['p_9']) and $phdata['p_9'] != ''){ ?>
  <a class="sub-photo_item-m is-reviewing open-dialog" data-dialog-id="select-sub-photos-1" href="#">
    <img alt="" class="user-photos_image lazyload" src="<?php echo 'subuploads'.'/'.$phdata['p_1']; ?>" />
  </a>
<?php }else { ?>
<a class="sub-photo_item-m register-sub-photo-button open-dialog" data-dialog-id="select-sub-photos-9" href="#"><img class="sub-photo-empty-icon" src="//cdn.with.is/assets/sub_photos/plus_1-bcab0d53caab078ec940fe994179116f094d46e507a91b87d1b83f9dccbc2c45.png" />
<img alt="" class="user-photos_image lazyload" data-src="//cdn.with.is/assets/sub_photos/cat_09-de9ba76a2d95ceb2e37629fb1af64ee0a5d0682fb3853dbf60fa9dfbd762b9cf.jpg" src="//cdn.with.is/assets/lazyload/86-01ed7f2a16f8434709765581588aa7e4c138f244f0fd914ee4ed1d4717c70c92.gif" />
<div class='sub-photo_item_label'>
</div>
</a>
<?php } ?>

</div>


</div>

<?php if(isset($dedata['body']) and $dedata['body'] != ''){ ?>
  <div class="plain profile-edit">
  <div class="size2 text-primary" id="profile-edit">
  自己紹介文
  </div>
  <a class="profile-introduction_edit-link size4" href="editbun.php"><span class="icon-arrow-right"></span>
  <div style="max-height: 250px;overflow: hidden;">
  <?php echo $dedata['body']; ?>
  </div>
  <img class="profile-introduction_edit-link_shading" src="//cdn.with.is/assets/mypages/introduction/footer_shading-9400f90dc0ba200ac2ef17d25bf3ecd2c6fd481b090974e92befb448aae8768f.png">
  </a></div>
<?php }else {?>
<div class='plain profile-edit'>
<div class='size2 text-primary' id='profile-edit'>
自己紹介文
</div>
<div class='profile-introduction_empty-link'>
<a href="editbun.php">
  <img class="illust-full" src="//cdn.with.is/assets/mypages/introduction/entry_button-d862794a519a20e0c79ff0652930763cf1bc9a5e081716bc592064a40ee2fb65.jpg" />
</a>
</div>
</div>
<?php } ?>

<div class='plain profile-edit profiles' id='basic-profile'>
<div class='size2 text-primary'>
基本情報
<div class='profile-introduction_count'>12/24</div>
</div>
<div class='profile-introduction_empty-link'>

</div>
<ul class='profile-edit_lists'>
<form class="new_profile_basic_form" id="new_profile_basic_form" action="edit.php" accept-charset="UTF-8" data-remote="true" method="post"><input type="hidden" name="_method" value="patch" /><div class='profile-item type-table' id='nickname'>
<div>
<div class='narrow-cell'><label class="" for="profile_basic_form_nickname">ニックネーム</label></div>
<div class='form-select-cell wide-cell'>
<a class="form-link-cell form-ellipsis" href="editname.php"><?php echo $userdata['name']; ?></a>
</div>
</div>
</div>

<div class='profile-item type-table'>
<div>
<div class='profile-heading-cell'><label for="profile_basic_form_age">年齢</label></div>
<div class='form-text-cell profile-body-cell'>
30歳
</div>
</div>
</div>

<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="profile_basic_form_address">居住地</label>
</div>
<div class='form-select-cell wide-cell'>
<select data-js="submit" name="profile">
  <?php while ($pdata = mysqli_fetch_assoc($presult)){ ?>
  <option value="<?php echo $pdata['pid']; ?>"><?php echo $pdata['pname']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>




<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="profile_basic_form_height">身長</label>
</div>
<div class='form-select-cell wide-cell'>
<select data-js="submit" name="height">
<?php while ($hdata = mysqli_fetch_assoc($hresult)){ ?>
<option value="<?php echo $hdata['h_id']; ?>" <?php if($dedata['h_id'] == $hdata['h_id']){echo "selected";} ?>><?php echo $hdata['h_name']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>

<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="profile_basic_form_habitus">体型</label>
</div>
<div class='form-select-cell wide-cell'>
<select data-js="submit" name="profile_basic_form[habitus]" id="profile_basic_form_habitus">

  <?php while ($bdata = mysqli_fetch_assoc($bresult)){ ?>
  <option value="<?php echo $bdata['b_id']; ?>" <?php if($dedata['b_id'] == $bdata['b_id']){echo "selected";} ?>><?php echo $bdata['b_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>

<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="profile_basic_form_education">学歴</label>
</div>
<div class='form-select-cell wide-cell'>
<select data-js="submit" name="profile_basic_form[education]" id="profile_basic_form_education">

  <?php while ($edata = mysqli_fetch_assoc($eresult)){ ?>
  <option value="<?php echo $edata['e_id']; ?>" <?php if($dedata['e_id'] == $edata['e_id']){echo "selected";} ?>><?php echo $edata['e_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>

<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="profile_basic_form_job">職種</label>
</div>
<div class='form-select-cell wide-cell'>
<select data-js="submit" name="profile_basic_form[job]" id="profile_basic_form_job">

  <?php while ($jdata = mysqli_fetch_assoc($jresult)){ ?>
  <option value="<?php echo $jdata['j_id']; ?>" <?php if($dedata['j_id'] == $jdata['j_id']){echo "selected";} ?>><?php echo $jdata['j_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>





<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="profile_basic_form_meet_timing">利用目的</label>
</div>
<div class='form-select-cell wide-cell'>
<select data-js="submit" name="profile_basic_form[meet_timing]" id="profile_basic_form_meet_timing">

<?php while ($odata = mysqli_fetch_assoc($oresult)){ ?>
<option value="<?php echo $odata['o_id']; ?>" <?php if($dedata['o_id'] == $odata['o_id']){echo "selected";} ?>><?php echo $odata['o_name']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>

</form>
</ul>
</div>






<div class='dialog is-modal without-animation' id='confirm-upload-photo'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size15'>
この写真を設定しますか？
</div>
<div class='confirm-upload-photo_canvas'>
<canvas></canvas>
</div>
<div class='parallel-buttons'>
<a class='button half-button flat-button button-gray close-dialog'>
戻る
</a>
<button class='button half-button flat-button button-primary js-upload-photo'>
設定する
</button>
</div>
</div>

<div class='dialog' id='select-sub-photos-1'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">

  <input type="hidden" value="1" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_1">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_1" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-2'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="2" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_2">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_2" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-3'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="3" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_3">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_3" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-4'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="4" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_4">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_4" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-5'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="5" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_5">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_5" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-6'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="6" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_6">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_6" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-7'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="7" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_7">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_7" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-8'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="8" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_8">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" id="sub_photo_form_photo_8" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>

<div class='dialog' id='select-sub-photos-9'>
<div class='cross-button close-dialog'></div>
<form class="new_sub_photo_form" id="new_sub_photo_form" enctype="multipart/form-data" action="edit.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="9" name="suphoto" id="sub_photo_form_sort_order" />
<label class="button large-button flat-button button-primary" for="sub_photo_form_photo_9">写真を選ぶ
<input accept=".jpg,.gif,.png" style="display: none" class="js-upload-confirm-photo" type="file" name="photoname" />
</label><a class='button large-button flat-button button-gray close-dialog'>
閉じる
</a>
</form></div>






<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>



</div>
</body>
</html>
