
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
</head>

<body class=''>



<div class='sp-container with-header'>
<?php include("parts/headmenu.php"); ?>






<div class='user-detail-container theme-262B5E'>
<div class='profile-thumb'>
<div class='profile-thumb_cover'>
<img alt="" class="profile-thumb_cover_img lazyload"  src="<?php echo 'sozai'.'/'.$dedata['p_back']; ?>" />
<div class='profile-thumb_gradient'></div>
</div>
<div class='profile-thumb_nav'>
<div class='profile-thumb_nav_back'>
<a data-js="go-back" href="#"><img src="img/back.png" />
</a></div>
</div>
<div class='profile-thumb_photo'>
<img class="profile-thumb_photo_img"  data-order="0" src="<?php echo 'uploads'.'/'.$dedata['imgname']; ?>" />
</div>
</div>
<div class='detail-box is-top' style='position: relative;padding: 15px;'>
<div class='profile_main'>
<div class='profile_main-nickname'>
<?php echo $dedata['name']; ?>
</div>
<div class='profile_main-age-address'>
<?php echo $age; ?>
<?php echo $dedata['pname']; ?>
</div>
</div>
<div class='profile-tweet size3'>
<span><?php echo $dedata['tweet']; ?></span>
</div>

</div>





<div class='detail-box profile-groups'>
<div class='profile-detail_title has-margin'>
登録済みの友達
<a class="irotuke" href="serfri.php">友達を探す</a>
<div class='open-dialog profile-help' data-dialog-id='help-about-konomi'>
<img class="profile-help_img" src="//cdn.with.is/assets/shared/icn_help_gray-ed5b39b9c76ad5468d93d86d005120736ead70636b4ffd08abaf336158b35047.png" />
</div>
</div>
<div class='profile-groups_tendency'>
<div class='profile-groups_tendency_title'>
<?php echo $dedata['name']; ?>さんのお友達
</div>
</div>
<div class='group-card-list-row'>
<?php while ($fridata = mysqli_fetch_assoc($fresult)) { ?>
<div class='group-card' data-group-category-id='4'>
<a href="#">

<div class='group-card_title'>
ユーザネーム
</div>
</a>
</div>
<?php } ?>

</div>

<div class='profile-link-frame has-margin'>
<a class="profile-link-bar" href="fri.php">すべて見る
</a></div>
</div>




<div class='detail-box profile-detail'>
<div class='profile-detail_title has-margin'>
基本情報
</div>
<table class='profile-detail_lists'>
<tr><th>ニックネーム</th><td><?php echo $dedata['name']; ?></td></tr>
<tr><th>年齢</th><td><?php echo $age; ?></td></tr>
<tr><th>居住地</th><td><?php echo $dedata['pname']; ?></td></tr>
<tr><th>学歴</th><td><?php echo $dedata['e_name']; ?></td></tr>
<tr><th>職種</th><td><?php echo $dedata['j_name']; ?></td></tr>
<tr><th>身長</th><td><?php echo $dedata['h_name']; ?></td></tr>
<tr><th>体型</th><td><?php echo $dedata['b_name']; ?></td></tr>
<tr><th>利用目的</th><td><?php echo $dedata['o_name']; ?></td></tr>

</table>
</div>
</div>
<div data-user-id='8851168465' id='similar-users_container'></div>

<div class='my-profile-bottom-wrap'>
<div class='my-profile-mission-balloon' data-path='//cdn.with.is/assets/application/animation_data/profile_mission_balloon-5fbabcba30e801ba7b56387c2b037bfe62467c6bca93c7580819b6221a85ed92.json'></div>
<a class="button-primary my-profile-edit-button size18" href="edit.php">編集する</a>
</div>

<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>

</div>
</body>
</html>
