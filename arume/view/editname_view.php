
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


<link rel="stylesheet" media="all" href="//cdn.with.is/assets/application-57c53d88f304d8e872e509c290ac7ead2dbe61eae433acfec389b10887041d9d.css" />
<script src="//cdn.with.is/assets/plugin-b7c3fa8276587fc7df31df19bee395792152b2ec288b4fb6de13321ca6ed09ed.js"></script>
<script src="//cdn.with.is/assets/application-1dd117a2e86cf6f1daccaa46ea578697e49d79129e070d935bf3e05054ac427b.js"></script>

</head>


<body class=''>



<div class='sp-container with-header'>

<?php include("parts/headmenu.php"); ?>


<div class='header_banner'></div>

<div class='title-area'>
<img class="title-area_thumb" src="<?php echo $imgpass; ?>" />
ニックネーム変更
<a class="title-area_back-link" data-js="prevent-disposal" href="/mypages/edit#nickname"><span class='icon-arrow-left'></span>
</a></div>
<div class='box box-padding'>
<form class="new_profile_nickname_form" id="new_profile_nickname_form" action="editname.php" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="aU+vjauz0VpmFVYNuc5LjYT+xaGgRIHSnveSat2xk2xviKK+ZdSEIL/Ta1zt8EvCfOVXuc9WYkV6E/2BDhdLyA==" /><div class='input-note size4'>１５文字以内</div>
<div class='form-text-field mbm'>
<input placeholder="入力してください" class="form-input form-ellipsis size4" maxlength="15" required="required" size="15" type="text" value="<?php echo $userdata['name']; ?>" name="name" id="profile_nickname_form_nickname" />
<span class='form-delete-text-button'></span>
</div>
<div class='parallel-buttons'>
<a class="button half-button flat-button button-gray" data-js="allow-disposal" href="edit.php">キャンセル
</a><button name="button" type="submit" class="button half-button flat-button button-primary">更新する
</button></div>
</form><div class='nickname-edit-note size5'>
<p>
よく呼ばれるあだ名や名前など、
<br>
お相手から呼ばれたいニックネームを設定しましょう
</p>
<ul>
<li>
個人を特定できる情報は設定できません
<br>
例：フルネーム、メールアドレス、SNSアカウント、IDなど
</li>
<li>
閲覧者に不快感を与える情報は設定できません
</li>
<li>
絵文字、記号のみは設定できません
</li>
</ul>
</div>
</div>

<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>

</div>

</body>
</html>
