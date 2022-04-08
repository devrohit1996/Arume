
<!DOCTYPE html>
<html>
<head>
<title>
with（ウィズ）
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
<img class="title-area_thumb" src="<?php echo $imgpass ?>" />
つぶやき
<a class="title-area_back-link" data-js="prevent-disposal" href="edit.php"><span class='icon-arrow-left'></span>
</a></div>
<div class='box box-padding'>
<form class="new_profile_tweet_form" action="edittw.php" accept-charset="UTF-8" method="post">
  <div class='input-note size4'>つぶやきは20文字以内で変更できます。</div>
<div class='form-text-field mbm'>
<input class="form-input size4" required="required" maxlength="20" size="20" type="text" value="<?php echo $dedata['tweet'];; ?>" name="tweet"/>
<span class='form-delete-text-button'></span>
</div>

<div class='half-columns-box mbl size5' style='margin-bottom: 50px'>
<div class='half-column'>
<ul>
<li>・個人情報と判断できるもの</li>
<li>・顔文字や絵文字のみ</li>
<li>・退会の宣言</li>
<li>・勧誘と判断できるもの</li>
<li>・不快な表現</li>
</ul>
</div>
<div class='half-column' style='padding-left: 0'>
<ul>
<li>・卑猥な表現</li>
<li>・サービスへの不満</li>
<li>・利用規約違反</li>
<li>・公序良俗違反/法律違反</li>
</ul>
</div>
</div>
<div class='parallel-buttons'>
<a class="button half-button flat-button button-gray" data-js="allow-disposal" href="edit.php">キャンセル
</a><button name="button" type="submit" class="button half-button flat-button button-primary">更新する
</button></div>
</form>
</div>

<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>

</div>


</body>
</html>
