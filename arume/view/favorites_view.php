
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

<div class='title-area'>
お気に入りリスト
<a class="title-area_back-link" data-js="prevent-disposal" href="mypage.php"><span class='icon-arrow-left'></span>
</a>
</div>



<div class='autopager'>
<ul class='footprints'>
<?php if($count != 0){ ?>
<?php for ($s=0; $s < $count; $s++) {?>
<li class='footprint box-padding media user-area'>
<a class="media_image" href="">
  <img class="footprint_photo-thumb" src="<?php echo 'uploads/'.$detail[$s]['imgname'] ?>" />
</a>
<div class='media_body'>
<div class='user_actions' data-user-id='6593586954'>
<button name="button" type="submit" class="list-view-button button-like button-like-action js-enable-touching">
    <span data-displayable-action-view='like' style=''></span>
    <?php echo $detail[$s]['name']; ?>
</button>
</div>
</div>
</li>
<?php } ?>
<?php }else{ ?>
まだお気に入りがありません。
<?php } ?>

</ul>



</div>

<div class='footer_copyright plain'>
<img class="footer_logo mbs" src="img/arume.png" />

<div class='size6 text-center'>
(c) arume
</div>
</div>

</div>


</body>
</html>
