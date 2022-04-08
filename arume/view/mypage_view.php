
<!DOCTYPE html>
<html>
<head>
<title>arume</title>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</head>
<body class=''>

<div class='sp-container with-header'>
<?php include("parts/headmenu.php"); ?>

<div class='header_banner'></div>

<div class='mypage-container'>
  <div class="mypage-profiles" style="background: linear-gradient(145deg, #2081ff -5%, rgb(107 230 243 / 50%) 18%, rgb(203 240 255 / 30%) 25%, #fff 50%);">
<div class='mypage-profile-container'>
<div class='mypage-profile'>
<a href="my.php"><div class='mypage-profile_photo'>
<img class="mypage-profile_thumb" src="<?php echo $imgpass; ?>" />
</div>
</a>
<a class="mypage-profile_check-button size14" href="my.php">
  <div class='mypage-profile_check-button_badge' data-path=''></div>
プロフィールを確認・編集
</a>
</div>

<div class='mypage-statuses'>
<a class="mypage-status has-like" href="point.php">
<div class='mypage-status-header size12'>
残いいね！
</div>
<div class='mypage-status-contents'>
<span class='has-like-my-own'><?php echo $ipdata['good']; ?></span>
</div>
</a>
<a class="mypage-status has-status" href="point.php"><div class='mypage-status-header size12'>
会員ステータス
</div>
<div class='mypage-status-contents status-male-free-vip_false'></div>
</a>
<a class="mypage-status has-point" href="point.php"><div class='mypage-status-header size12'>
残ポイント
</div>
<div class='mypage-status-contents'>
<?php echo $ipdata['arumepoint']; ?>
</div>
</a>
</div>
</div>
</div>

<a class="mypage_doctor-notification-container is-first-visit" onclick="copyToClipboard()">
<div class='mypage_doctor-notification_contents'>MyID:<B class="idbspace"><?php echo $id; ?></B>
<input id="copyTarget" type="hidden" value="<?php echo $id; ?>">
</div>

</a>


<div class='mypage-menus size12'>
<div class='mypage-menu-container'>

<a class="mypage-menu-contents js-enable-touching" href="likes.php">
  <img src="img/good.png" />
<div class='mypage-menu-label'>
いいね！履歴
</div>
</a>

<a class="mypage-menu-contents js-enable-touching" href="fri.php">
  <img src="img/friend.png" />
<span class='mypage-badge_wrap'></span>
<div class='mypage-menu-label'>
友達
</div>
</a>


<a class="mypage-menu-contents js-enable-touching" href="my.php">
  <img src="img/my.png" />
<div class='mypage-menu-label'>
プロフィール
</div>
</a>

<a class="mypage-menu-contents js-enable-touching" target="_blank" href="mail.php">
  <img src="img/mail.png" />
<div class='mypage-menu-label'>
お問い合わせ
</div>
</a>

<a class="mypage-menu-contents js-enable-touching" href="favorites.php">
  <img src="img/hert.png" />
<div class='mypage-menu-label'>
お気に入り
</div>
</a>

<a class="mypage-menu-contents js-enable-touching" href="notifications.php">
<img src="img/info.png" />
<span class='mypage-notification mypage-badge_wrap'></span>
<div class='mypage-menu-label'>
お知らせ
</div>
</a>

</div>
</div>
</div>






<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>





</div>
<script type="text/javascript">
        function copyToClipboard() {
            var copyTarget = document.getElementById("copyTarget");
            copyTarget.select();
            document.execCommand("Copy");
            alert("IDをコピーしました！ : " + copyTarget.value);
        }
    </script>
</body>
</html>
